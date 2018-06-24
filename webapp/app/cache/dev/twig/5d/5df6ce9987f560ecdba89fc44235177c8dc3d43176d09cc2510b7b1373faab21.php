<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_e62457e1ad775a565bfa1812ff6079398b40ef6f3b48e08db9aa93f8da12c63e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75a64e7649cee83d2c07b6548704c4a2dd8f30e3c1051c06233def172fdf200f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75a64e7649cee83d2c07b6548704c4a2dd8f30e3c1051c06233def172fdf200f->enter($__internal_75a64e7649cee83d2c07b6548704c4a2dd8f30e3c1051c06233def172fdf200f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_75a64e7649cee83d2c07b6548704c4a2dd8f30e3c1051c06233def172fdf200f->leave($__internal_75a64e7649cee83d2c07b6548704c4a2dd8f30e3c1051c06233def172fdf200f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "D:\\Projects\\yourhome_v1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
