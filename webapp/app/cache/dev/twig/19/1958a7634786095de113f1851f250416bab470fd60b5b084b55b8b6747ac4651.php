<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_f068010bff394acc932f2a8f1600c7662ef1c0d27167da516d17ad3f87c9d164 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_a968df6ff94aeff7044189df2fb5f1f81a1041bbf419b8cce286f5ae43ebadb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a968df6ff94aeff7044189df2fb5f1f81a1041bbf419b8cce286f5ae43ebadb6->enter($__internal_a968df6ff94aeff7044189df2fb5f1f81a1041bbf419b8cce286f5ae43ebadb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a968df6ff94aeff7044189df2fb5f1f81a1041bbf419b8cce286f5ae43ebadb6->leave($__internal_a968df6ff94aeff7044189df2fb5f1f81a1041bbf419b8cce286f5ae43ebadb6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c7e6c9a0ccecf4fbb8dba1a275ebaffa988728976a899df1deb7df06dc64aba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e6c9a0ccecf4fbb8dba1a275ebaffa988728976a899df1deb7df06dc64aba8->enter($__internal_c7e6c9a0ccecf4fbb8dba1a275ebaffa988728976a899df1deb7df06dc64aba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_c7e6c9a0ccecf4fbb8dba1a275ebaffa988728976a899df1deb7df06dc64aba8->leave($__internal_c7e6c9a0ccecf4fbb8dba1a275ebaffa988728976a899df1deb7df06dc64aba8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Profile/edit.html.twig");
    }
}
