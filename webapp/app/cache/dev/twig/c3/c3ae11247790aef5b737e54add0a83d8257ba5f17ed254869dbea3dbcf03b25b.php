<?php

/* @SonataAdmin/empty_layout.html.twig */
class __TwigTemplate_a6cc126fd8a826de89769773b6b6dfd8070eaf3293c69ee25979f05fa2977b39 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "@SonataAdmin/empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_977ae271013c0b4e053c0339939516f1e0ad9165863dbfda482432f9ff66b332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_977ae271013c0b4e053c0339939516f1e0ad9165863dbfda482432f9ff66b332->enter($__internal_977ae271013c0b4e053c0339939516f1e0ad9165863dbfda482432f9ff66b332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_977ae271013c0b4e053c0339939516f1e0ad9165863dbfda482432f9ff66b332->leave($__internal_977ae271013c0b4e053c0339939516f1e0ad9165863dbfda482432f9ff66b332_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_d3c7616c303742d7806cb6c2955eaae169108e05e8f3b9766735c20f85adf025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c7616c303742d7806cb6c2955eaae169108e05e8f3b9766735c20f85adf025->enter($__internal_d3c7616c303742d7806cb6c2955eaae169108e05e8f3b9766735c20f85adf025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_d3c7616c303742d7806cb6c2955eaae169108e05e8f3b9766735c20f85adf025->leave($__internal_d3c7616c303742d7806cb6c2955eaae169108e05e8f3b9766735c20f85adf025_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_8252b36e9a113d4437ba36dea6983d74c7c21bc9ceda9180e9f9fc40e55a0d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8252b36e9a113d4437ba36dea6983d74c7c21bc9ceda9180e9f9fc40e55a0d12->enter($__internal_8252b36e9a113d4437ba36dea6983d74c7c21bc9ceda9180e9f9fc40e55a0d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_8252b36e9a113d4437ba36dea6983d74c7c21bc9ceda9180e9f9fc40e55a0d12->leave($__internal_8252b36e9a113d4437ba36dea6983d74c7c21bc9ceda9180e9f9fc40e55a0d12_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_05e04bc02539eb0e319333dbf8b8cb07d0648400a7c85d786469438a6916fe6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05e04bc02539eb0e319333dbf8b8cb07d0648400a7c85d786469438a6916fe6a->enter($__internal_05e04bc02539eb0e319333dbf8b8cb07d0648400a7c85d786469438a6916fe6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_05e04bc02539eb0e319333dbf8b8cb07d0648400a7c85d786469438a6916fe6a->leave($__internal_05e04bc02539eb0e319333dbf8b8cb07d0648400a7c85d786469438a6916fe6a_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_4217369f35e941705bfa896ae6f169bdc2d9226f85877c4c2c2c626ed031c056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4217369f35e941705bfa896ae6f169bdc2d9226f85877c4c2c2c626ed031c056->enter($__internal_4217369f35e941705bfa896ae6f169bdc2d9226f85877c4c2c2c626ed031c056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_4217369f35e941705bfa896ae6f169bdc2d9226f85877c4c2c2c626ed031c056->leave($__internal_4217369f35e941705bfa896ae6f169bdc2d9226f85877c4c2c2c626ed031c056_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fcbf67f5ebcfa3275bee36c8d6cef87a67de8bd69f93895ee88bd88c7c04b85b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcbf67f5ebcfa3275bee36c8d6cef87a67de8bd69f93895ee88bd88c7c04b85b->enter($__internal_fcbf67f5ebcfa3275bee36c8d6cef87a67de8bd69f93895ee88bd88c7c04b85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_fcbf67f5ebcfa3275bee36c8d6cef87a67de8bd69f93895ee88bd88c7c04b85b->leave($__internal_fcbf67f5ebcfa3275bee36c8d6cef87a67de8bd69f93895ee88bd88c7c04b85b_prof);

    }

    // line 30
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_54b8fe4e18defcb72b60a84fea1385f0b1228944ab0f5a9d9b97b75905a13ee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b8fe4e18defcb72b60a84fea1385f0b1228944ab0f5a9d9b97b75905a13ee1->enter($__internal_54b8fe4e18defcb72b60a84fea1385f0b1228944ab0f5a9d9b97b75905a13ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 31
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_54b8fe4e18defcb72b60a84fea1385f0b1228944ab0f5a9d9b97b75905a13ee1->leave($__internal_54b8fe4e18defcb72b60a84fea1385f0b1228944ab0f5a9d9b97b75905a13ee1_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_663d9614de06664dc780affab8d92992e7707bf4255b6c9c626766b4f7866936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663d9614de06664dc780affab8d92992e7707bf4255b6c9c626766b4f7866936->enter($__internal_663d9614de06664dc780affab8d92992e7707bf4255b6c9c626766b4f7866936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 32
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_663d9614de06664dc780affab8d92992e7707bf4255b6c9c626766b4f7866936->leave($__internal_663d9614de06664dc780affab8d92992e7707bf4255b6c9c626766b4f7866936_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/empty_layout.html.twig";
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
", "@SonataAdmin/empty_layout.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\empty_layout.html.twig");
    }
}
