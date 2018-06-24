<?php

/* @SonataAdmin/CRUD/edit_boolean.html.twig */
class __TwigTemplate_837ef346af505f4f21680c9c32b389e62201d39b6df8a53dba9c955550f43b4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b917b039c75ccae839362af596923f8e1c0ca246f4885b9e27f1880dfbe61f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b917b039c75ccae839362af596923f8e1c0ca246f4885b9e27f1880dfbe61f4->enter($__internal_3b917b039c75ccae839362af596923f8e1c0ca246f4885b9e27f1880dfbe61f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_3b917b039c75ccae839362af596923f8e1c0ca246f4885b9e27f1880dfbe61f4->leave($__internal_3b917b039c75ccae839362af596923f8e1c0ca246f4885b9e27f1880dfbe61f4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d1b29a2ca60a5505df082f65db901a398902c21c1110c1c0c4d1ce38d61a673c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1b29a2ca60a5505df082f65db901a398902c21c1110c1c0c4d1ce38d61a673c->enter($__internal_d1b29a2ca60a5505df082f65db901a398902c21c1110c1c0c4d1ce38d61a673c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_d1b29a2ca60a5505df082f65db901a398902c21c1110c1c0c4d1ce38d61a673c->leave($__internal_d1b29a2ca60a5505df082f65db901a398902c21c1110c1c0c4d1ce38d61a673c_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_089283828ad5f4c738e72d61c480a8bd4696ad5ff60438de184bf995c2ef357e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_089283828ad5f4c738e72d61c480a8bd4696ad5ff60438de184bf995c2ef357e->enter($__internal_089283828ad5f4c738e72d61c480a8bd4696ad5ff60438de184bf995c2ef357e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
        
        $__internal_089283828ad5f4c738e72d61c480a8bd4696ad5ff60438de184bf995c2ef357e->leave($__internal_089283828ad5f4c738e72d61c480a8bd4696ad5ff60438de184bf995c2ef357e_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_e6181f48d33ebdecf13d10bad1c81ef7d8401f1ad1505a60f86f93874b892952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6181f48d33ebdecf13d10bad1c81ef7d8401f1ad1505a60f86f93874b892952->enter($__internal_e6181f48d33ebdecf13d10bad1c81ef7d8401f1ad1505a60f86f93874b892952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_e6181f48d33ebdecf13d10bad1c81ef7d8401f1ad1505a60f86f93874b892952->leave($__internal_e6181f48d33ebdecf13d10bad1c81ef7d8401f1ad1505a60f86f93874b892952_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  90 => 21,  84 => 19,  78 => 17,  75 => 16,  69 => 15,  57 => 14,  46 => 26,  44 => 25,  40 => 23,  37 => 15,  35 => 14,  29 => 13,  25 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<div>
    <div class=\"sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(field_element) }}{% endblock %}
        {% block label %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endblock %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "@SonataAdmin/CRUD/edit_boolean.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_boolean.html.twig");
    }
}
