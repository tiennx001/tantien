<?php

/* AppBundle:product:edit_plus.html.twig */
class __TwigTemplate_6d869f108a907f99b1500b2ceb08ceeb580550ad88aeb80607d626e21c759ba2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "AppBundle:product:edit_plus.html.twig", 1);
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
        $__internal_55cb8c7e36e0666486df696a0bcb185ec08327c0e5bec37d84608abb66b2a30c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55cb8c7e36e0666486df696a0bcb185ec08327c0e5bec37d84608abb66b2a30c->enter($__internal_55cb8c7e36e0666486df696a0bcb185ec08327c0e5bec37d84608abb66b2a30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:product:edit_plus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55cb8c7e36e0666486df696a0bcb185ec08327c0e5bec37d84608abb66b2a30c->leave($__internal_55cb8c7e36e0666486df696a0bcb185ec08327c0e5bec37d84608abb66b2a30c_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9bbf0d1ea28ec232cacff27b5cb6418e7d1211ec400ea5ba9b9ca6465a8ad072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bbf0d1ea28ec232cacff27b5cb6418e7d1211ec400ea5ba9b9ca6465a8ad072->enter($__internal_9bbf0d1ea28ec232cacff27b5cb6418e7d1211ec400ea5ba9b9ca6465a8ad072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/styles.css"), "html", null, true);
        echo "\">
";
        
        $__internal_9bbf0d1ea28ec232cacff27b5cb6418e7d1211ec400ea5ba9b9ca6465a8ad072->leave($__internal_9bbf0d1ea28ec232cacff27b5cb6418e7d1211ec400ea5ba9b9ca6465a8ad072_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f9de3628046800292981b5ed9c014e97b85eb01076479688530d7702111ae3f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9de3628046800292981b5ed9c014e97b85eb01076479688530d7702111ae3f5->enter($__internal_f9de3628046800292981b5ed9c014e97b85eb01076479688530d7702111ae3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"application/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_f9de3628046800292981b5ed9c014e97b85eb01076479688530d7702111ae3f5->leave($__internal_f9de3628046800292981b5ed9c014e97b85eb01076479688530d7702111ae3f5_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:product:edit_plus.html.twig";
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
", "AppBundle:product:edit_plus.html.twig", "D:\\Projects\\yourhome_v1\\src\\AppBundle/Resources/views/product/edit_plus.html.twig");
    }
}
