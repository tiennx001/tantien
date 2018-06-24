<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_e605bac8c0dd3143fefac549c407a949655f36b60bf8b2c7953f254967f78298 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_120ec4bfefa59c4a37119251860d3f77f55e3189abc0127ccc87f11bbcd52951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_120ec4bfefa59c4a37119251860d3f77f55e3189abc0127ccc87f11bbcd52951->enter($__internal_120ec4bfefa59c4a37119251860d3f77f55e3189abc0127ccc87f11bbcd52951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_120ec4bfefa59c4a37119251860d3f77f55e3189abc0127ccc87f11bbcd52951->leave($__internal_120ec4bfefa59c4a37119251860d3f77f55e3189abc0127ccc87f11bbcd52951_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e11dd2c4a566e9419f89f74edc2e3377e00ca73fe2a1d109c9861005ec6e81f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e11dd2c4a566e9419f89f74edc2e3377e00ca73fe2a1d109c9861005ec6e81f8->enter($__internal_e11dd2c4a566e9419f89f74edc2e3377e00ca73fe2a1d109c9861005ec6e81f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e11dd2c4a566e9419f89f74edc2e3377e00ca73fe2a1d109c9861005ec6e81f8->leave($__internal_e11dd2c4a566e9419f89f74edc2e3377e00ca73fe2a1d109c9861005ec6e81f8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
<p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Resetting/passwordAlreadyRequested.html.twig");
    }
}
