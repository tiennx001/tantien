<?php

/* @SonataAdmin/Block/block_rss_dashboard.html.twig */
class __TwigTemplate_b725df356f277202a32c49cae638a86643f99e47dad9b9574e70fdfa70034eda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataBlockBundle:Block:block_core_rss.html.twig", "@SonataAdmin/Block/block_rss_dashboard.html.twig", 12);
        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_core_rss.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_038965b50420278cc1070170290fc452749b90896b340446c9ba0d8e09e631c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_038965b50420278cc1070170290fc452749b90896b340446c9ba0d8e09e631c9->enter($__internal_038965b50420278cc1070170290fc452749b90896b340446c9ba0d8e09e631c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Block/block_rss_dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_038965b50420278cc1070170290fc452749b90896b340446c9ba0d8e09e631c9->leave($__internal_038965b50420278cc1070170290fc452749b90896b340446c9ba0d8e09e631c9_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_fd1eae57a5262d34aa077fb6fdf68befa94d733d073d6edf0abfb1f30d683be1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd1eae57a5262d34aa077fb6fdf68befa94d733d073d6edf0abfb1f30d683be1->enter($__internal_fd1eae57a5262d34aa077fb6fdf68befa94d733d073d6edf0abfb1f30d683be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"box box-warning\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title sonata-feed-title\"><i class=\"fa fa-rss\" aria-hidden=\"true\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()), "html", null, true);
        echo "</h3>
        </div>

        <div class=\"sonata-feeds-container list-group\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["feeds"]) ? $context["feeds"] : $this->getContext($context, "feeds")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 22
            echo "                <a class=\"list-group-item\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "link", array()), "html", null, true);
            echo "\" rel=\"nofollow\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "\">
                    <strong>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "</strong>
                    <div>";
            // line 24
            echo $this->getAttribute($context["feed"], "description", array());
            echo "</div>
                </a>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "                <div class=\"list-group-item\">No feeds available.</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
    </div>
";
        
        $__internal_fd1eae57a5262d34aa077fb6fdf68befa94d733d073d6edf0abfb1f30d683be1->leave($__internal_fd1eae57a5262d34aa077fb6fdf68befa94d733d073d6edf0abfb1f30d683be1_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Block/block_rss_dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  75 => 27,  67 => 24,  63 => 23,  56 => 22,  51 => 21,  44 => 17,  40 => 15,  34 => 14,  11 => 12,);
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

{% extends \"SonataBlockBundle:Block:block_core_rss.html.twig\" %}

{% block block %}
    <div class=\"box box-warning\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title sonata-feed-title\"><i class=\"fa fa-rss\" aria-hidden=\"true\"></i> {{ settings.title }}</h3>
        </div>

        <div class=\"sonata-feeds-container list-group\">
            {% for feed in feeds %}
                <a class=\"list-group-item\" href=\"{{ feed.link}}\" rel=\"nofollow\" title=\"{{ feed.title }}\">
                    <strong>{{ feed.title }}</strong>
                    <div>{{ feed.description|raw }}</div>
                </a>
            {% else %}
                <div class=\"list-group-item\">No feeds available.</div>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "@SonataAdmin/Block/block_rss_dashboard.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Block\\block_rss_dashboard.html.twig");
    }
}
