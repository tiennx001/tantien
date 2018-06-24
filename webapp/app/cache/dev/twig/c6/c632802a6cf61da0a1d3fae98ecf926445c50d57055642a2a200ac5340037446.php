<?php

/* AppBundle:product:edit_plus.html.twig */
class __TwigTemplate_8b0e4f4f22c2cb9d9c089f465c51891cab102dbc9195d8a46e780b721860285a extends Twig_Template
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
        $__internal_1b583d2c29d3b709e956787434da76c8f728df641126fcaf240e5ee3d73a2163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b583d2c29d3b709e956787434da76c8f728df641126fcaf240e5ee3d73a2163->enter($__internal_1b583d2c29d3b709e956787434da76c8f728df641126fcaf240e5ee3d73a2163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:product:edit_plus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b583d2c29d3b709e956787434da76c8f728df641126fcaf240e5ee3d73a2163->leave($__internal_1b583d2c29d3b709e956787434da76c8f728df641126fcaf240e5ee3d73a2163_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ce534e59c649e5ede64de4e9bf6b354456a047bb7f2c9070e062e826c3b792e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce534e59c649e5ede64de4e9bf6b354456a047bb7f2c9070e062e826c3b792e1->enter($__internal_ce534e59c649e5ede64de4e9bf6b354456a047bb7f2c9070e062e826c3b792e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/styles.css"), "html", null, true);
        echo "\">
";
        
        $__internal_ce534e59c649e5ede64de4e9bf6b354456a047bb7f2c9070e062e826c3b792e1->leave($__internal_ce534e59c649e5ede64de4e9bf6b354456a047bb7f2c9070e062e826c3b792e1_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ecd29baa643aa5c4a5a8ebc7745da43646e0fb95f565cb919d3715cc2ce7add1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd29baa643aa5c4a5a8ebc7745da43646e0fb95f565cb919d3715cc2ce7add1->enter($__internal_ecd29baa643aa5c4a5a8ebc7745da43646e0fb95f565cb919d3715cc2ce7add1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"application/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_ecd29baa643aa5c4a5a8ebc7745da43646e0fb95f565cb919d3715cc2ce7add1->leave($__internal_ecd29baa643aa5c4a5a8ebc7745da43646e0fb95f565cb919d3715cc2ce7add1_prof);

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
", "AppBundle:product:edit_plus.html.twig", "D:\\Projects\\yourhome_v1\\src\\AppBundle\\Resources\\views\\product\\edit_plus.html.twig");
    }
}
