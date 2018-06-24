<?php

/* @App/stokelog/edit_plus.html.twig */
class __TwigTemplate_32869d42219204a914ff422a014c799fa5396a81efd16ab984c264e27430961e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "@App/stokelog/edit_plus.html.twig", 1);
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
        $__internal_cf7a35538ff3c1bf56de8f1a1e51977157f958b2611268489e4fa246f0dc2deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf7a35538ff3c1bf56de8f1a1e51977157f958b2611268489e4fa246f0dc2deb->enter($__internal_cf7a35538ff3c1bf56de8f1a1e51977157f958b2611268489e4fa246f0dc2deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/stokelog/edit_plus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf7a35538ff3c1bf56de8f1a1e51977157f958b2611268489e4fa246f0dc2deb->leave($__internal_cf7a35538ff3c1bf56de8f1a1e51977157f958b2611268489e4fa246f0dc2deb_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d5a10c8393b24b395f7d983356f4cb90e8482d3d1ee349b48cfae33cf1295f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a10c8393b24b395f7d983356f4cb90e8482d3d1ee349b48cfae33cf1295f91->enter($__internal_d5a10c8393b24b395f7d983356f4cb90e8482d3d1ee349b48cfae33cf1295f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d5a10c8393b24b395f7d983356f4cb90e8482d3d1ee349b48cfae33cf1295f91->leave($__internal_d5a10c8393b24b395f7d983356f4cb90e8482d3d1ee349b48cfae33cf1295f91_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_39fdc95b31176fbff909d57326c37050f01e44082588dd6392d12b80742e56aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39fdc95b31176fbff909d57326c37050f01e44082588dd6392d12b80742e56aa->enter($__internal_39fdc95b31176fbff909d57326c37050f01e44082588dd6392d12b80742e56aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 8
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"/bundles/sonatacore/vendor/moment/min/moment-with-locales.min.js\"></script>
    <script type=\"text/javascript\" src=\"/bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js\"></script>
";
        
        $__internal_39fdc95b31176fbff909d57326c37050f01e44082588dd6392d12b80742e56aa->leave($__internal_39fdc95b31176fbff909d57326c37050f01e44082588dd6392d12b80742e56aa_prof);

    }

    public function getTemplateName()
    {
        return "@App/stokelog/edit_plus.html.twig";
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
", "@App/stokelog/edit_plus.html.twig", "D:\\Projects\\yourhome_v1\\src\\AppBundle\\Resources\\views\\stokelog\\edit_plus.html.twig");
    }
}
