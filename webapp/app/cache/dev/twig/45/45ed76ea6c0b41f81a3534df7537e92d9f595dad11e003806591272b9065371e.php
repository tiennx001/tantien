<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_411876a77cf4fdf3462af6724cbfac08044ad799e9b6ba85ed394d89c42a3b19 extends Twig_Template
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
        $__internal_323b29b52b6f1b3b43588cf65047f5c92a41ba0777ebaba2f48072ec8e344520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323b29b52b6f1b3b43588cf65047f5c92a41ba0777ebaba2f48072ec8e344520->enter($__internal_323b29b52b6f1b3b43588cf65047f5c92a41ba0777ebaba2f48072ec8e344520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_323b29b52b6f1b3b43588cf65047f5c92a41ba0777ebaba2f48072ec8e344520->leave($__internal_323b29b52b6f1b3b43588cf65047f5c92a41ba0777ebaba2f48072ec8e344520_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "D:\\Projects\\yourhome_v1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
