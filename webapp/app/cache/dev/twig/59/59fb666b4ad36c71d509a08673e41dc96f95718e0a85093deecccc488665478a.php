<?php

/* @SonataAdmin/CRUD/list_percent.html.twig */
class __TwigTemplate_20932bb8f39aad038b6ccc60b0cc85efc000d0902726d8ae4259326915b49f81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78138677d43f39bd2b0a40db2e2024c9245ee2e338c5ac403c24932d659a3e90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78138677d43f39bd2b0a40db2e2024c9245ee2e338c5ac403c24932d659a3e90->enter($__internal_78138677d43f39bd2b0a40db2e2024c9245ee2e338c5ac403c24932d659a3e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78138677d43f39bd2b0a40db2e2024c9245ee2e338c5ac403c24932d659a3e90->leave($__internal_78138677d43f39bd2b0a40db2e2024c9245ee2e338c5ac403c24932d659a3e90_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_836cd0a1a8bc5ea7387f8c1026a794b630860722fb6c5aad115bbc24c328c10a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_836cd0a1a8bc5ea7387f8c1026a794b630860722fb6c5aad115bbc24c328c10a->enter($__internal_836cd0a1a8bc5ea7387f8c1026a794b630860722fb6c5aad115bbc24c328c10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_836cd0a1a8bc5ea7387f8c1026a794b630860722fb6c5aad115bbc24c328c10a->leave($__internal_836cd0a1a8bc5ea7387f8c1026a794b630860722fb6c5aad115bbc24c328c10a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "@SonataAdmin/CRUD/list_percent.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_percent.html.twig");
    }
}
