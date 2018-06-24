<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_bcc7635d2fd91f0b5a90bac9697b16108ebc995595c219a076f67dbd09ed6d89 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9300e5fdf6f36972294605d3d481b2e2788cd8ae877296c74bc291ce2649490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9300e5fdf6f36972294605d3d481b2e2788cd8ae877296c74bc291ce2649490->enter($__internal_a9300e5fdf6f36972294605d3d481b2e2788cd8ae877296c74bc291ce2649490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9300e5fdf6f36972294605d3d481b2e2788cd8ae877296c74bc291ce2649490->leave($__internal_a9300e5fdf6f36972294605d3d481b2e2788cd8ae877296c74bc291ce2649490_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_8586f34a79ca7a719a71141f50c0d98e702d0e608a93b22f764b9e28af0c9443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8586f34a79ca7a719a71141f50c0d98e702d0e608a93b22f764b9e28af0c9443->enter($__internal_8586f34a79ca7a719a71141f50c0d98e702d0e608a93b22f764b9e28af0c9443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_8586f34a79ca7a719a71141f50c0d98e702d0e608a93b22f764b9e28af0c9443->leave($__internal_8586f34a79ca7a719a71141f50c0d98e702d0e608a93b22f764b9e28af0c9443_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
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
    {{ content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_action.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_core_action.html.twig");
    }
}
