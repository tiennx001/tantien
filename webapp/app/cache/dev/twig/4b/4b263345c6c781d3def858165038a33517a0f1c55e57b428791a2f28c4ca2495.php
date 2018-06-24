<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_06a5135590f0de45a3b0b8f7e25f0344631d8121cdc1c28cde41d05fb1d47053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_17f1eae65981d700897c5656b1a6ae61330c81e0fb1e0faf0c756a5b8f7c8cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f1eae65981d700897c5656b1a6ae61330c81e0fb1e0faf0c756a5b8f7c8cfd->enter($__internal_17f1eae65981d700897c5656b1a6ae61330c81e0fb1e0faf0c756a5b8f7c8cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17f1eae65981d700897c5656b1a6ae61330c81e0fb1e0faf0c756a5b8f7c8cfd->leave($__internal_17f1eae65981d700897c5656b1a6ae61330c81e0fb1e0faf0c756a5b8f7c8cfd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1799d4b646e09008baf6179e276646e3fc7d416e46a8a6e4c6409e6b0958df3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1799d4b646e09008baf6179e276646e3fc7d416e46a8a6e4c6409e6b0958df3a->enter($__internal_1799d4b646e09008baf6179e276646e3fc7d416e46a8a6e4c6409e6b0958df3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_1799d4b646e09008baf6179e276646e3fc7d416e46a8a6e4c6409e6b0958df3a->leave($__internal_1799d4b646e09008baf6179e276646e3fc7d416e46a8a6e4c6409e6b0958df3a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
", "FOSUserBundle:Group:show.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Group/show.html.twig");
    }
}
