<?php

/* @SonataAdmin/CRUD/list__select.html.twig */
class __TwigTemplate_fbd7a6c9bf62062fa95bd679c209b2fa3921ccb4ed6315d851534f5ee3ef0574 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da4248e8df1f1e0561b68bb9adafa2a645b1e4fad2bf7acb6adfc40fad257ec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4248e8df1f1e0561b68bb9adafa2a645b1e4fad2bf7acb6adfc40fad257ec6->enter($__internal_da4248e8df1f1e0561b68bb9adafa2a645b1e4fad2bf7acb6adfc40fad257ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da4248e8df1f1e0561b68bb9adafa2a645b1e4fad2bf7acb6adfc40fad257ec6->leave($__internal_da4248e8df1f1e0561b68bb9adafa2a645b1e4fad2bf7acb6adfc40fad257ec6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_001fe34db7c87f1163bd76ab09f4832ac26783c5cb07d972ce014e95de7ffaf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_001fe34db7c87f1163bd76ab09f4832ac26783c5cb07d972ce014e95de7ffaf8->enter($__internal_001fe34db7c87f1163bd76ab09f4832ac26783c5cb07d972ce014e95de7ffaf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_001fe34db7c87f1163bd76ab09f4832ac26783c5cb07d972ce014e95de7ffaf8->leave($__internal_001fe34db7c87f1163bd76ab09f4832ac26783c5cb07d972ce014e95de7ffaf8_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  39 => 15,  33 => 14,  18 => 12,);
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
    <a class=\"btn btn-primary\" href=\"{{ admin.generateUrl('list') }}\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'list_select'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endblock %}
", "@SonataAdmin/CRUD/list__select.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list__select.html.twig");
    }
}
