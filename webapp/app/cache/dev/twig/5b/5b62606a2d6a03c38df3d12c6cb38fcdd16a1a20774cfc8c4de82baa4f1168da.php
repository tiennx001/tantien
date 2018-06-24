<?php

/* SonataBlockBundle:Block:block_template.html.twig */
class __TwigTemplate_5b191ffd92b0358cd62ebca6abdc131559b94e6cebb29f09bd87149216bde5a3 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_template.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9a606215c2e538bf36c1259ea92ebf3037d1e4c454d282fe9f7d42adb734963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a606215c2e538bf36c1259ea92ebf3037d1e4c454d282fe9f7d42adb734963->enter($__internal_f9a606215c2e538bf36c1259ea92ebf3037d1e4c454d282fe9f7d42adb734963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_template.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9a606215c2e538bf36c1259ea92ebf3037d1e4c454d282fe9f7d42adb734963->leave($__internal_f9a606215c2e538bf36c1259ea92ebf3037d1e4c454d282fe9f7d42adb734963_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_7605c0a1a5496ffec48b5f5a0f1b6f8eec95053f1c7f355f5d700bed7b3f6c82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7605c0a1a5496ffec48b5f5a0f1b6f8eec95053f1c7f355f5d700bed7b3f6c82->enter($__internal_7605c0a1a5496ffec48b5f5a0f1b6f8eec95053f1c7f355f5d700bed7b3f6c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <h3>Sonata Block Template</h3>
    If you want to use the <code>sonata.block.template</code> block type, you need to create a template :

    <pre>";
        // line 33
        echo "{# file: 'MyBundle:Block:my_block_feature_1.html.twig' #}
{% extends sonata_block.templates.block_base %}

{% block block %}
    &lt;h3&gt;The block title&lt;/h3&gt;
    &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel turpis at lacus
        vehicula fringilla at eu lectus. Duis vitae arcu congue, porttitor nisi sit amet,
        mattis metus. Nunc mollis elit ut lectus cursus luctus. Aliquam eu magna sit amet
        massa volutpat auctor.
    &lt;/p&gt;
{% endblock %}";
        echo "</pre>

    And then call it from a template with the <code>sonata_block_render</code> helper:

    <pre>";
        // line 43
        echo "{{ sonata_block_render({ 'type': 'sonata.block.service.template' }, {
    'template': 'MyBundle:Block:my_block_feature_1.html.twig',
}) }}";
        echo "</pre>
";
        
        $__internal_7605c0a1a5496ffec48b5f5a0f1b6f8eec95053f1c7f355f5d700bed7b3f6c82->leave($__internal_7605c0a1a5496ffec48b5f5a0f1b6f8eec95053f1c7f355f5d700bed7b3f6c82_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 43,  44 => 33,  39 => 15,  33 => 14,  18 => 12,);
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
    <h3>Sonata Block Template</h3>
    If you want to use the <code>sonata.block.template</code> block type, you need to create a template :

    <pre>
        {%- verbatim -%}
{# file: 'MyBundle:Block:my_block_feature_1.html.twig' #}
{% extends sonata_block.templates.block_base %}

{% block block %}
    &lt;h3&gt;The block title&lt;/h3&gt;
    &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel turpis at lacus
        vehicula fringilla at eu lectus. Duis vitae arcu congue, porttitor nisi sit amet,
        mattis metus. Nunc mollis elit ut lectus cursus luctus. Aliquam eu magna sit amet
        massa volutpat auctor.
    &lt;/p&gt;
{% endblock %}
        {%- endverbatim -%}
    </pre>

    And then call it from a template with the <code>sonata_block_render</code> helper:

    <pre>
{%- verbatim -%}
{{ sonata_block_render({ 'type': 'sonata.block.service.template' }, {
    'template': 'MyBundle:Block:my_block_feature_1.html.twig',
}) }}
{%- endverbatim -%}
    </pre>
{% endblock %}
", "SonataBlockBundle:Block:block_template.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_template.html.twig");
    }
}
