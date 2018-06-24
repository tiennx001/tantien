<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_0f2e7b1eb24bea3786d7b9c40a532f276b0a67f4bbaad0fcb219539b44948e08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1424147595ca4668b823c4c2a65b7ad403e350e0aefd4c92c4e53f0c2d778c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1424147595ca4668b823c4c2a65b7ad403e350e0aefd4c92c4e53f0c2d778c29->enter($__internal_1424147595ca4668b823c4c2a65b7ad403e350e0aefd4c92c4e53f0c2d778c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1424147595ca4668b823c4c2a65b7ad403e350e0aefd4c92c4e53f0c2d778c29->leave($__internal_1424147595ca4668b823c4c2a65b7ad403e350e0aefd4c92c4e53f0c2d778c29_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a821ed7ce461415b5b5cbbfd9fc3f82966e2c228d48848831f1f829f837fdaf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a821ed7ce461415b5b5cbbfd9fc3f82966e2c228d48848831f1f829f837fdaf0->enter($__internal_a821ed7ce461415b5b5cbbfd9fc3f82966e2c228d48848831f1f829f837fdaf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_resetting_reset", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 11
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 11)->display($context);
        // line 12
        echo "        </div>
    </div>
";
        
        $__internal_a821ed7ce461415b5b5cbbfd9fc3f82966e2c228d48848831f1f829f837fdaf0->leave($__internal_a821ed7ce461415b5b5cbbfd9fc3f82966e2c228d48848831f1f829f837fdaf0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  54 => 11,  48 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SonataUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {{ form_errors(form) }}

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">{{ \"title_user_resetting_reset\" | trans({}, 'SonataUserBundle') }}</h3>
        </div>
        <div class=\"panel-body\">
            {% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
        </div>
    </div>
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
