<?php

/* SonataUserBundle:Profile:edit_profile.html.twig */
class __TwigTemplate_d68bc053bbfa0bd7ea96b3febc194529de062154b4b18d4660fb5e67ae88c24f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle:Profile:action.html.twig", "SonataUserBundle:Profile:edit_profile.html.twig", 12);
        $this->blocks = array(
            'sonata_profile_title' => array($this, 'block_sonata_profile_title'),
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e78571bc8eb64f12e85a7f96d43a4cfd0ed91b37e97c7831c0cd9ba401cae9e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e78571bc8eb64f12e85a7f96d43a4cfd0ed91b37e97c7831c0cd9ba401cae9e1->enter($__internal_e78571bc8eb64f12e85a7f96d43a4cfd0ed91b37e97c7831c0cd9ba401cae9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Profile:edit_profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e78571bc8eb64f12e85a7f96d43a4cfd0ed91b37e97c7831c0cd9ba401cae9e1->leave($__internal_e78571bc8eb64f12e85a7f96d43a4cfd0ed91b37e97c7831c0cd9ba401cae9e1_prof);

    }

    // line 14
    public function block_sonata_profile_title($context, array $blocks = array())
    {
        $__internal_0b1b74b8c4d9901bc460179afaf70a4b4b481c164f2dfe1e2a57f02127a0da21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b1b74b8c4d9901bc460179afaf70a4b4b481c164f2dfe1e2a57f02127a0da21->enter($__internal_0b1b74b8c4d9901bc460179afaf70a4b4b481c164f2dfe1e2a57f02127a0da21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_account", array(), "SonataUserBundle"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_edit_profile", array(), "SonataUserBundle"), "html", null, true);
        echo "
";
        
        $__internal_0b1b74b8c4d9901bc460179afaf70a4b4b481c164f2dfe1e2a57f02127a0da21->leave($__internal_0b1b74b8c4d9901bc460179afaf70a4b4b481c164f2dfe1e2a57f02127a0da21_prof);

    }

    // line 18
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_e20940ae71f7d26db71ad7cb2cada396678e5cf39bd938b61f1adda4aa87a369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e20940ae71f7d26db71ad7cb2cada396678e5cf39bd938b61f1adda4aa87a369->enter($__internal_e20940ae71f7d26db71ad7cb2cada396678e5cf39bd938b61f1adda4aa87a369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

        // line 19
        echo "    ";
        echo "<div class='alert alert-default alert-info'>
    <strong>This is the user profile edition template. Feel free to override it.</strong>
    <div>This file can be found in <code>{$this->getTemplateName()}</code>.</div>
</div>";        // line 20
        echo "
    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    ";
        // line 23
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this));
        // line 24
        echo "
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_account", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 30
        $this->loadTemplate("SonataUserBundle:Profile:edit_profile_content.html.twig", "SonataUserBundle:Profile:edit_profile.html.twig", 30)->display($context);
        // line 31
        echo "        </div>
    </div>

    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sonata_user_profile_edit_authentication"), array());
        
        $__internal_e20940ae71f7d26db71ad7cb2cada396678e5cf39bd938b61f1adda4aa87a369->leave($__internal_e20940ae71f7d26db71ad7cb2cada396678e5cf39bd938b61f1adda4aa87a369_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:edit_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 34,  87 => 31,  85 => 30,  79 => 27,  74 => 24,  72 => 23,  67 => 21,  64 => 20,  59 => 19,  53 => 18,  41 => 15,  35 => 14,  11 => 12,);
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

{% extends \"SonataUserBundle:Profile:action.html.twig\" %}

{% block sonata_profile_title %}
    {{ \"title_user_account\" | trans({}, 'SonataUserBundle')}} - {{ \"title_user_edit_profile\" | trans({}, 'SonataUserBundle')}}
{% endblock %}

{% block sonata_profile_content %}
    {% sonata_template_box 'This is the user profile edition template. Feel free to override it.' %}

    {{ form_errors(form) }}

    {% form_theme form _self %}

    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">{{ \"title_user_account\" | trans({}, 'SonataUserBundle')}}</h3>
        </div>
        <div class=\"panel-body\">
            {% include \"SonataUserBundle:Profile:edit_profile_content.html.twig\" %}
        </div>
    </div>

    {% render url(\"sonata_user_profile_edit_authentication\") %}
{% endblock %}
", "SonataUserBundle:Profile:edit_profile.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\user-bundle/Resources/views/Profile/edit_profile.html.twig");
    }
}
