<?php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormModalType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['columns'] = $options['columns'];
        $view->vars['validators'] = $options['validators'];
        $view->vars['tableData'] = $options['tableData'];
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'columns' => array(),
            'validators' => array(),
            'tableData' => array()
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        // Bat buoc phai tao de co the lay duoc gia tri trong form
        return HiddenType::class;
    }
}