<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_6bd7d6a82f59d43e53c31a16e5bb6a0531a9d8b69ea9987fd82cf29934bfe788 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_268fe8eee222b53f86c40ebe2f985e77119c75b680900cadf03bec5569d8fb4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_268fe8eee222b53f86c40ebe2f985e77119c75b680900cadf03bec5569d8fb4a->enter($__internal_268fe8eee222b53f86c40ebe2f985e77119c75b680900cadf03bec5569d8fb4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_268fe8eee222b53f86c40ebe2f985e77119c75b680900cadf03bec5569d8fb4a->leave($__internal_268fe8eee222b53f86c40ebe2f985e77119c75b680900cadf03bec5569d8fb4a_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_4ce1d94208f27f215508d92824be01fd551a9e253b2b27636f3798061a7502ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce1d94208f27f215508d92824be01fd551a9e253b2b27636f3798061a7502ae->enter($__internal_4ce1d94208f27f215508d92824be01fd551a9e253b2b27636f3798061a7502ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_4ce1d94208f27f215508d92824be01fd551a9e253b2b27636f3798061a7502ae->leave($__internal_4ce1d94208f27f215508d92824be01fd551a9e253b2b27636f3798061a7502ae_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
", "SonataBlockBundle:Block:block_core_text.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_core_text.html.twig");
    }
}
