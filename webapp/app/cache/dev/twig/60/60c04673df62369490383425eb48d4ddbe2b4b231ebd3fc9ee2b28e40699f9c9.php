<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_e4aec38efefdea2438e54d5b7d752f161b9e71f9270dc572c8d7faf6962bb6bc extends Twig_Template
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
        $__internal_060bdb14e5a2d7fb4fc7f18b75f78dab5fe3e2603f9a6d8a172f050c61a946da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_060bdb14e5a2d7fb4fc7f18b75f78dab5fe3e2603f9a6d8a172f050c61a946da->enter($__internal_060bdb14e5a2d7fb4fc7f18b75f78dab5fe3e2603f9a6d8a172f050c61a946da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_060bdb14e5a2d7fb4fc7f18b75f78dab5fe3e2603f9a6d8a172f050c61a946da->leave($__internal_060bdb14e5a2d7fb4fc7f18b75f78dab5fe3e2603f9a6d8a172f050c61a946da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "D:\\Projects\\yourhome_v1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
