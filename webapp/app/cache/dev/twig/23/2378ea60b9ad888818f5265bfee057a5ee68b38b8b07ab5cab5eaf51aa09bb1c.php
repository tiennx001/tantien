<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9789fbc850ee80cc9e912580b02942c26c054d39a8de244e14b50a7ca13f0319 extends Twig_Template
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
        $__internal_8e465cc4effc6cf75e3372b64ccf8d07d98c2ea5bdece6666621b44f7d04e2b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e465cc4effc6cf75e3372b64ccf8d07d98c2ea5bdece6666621b44f7d04e2b2->enter($__internal_8e465cc4effc6cf75e3372b64ccf8d07d98c2ea5bdece6666621b44f7d04e2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_8e465cc4effc6cf75e3372b64ccf8d07d98c2ea5bdece6666621b44f7d04e2b2->leave($__internal_8e465cc4effc6cf75e3372b64ccf8d07d98c2ea5bdece6666621b44f7d04e2b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "D:\\Projects\\yourhome_v1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
