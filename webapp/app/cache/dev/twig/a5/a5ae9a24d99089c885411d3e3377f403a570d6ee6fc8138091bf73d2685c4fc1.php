<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_c3186da18a06de9a5232433f80c12623b1066708ca383a6752aacefc07258486 extends Twig_Template
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
        $__internal_74728404ed0d08cd0194670fdc440c7eae955bf859cc531e6b049bf195c4bdce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74728404ed0d08cd0194670fdc440c7eae955bf859cc531e6b049bf195c4bdce->enter($__internal_74728404ed0d08cd0194670fdc440c7eae955bf859cc531e6b049bf195c4bdce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_74728404ed0d08cd0194670fdc440c7eae955bf859cc531e6b049bf195c4bdce->leave($__internal_74728404ed0d08cd0194670fdc440c7eae955bf859cc531e6b049bf195c4bdce_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "D:\\Projects\\yourhome_v1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
