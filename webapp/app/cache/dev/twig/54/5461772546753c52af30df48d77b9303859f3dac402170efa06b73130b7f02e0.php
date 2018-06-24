<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_2d902d5e73fd812af210f1393f8388ba32a1d310035dd83a7728ee786abda9aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "@SensioDistribution/Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91791335da514db981256c68b40e0cd7d08a466338f1a32a3f6e81943beaa59b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91791335da514db981256c68b40e0cd7d08a466338f1a32a3f6e81943beaa59b->enter($__internal_91791335da514db981256c68b40e0cd7d08a466338f1a32a3f6e81943beaa59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91791335da514db981256c68b40e0cd7d08a466338f1a32a3f6e81943beaa59b->leave($__internal_91791335da514db981256c68b40e0cd7d08a466338f1a32a3f6e81943beaa59b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4f97aa4a71ce33b8a071da97b25a72ecf0bbba73a5b68def933b232e74f1ad35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f97aa4a71ce33b8a071da97b25a72ecf0bbba73a5b68def933b232e74f1ad35->enter($__internal_4f97aa4a71ce33b8a071da97b25a72ecf0bbba73a5b68def933b232e74f1ad35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_4f97aa4a71ce33b8a071da97b25a72ecf0bbba73a5b68def933b232e74f1ad35->leave($__internal_4f97aa4a71ce33b8a071da97b25a72ecf0bbba73a5b68def933b232e74f1ad35_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_de34b83bbccba82a4d11f88a87b719bff0f89c1c395140ee5b859a80b69f4438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de34b83bbccba82a4d11f88a87b719bff0f89c1c395140ee5b859a80b69f4438->enter($__internal_de34b83bbccba82a4d11f88a87b719bff0f89c1c395140ee5b859a80b69f4438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_de34b83bbccba82a4d11f88a87b719bff0f89c1c395140ee5b859a80b69f4438->leave($__internal_de34b83bbccba82a4d11f88a87b719bff0f89c1c395140ee5b859a80b69f4438_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_42557bc080ccc4d3ccc55b938016ff7c8d2e5ce0be6187e6cedea3495209163b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42557bc080ccc4d3ccc55b938016ff7c8d2e5ce0be6187e6cedea3495209163b->enter($__internal_42557bc080ccc4d3ccc55b938016ff7c8d2e5ce0be6187e6cedea3495209163b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_42557bc080ccc4d3ccc55b938016ff7c8d2e5ce0be6187e6cedea3495209163b->leave($__internal_42557bc080ccc4d3ccc55b938016ff7c8d2e5ce0be6187e6cedea3495209163b_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_ef9caf10c5a8b8b1bed62afd70394804f23c28661b537fe24e34fc27b32493bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef9caf10c5a8b8b1bed62afd70394804f23c28661b537fe24e34fc27b32493bd->enter($__internal_ef9caf10c5a8b8b1bed62afd70394804f23c28661b537fe24e34fc27b32493bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ef9caf10c5a8b8b1bed62afd70394804f23c28661b537fe24e34fc27b32493bd->leave($__internal_ef9caf10c5a8b8b1bed62afd70394804f23c28661b537fe24e34fc27b32493bd_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "@SensioDistribution/Configurator/layout.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle\\Resources\\views\\Configurator\\layout.html.twig");
    }
}
