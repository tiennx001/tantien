<?php

/* @SonataAdmin/Button/acl_button.html.twig */
class __TwigTemplate_15e1be0413237cc43d0da60fd1ba07a6b113de8bf43a86b2f36b85037bcc7c3b extends Twig_Template
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
        $__internal_8afa500040e92a3cb2b406d7c4fcc8531f024a7fb671753d57be0a4b25e49f76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8afa500040e92a3cb2b406d7c4fcc8531f024a7fb671753d57be0a4b25e49f76->enter($__internal_8afa500040e92a3cb2b406d7c4fcc8531f024a7fb671753d57be0a4b25e49f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/acl_button.html.twig"));

        // line 11
        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isAclEnabled", array(), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "canAccessObject", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "acl"), "method"))) {
            // line 12
            echo "    <li>
        <a class=\"sonata-action-element\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
            <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
            ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_acl", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </a>
    </li>
";
        }
        
        $__internal_8afa500040e92a3cb2b406d7c4fcc8531f024a7fb671753d57be0a4b25e49f76->leave($__internal_8afa500040e92a3cb2b406d7c4fcc8531f024a7fb671753d57be0a4b25e49f76_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Button/acl_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 15,  27 => 13,  24 => 12,  22 => 11,);
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
{% if admin.isAclEnabled() and admin.canAccessObject('acl', object) and admin.hasRoute('acl') %}
    <li>
        <a class=\"sonata-action-element\" href=\"{{ admin.generateObjectUrl('acl', object) }}\">
            <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
            {{ 'link_action_acl'|trans({}, 'SonataAdminBundle') }}
        </a>
    </li>
{% endif %}
", "@SonataAdmin/Button/acl_button.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Button\\acl_button.html.twig");
    }
}
