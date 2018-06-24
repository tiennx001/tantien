<?php

/* @SonataAdmin/Button/history_button.html.twig */
class __TwigTemplate_4118221b3a857b41d851cc98e867c6747c253366157878e5bbe6768a4fc6bf03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5924782c6e378d19ce9cf9ef2f073b0454aea4be95b6d19c55c187aeaa45b4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5924782c6e378d19ce9cf9ef2f073b0454aea4be95b6d19c55c187aeaa45b4e->enter($__internal_e5924782c6e378d19ce9cf9ef2f073b0454aea4be95b6d19c55c187aeaa45b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/history_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "canAccessObject", array(0 => "history", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "history"), "method"))) {
            // line 13
            echo "    <li>
        <a class=\"sonata-action-element\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "history", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
            <i class=\"fa fa-archive\" aria-hidden=\"true\"></i>
            ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_history", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </a>
    </li>
";
        }
        
        $__internal_e5924782c6e378d19ce9cf9ef2f073b0454aea4be95b6d19c55c187aeaa45b4e->leave($__internal_e5924782c6e378d19ce9cf9ef2f073b0454aea4be95b6d19c55c187aeaa45b4e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Button/history_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 16,  30 => 14,  27 => 13,  25 => 12,  22 => 11,);
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

{% if admin.canAccessObject('history', object) and admin.hasRoute('history') %}
    <li>
        <a class=\"sonata-action-element\" href=\"{{ admin.generateObjectUrl('history', object) }}\">
            <i class=\"fa fa-archive\" aria-hidden=\"true\"></i>
            {{ 'link_action_history'|trans({}, 'SonataAdminBundle') }}
        </a>
    </li>
{% endif %}
", "@SonataAdmin/Button/history_button.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Button\\history_button.html.twig");
    }
}
