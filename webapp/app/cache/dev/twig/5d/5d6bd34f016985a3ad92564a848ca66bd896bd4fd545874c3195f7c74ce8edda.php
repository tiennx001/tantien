<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_04e6e1853dc3a7f0d101ec2cf7e51d04cc9715597afdbfd9f39d79773de54570 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_877f3cd11585de74d1fcbcf1d0c66aa5b0161561a0d04dd70b11c05b0505fe1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_877f3cd11585de74d1fcbcf1d0c66aa5b0161561a0d04dd70b11c05b0505fe1e->enter($__internal_877f3cd11585de74d1fcbcf1d0c66aa5b0161561a0d04dd70b11c05b0505fe1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_877f3cd11585de74d1fcbcf1d0c66aa5b0161561a0d04dd70b11c05b0505fe1e->leave($__internal_877f3cd11585de74d1fcbcf1d0c66aa5b0161561a0d04dd70b11c05b0505fe1e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_55242a2d4189646acd91f8d7ccd93aefdc648434001788bdf0f3ebcdfb955b97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55242a2d4189646acd91f8d7ccd93aefdc648434001788bdf0f3ebcdfb955b97->enter($__internal_55242a2d4189646acd91f8d7ccd93aefdc648434001788bdf0f3ebcdfb955b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_55242a2d4189646acd91f8d7ccd93aefdc648434001788bdf0f3ebcdfb955b97->leave($__internal_55242a2d4189646acd91f8d7ccd93aefdc648434001788bdf0f3ebcdfb955b97_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "SonataAdminBundle:CRUD:edit_integer.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_integer.html.twig");
    }
}
