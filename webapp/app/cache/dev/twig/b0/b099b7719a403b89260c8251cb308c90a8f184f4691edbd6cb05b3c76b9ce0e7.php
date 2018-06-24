<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_b630681d48abf041303d1cd3d85eb658073e73772db67c89969eca95fcd32999 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_cebbc2d8f15edebfc45bbc9990eadb34baafbcea0345c4663de2c50afbf7d88c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cebbc2d8f15edebfc45bbc9990eadb34baafbcea0345c4663de2c50afbf7d88c->enter($__internal_cebbc2d8f15edebfc45bbc9990eadb34baafbcea0345c4663de2c50afbf7d88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cebbc2d8f15edebfc45bbc9990eadb34baafbcea0345c4663de2c50afbf7d88c->leave($__internal_cebbc2d8f15edebfc45bbc9990eadb34baafbcea0345c4663de2c50afbf7d88c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aaf771cb4f2917f63e9923faa75fde44621284a8024676389862579eacea8fe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf771cb4f2917f63e9923faa75fde44621284a8024676389862579eacea8fe7->enter($__internal_aaf771cb4f2917f63e9923faa75fde44621284a8024676389862579eacea8fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_aaf771cb4f2917f63e9923faa75fde44621284a8024676389862579eacea8fe7->leave($__internal_aaf771cb4f2917f63e9923faa75fde44621284a8024676389862579eacea8fe7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
", "@FOSUser/Profile/edit.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
