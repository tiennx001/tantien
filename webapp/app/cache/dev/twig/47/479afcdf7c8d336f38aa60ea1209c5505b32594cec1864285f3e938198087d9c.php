<?php

/* @SonataAdmin/CRUD/edit_file.html.twig */
class __TwigTemplate_046df63e76de2c5d11e05cf5f0358b06d8933204253f0ae958b40fe5bb79abb8 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a30bcab516839115d068438bd9bc7aa2ecf9f6c78b3f05b8731c2fc53fd4b25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a30bcab516839115d068438bd9bc7aa2ecf9f6c78b3f05b8731c2fc53fd4b25->enter($__internal_7a30bcab516839115d068438bd9bc7aa2ecf9f6c78b3f05b8731c2fc53fd4b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a30bcab516839115d068438bd9bc7aa2ecf9f6c78b3f05b8731c2fc53fd4b25->leave($__internal_7a30bcab516839115d068438bd9bc7aa2ecf9f6c78b3f05b8731c2fc53fd4b25_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e9df4956b15aa27bf63a5f1982c2bb1e496fd0035de3e07f1d3c37d6ae9718f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9df4956b15aa27bf63a5f1982c2bb1e496fd0035de3e07f1d3c37d6ae9718f7->enter($__internal_e9df4956b15aa27bf63a5f1982c2bb1e496fd0035de3e07f1d3c37d6ae9718f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_e9df4956b15aa27bf63a5f1982c2bb1e496fd0035de3e07f1d3c37d6ae9718f7->leave($__internal_e9df4956b15aa27bf63a5f1982c2bb1e496fd0035de3e07f1d3c37d6ae9718f7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_file.html.twig";
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
", "@SonataAdmin/CRUD/edit_file.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_file.html.twig");
    }
}
