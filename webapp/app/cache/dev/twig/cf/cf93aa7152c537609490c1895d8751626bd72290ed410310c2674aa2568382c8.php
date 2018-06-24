<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_b21a703a0a273ab27affa665b538362fe37fd2898906deddf8db6991b02a23f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_917cc9ab9af7c3f70fee5fb86d1fccf0b78c2a8a5891eb5c9d86f88e9ebbff4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_917cc9ab9af7c3f70fee5fb86d1fccf0b78c2a8a5891eb5c9d86f88e9ebbff4c->enter($__internal_917cc9ab9af7c3f70fee5fb86d1fccf0b78c2a8a5891eb5c9d86f88e9ebbff4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_917cc9ab9af7c3f70fee5fb86d1fccf0b78c2a8a5891eb5c9d86f88e9ebbff4c->leave($__internal_917cc9ab9af7c3f70fee5fb86d1fccf0b78c2a8a5891eb5c9d86f88e9ebbff4c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "D:\\Projects\\yourhome_v1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
