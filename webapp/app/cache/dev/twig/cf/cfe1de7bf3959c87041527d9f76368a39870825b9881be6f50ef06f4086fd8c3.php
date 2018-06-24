<?php

/* @SonataAdmin/CRUD/edit_text.html.twig */
class __TwigTemplate_2c62b3204b5b28797e41fee26a62ce94656d17414b56ee7f357d9f658ea04d5a extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_562bc489631b4902b508dfdd373564b4246a7a34da5ae8815ad491dcb754189a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_562bc489631b4902b508dfdd373564b4246a7a34da5ae8815ad491dcb754189a->enter($__internal_562bc489631b4902b508dfdd373564b4246a7a34da5ae8815ad491dcb754189a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_562bc489631b4902b508dfdd373564b4246a7a34da5ae8815ad491dcb754189a->leave($__internal_562bc489631b4902b508dfdd373564b4246a7a34da5ae8815ad491dcb754189a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_841d8238fbbce2a807d5888dfe9c17e899a4c61b2488cba9a2bac695ba54bc0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_841d8238fbbce2a807d5888dfe9c17e899a4c61b2488cba9a2bac695ba54bc0e->enter($__internal_841d8238fbbce2a807d5888dfe9c17e899a4c61b2488cba9a2bac695ba54bc0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_841d8238fbbce2a807d5888dfe9c17e899a4c61b2488cba9a2bac695ba54bc0e->leave($__internal_841d8238fbbce2a807d5888dfe9c17e899a4c61b2488cba9a2bac695ba54bc0e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_text.html.twig";
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
", "@SonataAdmin/CRUD/edit_text.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_text.html.twig");
    }
}
