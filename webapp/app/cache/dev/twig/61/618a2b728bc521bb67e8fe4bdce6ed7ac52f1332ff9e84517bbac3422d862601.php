<?php

/* @App/product/_image_path.html.twig */
class __TwigTemplate_30cb175dc032e2a0f63f4100f851f786346d0ace1cfb7df75c4357a01ac86ee7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "@App/product/_image_path.html.twig", 1);
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
        $__internal_49913bb9f4bd80b2cfb5772cfb085c785d12da90776165d7688eb035cbae7d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49913bb9f4bd80b2cfb5772cfb085c785d12da90776165d7688eb035cbae7d1e->enter($__internal_49913bb9f4bd80b2cfb5772cfb085c785d12da90776165d7688eb035cbae7d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/product/_image_path.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49913bb9f4bd80b2cfb5772cfb085c785d12da90776165d7688eb035cbae7d1e->leave($__internal_49913bb9f4bd80b2cfb5772cfb085c785d12da90776165d7688eb035cbae7d1e_prof);

    }

    // line 2
    public function block_field($context, array $blocks = array())
    {
        $__internal_98e412eefe1a73fafda8262a07d69bd54db26ab6f58cd09f8b6c1f98d9b24da3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98e412eefe1a73fafda8262a07d69bd54db26ab6f58cd09f8b6c1f98d9b24da3->enter($__internal_98e412eefe1a73fafda8262a07d69bd54db26ab6f58cd09f8b6c1f98d9b24da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 3
        echo "    <div>
        ";
        // line 4
        if (($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "imagePath", array()) != null)) {
            // line 5
            echo "            <img width=\"100\" height=\"100\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "imagePath", array()), "html", null, true);
            echo "\">
        ";
        } else {
            // line 7
            echo "            <span>No picture</span>
        ";
        }
        // line 9
        echo "    </div>
";
        
        $__internal_98e412eefe1a73fafda8262a07d69bd54db26ab6f58cd09f8b6c1f98d9b24da3->leave($__internal_98e412eefe1a73fafda8262a07d69bd54db26ab6f58cd09f8b6c1f98d9b24da3_prof);

    }

    public function getTemplateName()
    {
        return "@App/product/_image_path.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  51 => 7,  45 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
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
        {% if object.imagePath != null %}
            <img width=\"100\" height=\"100\" src=\"{{ object.imagePath }}\">
        {% else %}
            <span>No picture</span>
        {% endif %}
    </div>
{% endblock %}", "@App/product/_image_path.html.twig", "D:\\Projects\\yourhome_v1\\src\\AppBundle\\Resources\\views\\product\\_image_path.html.twig");
    }
}
