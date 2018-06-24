<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_89e990b7df83870430d9be3086147aee3a1bc9fe6d331a6dfab7826fbdb64150 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_551dfd7ba5ecd77b838ab1824dc7c6c1e1501f3f689c8949a486253d53642e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551dfd7ba5ecd77b838ab1824dc7c6c1e1501f3f689c8949a486253d53642e2d->enter($__internal_551dfd7ba5ecd77b838ab1824dc7c6c1e1501f3f689c8949a486253d53642e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_551dfd7ba5ecd77b838ab1824dc7c6c1e1501f3f689c8949a486253d53642e2d->leave($__internal_551dfd7ba5ecd77b838ab1824dc7c6c1e1501f3f689c8949a486253d53642e2d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5644841fbc982e0789e1f9799e07920da3351117f82731c856bff6765762f84a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5644841fbc982e0789e1f9799e07920da3351117f82731c856bff6765762f84a->enter($__internal_5644841fbc982e0789e1f9799e07920da3351117f82731c856bff6765762f84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_5644841fbc982e0789e1f9799e07920da3351117f82731c856bff6765762f84a->leave($__internal_5644841fbc982e0789e1f9799e07920da3351117f82731c856bff6765762f84a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
", "SonataAdminBundle:CRUD:edit_file.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_file.html.twig");
    }
}
