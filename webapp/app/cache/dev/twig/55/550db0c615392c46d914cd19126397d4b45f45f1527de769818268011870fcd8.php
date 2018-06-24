<?php

/* @SonataAdmin/CRUD/list__action.html.twig */
class __TwigTemplate_d711a500d7a095bd51becb87ffa13b9e61ea41a0223551dd328535d3c7852fd5 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list__action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89187be1f03c474cae25dcc6c4e585aca0d96054f30c9ada6efac318d6748768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89187be1f03c474cae25dcc6c4e585aca0d96054f30c9ada6efac318d6748768->enter($__internal_89187be1f03c474cae25dcc6c4e585aca0d96054f30c9ada6efac318d6748768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89187be1f03c474cae25dcc6c4e585aca0d96054f30c9ada6efac318d6748768->leave($__internal_89187be1f03c474cae25dcc6c4e585aca0d96054f30c9ada6efac318d6748768_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9e692e21dc1ca5f88bd6d2140973106c86b13385ed596e2b7547b2ab2a8c65a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e692e21dc1ca5f88bd6d2140973106c86b13385ed596e2b7547b2ab2a8c65a9->enter($__internal_9e692e21dc1ca5f88bd6d2140973106c86b13385ed596e2b7547b2ab2a8c65a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <div class=\"btn-group\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "actions", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
            // line 17
            echo "            ";
            $this->loadTemplate($this->getAttribute($context["actions"], "template", array()), "@SonataAdmin/CRUD/list__action.html.twig", 17)->display($context);
            // line 18
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
";
        
        $__internal_9e692e21dc1ca5f88bd6d2140973106c86b13385ed596e2b7547b2ab2a8c65a9->leave($__internal_9e692e21dc1ca5f88bd6d2140973106c86b13385ed596e2b7547b2ab2a8c65a9_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  62 => 18,  59 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
    <div class=\"btn-group\">
        {% for actions in field_description.options.actions %}
            {% include actions.template %}
        {% endfor %}
    </div>
{% endblock %}
", "@SonataAdmin/CRUD/list__action.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list__action.html.twig");
    }
}
