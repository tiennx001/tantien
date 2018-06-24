<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_8347066a95c6aabd5723c5f48165053b862b07b3cb1dae6b65540da9dfd0ed25 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12caf2a2a78f1ed37384525933b4264c78846aee7862246c33035c2866fe9258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12caf2a2a78f1ed37384525933b4264c78846aee7862246c33035c2866fe9258->enter($__internal_12caf2a2a78f1ed37384525933b4264c78846aee7862246c33035c2866fe9258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12caf2a2a78f1ed37384525933b4264c78846aee7862246c33035c2866fe9258->leave($__internal_12caf2a2a78f1ed37384525933b4264c78846aee7862246c33035c2866fe9258_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_a3ebdc84b2cec5b2f99187ff981e956af51c1a91bab5a777a61e3e7e0874992a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ebdc84b2cec5b2f99187ff981e956af51c1a91bab5a777a61e3e7e0874992a->enter($__internal_a3ebdc84b2cec5b2f99187ff981e956af51c1a91bab5a777a61e3e7e0874992a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_a3ebdc84b2cec5b2f99187ff981e956af51c1a91bab5a777a61e3e7e0874992a->leave($__internal_a3ebdc84b2cec5b2f99187ff981e956af51c1a91bab5a777a61e3e7e0874992a_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
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
    {{ knp_menu_render(menu, menu_options) }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_menu.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_core_menu.html.twig");
    }
}
