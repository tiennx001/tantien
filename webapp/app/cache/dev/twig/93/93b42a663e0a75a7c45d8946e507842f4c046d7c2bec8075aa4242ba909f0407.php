<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_27ac1d68737a7b9c6fca34f3188cdb9ca1e7485a8c6da7f97c40b60ea16ab5c9 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0ddb90746b7c15b86b8f33835a9b48a3fa2af0c220611d7482ab95b512909ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0ddb90746b7c15b86b8f33835a9b48a3fa2af0c220611d7482ab95b512909ad->enter($__internal_d0ddb90746b7c15b86b8f33835a9b48a3fa2af0c220611d7482ab95b512909ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0ddb90746b7c15b86b8f33835a9b48a3fa2af0c220611d7482ab95b512909ad->leave($__internal_d0ddb90746b7c15b86b8f33835a9b48a3fa2af0c220611d7482ab95b512909ad_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_958b0b4af02607f36880116dc84e61a687ea8e46343da7bd98b5f83e76cf8bee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_958b0b4af02607f36880116dc84e61a687ea8e46343da7bd98b5f83e76cf8bee->enter($__internal_958b0b4af02607f36880116dc84e61a687ea8e46343da7bd98b5f83e76cf8bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_958b0b4af02607f36880116dc84e61a687ea8e46343da7bd98b5f83e76cf8bee->leave($__internal_958b0b4af02607f36880116dc84e61a687ea8e46343da7bd98b5f83e76cf8bee_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
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

{% extends base_template %}

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
", "SonataAdminBundle:CRUD:edit_array.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_array.html.twig");
    }
}
