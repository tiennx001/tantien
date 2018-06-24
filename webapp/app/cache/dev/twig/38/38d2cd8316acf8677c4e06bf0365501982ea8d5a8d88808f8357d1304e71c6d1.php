<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_dd4eaf1d8fbbdcb923e848b68140f6caf23d94b926fddfbada112260cbc6b9bd extends Twig_Template
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
        $__internal_d15df57401d2433e40a1e05c175bf50ccc9d1dd99bfd496acbd11cf996ac4d7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d15df57401d2433e40a1e05c175bf50ccc9d1dd99bfd496acbd11cf996ac4d7e->enter($__internal_d15df57401d2433e40a1e05c175bf50ccc9d1dd99bfd496acbd11cf996ac4d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_d15df57401d2433e40a1e05c175bf50ccc9d1dd99bfd496acbd11cf996ac4d7e->leave($__internal_d15df57401d2433e40a1e05c175bf50ccc9d1dd99bfd496acbd11cf996ac4d7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "D:\\Projects\\yourhome_v1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
