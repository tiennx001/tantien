<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_9cf53f448154d2baf84a8aa49ce8704e510ea9b4fc2a9f7973b680d551e7eb60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_17bff77e3d14ba823d71ab8d6bbf5149dd6f2a0f72f93f79ee503bb614100e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17bff77e3d14ba823d71ab8d6bbf5149dd6f2a0f72f93f79ee503bb614100e09->enter($__internal_17bff77e3d14ba823d71ab8d6bbf5149dd6f2a0f72f93f79ee503bb614100e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17bff77e3d14ba823d71ab8d6bbf5149dd6f2a0f72f93f79ee503bb614100e09->leave($__internal_17bff77e3d14ba823d71ab8d6bbf5149dd6f2a0f72f93f79ee503bb614100e09_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_515237ca671d6b3e3b69bd39082aa0f2240af46a0078362b38e674a83d6e7ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_515237ca671d6b3e3b69bd39082aa0f2240af46a0078362b38e674a83d6e7ada->enter($__internal_515237ca671d6b3e3b69bd39082aa0f2240af46a0078362b38e674a83d6e7ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_515237ca671d6b3e3b69bd39082aa0f2240af46a0078362b38e674a83d6e7ada->leave($__internal_515237ca671d6b3e3b69bd39082aa0f2240af46a0078362b38e674a83d6e7ada_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Group\\new.html.twig");
    }
}
