<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_20079d5a9b88cf25d195240ae30265e8411cdeada4522eac9e5eaabde4059af5 extends Twig_Template
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
        $__internal_e279c1c868f6061cf6e594909aa88fef2c2bded455d2d8fc8fa375e1803ad001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e279c1c868f6061cf6e594909aa88fef2c2bded455d2d8fc8fa375e1803ad001->enter($__internal_e279c1c868f6061cf6e594909aa88fef2c2bded455d2d8fc8fa375e1803ad001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<div>
    ";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 4
        echo "</div>";
        
        $__internal_e279c1c868f6061cf6e594909aa88fef2c2bded455d2d8fc8fa375e1803ad001->leave($__internal_e279c1c868f6061cf6e594909aa88fef2c2bded455d2d8fc8fa375e1803ad001_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b8b96389f4642e8d68b52942f04c43e36ebff2e4a8a3d0aa868c3ce151127d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8b96389f4642e8d68b52942f04c43e36ebff2e4a8a3d0aa868c3ce151127d83->enter($__internal_b8b96389f4642e8d68b52942f04c43e36ebff2e4a8a3d0aa868c3ce151127d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    ";
        
        $__internal_b8b96389f4642e8d68b52942f04c43e36ebff2e4a8a3d0aa868c3ce151127d83->leave($__internal_b8b96389f4642e8d68b52942f04c43e36ebff2e4a8a3d0aa868c3ce151127d83_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
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
</div>", "@FOSUser/layout.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\user-bundle\\Resources\\views\\layout.html.twig");
    }
}
