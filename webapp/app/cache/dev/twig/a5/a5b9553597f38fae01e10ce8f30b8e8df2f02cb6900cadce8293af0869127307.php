<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_e42e62648cc18f99dd3809fb5d1b86f0f8420d9ea32f5a08d83a1f80703ee565 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc941ba6a9ae6e708707d2995fb0866f225a811626bcf2f13521417a02af1518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc941ba6a9ae6e708707d2995fb0866f225a811626bcf2f13521417a02af1518->enter($__internal_bc941ba6a9ae6e708707d2995fb0866f225a811626bcf2f13521417a02af1518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc941ba6a9ae6e708707d2995fb0866f225a811626bcf2f13521417a02af1518->leave($__internal_bc941ba6a9ae6e708707d2995fb0866f225a811626bcf2f13521417a02af1518_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_62b99305ff2e85599b23b065a57abf2ac20d0e7192b8b6a77d73f78f73451359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b99305ff2e85599b23b065a57abf2ac20d0e7192b8b6a77d73f78f73451359->enter($__internal_62b99305ff2e85599b23b065a57abf2ac20d0e7192b8b6a77d73f78f73451359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_62b99305ff2e85599b23b065a57abf2ac20d0e7192b8b6a77d73f78f73451359->leave($__internal_62b99305ff2e85599b23b065a57abf2ac20d0e7192b8b6a77d73f78f73451359_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
    <div class=\"cms-block-exception\">
        <h2>{{ block.name }}</h2>
        <h3>{{ exception.message }}</h3>
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_exception.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_exception.html.twig");
    }
}
