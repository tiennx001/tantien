<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_8b4b7c0a39c455bd8949831e2c5db146c8e2b819648269bb2ca9bb182ee1b8f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_5f08499a3d2b4a80eb94d1f0afe5a5358864f3c25e67fce3870553cbf876c7b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f08499a3d2b4a80eb94d1f0afe5a5358864f3c25e67fce3870553cbf876c7b8->enter($__internal_5f08499a3d2b4a80eb94d1f0afe5a5358864f3c25e67fce3870553cbf876c7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f08499a3d2b4a80eb94d1f0afe5a5358864f3c25e67fce3870553cbf876c7b8->leave($__internal_5f08499a3d2b4a80eb94d1f0afe5a5358864f3c25e67fce3870553cbf876c7b8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fc4902c2de275361f331e1ff59a2e1bdac92eb3d92e331819b99cee535fb79a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc4902c2de275361f331e1ff59a2e1bdac92eb3d92e331819b99cee535fb79a5->enter($__internal_fc4902c2de275361f331e1ff59a2e1bdac92eb3d92e331819b99cee535fb79a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_fc4902c2de275361f331e1ff59a2e1bdac92eb3d92e331819b99cee535fb79a5->leave($__internal_fc4902c2de275361f331e1ff59a2e1bdac92eb3d92e331819b99cee535fb79a5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Group/list.html.twig");
    }
}
