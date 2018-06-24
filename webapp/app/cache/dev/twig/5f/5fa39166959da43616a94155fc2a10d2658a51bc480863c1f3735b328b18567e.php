<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_6bc13302b4383e180cbdc8e9f7eba6f2ffd2186c9a3661a1a7679e94a29d1672 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41e55a3fb86ae560531e7ddb21f25672518fdb53318431f07c738fd8a1d04919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e55a3fb86ae560531e7ddb21f25672518fdb53318431f07c738fd8a1d04919->enter($__internal_41e55a3fb86ae560531e7ddb21f25672518fdb53318431f07c738fd8a1d04919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41e55a3fb86ae560531e7ddb21f25672518fdb53318431f07c738fd8a1d04919->leave($__internal_41e55a3fb86ae560531e7ddb21f25672518fdb53318431f07c738fd8a1d04919_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b6d55e19ef7f47cde35d5abda3703ca465a9eb774f98b36c6f1868f25923e0bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d55e19ef7f47cde35d5abda3703ca465a9eb774f98b36c6f1868f25923e0bc->enter($__internal_b6d55e19ef7f47cde35d5abda3703ca465a9eb774f98b36c6f1868f25923e0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_b6d55e19ef7f47cde35d5abda3703ca465a9eb774f98b36c6f1868f25923e0bc->leave($__internal_b6d55e19ef7f47cde35d5abda3703ca465a9eb774f98b36c6f1868f25923e0bc_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
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
", "SonataAdminBundle:CRUD:edit_string.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_string.html.twig");
    }
}
