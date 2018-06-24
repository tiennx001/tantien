<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0f7f40414c5fae13d4719e733b94da37d98fdb406254b596780dc619f4f9f43d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_8eb39d499171b43b7e97b145bdda86bb749292074f4a7fd4b79b52b66a35509f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb39d499171b43b7e97b145bdda86bb749292074f4a7fd4b79b52b66a35509f->enter($__internal_8eb39d499171b43b7e97b145bdda86bb749292074f4a7fd4b79b52b66a35509f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8eb39d499171b43b7e97b145bdda86bb749292074f4a7fd4b79b52b66a35509f->leave($__internal_8eb39d499171b43b7e97b145bdda86bb749292074f4a7fd4b79b52b66a35509f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2971211c4c49cd49f66c8d6fb4d7d823999b95c84ebe796b6f12f655d08c181b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2971211c4c49cd49f66c8d6fb4d7d823999b95c84ebe796b6f12f655d08c181b->enter($__internal_2971211c4c49cd49f66c8d6fb4d7d823999b95c84ebe796b6f12f655d08c181b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2971211c4c49cd49f66c8d6fb4d7d823999b95c84ebe796b6f12f655d08c181b->leave($__internal_2971211c4c49cd49f66c8d6fb4d7d823999b95c84ebe796b6f12f655d08c181b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b5e87cf7d42743cda9eef04f3a92a859ab08e95b5cb580f2a6dc639724f6d089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e87cf7d42743cda9eef04f3a92a859ab08e95b5cb580f2a6dc639724f6d089->enter($__internal_b5e87cf7d42743cda9eef04f3a92a859ab08e95b5cb580f2a6dc639724f6d089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b5e87cf7d42743cda9eef04f3a92a859ab08e95b5cb580f2a6dc639724f6d089->leave($__internal_b5e87cf7d42743cda9eef04f3a92a859ab08e95b5cb580f2a6dc639724f6d089_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_560520c2f5311b70348ff48684511fa7739b64b118b322823b6abd85fa2f64db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_560520c2f5311b70348ff48684511fa7739b64b118b322823b6abd85fa2f64db->enter($__internal_560520c2f5311b70348ff48684511fa7739b64b118b322823b6abd85fa2f64db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_560520c2f5311b70348ff48684511fa7739b64b118b322823b6abd85fa2f64db->leave($__internal_560520c2f5311b70348ff48684511fa7739b64b118b322823b6abd85fa2f64db_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
