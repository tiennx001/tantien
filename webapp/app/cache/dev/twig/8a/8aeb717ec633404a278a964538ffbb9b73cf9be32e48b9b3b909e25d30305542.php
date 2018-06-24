<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c88d448c612f6a1e29b97cc18dad60d76e080fc3bddf1d0bcab6ddf759875b73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24f457721653565222da141fe1699b42073f43ba8fd49da6dce250bed522031d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f457721653565222da141fe1699b42073f43ba8fd49da6dce250bed522031d->enter($__internal_24f457721653565222da141fe1699b42073f43ba8fd49da6dce250bed522031d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24f457721653565222da141fe1699b42073f43ba8fd49da6dce250bed522031d->leave($__internal_24f457721653565222da141fe1699b42073f43ba8fd49da6dce250bed522031d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_48e02e022eadfe4f22673fd2348475fcd1c54f169aa70a3b3966c976515ebab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48e02e022eadfe4f22673fd2348475fcd1c54f169aa70a3b3966c976515ebab7->enter($__internal_48e02e022eadfe4f22673fd2348475fcd1c54f169aa70a3b3966c976515ebab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_48e02e022eadfe4f22673fd2348475fcd1c54f169aa70a3b3966c976515ebab7->leave($__internal_48e02e022eadfe4f22673fd2348475fcd1c54f169aa70a3b3966c976515ebab7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b1f1c71a99fa7ea83a0dfe4c493a5e71d0c8b27d684b2e4008e8eb8ce4aa92d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1f1c71a99fa7ea83a0dfe4c493a5e71d0c8b27d684b2e4008e8eb8ce4aa92d0->enter($__internal_b1f1c71a99fa7ea83a0dfe4c493a5e71d0c8b27d684b2e4008e8eb8ce4aa92d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b1f1c71a99fa7ea83a0dfe4c493a5e71d0c8b27d684b2e4008e8eb8ce4aa92d0->leave($__internal_b1f1c71a99fa7ea83a0dfe4c493a5e71d0c8b27d684b2e4008e8eb8ce4aa92d0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b17a0f062662e51de347929d2a5f27a4c379a2659787fabd6187aa8b5d018433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b17a0f062662e51de347929d2a5f27a4c379a2659787fabd6187aa8b5d018433->enter($__internal_b17a0f062662e51de347929d2a5f27a4c379a2659787fabd6187aa8b5d018433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b17a0f062662e51de347929d2a5f27a4c379a2659787fabd6187aa8b5d018433->leave($__internal_b17a0f062662e51de347929d2a5f27a4c379a2659787fabd6187aa8b5d018433_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
