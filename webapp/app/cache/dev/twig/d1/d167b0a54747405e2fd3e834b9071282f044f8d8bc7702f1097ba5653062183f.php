<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_6fbbbdf4a83fbea81b2d5f21e808289666923bf3aff4ec8d2052f930850d4ec2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_5a0295f1e7e281e4b0eea3efb3f17523580c0fe864cb2450533656227ec43123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a0295f1e7e281e4b0eea3efb3f17523580c0fe864cb2450533656227ec43123->enter($__internal_5a0295f1e7e281e4b0eea3efb3f17523580c0fe864cb2450533656227ec43123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a0295f1e7e281e4b0eea3efb3f17523580c0fe864cb2450533656227ec43123->leave($__internal_5a0295f1e7e281e4b0eea3efb3f17523580c0fe864cb2450533656227ec43123_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_10142abdeb31c962153bca27012d73a1a7639bf2b5dbcee8a1135b1fa79b8f81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10142abdeb31c962153bca27012d73a1a7639bf2b5dbcee8a1135b1fa79b8f81->enter($__internal_10142abdeb31c962153bca27012d73a1a7639bf2b5dbcee8a1135b1fa79b8f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_10142abdeb31c962153bca27012d73a1a7639bf2b5dbcee8a1135b1fa79b8f81->leave($__internal_10142abdeb31c962153bca27012d73a1a7639bf2b5dbcee8a1135b1fa79b8f81_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fe9f52e06642011932ebbbec16b5a8b3390025ee86c192b9a0b2a81f43230b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe9f52e06642011932ebbbec16b5a8b3390025ee86c192b9a0b2a81f43230b9->enter($__internal_1fe9f52e06642011932ebbbec16b5a8b3390025ee86c192b9a0b2a81f43230b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1fe9f52e06642011932ebbbec16b5a8b3390025ee86c192b9a0b2a81f43230b9->leave($__internal_1fe9f52e06642011932ebbbec16b5a8b3390025ee86c192b9a0b2a81f43230b9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
