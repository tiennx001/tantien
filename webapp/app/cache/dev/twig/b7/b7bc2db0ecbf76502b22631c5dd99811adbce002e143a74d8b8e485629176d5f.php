<?php

/* AppBundle:stokelog:_status_name.html.twig */
class __TwigTemplate_27711ee21eff0c2dd7fec4a9e569c4531422c26d1ceea12c35d477a48a56acbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "AppBundle:stokelog:_status_name.html.twig", 1);
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
        $__internal_bda62e97f1b4a51f84eb05de6f42ecaf7daadcffc224939cadeb40a55586c16c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bda62e97f1b4a51f84eb05de6f42ecaf7daadcffc224939cadeb40a55586c16c->enter($__internal_bda62e97f1b4a51f84eb05de6f42ecaf7daadcffc224939cadeb40a55586c16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:stokelog:_status_name.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bda62e97f1b4a51f84eb05de6f42ecaf7daadcffc224939cadeb40a55586c16c->leave($__internal_bda62e97f1b4a51f84eb05de6f42ecaf7daadcffc224939cadeb40a55586c16c_prof);

    }

    // line 2
    public function block_field($context, array $blocks = array())
    {
        $__internal_42897ea29b16edb3969c0187a04e6e14b8736223913266af46c75242bd59384a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42897ea29b16edb3969c0187a04e6e14b8736223913266af46c75242bd59384a->enter($__internal_42897ea29b16edb3969c0187a04e6e14b8736223913266af46c75242bd59384a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_42897ea29b16edb3969c0187a04e6e14b8736223913266af46c75242bd59384a->leave($__internal_42897ea29b16edb3969c0187a04e6e14b8736223913266af46c75242bd59384a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:stokelog:_status_name.html.twig";
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
{% endblock %}", "AppBundle:stokelog:_status_name.html.twig", "D:\\Projects\\yourhome_v1\\src\\AppBundle/Resources/views/stokelog/_status_name.html.twig");
    }
}
