<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_6feb61271f6fa0efa1576205112b2a4b3d3b2b566afab0409df843711118820b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_8b36499e5b0b7336ca831ebe85ae59bd01885cb79cd00dc4a5fe02613b8f99c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b36499e5b0b7336ca831ebe85ae59bd01885cb79cd00dc4a5fe02613b8f99c7->enter($__internal_8b36499e5b0b7336ca831ebe85ae59bd01885cb79cd00dc4a5fe02613b8f99c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b36499e5b0b7336ca831ebe85ae59bd01885cb79cd00dc4a5fe02613b8f99c7->leave($__internal_8b36499e5b0b7336ca831ebe85ae59bd01885cb79cd00dc4a5fe02613b8f99c7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1c85f070719ab6a233e167cafa8a38342b847aeed8525416e7f848a095bfc27f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c85f070719ab6a233e167cafa8a38342b847aeed8525416e7f848a095bfc27f->enter($__internal_1c85f070719ab6a233e167cafa8a38342b847aeed8525416e7f848a095bfc27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_1c85f070719ab6a233e167cafa8a38342b847aeed8525416e7f848a095bfc27f->leave($__internal_1c85f070719ab6a233e167cafa8a38342b847aeed8525416e7f848a095bfc27f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
