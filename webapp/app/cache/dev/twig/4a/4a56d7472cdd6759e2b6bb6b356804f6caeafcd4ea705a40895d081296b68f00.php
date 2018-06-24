<?php

/* SonataUserBundle:Block:account.html.twig */
class __TwigTemplate_4762328d5ea0e7b6600eb9dc534d9a6b10c42e8d77aefc823b318f9bc4db6029 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataUserBundle:Block:account.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_595662eced110c92271f8cf86411b0879bf07cadbdeb52beb0712881c1f1c7eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_595662eced110c92271f8cf86411b0879bf07cadbdeb52beb0712881c1f1c7eb->enter($__internal_595662eced110c92271f8cf86411b0879bf07cadbdeb52beb0712881c1f1c7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Block:account.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_595662eced110c92271f8cf86411b0879bf07cadbdeb52beb0712881c1f1c7eb->leave($__internal_595662eced110c92271f8cf86411b0879bf07cadbdeb52beb0712881c1f1c7eb_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_2916a2ff4523d7af1b1f4daaa2dd5ab423828b00de95a8d0080442483e672c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2916a2ff4523d7af1b1f4daaa2dd5ab423828b00de95a8d0080442483e672c27->enter($__internal_2916a2ff4523d7af1b1f4daaa2dd5ab423828b00de95a8d0080442483e672c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div style=\"display:inline;\">
        ";
        // line 16
        if ((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) {
            // line 17
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "</a> |
            <a href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 20
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_login", array(), "SonataUserBundle"), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_register", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 22
        echo "    </div>
";
        
        $__internal_2916a2ff4523d7af1b1f4daaa2dd5ab423828b00de95a8d0080442483e672c27->leave($__internal_2916a2ff4523d7af1b1f4daaa2dd5ab423828b00de95a8d0080442483e672c27_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Block:account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  58 => 20,  51 => 18,  44 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
    <div style=\"display:inline;\">
        {% if user %}
            <a href=\"{{ path('sonata_user_profile_show') }}\">{{ user.username }}</a> |
            <a href=\"{{ path('fos_user_security_logout') }}\">{{ 'link_logout' | trans({}, \"SonataUserBundle\") }}</a>
        {% else %}
            <a href=\"{{ path('fos_user_security_login') }}\">{{ 'link_login'|trans({}, 'SonataUserBundle') }} / {{ 'link_register'|trans({}, 'SonataUserBundle') }}</a>
        {% endif %}
    </div>
{% endblock %}
", "SonataUserBundle:Block:account.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\user-bundle/Resources/views/Block/account.html.twig");
    }
}
