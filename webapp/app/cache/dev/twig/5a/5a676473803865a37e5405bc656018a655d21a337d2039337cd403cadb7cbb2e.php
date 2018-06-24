<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_288b3f8e6813b96591c49494e59cd40d223beab4e3e35a9913d583fd95be63d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d09adb8f9c7998422f06cf9b491f022be3bea1f80bc68e553bd1108d83a5b1a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d09adb8f9c7998422f06cf9b491f022be3bea1f80bc68e553bd1108d83a5b1a7->enter($__internal_d09adb8f9c7998422f06cf9b491f022be3bea1f80bc68e553bd1108d83a5b1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d09adb8f9c7998422f06cf9b491f022be3bea1f80bc68e553bd1108d83a5b1a7->leave($__internal_d09adb8f9c7998422f06cf9b491f022be3bea1f80bc68e553bd1108d83a5b1a7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e14c07bb5459591a5e3b66af8bca857157f3cf6ab89c0006245607ec22059bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e14c07bb5459591a5e3b66af8bca857157f3cf6ab89c0006245607ec22059bc2->enter($__internal_e14c07bb5459591a5e3b66af8bca857157f3cf6ab89c0006245607ec22059bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e14c07bb5459591a5e3b66af8bca857157f3cf6ab89c0006245607ec22059bc2->leave($__internal_e14c07bb5459591a5e3b66af8bca857157f3cf6ab89c0006245607ec22059bc2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1756d459891423bb07347bd1d08507b606998267fbec155f28c2e679f1d09286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1756d459891423bb07347bd1d08507b606998267fbec155f28c2e679f1d09286->enter($__internal_1756d459891423bb07347bd1d08507b606998267fbec155f28c2e679f1d09286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_1756d459891423bb07347bd1d08507b606998267fbec155f28c2e679f1d09286->leave($__internal_1756d459891423bb07347bd1d08507b606998267fbec155f28c2e679f1d09286_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
