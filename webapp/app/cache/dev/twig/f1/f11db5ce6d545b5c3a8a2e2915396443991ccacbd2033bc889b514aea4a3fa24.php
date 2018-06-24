<?php

/* @SonataBlock/Block/block_base.html.twig */
class __TwigTemplate_935847d07a28bfc0c9e841f82dd64ce7f8ba3d2aad2a12d7ccdcd0153e89a59b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01ecbf5886f15e27b5a5994837144c6a01b2169a6f8dee20b445ab5d5330affb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01ecbf5886f15e27b5a5994837144c6a01b2169a6f8dee20b445ab5d5330affb->enter($__internal_01ecbf5886f15e27b5a5994837144c6a01b2169a6f8dee20b445ab5d5330affb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_01ecbf5886f15e27b5a5994837144c6a01b2169a6f8dee20b445ab5d5330affb->leave($__internal_01ecbf5886f15e27b5a5994837144c6a01b2169a6f8dee20b445ab5d5330affb_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_10c2e7e22ab041b50c9a029b7ec10ad0c4d6eb598d5c7938a9fbf413a9a245ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10c2e7e22ab041b50c9a029b7ec10ad0c4d6eb598d5c7938a9fbf413a9a245ca->enter($__internal_10c2e7e22ab041b50c9a029b7ec10ad0c4d6eb598d5c7938a9fbf413a9a245ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_10c2e7e22ab041b50c9a029b7ec10ad0c4d6eb598d5c7938a9fbf413a9a245ca->leave($__internal_10c2e7e22ab041b50c9a029b7ec10ad0c4d6eb598d5c7938a9fbf413a9a245ca_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "@SonataBlock/Block/block_base.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_base.html.twig");
    }
}
