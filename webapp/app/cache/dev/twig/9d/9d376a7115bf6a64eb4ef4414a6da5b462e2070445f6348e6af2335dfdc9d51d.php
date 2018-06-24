<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_3746342f3c89727d6198ee0e50cfb56735a955c4c2e7f0cc244f5f985ecbdc33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e354ca0978f6e056c11c8f547b5478312ca0e0575d08197140cb7d9849f1e63d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e354ca0978f6e056c11c8f547b5478312ca0e0575d08197140cb7d9849f1e63d->enter($__internal_e354ca0978f6e056c11c8f547b5478312ca0e0575d08197140cb7d9849f1e63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e354ca0978f6e056c11c8f547b5478312ca0e0575d08197140cb7d9849f1e63d->leave($__internal_e354ca0978f6e056c11c8f547b5478312ca0e0575d08197140cb7d9849f1e63d_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_14ef7d8029541df5bf375afecb5454fb6281eaa8304aec260a57481e0f5b11bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14ef7d8029541df5bf375afecb5454fb6281eaa8304aec260a57481e0f5b11bc->enter($__internal_14ef7d8029541df5bf375afecb5454fb6281eaa8304aec260a57481e0f5b11bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_14ef7d8029541df5bf375afecb5454fb6281eaa8304aec260a57481e0f5b11bc->leave($__internal_14ef7d8029541df5bf375afecb5454fb6281eaa8304aec260a57481e0f5b11bc_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_417143ed24a9c7c3bcb860d7cc0f5b86dd0353d74d989fe25c2b432e7b80e4e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_417143ed24a9c7c3bcb860d7cc0f5b86dd0353d74d989fe25c2b432e7b80e4e7->enter($__internal_417143ed24a9c7c3bcb860d7cc0f5b86dd0353d74d989fe25c2b432e7b80e4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_417143ed24a9c7c3bcb860d7cc0f5b86dd0353d74d989fe25c2b432e7b80e4e7->leave($__internal_417143ed24a9c7c3bcb860d7cc0f5b86dd0353d74d989fe25c2b432e7b80e4e7_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_cb93e83e714955c1be84e617dc1181eabbe368c217e805624ddb0c66f1c1867c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb93e83e714955c1be84e617dc1181eabbe368c217e805624ddb0c66f1c1867c->enter($__internal_cb93e83e714955c1be84e617dc1181eabbe368c217e805624ddb0c66f1c1867c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_cb93e83e714955c1be84e617dc1181eabbe368c217e805624ddb0c66f1c1867c->leave($__internal_cb93e83e714955c1be84e617dc1181eabbe368c217e805624ddb0c66f1c1867c_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_df6ae93536ca474ff6d11bed1dbfb717a0350867a41b2237dbc0493a2a066854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df6ae93536ca474ff6d11bed1dbfb717a0350867a41b2237dbc0493a2a066854->enter($__internal_df6ae93536ca474ff6d11bed1dbfb717a0350867a41b2237dbc0493a2a066854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_df6ae93536ca474ff6d11bed1dbfb717a0350867a41b2237dbc0493a2a066854->leave($__internal_df6ae93536ca474ff6d11bed1dbfb717a0350867a41b2237dbc0493a2a066854_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c6b31cf9940925ebffa9701df05695b495771d7bb706e22f4a0105d6da954c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b31cf9940925ebffa9701df05695b495771d7bb706e22f4a0105d6da954c4e->enter($__internal_c6b31cf9940925ebffa9701df05695b495771d7bb706e22f4a0105d6da954c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>
";
        
        $__internal_c6b31cf9940925ebffa9701df05695b495771d7bb706e22f4a0105d6da954c4e->leave($__internal_c6b31cf9940925ebffa9701df05695b495771d7bb706e22f4a0105d6da954c4e_prof);

    }

    // line 30
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_36036efbadbb6ba709cdd9fb3a5a19ea91ca6effbe42b62e2ffa1c439dae1258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36036efbadbb6ba709cdd9fb3a5a19ea91ca6effbe42b62e2ffa1c439dae1258->enter($__internal_36036efbadbb6ba709cdd9fb3a5a19ea91ca6effbe42b62e2ffa1c439dae1258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 31
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_36036efbadbb6ba709cdd9fb3a5a19ea91ca6effbe42b62e2ffa1c439dae1258->leave($__internal_36036efbadbb6ba709cdd9fb3a5a19ea91ca6effbe42b62e2ffa1c439dae1258_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_ce1b7b109b59f9a4f4ce08c0494396bf65129224906eac3f2bddb3ddaf000a98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1b7b109b59f9a4f4ce08c0494396bf65129224906eac3f2bddb3ddaf000a98->enter($__internal_ce1b7b109b59f9a4f4ce08c0494396bf65129224906eac3f2bddb3ddaf000a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 32
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_ce1b7b109b59f9a4f4ce08c0494396bf65129224906eac3f2bddb3ddaf000a98->leave($__internal_ce1b7b109b59f9a4f4ce08c0494396bf65129224906eac3f2bddb3ddaf000a98_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 32,  112 => 31,  106 => 30,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
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

{% extends admin_pool.getTemplate('layout') %}

{% block sonata_header %}{% endblock %}
{% block sonata_left_side %}{% endblock %}
{% block sonata_nav %}{% endblock %}
{% block sonata_breadcrumb %}{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>
{% endblock %}

{% block sonata_wrapper %}
    {% block sonata_page_content %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle::empty_layout.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle/Resources/views/empty_layout.html.twig");
    }
}
