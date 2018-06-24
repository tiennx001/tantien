<?php

/* @App/stokelog/_status_name.html.twig */
class __TwigTemplate_dc8639e44d02be0312d6b62f0205102f336af691e54ebd570a8b05814beba167 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "@App/stokelog/_status_name.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c32cc2bee06e3e53939e96fa1d7dc7a7ba8c57244ca66cc7119204b631498efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c32cc2bee06e3e53939e96fa1d7dc7a7ba8c57244ca66cc7119204b631498efb->enter($__internal_c32cc2bee06e3e53939e96fa1d7dc7a7ba8c57244ca66cc7119204b631498efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/stokelog/_status_name.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c32cc2bee06e3e53939e96fa1d7dc7a7ba8c57244ca66cc7119204b631498efb->leave($__internal_c32cc2bee06e3e53939e96fa1d7dc7a7ba8c57244ca66cc7119204b631498efb_prof);

    }

    // line 2
    public function block_field($context, array $blocks = array())
    {
        $__internal_0789abf651b3075801fb1bb5eba51086ad46a8fadcc0a9a8da1859598f49a127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0789abf651b3075801fb1bb5eba51086ad46a8fadcc0a9a8da1859598f49a127->enter($__internal_0789abf651b3075801fb1bb5eba51086ad46a8fadcc0a9a8da1859598f49a127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 3
        echo "    <div>
        ";
        // line 4
        if ( !(null === $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "status", array()))) {
            // line 5
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "statusName", array()), "html", null, true);
            echo "
        ";
        }
        // line 7
        echo "    </div>
";
        
        $__internal_0789abf651b3075801fb1bb5eba51086ad46a8fadcc0a9a8da1859598f49a127->leave($__internal_0789abf651b3075801fb1bb5eba51086ad46a8fadcc0a9a8da1859598f49a127_prof);

    }

    public function getTemplateName()
    {
        return "@App/stokelog/_status_name.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  45 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_list_field.html.twig' %}
{% block field %}
    <div>
        {% if object.status is not null %}
            {{ object.statusName  }}
        {% endif %}
    </div>
{% endblock %}", "@App/stokelog/_status_name.html.twig", "D:\\Projects\\yourhome_v1\\src\\AppBundle\\Resources\\views\\stokelog\\_status_name.html.twig");
    }
}
