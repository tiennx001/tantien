<?php

/* AppBundle:product:_image_path.html.twig */
class __TwigTemplate_a84b00a80cddb7aa7fd2bfd0e2fb4cd8a7aec3219cadfffdd53f31afe1483455 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "AppBundle:product:_image_path.html.twig", 1);
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
        $__internal_b3aaaf47775f7d75acba82efea349813ee4fd504df50e2e3a0046090d8604268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3aaaf47775f7d75acba82efea349813ee4fd504df50e2e3a0046090d8604268->enter($__internal_b3aaaf47775f7d75acba82efea349813ee4fd504df50e2e3a0046090d8604268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:product:_image_path.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3aaaf47775f7d75acba82efea349813ee4fd504df50e2e3a0046090d8604268->leave($__internal_b3aaaf47775f7d75acba82efea349813ee4fd504df50e2e3a0046090d8604268_prof);

    }

    // line 2
    public function block_field($context, array $blocks = array())
    {
        $__internal_631b9d44e4fd35c3b821b087dc4646ad63d493b026610a65d35f1bd6da1bb555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_631b9d44e4fd35c3b821b087dc4646ad63d493b026610a65d35f1bd6da1bb555->enter($__internal_631b9d44e4fd35c3b821b087dc4646ad63d493b026610a65d35f1bd6da1bb555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_631b9d44e4fd35c3b821b087dc4646ad63d493b026610a65d35f1bd6da1bb555->leave($__internal_631b9d44e4fd35c3b821b087dc4646ad63d493b026610a65d35f1bd6da1bb555_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:product:_image_path.html.twig";
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
{% endblock %}", "AppBundle:product:_image_path.html.twig", "D:\\Projects\\yourhome_v1\\src\\AppBundle\\Resources\\views\\product\\_image_path.html.twig");
    }
}
