<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_547504d17961df77a4ff0834f1d93ac6d202c78afc09097c4cc60922dd0bfe87 extends Twig_Template
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
        $__internal_05fcb74729a09b7efc9f67b3336d53f79c62a27da480a9c39e5c5e898fd9bc70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05fcb74729a09b7efc9f67b3336d53f79c62a27da480a9c39e5c5e898fd9bc70->enter($__internal_05fcb74729a09b7efc9f67b3336d53f79c62a27da480a9c39e5c5e898fd9bc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_05fcb74729a09b7efc9f67b3336d53f79c62a27da480a9c39e5c5e898fd9bc70->leave($__internal_05fcb74729a09b7efc9f67b3336d53f79c62a27da480a9c39e5c5e898fd9bc70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "D:\\Projects\\yourhome_v1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
