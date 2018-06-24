<?php

/* @App/product/edit_plus.html.twig */
class __TwigTemplate_d5efb0360bae9fcd9dd18a5780cea25f964b61c874817e4cc3fea7e55225db63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "@App/product/edit_plus.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12e3e7af7c8778adafe982063b3ec696a9006be914b813f5a4e7d32f01e81aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12e3e7af7c8778adafe982063b3ec696a9006be914b813f5a4e7d32f01e81aef->enter($__internal_12e3e7af7c8778adafe982063b3ec696a9006be914b813f5a4e7d32f01e81aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/product/edit_plus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12e3e7af7c8778adafe982063b3ec696a9006be914b813f5a4e7d32f01e81aef->leave($__internal_12e3e7af7c8778adafe982063b3ec696a9006be914b813f5a4e7d32f01e81aef_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c8128f9afab5805154a92ac9bee7f7367cd0e4e53931cad7979dba5b4ac631ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8128f9afab5805154a92ac9bee7f7367cd0e4e53931cad7979dba5b4ac631ad->enter($__internal_c8128f9afab5805154a92ac9bee7f7367cd0e4e53931cad7979dba5b4ac631ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/styles.css"), "html", null, true);
        echo "\">
";
        
        $__internal_c8128f9afab5805154a92ac9bee7f7367cd0e4e53931cad7979dba5b4ac631ad->leave($__internal_c8128f9afab5805154a92ac9bee7f7367cd0e4e53931cad7979dba5b4ac631ad_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_63d40f3a149c75414161d917514065697072954d6b31148398ce973883e7e9da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d40f3a149c75414161d917514065697072954d6b31148398ce973883e7e9da->enter($__internal_63d40f3a149c75414161d917514065697072954d6b31148398ce973883e7e9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"application/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_63d40f3a149c75414161d917514065697072954d6b31148398ce973883e7e9da->leave($__internal_63d40f3a149c75414161d917514065697072954d6b31148398ce973883e7e9da_prof);

    }

    public function getTemplateName()
    {
        return "@App/product/edit_plus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 8,  61 => 7,  55 => 6,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/app/css/styles.css') }}\">
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script type=\"application/javascript\" src=\"{{ asset('ckeditor/ckeditor.js') }}\"></script>
{% endblock %}
", "@App/product/edit_plus.html.twig", "D:\\Projects\\yourhome_v1\\src\\AppBundle\\Resources\\views\\product\\edit_plus.html.twig");
    }
}
