<?php

/* @SonataBlock/Block/block_core_text.html.twig */
class __TwigTemplate_970da789b6a6928785df4199e0674a23686ef086fd89b9891430fb60ba2e13a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5f4fe1d00bb2b5488de88856ff07ed551bd3097c98859ba4d27a76aec774f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f4fe1d00bb2b5488de88856ff07ed551bd3097c98859ba4d27a76aec774f07->enter($__internal_c5f4fe1d00bb2b5488de88856ff07ed551bd3097c98859ba4d27a76aec774f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5f4fe1d00bb2b5488de88856ff07ed551bd3097c98859ba4d27a76aec774f07->leave($__internal_c5f4fe1d00bb2b5488de88856ff07ed551bd3097c98859ba4d27a76aec774f07_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_555b9d964f8b2eb17f2baf2befc847549f58e293fd629c338fb66e338d0c63f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_555b9d964f8b2eb17f2baf2befc847549f58e293fd629c338fb66e338d0c63f2->enter($__internal_555b9d964f8b2eb17f2baf2befc847549f58e293fd629c338fb66e338d0c63f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_555b9d964f8b2eb17f2baf2befc847549f58e293fd629c338fb66e338d0c63f2->leave($__internal_555b9d964f8b2eb17f2baf2befc847549f58e293fd629c338fb66e338d0c63f2_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ settings.content|raw }}
{% endblock %}
", "@SonataBlock/Block/block_core_text.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_core_text.html.twig");
    }
}
