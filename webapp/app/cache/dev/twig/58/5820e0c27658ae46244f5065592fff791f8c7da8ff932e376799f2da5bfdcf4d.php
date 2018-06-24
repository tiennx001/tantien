<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5d5c031e117655dd747e0863c1b92c0e4c5d826a03a858c62e8ff2ec654bf281 extends Twig_Template
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
        $__internal_da20c63fe472b8cf9bbca6c7a9d55c589b7d1e94d42fe00da3b6c3a5c3e46268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da20c63fe472b8cf9bbca6c7a9d55c589b7d1e94d42fe00da3b6c3a5c3e46268->enter($__internal_da20c63fe472b8cf9bbca6c7a9d55c589b7d1e94d42fe00da3b6c3a5c3e46268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da20c63fe472b8cf9bbca6c7a9d55c589b7d1e94d42fe00da3b6c3a5c3e46268->leave($__internal_da20c63fe472b8cf9bbca6c7a9d55c589b7d1e94d42fe00da3b6c3a5c3e46268_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1f360e3ea3706c65ef6330c3126c8712ca25177b799b5fb02e87517c7492935a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f360e3ea3706c65ef6330c3126c8712ca25177b799b5fb02e87517c7492935a->enter($__internal_1f360e3ea3706c65ef6330c3126c8712ca25177b799b5fb02e87517c7492935a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1f360e3ea3706c65ef6330c3126c8712ca25177b799b5fb02e87517c7492935a->leave($__internal_1f360e3ea3706c65ef6330c3126c8712ca25177b799b5fb02e87517c7492935a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5433099b553c783b2be591e388d062c082838773275e7a6c4fa94baedee1b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5433099b553c783b2be591e388d062c082838773275e7a6c4fa94baedee1b0d->enter($__internal_d5433099b553c783b2be591e388d062c082838773275e7a6c4fa94baedee1b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d5433099b553c783b2be591e388d062c082838773275e7a6c4fa94baedee1b0d->leave($__internal_d5433099b553c783b2be591e388d062c082838773275e7a6c4fa94baedee1b0d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_76303f75a38855cac03fc8675abe87e322f9fa1a952c4501bd3e933881eb2d72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76303f75a38855cac03fc8675abe87e322f9fa1a952c4501bd3e933881eb2d72->enter($__internal_76303f75a38855cac03fc8675abe87e322f9fa1a952c4501bd3e933881eb2d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_76303f75a38855cac03fc8675abe87e322f9fa1a952c4501bd3e933881eb2d72->leave($__internal_76303f75a38855cac03fc8675abe87e322f9fa1a952c4501bd3e933881eb2d72_prof);

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
