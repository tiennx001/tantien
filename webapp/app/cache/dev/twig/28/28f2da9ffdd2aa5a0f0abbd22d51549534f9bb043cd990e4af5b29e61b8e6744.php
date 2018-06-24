<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_47907e5413d67bf52e2f190ded9e7b3e86088681342b88ef10f0d91b13d08b59 extends Twig_Template
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
        $__internal_17d49d57963494956008a1b2fafe418a9dfd51adeb16e80ff6414bd80f1d504f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d49d57963494956008a1b2fafe418a9dfd51adeb16e80ff6414bd80f1d504f->enter($__internal_17d49d57963494956008a1b2fafe418a9dfd51adeb16e80ff6414bd80f1d504f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17d49d57963494956008a1b2fafe418a9dfd51adeb16e80ff6414bd80f1d504f->leave($__internal_17d49d57963494956008a1b2fafe418a9dfd51adeb16e80ff6414bd80f1d504f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6264ebf4a0c0fa65464c8dfc85c4d2221c672f3d0319dc7283da0e639194309d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6264ebf4a0c0fa65464c8dfc85c4d2221c672f3d0319dc7283da0e639194309d->enter($__internal_6264ebf4a0c0fa65464c8dfc85c4d2221c672f3d0319dc7283da0e639194309d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6264ebf4a0c0fa65464c8dfc85c4d2221c672f3d0319dc7283da0e639194309d->leave($__internal_6264ebf4a0c0fa65464c8dfc85c4d2221c672f3d0319dc7283da0e639194309d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_777fc6405c413770d9a8078498029da8c973719e8dbbb946a7508174eb4bff2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_777fc6405c413770d9a8078498029da8c973719e8dbbb946a7508174eb4bff2c->enter($__internal_777fc6405c413770d9a8078498029da8c973719e8dbbb946a7508174eb4bff2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_777fc6405c413770d9a8078498029da8c973719e8dbbb946a7508174eb4bff2c->leave($__internal_777fc6405c413770d9a8078498029da8c973719e8dbbb946a7508174eb4bff2c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ee89558d61c01321a2612108b5adc8e440451fc9246744f13239bbbcbfc654e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee89558d61c01321a2612108b5adc8e440451fc9246744f13239bbbcbfc654e3->enter($__internal_ee89558d61c01321a2612108b5adc8e440451fc9246744f13239bbbcbfc654e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ee89558d61c01321a2612108b5adc8e440451fc9246744f13239bbbcbfc654e3->leave($__internal_ee89558d61c01321a2612108b5adc8e440451fc9246744f13239bbbcbfc654e3_prof);

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
