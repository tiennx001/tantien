<?php

namespace AppBundle\Admin;

use AppBundle\Entity\Color;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use AppBundle\Form\Type\FormModalType;
use AppBundle\Form\Type\MultipleUploadType;

class ProductAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        // get the current Product instance
        $product = $this->getSubject();

        // use $fileFieldOptions so we can add other options to the field
        $fileFieldOptions = array('required' => false, 'data_class' => null, 'label' => 'Ảnh đại diện');
        if ($product && ($imagePath = $product->getImagePath())) {
            // get the container so the full path to the image can be set

            // add a 'help' option containing the preview's img tag
            $fileFieldOptions['help'] = '<img src="' . $imagePath . '" class="admin-preview" />';
        }

        $doctrine = $this->getConfigurationPool()->getContainer()->get('doctrine');
        $colorRepo = $doctrine->getRepository(Color::class);

        // Lay danh sach mau sac cho combobox
        $colors = $colorRepo->getColors();
        $colorArr = array();
        foreach ($colors as $c) {
            $colorArr[$c->getId()] = $c->getName();
        }

        // Lay du lieu hien tai
        $pColors = $product->getProductColors() ? $product->getProductColors() : array();
        $dataArr = array();
        foreach ($pColors as $pc) {
            $colorName = $colorArr[$pc->getColorId()];
            $dataArr[$pc->getColorId()] = array(
                'color' => array($pc->getColorId() => $colorName),
                'quantity' => $pc->getQuantity(),
                'price' => $pc->getPrice()
            );
        }

        $formMapper
            ->add('name', 'text', array('required' => true, 'label' => 'Tên'))
            ->add('description', 'textarea', array('required' => false, 'label' => 'Mô tả'))
            ->add('content', 'textarea', array('required' => false, 'label' => 'Nội dung', 'attr' => array('class' => 'ckeditor')))
            ->add('file', 'file', $fileFieldOptions)
            ->add('categories', 'sonata_type_model', array('multiple' => true, 'property' => 'name', 'label' => 'Danh mục'))
            ->add('status', 'checkbox', array('required' => false, 'label' => 'Kích hoạt'))
            ->add('prod_colors', FormModalType::class, array(
                'allow_extra_fields' => true,
                'label' => 'Màu sắc',
                'columns' => array(
                    'color' => array('type' => 'choice', 'name' => 'Màu sắc', 'data' => $colorArr),
                    'quantity' =>  array('type' => 'text', 'name' => 'Số lượng'),
                    'price' =>  array('type' => 'text', 'name' => 'Giá')),
                'validators' => array(
                    'color' => array(
                        'validator' => 'checkChoices',
                        'args' => json_encode(array('v' => $colorArr))
                    ),
                    'quantity' => array(
                        'validator' => 'checkLength',
                        'args' => json_encode(array('l' => 'số lượng', 'min' => 1, 'max' => 10))
                    ),
                    'price' => array(
                        'validator' => 'checkLength',
                        'args' => json_encode(array('l' => 'giá', 'min' => 1, 'max' => 10))
                    ),
                ),
                'tableData' => $dataArr))
            ->add('multiple_file', MultipleUploadType::class, array(
                'label' => 'Ảnh mô tả',
                'object_id' => $product->getId(),
                'colors' => $colors,
                'csrf_token' => $this->getConfigurationPool()->getContainer()->get('service.helper')->getCsrfToken(),
                'router' => $this->getConfigurationPool()->getContainer()->get('router'),
                'file_src' => $pColors,
                'action' => 'product_upload_multiple_file',
                'delete_action' => 'product_delete_detail_image'
            ));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('image_path', null, array('template' => 'AppBundle:product:_image_path.html.twig', 'label' => 'Ảnh'))
            ->add('name', null, array('label' => 'Tên sản phẩm'));
    }

    public function prePersist($obj)
    {
        $this->manageFileUpload($obj);
        $this->processValues($obj);
    }

    public function preUpdate($obj)
    {
        $this->manageFileUpload($obj);
        $this->processValues($obj);
    }

    private function manageFileUpload($obj)
    {
        $container = $this->getConfigurationPool()->getContainer();
        $obj->upload($container->getParameter('kernel.root_dir') . '/../web');
    }

    private function processValues($obj)
    {
        $container = $this->getConfigurationPool()->getContainer();
        $obj->processValues($container);
    }
}
