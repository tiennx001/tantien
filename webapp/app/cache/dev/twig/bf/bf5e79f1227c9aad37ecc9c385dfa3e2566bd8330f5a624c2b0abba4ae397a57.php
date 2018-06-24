<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_872ecd0490fe1945e9b1cbe06a62d3b3bd5be48e5ad9f004d57ae5ed0cc9b79a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
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
        $__internal_4b199f6f4a31cee555abeb6916d4d78647fe5e5bcf244fc22367eb6ae8403806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b199f6f4a31cee555abeb6916d4d78647fe5e5bcf244fc22367eb6ae8403806->enter($__internal_4b199f6f4a31cee555abeb6916d4d78647fe5e5bcf244fc22367eb6ae8403806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b199f6f4a31cee555abeb6916d4d78647fe5e5bcf244fc22367eb6ae8403806->leave($__internal_4b199f6f4a31cee555abeb6916d4d78647fe5e5bcf244fc22367eb6ae8403806_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ae3bb12f6c4a1c9b1d222f754ebe9980d7a4081f53efcde71ca74473de6618a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae3bb12f6c4a1c9b1d222f754ebe9980d7a4081f53efcde71ca74473de6618a7->enter($__internal_ae3bb12f6c4a1c9b1d222f754ebe9980d7a4081f53efcde71ca74473de6618a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_ae3bb12f6c4a1c9b1d222f754ebe9980d7a4081f53efcde71ca74473de6618a7->leave($__internal_ae3bb12f6c4a1c9b1d222f754ebe9980d7a4081f53efcde71ca74473de6618a7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec1455cdeacbb612740c3a7eae735fbe031e115b17e836e44feaa0c0344f6c9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec1455cdeacbb612740c3a7eae735fbe031e115b17e836e44feaa0c0344f6c9f->enter($__internal_ec1455cdeacbb612740c3a7eae735fbe031e115b17e836e44feaa0c0344f6c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_ec1455cdeacbb612740c3a7eae735fbe031e115b17e836e44feaa0c0344f6c9f->leave($__internal_ec1455cdeacbb612740c3a7eae735fbe031e115b17e836e44feaa0c0344f6c9f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_07c063b6675d6daab493ba7d5c245ff743f87f8ff17bb27875a663b6cb562987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07c063b6675d6daab493ba7d5c245ff743f87f8ff17bb27875a663b6cb562987->enter($__internal_07c063b6675d6daab493ba7d5c245ff743f87f8ff17bb27875a663b6cb562987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_07c063b6675d6daab493ba7d5c245ff743f87f8ff17bb27875a663b6cb562987->leave($__internal_07c063b6675d6daab493ba7d5c245ff743f87f8ff17bb27875a663b6cb562987_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_640bf390127c4c08eaaf5671510b28793c056b5e03d1dbd931e88045f23edf38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_640bf390127c4c08eaaf5671510b28793c056b5e03d1dbd931e88045f23edf38->enter($__internal_640bf390127c4c08eaaf5671510b28793c056b5e03d1dbd931e88045f23edf38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_640bf390127c4c08eaaf5671510b28793c056b5e03d1dbd931e88045f23edf38->leave($__internal_640bf390127c4c08eaaf5671510b28793c056b5e03d1dbd931e88045f23edf38_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
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
", "SensioDistributionBundle::Configurator/layout.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
