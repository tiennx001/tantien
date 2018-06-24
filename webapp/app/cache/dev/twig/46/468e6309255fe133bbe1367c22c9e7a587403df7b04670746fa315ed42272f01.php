<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_17b6e48acedb6b5ba8179655b6b31ae54263666471a2aa695a6eb30c3c1c2505 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_e68d4818019e0f33032f51cbae91b84174a1313543ad1e28466b74d06dad2df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e68d4818019e0f33032f51cbae91b84174a1313543ad1e28466b74d06dad2df1->enter($__internal_e68d4818019e0f33032f51cbae91b84174a1313543ad1e28466b74d06dad2df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e68d4818019e0f33032f51cbae91b84174a1313543ad1e28466b74d06dad2df1->leave($__internal_e68d4818019e0f33032f51cbae91b84174a1313543ad1e28466b74d06dad2df1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f2648017f9e646bd96b8a3c4c9dc5e89683a1be4dd5b0c73c2d2c8f6d478b09e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2648017f9e646bd96b8a3c4c9dc5e89683a1be4dd5b0c73c2d2c8f6d478b09e->enter($__internal_f2648017f9e646bd96b8a3c4c9dc5e89683a1be4dd5b0c73c2d2c8f6d478b09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f2648017f9e646bd96b8a3c4c9dc5e89683a1be4dd5b0c73c2d2c8f6d478b09e->leave($__internal_f2648017f9e646bd96b8a3c4c9dc5e89683a1be4dd5b0c73c2d2c8f6d478b09e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8987ffb6f42a0be1b1165ee0746e5b1fd8249808e1586dc4471e54dbd6bcd653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8987ffb6f42a0be1b1165ee0746e5b1fd8249808e1586dc4471e54dbd6bcd653->enter($__internal_8987ffb6f42a0be1b1165ee0746e5b1fd8249808e1586dc4471e54dbd6bcd653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8987ffb6f42a0be1b1165ee0746e5b1fd8249808e1586dc4471e54dbd6bcd653->leave($__internal_8987ffb6f42a0be1b1165ee0746e5b1fd8249808e1586dc4471e54dbd6bcd653_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e50dd811fc44683f4641d16163aa723bc56a0d4fe3de163b464885aff6085de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e50dd811fc44683f4641d16163aa723bc56a0d4fe3de163b464885aff6085de5->enter($__internal_e50dd811fc44683f4641d16163aa723bc56a0d4fe3de163b464885aff6085de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e50dd811fc44683f4641d16163aa723bc56a0d4fe3de163b464885aff6085de5->leave($__internal_e50dd811fc44683f4641d16163aa723bc56a0d4fe3de163b464885aff6085de5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
