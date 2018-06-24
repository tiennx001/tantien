<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CategoryAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', 'text', array('required' => true, 'label' => 'Tên'))
            ->add('description', 'textarea', array('required' => false, 'label' => 'Mô tả', 'attr' => array('class' => 'ckeditor')))
            ->add('is_hot', null, array('label' => 'Danh mục HOT'))
            ->add('priority', null, array('label' => 'Độ ưu tiên'))
            ->add('status', null, array('label' => 'Kích hoạt'));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('status');
    }

    public function prePersist($obj)
    {
        $this->processValues($obj);
    }

    public function preUpdate($obj)
    {
        $this->processValues($obj);
    }

    private function processValues($obj)
    {
        $container = $this->getConfigurationPool()->getContainer();
        $obj->processValues($container);
    }
}
