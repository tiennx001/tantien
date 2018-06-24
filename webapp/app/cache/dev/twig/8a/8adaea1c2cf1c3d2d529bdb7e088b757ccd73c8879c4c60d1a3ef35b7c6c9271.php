<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_c1c4a44bb807f2e23979e76e14a3c55f0692f22c80a21e264f67a7aa644bac71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ffbd89b8fad374e19182cfe67f5cc171d7099785f3d81c456c1accaa442ee9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ffbd89b8fad374e19182cfe67f5cc171d7099785f3d81c456c1accaa442ee9f->enter($__internal_0ffbd89b8fad374e19182cfe67f5cc171d7099785f3d81c456c1accaa442ee9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<div>
    ";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 4
        echo "</div>";
        
        $__internal_0ffbd89b8fad374e19182cfe67f5cc171d7099785f3d81c456c1accaa442ee9f->leave($__internal_0ffbd89b8fad374e19182cfe67f5cc171d7099785f3d81c456c1accaa442ee9f_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f661ad2bd5e62c50c3092bc7c38219a9aab6edd9afb428b38037247118dfe1a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f661ad2bd5e62c50c3092bc7c38219a9aab6edd9afb428b38037247118dfe1a5->enter($__internal_f661ad2bd5e62c50c3092bc7c38219a9aab6edd9afb428b38037247118dfe1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    ";
        
        $__internal_f661ad2bd5e62c50c3092bc7c38219a9aab6edd9afb428b38037247118dfe1a5->leave($__internal_f661ad2bd5e62c50c3092bc7c38219a9aab6edd9afb428b38037247118dfe1a5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  35 => 2,  28 => 4,  26 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    {% block fos_user_content %}
    {% endblock fos_user_content %}
</div>", "FOSUserBundle::layout.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\user-bundle/Resources/views/layout.html.twig");
    }
}
