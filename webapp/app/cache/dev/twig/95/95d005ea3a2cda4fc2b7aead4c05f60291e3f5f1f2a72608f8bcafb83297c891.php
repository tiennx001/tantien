<?php

/* SonataAdminBundle:Core:search.html.twig */
class __TwigTemplate_3b6ca417884e090124808085e12447aaac7080bb1743a42a4d0b6f432b66aa06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:Core:search.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d95bb16cf23fbfaaf7f28432f30ad6b6e20e02e09834e8e285e97b0f3d81f1d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d95bb16cf23fbfaaf7f28432f30ad6b6e20e02e09834e8e285e97b0f3d81f1d4->enter($__internal_d95bb16cf23fbfaaf7f28432f30ad6b6e20e02e09834e8e285e97b0f3d81f1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:search.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d95bb16cf23fbfaaf7f28432f30ad6b6e20e02e09834e8e285e97b0f3d81f1d4->leave($__internal_d95bb16cf23fbfaaf7f28432f30ad6b6e20e02e09834e8e285e97b0f3d81f1d4_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_311035642031394ebd7cecb5b318ecd53231b91d4921b4e120c86358e42007c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_311035642031394ebd7cecb5b318ecd53231b91d4921b4e120c86358e42007c5->enter($__internal_311035642031394ebd7cecb5b318ecd53231b91d4921b4e120c86358e42007c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
        
        $__internal_311035642031394ebd7cecb5b318ecd53231b91d4921b4e120c86358e42007c5->leave($__internal_311035642031394ebd7cecb5b318ecd53231b91d4921b4e120c86358e42007c5_prof);

    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_b86b55bd3491b63b3e31d6671b7216945fbd6d653821f363c593fc15e6d6929d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b86b55bd3491b63b3e31d6671b7216945fbd6d653821f363c593fc15e6d6929d->enter($__internal_b86b55bd3491b63b3e31d6671b7216945fbd6d653821f363c593fc15e6d6929d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_b86b55bd3491b63b3e31d6671b7216945fbd6d653821f363c593fc15e6d6929d->leave($__internal_b86b55bd3491b63b3e31d6671b7216945fbd6d653821f363c593fc15e6d6929d_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_2c4a3a7508e07ff7176100e5068aba6a2c232e2c3d5ae452add11df0e569c06b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c4a3a7508e07ff7176100e5068aba6a2c232e2c3d5ae452add11df0e569c06b->enter($__internal_2c4a3a7508e07ff7176100e5068aba6a2c232e2c3d5ae452add11df0e569c06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <h2 class=\"page-header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
        echo "</h2>

    ";
        // line 19
        if ((array_key_exists("query", $context) &&  !((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")) === false))) {
            // line 20
            echo "        ";
            $context["count"] = 0;
            // line 21
            echo "        <div class=\"row\" data-masonry='{ \"itemSelector\": \".search-box-item\" }'>
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 23
                echo "            ";
                $context["display"] = (twig_test_empty($this->getAttribute($context["group"], "roles", array())) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
                // line 24
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "roles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ( !(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                        // line 25
                        echo "                ";
                        $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                        // line 26
                        echo "            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "
            ";
                // line 28
                if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 29
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 30
                        echo "                    ";
                        $context["count"] = ((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) + 1);
                        // line 31
                        echo "                    ";
                        if ((($this->getAttribute($context["admin"], "hasRoute", array(0 => "create"), "method") && $this->getAttribute($context["admin"], "hasAccess", array(0 => "create"), "method")) || ($this->getAttribute($context["admin"], "hasRoute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "hasAccess", array(0 => "list"), "method")))) {
                            // line 32
                            echo "                        ";
                            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.admin.block.search_result"), array("query" =>                             // line 35
(isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "admin_code" => $this->getAttribute(                            // line 36
$context["admin"], "code", array()), "page" => 0, "per_page" => 10, "icon" => $this->getAttribute(                            // line 39
$context["group"], "icon", array()))));
                            // line 40
                            echo "
                    ";
                        }
                        // line 42
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "            ";
                }
                // line 44
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "        </div>
    ";
        }
        // line 47
        echo "
";
        
        $__internal_2c4a3a7508e07ff7176100e5068aba6a2c232e2c3d5ae452add11df0e569c06b->leave($__internal_2c4a3a7508e07ff7176100e5068aba6a2c232e2c3d5ae452add11df0e569c06b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 47,  142 => 45,  136 => 44,  133 => 43,  127 => 42,  123 => 40,  121 => 39,  120 => 36,  119 => 35,  117 => 32,  114 => 31,  111 => 30,  106 => 29,  104 => 28,  101 => 27,  94 => 26,  91 => 25,  85 => 24,  82 => 23,  78 => 22,  75 => 21,  72 => 20,  70 => 19,  64 => 17,  58 => 16,  47 => 15,  35 => 14,  20 => 12,);
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

{% block title %}{{ 'title_search_results'|trans({'%query%': query}, 'SonataAdminBundle') }}{% endblock %}
{% block breadcrumb %}{% endblock %}
{% block content %}
    <h2 class=\"page-header\">{{ 'title_search_results'|trans({'%query%': query}, 'SonataAdminBundle') }}</h2>

    {% if query is defined and query is not same as(false) %}
        {% set count = 0 %}
        <div class=\"row\" data-masonry='{ \"itemSelector\": \".search-box-item\" }'>
        {% for group in groups %}
            {% set display = (group.roles is empty or is_granted('ROLE_SUPER_ADMIN') ) %}
            {% for role in group.roles if not display %}
                {% set display = is_granted(role) %}
            {% endfor %}

            {% if display %}
                {% for admin in group.items %}
                    {% set count = count + 1 %}
                    {% if admin.hasRoute('create') and admin.hasAccess('create') or admin.hasRoute('list') and admin.hasAccess('list') %}
                        {{ sonata_block_render({
                            'type': 'sonata.admin.block.search_result'
                        }, {
                            'query': query,
                            'admin_code': admin.code,
                            'page': 0,
                            'per_page': 10,
                            'icon': group.icon
                        }) }}
                    {% endif %}
                {% endfor %}
            {% endif %}
        {% endfor %}
        </div>
    {% endif %}

{% endblock %}
", "SonataAdminBundle:Core:search.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle/Resources/views/Core/search.html.twig");
    }
}
