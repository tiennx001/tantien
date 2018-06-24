<?php

/* AppBundle:stokelog:edit_plus.html.twig */
class __TwigTemplate_97b8f8922d565b93a7ae080aa588ef71d30e6876f239ed5bbfeb4dd7991da419 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "AppBundle:stokelog:edit_plus.html.twig", 1);
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
        $__internal_70297835250c603085bd3af47e122538992c7f404b893474fbafa6c3386e0176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70297835250c603085bd3af47e122538992c7f404b893474fbafa6c3386e0176->enter($__internal_70297835250c603085bd3af47e122538992c7f404b893474fbafa6c3386e0176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:stokelog:edit_plus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70297835250c603085bd3af47e122538992c7f404b893474fbafa6c3386e0176->leave($__internal_70297835250c603085bd3af47e122538992c7f404b893474fbafa6c3386e0176_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_37e84401b4568d81764a7bb327d69334891d13fa0e885e6c11df53b7f5e4eff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37e84401b4568d81764a7bb327d69334891d13fa0e885e6c11df53b7f5e4eff2->enter($__internal_37e84401b4568d81764a7bb327d69334891d13fa0e885e6c11df53b7f5e4eff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/styles.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_37e84401b4568d81764a7bb327d69334891d13fa0e885e6c11df53b7f5e4eff2->leave($__internal_37e84401b4568d81764a7bb327d69334891d13fa0e885e6c11df53b7f5e4eff2_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1a7e9c4fbb3e805aecf742dcdfa4ad6d0b1ed0c26cbd4a1d0ec279ce7049f4f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a7e9c4fbb3e805aecf742dcdfa4ad6d0b1ed0c26cbd4a1d0ec279ce7049f4f1->enter($__internal_1a7e9c4fbb3e805aecf742dcdfa4ad6d0b1ed0c26cbd4a1d0ec279ce7049f4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 8
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"/bundles/sonatacore/vendor/moment/min/moment-with-locales.min.js\"></script>
    <script type=\"text/javascript\" src=\"/bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js\"></script>
";
        
        $__internal_1a7e9c4fbb3e805aecf742dcdfa4ad6d0b1ed0c26cbd4a1d0ec279ce7049f4f1->leave($__internal_1a7e9c4fbb3e805aecf742dcdfa4ad6d0b1ed0c26cbd4a1d0ec279ce7049f4f1_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:stokelog:edit_plus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 8,  59 => 7,  50 => 5,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}\" />
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\" src=\"/bundles/sonatacore/vendor/moment/min/moment-with-locales.min.js\"></script>
    <script type=\"text/javascript\" src=\"/bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js\"></script>
{% endblock %}
", "AppBundle:stokelog:edit_plus.html.twig", "D:\\Projects\\yourhome_v1\\src\\AppBundle/Resources/views/stokelog/edit_plus.html.twig");
    }
}
