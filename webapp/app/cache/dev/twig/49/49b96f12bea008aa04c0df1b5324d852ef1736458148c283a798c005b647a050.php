<?php

/* @SonataBlock/Block/block_core_menu.html.twig */
class __TwigTemplate_99418c0fefdf73eb1f4f3825a5c7f9008c0e93ba35f6dcaa1b0a98589b684796 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee2ed8c260b814272443b8ecfcaa69b9c558474ce756e74af43bba4ac5a1707d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee2ed8c260b814272443b8ecfcaa69b9c558474ce756e74af43bba4ac5a1707d->enter($__internal_ee2ed8c260b814272443b8ecfcaa69b9c558474ce756e74af43bba4ac5a1707d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee2ed8c260b814272443b8ecfcaa69b9c558474ce756e74af43bba4ac5a1707d->leave($__internal_ee2ed8c260b814272443b8ecfcaa69b9c558474ce756e74af43bba4ac5a1707d_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_5dc7e39c4b9dffb31d513cd778174870c3c13dc0592ff5221ac391c55c9ed40d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dc7e39c4b9dffb31d513cd778174870c3c13dc0592ff5221ac391c55c9ed40d->enter($__internal_5dc7e39c4b9dffb31d513cd778174870c3c13dc0592ff5221ac391c55c9ed40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_5dc7e39c4b9dffb31d513cd778174870c3c13dc0592ff5221ac391c55c9ed40d->leave($__internal_5dc7e39c4b9dffb31d513cd778174870c3c13dc0592ff5221ac391c55c9ed40d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_menu.html.twig";
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
", "@SonataBlock/Block/block_core_menu.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_core_menu.html.twig");
    }
}
