<?php

/* @SonataAdmin/CRUD/list_currency.html.twig */
class __TwigTemplate_9c7bd54d31a60969fac349788c6b65e507bf7d7483095943f43921b28f256743 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d964b91c7fb9cd869356ae6151c83fbd97b91bb8676d309aa0358b0da78c37c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d964b91c7fb9cd869356ae6151c83fbd97b91bb8676d309aa0358b0da78c37c->enter($__internal_8d964b91c7fb9cd869356ae6151c83fbd97b91bb8676d309aa0358b0da78c37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d964b91c7fb9cd869356ae6151c83fbd97b91bb8676d309aa0358b0da78c37c->leave($__internal_8d964b91c7fb9cd869356ae6151c83fbd97b91bb8676d309aa0358b0da78c37c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b5c4ab1030ce0af2ad7a240738f4895a3acd16c14dad9621eb0b767ff713d132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5c4ab1030ce0af2ad7a240738f4895a3acd16c14dad9621eb0b767ff713d132->enter($__internal_b5c4ab1030ce0af2ad7a240738f4895a3acd16c14dad9621eb0b767ff713d132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_b5c4ab1030ce0af2ad7a240738f4895a3acd16c14dad9621eb0b767ff713d132->leave($__internal_b5c4ab1030ce0af2ad7a240738f4895a3acd16c14dad9621eb0b767ff713d132_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_currency.html.twig";
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
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "@SonataAdmin/CRUD/list_currency.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_currency.html.twig");
    }
}
