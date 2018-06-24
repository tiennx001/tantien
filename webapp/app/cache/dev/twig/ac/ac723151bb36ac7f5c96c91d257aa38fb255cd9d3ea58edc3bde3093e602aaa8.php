<?php

/* @SonataAdmin/CRUD/base_filter_field.html.twig */
class __TwigTemplate_0b289fdfdad6313f8873e142b92e16898f7448825e7f432b91f399572b6fe8a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_757bed35f4cf35ae7fe5b979a6cf1f3e63033191f9d927282affb734b6c58d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_757bed35f4cf35ae7fe5b979a6cf1f3e63033191f9d927282affb734b6c58d68->enter($__internal_757bed35f4cf35ae7fe5b979a6cf1f3e63033191f9d927282affb734b6c58d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_filter_field.html.twig"));

        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), "vars", array()), "errors", array())) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_757bed35f4cf35ae7fe5b979a6cf1f3e63033191f9d927282affb734b6c58d68->leave($__internal_757bed35f4cf35ae7fe5b979a6cf1f3e63033191f9d927282affb734b6c58d68_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_fcfa61ad7bd5ca4c783049a97d4aabfda08f2fe1bac7b7e33052686f654872c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcfa61ad7bd5ca4c783049a97d4aabfda08f2fe1bac7b7e33052686f654872c1->enter($__internal_fcfa61ad7bd5ca4c783049a97d4aabfda08f2fe1bac7b7e33052686f654872c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_fcfa61ad7bd5ca4c783049a97d4aabfda08f2fe1bac7b7e33052686f654872c1->leave($__internal_fcfa61ad7bd5ca4c783049a97d4aabfda08f2fe1bac7b7e33052686f654872c1_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_822d134309bbd0159a5b2ac9f44ac952c7e044cc2c9532267cb90034f12baf7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_822d134309bbd0159a5b2ac9f44ac952c7e044cc2c9532267cb90034f12baf7b->enter($__internal_822d134309bbd0159a5b2ac9f44ac952c7e044cc2c9532267cb90034f12baf7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_822d134309bbd0159a5b2ac9f44ac952c7e044cc2c9532267cb90034f12baf7b->leave($__internal_822d134309bbd0159a5b2ac9f44ac952c7e044cc2c9532267cb90034f12baf7b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  72 => 20,  66 => 18,  60 => 16,  57 => 15,  51 => 14,  42 => 25,  40 => 24,  34 => 23,  31 => 22,  29 => 14,  24 => 11,);
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
    {% block label %}
        {% if filter.fielddescription.options.name is defined %}
            {{ form_label(filter_form, filter.fielddescription.options.name) }}
        {% else %}
            {{ form_label(filter_form) }}
        {% endif %}
        <br>
    {% endblock %}

    <div class=\"sonata-ba-field{% if filter_form.vars.errors %} sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(filter_form) }}{% endblock %}
    </div>
</div>
", "@SonataAdmin/CRUD/base_filter_field.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_filter_field.html.twig");
    }
}
