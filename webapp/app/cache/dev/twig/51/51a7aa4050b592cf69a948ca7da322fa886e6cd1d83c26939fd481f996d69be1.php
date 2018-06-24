<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_1b2e185ac71e4efc8fc530251a2ccbddfd957e5fa85431a1b08cfe625a8e0a5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_fdc9b34cefee0225f54a609090c87bea9cf0bd1b90c89dc2d0c8a59c82b6c01a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdc9b34cefee0225f54a609090c87bea9cf0bd1b90c89dc2d0c8a59c82b6c01a->enter($__internal_fdc9b34cefee0225f54a609090c87bea9cf0bd1b90c89dc2d0c8a59c82b6c01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdc9b34cefee0225f54a609090c87bea9cf0bd1b90c89dc2d0c8a59c82b6c01a->leave($__internal_fdc9b34cefee0225f54a609090c87bea9cf0bd1b90c89dc2d0c8a59c82b6c01a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_31ba985f5c22a2dabd746eac983f85e3983af562e4d55b90ef0b82403d34a118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ba985f5c22a2dabd746eac983f85e3983af562e4d55b90ef0b82403d34a118->enter($__internal_31ba985f5c22a2dabd746eac983f85e3983af562e4d55b90ef0b82403d34a118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_31ba985f5c22a2dabd746eac983f85e3983af562e4d55b90ef0b82403d34a118->leave($__internal_31ba985f5c22a2dabd746eac983f85e3983af562e4d55b90ef0b82403d34a118_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Group\\show.html.twig");
    }
}
