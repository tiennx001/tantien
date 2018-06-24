<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_15960786a0057836fac60d6e4a0daa2f4d0c3abc75dda0d8599c5a2958d6e42f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_077b515d418279120c6af7d108e5309127f078b698b503bc46be7873df84fb52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_077b515d418279120c6af7d108e5309127f078b698b503bc46be7873df84fb52->enter($__internal_077b515d418279120c6af7d108e5309127f078b698b503bc46be7873df84fb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_077b515d418279120c6af7d108e5309127f078b698b503bc46be7873df84fb52->leave($__internal_077b515d418279120c6af7d108e5309127f078b698b503bc46be7873df84fb52_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a525dc4efdc1d8658de2c2361ed805f6e8df4e6021f30605380d26b3d07a9ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a525dc4efdc1d8658de2c2361ed805f6e8df4e6021f30605380d26b3d07a9ba6->enter($__internal_a525dc4efdc1d8658de2c2361ed805f6e8df4e6021f30605380d26b3d07a9ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_a525dc4efdc1d8658de2c2361ed805f6e8df4e6021f30605380d26b3d07a9ba6->leave($__internal_a525dc4efdc1d8658de2c2361ed805f6e8df4e6021f30605380d26b3d07a9ba6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Group/edit.html.twig");
    }
}
