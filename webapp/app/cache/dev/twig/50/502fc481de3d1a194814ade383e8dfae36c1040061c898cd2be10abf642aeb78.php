<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_652eb393a1ebaf2c596a020e01cc9349783eb96cf62d3ae1fa5fc73e97db24ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_502d9e1858d8fd28f39f02454b5d1b0180c4e60d5ab8bd791d2a34fdae05f5f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_502d9e1858d8fd28f39f02454b5d1b0180c4e60d5ab8bd791d2a34fdae05f5f8->enter($__internal_502d9e1858d8fd28f39f02454b5d1b0180c4e60d5ab8bd791d2a34fdae05f5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_502d9e1858d8fd28f39f02454b5d1b0180c4e60d5ab8bd791d2a34fdae05f5f8->leave($__internal_502d9e1858d8fd28f39f02454b5d1b0180c4e60d5ab8bd791d2a34fdae05f5f8_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_09da66a1eef927d3cfd32d06241495effaf7fd7f13dc2f31ec2977629411338a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09da66a1eef927d3cfd32d06241495effaf7fd7f13dc2f31ec2977629411338a->enter($__internal_09da66a1eef927d3cfd32d06241495effaf7fd7f13dc2f31ec2977629411338a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_09da66a1eef927d3cfd32d06241495effaf7fd7f13dc2f31ec2977629411338a->leave($__internal_09da66a1eef927d3cfd32d06241495effaf7fd7f13dc2f31ec2977629411338a_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_9c1e5b3abf931cfe4beb844e7c3dc2adf1bfaa8a9b1f74e9d3b47543e4623ad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c1e5b3abf931cfe4beb844e7c3dc2adf1bfaa8a9b1f74e9d3b47543e4623ad3->enter($__internal_9c1e5b3abf931cfe4beb844e7c3dc2adf1bfaa8a9b1f74e9d3b47543e4623ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9c1e5b3abf931cfe4beb844e7c3dc2adf1bfaa8a9b1f74e9d3b47543e4623ad3->leave($__internal_9c1e5b3abf931cfe4beb844e7c3dc2adf1bfaa8a9b1f74e9d3b47543e4623ad3_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_8cba6c230df921ea0d66bb7af0e0e76d35a57837f5847b41f403e057ad1bab85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cba6c230df921ea0d66bb7af0e0e76d35a57837f5847b41f403e057ad1bab85->enter($__internal_8cba6c230df921ea0d66bb7af0e0e76d35a57837f5847b41f403e057ad1bab85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_8cba6c230df921ea0d66bb7af0e0e76d35a57837f5847b41f403e057ad1bab85->leave($__internal_8cba6c230df921ea0d66bb7af0e0e76d35a57837f5847b41f403e057ad1bab85_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_e6e63e29b7474434a2ce12493d9f44df7ef6f96c93aa7cf50b5fba5b81b7e489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6e63e29b7474434a2ce12493d9f44df7ef6f96c93aa7cf50b5fba5b81b7e489->enter($__internal_e6e63e29b7474434a2ce12493d9f44df7ef6f96c93aa7cf50b5fba5b81b7e489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_e6e63e29b7474434a2ce12493d9f44df7ef6f96c93aa7cf50b5fba5b81b7e489->leave($__internal_e6e63e29b7474434a2ce12493d9f44df7ef6f96c93aa7cf50b5fba5b81b7e489_prof);

    }

    // line 34
    public function block_form($context, array $blocks = array())
    {
        $__internal_b53da572f47212708a0b22b2318afdae23a57bdb363dcc79b618aa8e74c7a0f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b53da572f47212708a0b22b2318afdae23a57bdb363dcc79b618aa8e74c7a0f8->enter($__internal_b53da572f47212708a0b22b2318afdae23a57bdb363dcc79b618aa8e74c7a0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 35
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_b53da572f47212708a0b22b2318afdae23a57bdb363dcc79b618aa8e74c7a0f8->leave($__internal_b53da572f47212708a0b22b2318afdae23a57bdb363dcc79b618aa8e74c7a0f8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 35,  122 => 34,  110 => 30,  103 => 27,  97 => 26,  87 => 23,  81 => 22,  70 => 18,  64 => 16,  61 => 15,  55 => 14,  40 => 12,  12 => 32,);
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

{% block title %}
    {% if admin.id(object) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_edit.html.twig");
    }
}
