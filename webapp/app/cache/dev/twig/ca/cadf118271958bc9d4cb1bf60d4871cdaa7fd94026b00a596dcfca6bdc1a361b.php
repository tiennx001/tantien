<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_29ced9850488874fe98a89776e12ff150fa796c51715d5d8c327f81779c7d1fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_34a4b0beca7fd414a518281de751ffe22e70c1a0900d92c76365e1c1eed0a292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34a4b0beca7fd414a518281de751ffe22e70c1a0900d92c76365e1c1eed0a292->enter($__internal_34a4b0beca7fd414a518281de751ffe22e70c1a0900d92c76365e1c1eed0a292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34a4b0beca7fd414a518281de751ffe22e70c1a0900d92c76365e1c1eed0a292->leave($__internal_34a4b0beca7fd414a518281de751ffe22e70c1a0900d92c76365e1c1eed0a292_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8fe4513b47cdb513cce18715d94b7f487654395acb99c1c275aa5177a48885d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe4513b47cdb513cce18715d94b7f487654395acb99c1c275aa5177a48885d0->enter($__internal_8fe4513b47cdb513cce18715d94b7f487654395acb99c1c275aa5177a48885d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_8fe4513b47cdb513cce18715d94b7f487654395acb99c1c275aa5177a48885d0->leave($__internal_8fe4513b47cdb513cce18715d94b7f487654395acb99c1c275aa5177a48885d0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
", "@FOSUser/Group/edit.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
