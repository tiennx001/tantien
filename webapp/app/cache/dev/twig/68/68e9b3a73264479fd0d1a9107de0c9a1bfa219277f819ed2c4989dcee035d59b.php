<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_989cecc31bbf650e6d04ffcc623e06129dac41d939aad7cf1740793fe7ad2796 extends Twig_Template
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
        $__internal_dda0987cc6811853f29b3654300a42512f76f7bb14c077a67dd0c3457aec5278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda0987cc6811853f29b3654300a42512f76f7bb14c077a67dd0c3457aec5278->enter($__internal_dda0987cc6811853f29b3654300a42512f76f7bb14c077a67dd0c3457aec5278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_dda0987cc6811853f29b3654300a42512f76f7bb14c077a67dd0c3457aec5278->leave($__internal_dda0987cc6811853f29b3654300a42512f76f7bb14c077a67dd0c3457aec5278_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_4e6314fcd6fdf928ed4d96399d50a681b3dbc8502550c7893c5074249a4a79a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e6314fcd6fdf928ed4d96399d50a681b3dbc8502550c7893c5074249a4a79a8->enter($__internal_4e6314fcd6fdf928ed4d96399d50a681b3dbc8502550c7893c5074249a4a79a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_4e6314fcd6fdf928ed4d96399d50a681b3dbc8502550c7893c5074249a4a79a8->leave($__internal_4e6314fcd6fdf928ed4d96399d50a681b3dbc8502550c7893c5074249a4a79a8_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
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
", "SonataBlockBundle:Block:block_base.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
