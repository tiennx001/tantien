<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c296cc9046551af1c11dfd39a7c39e378f3ab2154831740cdfd313321c66ad7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_302dabbc167bf4b9be950edcb7eda4caa72eb58eb9691f705c17db7606af55cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_302dabbc167bf4b9be950edcb7eda4caa72eb58eb9691f705c17db7606af55cd->enter($__internal_302dabbc167bf4b9be950edcb7eda4caa72eb58eb9691f705c17db7606af55cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_302dabbc167bf4b9be950edcb7eda4caa72eb58eb9691f705c17db7606af55cd->leave($__internal_302dabbc167bf4b9be950edcb7eda4caa72eb58eb9691f705c17db7606af55cd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_97801ff8c489c7b8d150e5f852da872b50a135fd0d9d23e869f3eb6f810ccc14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97801ff8c489c7b8d150e5f852da872b50a135fd0d9d23e869f3eb6f810ccc14->enter($__internal_97801ff8c489c7b8d150e5f852da872b50a135fd0d9d23e869f3eb6f810ccc14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_97801ff8c489c7b8d150e5f852da872b50a135fd0d9d23e869f3eb6f810ccc14->leave($__internal_97801ff8c489c7b8d150e5f852da872b50a135fd0d9d23e869f3eb6f810ccc14_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7ab7109ac52007be4c97aa75a3d0389de10e485e6e9cc8e3fc844127e53e525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7ab7109ac52007be4c97aa75a3d0389de10e485e6e9cc8e3fc844127e53e525->enter($__internal_c7ab7109ac52007be4c97aa75a3d0389de10e485e6e9cc8e3fc844127e53e525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c7ab7109ac52007be4c97aa75a3d0389de10e485e6e9cc8e3fc844127e53e525->leave($__internal_c7ab7109ac52007be4c97aa75a3d0389de10e485e6e9cc8e3fc844127e53e525_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d87525de96dc21f28726ac5da71b8dc886254bd155a1dc5c6f359906405ef379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d87525de96dc21f28726ac5da71b8dc886254bd155a1dc5c6f359906405ef379->enter($__internal_d87525de96dc21f28726ac5da71b8dc886254bd155a1dc5c6f359906405ef379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d87525de96dc21f28726ac5da71b8dc886254bd155a1dc5c6f359906405ef379->leave($__internal_d87525de96dc21f28726ac5da71b8dc886254bd155a1dc5c6f359906405ef379_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
