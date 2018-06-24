<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_e10768cbe2c012e0b18dad789f91fa9e010ab7c8902ed9d42eedb471e350551f extends Twig_Template
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
        $__internal_bdf1f19c3da94cdad85edbd870adb52af971790e2a0b40cd50e1ca2029be7037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdf1f19c3da94cdad85edbd870adb52af971790e2a0b40cd50e1ca2029be7037->enter($__internal_bdf1f19c3da94cdad85edbd870adb52af971790e2a0b40cd50e1ca2029be7037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_bdf1f19c3da94cdad85edbd870adb52af971790e2a0b40cd50e1ca2029be7037->leave($__internal_bdf1f19c3da94cdad85edbd870adb52af971790e2a0b40cd50e1ca2029be7037_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "D:\\Projects\\yourhome_v1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
