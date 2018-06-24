<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_8a76ebec2aca4952cad5d1eaed51f4416749b260caadad7585f64721a4a91428 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_67ade61078c51dafc8bcb7d4b5fe5e681ba1a77ead2a6f50e620afafac2ecc2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67ade61078c51dafc8bcb7d4b5fe5e681ba1a77ead2a6f50e620afafac2ecc2a->enter($__internal_67ade61078c51dafc8bcb7d4b5fe5e681ba1a77ead2a6f50e620afafac2ecc2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67ade61078c51dafc8bcb7d4b5fe5e681ba1a77ead2a6f50e620afafac2ecc2a->leave($__internal_67ade61078c51dafc8bcb7d4b5fe5e681ba1a77ead2a6f50e620afafac2ecc2a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_be173455330c811e0404d26eeb87c6f45435cb3b7d50e6809e8208d2e84aed75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be173455330c811e0404d26eeb87c6f45435cb3b7d50e6809e8208d2e84aed75->enter($__internal_be173455330c811e0404d26eeb87c6f45435cb3b7d50e6809e8208d2e84aed75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_be173455330c811e0404d26eeb87c6f45435cb3b7d50e6809e8208d2e84aed75->leave($__internal_be173455330c811e0404d26eeb87c6f45435cb3b7d50e6809e8208d2e84aed75_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
", "FOSUserBundle:Group:new.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Group/new.html.twig");
    }
}
