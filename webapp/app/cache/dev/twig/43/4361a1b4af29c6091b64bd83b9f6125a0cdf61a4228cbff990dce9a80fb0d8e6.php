<?php

/* base.html.twig */
class __TwigTemplate_30aaf29b2e4e6e16136044820bb4b95e6900cb3378dc52993f708da6df751672 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c97d7c31a77078390ab51d75a60ea13e09aa1d868037bec657688fcbf1d06a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c97d7c31a77078390ab51d75a60ea13e09aa1d868037bec657688fcbf1d06a0->enter($__internal_0c97d7c31a77078390ab51d75a60ea13e09aa1d868037bec657688fcbf1d06a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0c97d7c31a77078390ab51d75a60ea13e09aa1d868037bec657688fcbf1d06a0->leave($__internal_0c97d7c31a77078390ab51d75a60ea13e09aa1d868037bec657688fcbf1d06a0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_df9710b688e11935e70ea606205a0e090244a715858b17d22e6f336bcd60bf64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df9710b688e11935e70ea606205a0e090244a715858b17d22e6f336bcd60bf64->enter($__internal_df9710b688e11935e70ea606205a0e090244a715858b17d22e6f336bcd60bf64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_df9710b688e11935e70ea606205a0e090244a715858b17d22e6f336bcd60bf64->leave($__internal_df9710b688e11935e70ea606205a0e090244a715858b17d22e6f336bcd60bf64_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_25a33d1d93d35c3f4ac89616234442e0406c481a7f26dbcafd00c18abb4d0b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a33d1d93d35c3f4ac89616234442e0406c481a7f26dbcafd00c18abb4d0b4f->enter($__internal_25a33d1d93d35c3f4ac89616234442e0406c481a7f26dbcafd00c18abb4d0b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_25a33d1d93d35c3f4ac89616234442e0406c481a7f26dbcafd00c18abb4d0b4f->leave($__internal_25a33d1d93d35c3f4ac89616234442e0406c481a7f26dbcafd00c18abb4d0b4f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3caa40ac2ebaefe1043610f80118ff0cf13d40e55b53d87d4085813f19dabf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3caa40ac2ebaefe1043610f80118ff0cf13d40e55b53d87d4085813f19dabf0->enter($__internal_e3caa40ac2ebaefe1043610f80118ff0cf13d40e55b53d87d4085813f19dabf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e3caa40ac2ebaefe1043610f80118ff0cf13d40e55b53d87d4085813f19dabf0->leave($__internal_e3caa40ac2ebaefe1043610f80118ff0cf13d40e55b53d87d4085813f19dabf0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8bc9afcd25ae8e19cc2d2352bb317c0bbf1f778b181b80ceb4d256e86db953ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bc9afcd25ae8e19cc2d2352bb317c0bbf1f778b181b80ceb4d256e86db953ff->enter($__internal_8bc9afcd25ae8e19cc2d2352bb317c0bbf1f778b181b80ceb4d256e86db953ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8bc9afcd25ae8e19cc2d2352bb317c0bbf1f778b181b80ceb4d256e86db953ff->leave($__internal_8bc9afcd25ae8e19cc2d2352bb317c0bbf1f778b181b80ceb4d256e86db953ff_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "D:\\Projects\\yourhome_v1\\app\\Resources\\views\\base.html.twig");
    }
}
