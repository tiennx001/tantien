<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_a75ecaebffd31ddd8a29aadaec5e7800795393bcb2dd14706772314d6f33844b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5985d42afea701e23defc0307a3b3043c2dcabd4b413709ec5bb17c09de83025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5985d42afea701e23defc0307a3b3043c2dcabd4b413709ec5bb17c09de83025->enter($__internal_5985d42afea701e23defc0307a3b3043c2dcabd4b413709ec5bb17c09de83025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5985d42afea701e23defc0307a3b3043c2dcabd4b413709ec5bb17c09de83025->leave($__internal_5985d42afea701e23defc0307a3b3043c2dcabd4b413709ec5bb17c09de83025_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d31270edb20999d3733a1f4c5daa46c234c46ddd749395ce9839f973694abad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d31270edb20999d3733a1f4c5daa46c234c46ddd749395ce9839f973694abad2->enter($__internal_d31270edb20999d3733a1f4c5daa46c234c46ddd749395ce9839f973694abad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_d31270edb20999d3733a1f4c5daa46c234c46ddd749395ce9839f973694abad2->leave($__internal_d31270edb20999d3733a1f4c5daa46c234c46ddd749395ce9839f973694abad2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Group\\list.html.twig");
    }
}
