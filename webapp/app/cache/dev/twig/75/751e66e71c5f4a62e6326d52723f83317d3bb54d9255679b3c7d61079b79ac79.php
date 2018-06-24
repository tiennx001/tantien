<?php

/* @SonataBlock/Block/block_core_action.html.twig */
class __TwigTemplate_9de2e0ad5ed1209dcd7b90b15b589e732505b40d85d15dd1a814ad0d249207eb extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0093904c6d156bf81b5aefefc47e43f508d0e298f30e13961fb6c1eac7f94544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0093904c6d156bf81b5aefefc47e43f508d0e298f30e13961fb6c1eac7f94544->enter($__internal_0093904c6d156bf81b5aefefc47e43f508d0e298f30e13961fb6c1eac7f94544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0093904c6d156bf81b5aefefc47e43f508d0e298f30e13961fb6c1eac7f94544->leave($__internal_0093904c6d156bf81b5aefefc47e43f508d0e298f30e13961fb6c1eac7f94544_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_97e1689a74a465f4a020ac6cdab99fe96b6be43a58d577cecd0b9440158e862d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e1689a74a465f4a020ac6cdab99fe96b6be43a58d577cecd0b9440158e862d->enter($__internal_97e1689a74a465f4a020ac6cdab99fe96b6be43a58d577cecd0b9440158e862d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_97e1689a74a465f4a020ac6cdab99fe96b6be43a58d577cecd0b9440158e862d->leave($__internal_97e1689a74a465f4a020ac6cdab99fe96b6be43a58d577cecd0b9440158e862d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_action.html.twig";
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
", "@SonataBlock/Block/block_core_action.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_core_action.html.twig");
    }
}
