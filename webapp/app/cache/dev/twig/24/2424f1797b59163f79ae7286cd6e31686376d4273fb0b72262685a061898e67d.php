<?php

/* @SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig */
class __TwigTemplate_46037ebc380a7adac3728da0ce6894a60c09a1a746cbeec610afcf60db8e6a8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_mosaic_background' => array($this, 'block_sonata_mosaic_background'),
            'sonata_mosaic_default_view' => array($this, 'block_sonata_mosaic_default_view'),
            'sonata_mosaic_hover_view' => array($this, 'block_sonata_mosaic_hover_view'),
            'sonata_mosaic_description' => array($this, 'block_sonata_mosaic_description'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd2cdf91d413fcaa83f849f6e07820c64a1f7c167dcc109cc78800d022c937ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd2cdf91d413fcaa83f849f6e07820c64a1f7c167dcc109cc78800d022c937ef->enter($__internal_bd2cdf91d413fcaa83f849f6e07820c64a1f7c167dcc109cc78800d022c937ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig"));

        // line 11
        echo "
<!--
This template can be customized to match your needs. You should only extends the template and used the differents block to customize the view:
    - sonata_mosaic_default_view
    - sonata_mosaic_hover_view
    - sonata_mosaic_description
-->

<tr>
    <td colspan=\"";
        // line 20
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array())) - (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "batch"), "method"))) : (0))), "html", null, true);
        echo "\">
        <div class=\"row\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 23
            echo "                ";
            $context["meta"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getObjectMetadata", array(0 => $context["object"]), "method");
            // line 24
            echo "
                <div class=\"col-xs-6 col-sm-3 mosaic-box sonata-ba-list-field-batch sonata-ba-list-field\" objectId=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => $context["object"]), "method"), "html", null, true);
            echo "\">

                    <div class=\"mosaic-box-outter\">
                        <div class=\"mosaic-inner-box\">
                            ";
            // line 32
            echo "
                            <div class=\"mosaic-inner-box-default\">
                                ";
            // line 34
            $this->displayBlock('sonata_mosaic_background', $context, $blocks);
            // line 37
            echo "                                ";
            $this->displayBlock('sonata_mosaic_default_view', $context, $blocks);
            // line 40
            echo "                            </div>

                            ";
            // line 46
            echo "                            <div class=\"mosaic-inner-box-hover\">
                                ";
            // line 47
            $this->displayBlock('sonata_mosaic_hover_view', $context, $blocks);
            // line 51
            echo "                            </div>
                        </div>

                        ";
            // line 55
            echo "                        ";
            $context["export_formats"] = ((array_key_exists("export_formats", $context)) ? (_twig_default_filter((isset($context["export_formats"]) ? $context["export_formats"] : $this->getContext($context, "export_formats")), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getExportFormats", array()))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getExportFormats", array())));
            // line 56
            echo "
                        <div class=\"mosaic-inner-text\">
                            ";
            // line 58
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))) > 0)) || (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "export"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "export"), "method")) && twig_length_filter($this->env, (isset($context["export_formats"]) ? $context["export_formats"] : $this->getContext($context, "export_formats")))))) {
                // line 59
                echo "                                <input type=\"checkbox\" name=\"idx[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => $context["object"]), "method"), "html", null, true);
                echo "\">
                            ";
            } else {
                // line 61
                echo "                                &nbsp;
                            ";
            }
            // line 63
            echo "
                            ";
            // line 64
            $this->displayBlock('sonata_mosaic_description', $context, $blocks);
            // line 73
            echo "                        </div>
                    </div>
                </div>

                ";
            // line 77
            if ((($this->getAttribute($context["loop"], "index", array()) % 4) == 0)) {
                // line 78
                echo "                    <div class=\"clearfix hidden-xs\"></div>
                ";
            }
            // line 80
            echo "                ";
            if ((($this->getAttribute($context["loop"], "index", array()) % 2) == 0)) {
                // line 81
                echo "                    <div class=\"clearfix visible-xs\"></div>
                ";
            }
            // line 83
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "        </div>
    </td>
</tr>
";
        
        $__internal_bd2cdf91d413fcaa83f849f6e07820c64a1f7c167dcc109cc78800d022c937ef->leave($__internal_bd2cdf91d413fcaa83f849f6e07820c64a1f7c167dcc109cc78800d022c937ef_prof);

    }

    // line 34
    public function block_sonata_mosaic_background($context, array $blocks = array())
    {
        $__internal_c9e91727605855320cf5e407c975eb0a42b34662470bba80b2f359a47daab4a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e91727605855320cf5e407c975eb0a42b34662470bba80b2f359a47daab4a8->enter($__internal_c9e91727605855320cf5e407c975eb0a42b34662470bba80b2f359a47daab4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_background"));

        // line 35
        echo "                                    <img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "image", array()), "html", null, true);
        echo "\" alt=\"\" />
                                ";
        
        $__internal_c9e91727605855320cf5e407c975eb0a42b34662470bba80b2f359a47daab4a8->leave($__internal_c9e91727605855320cf5e407c975eb0a42b34662470bba80b2f359a47daab4a8_prof);

    }

    // line 37
    public function block_sonata_mosaic_default_view($context, array $blocks = array())
    {
        $__internal_1936f7df11a7cc2ef5f3f39db223028617be3f3de6fe9d8e0f96cd534dad6362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1936f7df11a7cc2ef5f3f39db223028617be3f3de6fe9d8e0f96cd534dad6362->enter($__internal_1936f7df11a7cc2ef5f3f39db223028617be3f3de6fe9d8e0f96cd534dad6362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_default_view"));

        // line 38
        echo "                                    <span class=\"mosaic-box-label label label-primary pull-right\">#";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "</span>
                                ";
        
        $__internal_1936f7df11a7cc2ef5f3f39db223028617be3f3de6fe9d8e0f96cd534dad6362->leave($__internal_1936f7df11a7cc2ef5f3f39db223028617be3f3de6fe9d8e0f96cd534dad6362_prof);

    }

    // line 47
    public function block_sonata_mosaic_hover_view($context, array $blocks = array())
    {
        $__internal_b238269d3b5ea567559116da04b1024fecd9cda32c83c912b002a38e89ac1aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b238269d3b5ea567559116da04b1024fecd9cda32c83c912b002a38e89ac1aff->enter($__internal_b238269d3b5ea567559116da04b1024fecd9cda32c83c912b002a38e89ac1aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_hover_view"));

        // line 48
        echo "                                    <span class=\"mosaic-box-label label label-primary pull-right\">#";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "</span>
                                    ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "description", array()), "html", null, true);
        echo "
                                ";
        
        $__internal_b238269d3b5ea567559116da04b1024fecd9cda32c83c912b002a38e89ac1aff->leave($__internal_b238269d3b5ea567559116da04b1024fecd9cda32c83c912b002a38e89ac1aff_prof);

    }

    // line 64
    public function block_sonata_mosaic_description($context, array $blocks = array())
    {
        $__internal_d03955bd5da7ed6497e1e993b76cb861a95204940ee624fdb30695231ed09e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d03955bd5da7ed6497e1e993b76cb861a95204940ee624fdb30695231ed09e89->enter($__internal_d03955bd5da7ed6497e1e993b76cb861a95204940ee624fdb30695231ed09e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_description"));

        // line 65
        echo "                                ";
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method"))) {
            // line 66
            echo "                                    <a class=\"mosaic-inner-link\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "edit", 1 => array("id" => $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getUrlsafeIdentifier((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin"))))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "title", array()), 40), "html", null, true);
            echo "</a>
                                ";
        } elseif (($this->getAttribute(        // line 67
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "show", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "show"), "method"))) {
            // line 68
            echo "                                    <a class=\"mosaic-inner-link\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "show", 1 => array("id" => $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getUrlsafeIdentifier((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin"))))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "title", array()), 40), "html", null, true);
            echo "</a>
                                ";
        } else {
            // line 70
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "title", array()), 40), "html", null, true);
            echo "
                                ";
        }
        // line 72
        echo "                            ";
        
        $__internal_d03955bd5da7ed6497e1e993b76cb861a95204940ee624fdb30695231ed09e89->leave($__internal_d03955bd5da7ed6497e1e993b76cb861a95204940ee624fdb30695231ed09e89_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 72,  240 => 70,  232 => 68,  230 => 67,  223 => 66,  220 => 65,  214 => 64,  205 => 49,  200 => 48,  194 => 47,  184 => 38,  178 => 37,  168 => 35,  162 => 34,  152 => 84,  138 => 83,  134 => 81,  131 => 80,  127 => 78,  125 => 77,  119 => 73,  117 => 64,  114 => 63,  110 => 61,  104 => 59,  102 => 58,  98 => 56,  95 => 55,  90 => 51,  88 => 47,  85 => 46,  81 => 40,  78 => 37,  76 => 34,  72 => 32,  65 => 25,  62 => 24,  59 => 23,  42 => 22,  37 => 20,  26 => 11,);
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

<!--
This template can be customized to match your needs. You should only extends the template and used the differents block to customize the view:
    - sonata_mosaic_default_view
    - sonata_mosaic_hover_view
    - sonata_mosaic_description
-->

<tr>
    <td colspan=\"{{ admin.list.elements|length - (app.request.isXmlHttpRequest ? (admin.list.has('_action') + admin.list.has('batch')) : 0) }}\">
        <div class=\"row\">
            {% for object in admin.datagrid.results %}
                {% set meta = admin.getObjectMetadata(object) %}

                <div class=\"col-xs-6 col-sm-3 mosaic-box sonata-ba-list-field-batch sonata-ba-list-field\" objectId=\"{{ admin.id(object) }}\">

                    <div class=\"mosaic-box-outter\">
                        <div class=\"mosaic-inner-box\">
                            {#
                                This box will be display when the mouse is not on the box
                            #}

                            <div class=\"mosaic-inner-box-default\">
                                {% block sonata_mosaic_background %}
                                    <img src=\"{{ meta.image }}\" alt=\"\" />
                                {% endblock %}
                                {% block sonata_mosaic_default_view %}
                                    <span class=\"mosaic-box-label label label-primary pull-right\">#{{ admin.id(object) }}</span>
                                {% endblock %}
                            </div>

                            {#
                                This box will be display when the mouse is on the box
                                You can add more description
                            #}
                            <div class=\"mosaic-inner-box-hover\">
                                {% block sonata_mosaic_hover_view %}
                                    <span class=\"mosaic-box-label label label-primary pull-right\">#{{ admin.id(object) }}</span>
                                    {{ meta.description }}
                                {% endblock %}
                            </div>
                        </div>

                        {# NEXT_MAJOR : remove this assignment #}
                        {% set export_formats = export_formats|default(admin.getExportFormats) %}

                        <div class=\"mosaic-inner-text\">
                            {% if (admin.hasRoute('batch') and batchactions|length > 0) or (admin.hasRoute('export') and admin.hasAccess('export') and export_formats|length) %}
                                <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
                            {% else %}
                                &nbsp;
                            {% endif %}

                            {% block sonata_mosaic_description %}
                                {% if admin.hasAccess('edit', object) and admin.hasRoute('edit') %}
                                    <a class=\"mosaic-inner-link\" href=\"{{ admin.generateUrl('edit', {'id' : object|sonata_urlsafeid(admin) }) }}\">{{ meta.title|truncate(40) }}</a>
                                {% elseif admin.hasAccess('show', object) and admin.hasRoute('show') %}
                                    <a class=\"mosaic-inner-link\" href=\"{{ admin.generateUrl('show', {'id' : object|sonata_urlsafeid(admin) }) }}\">{{ meta.title|truncate(40) }}</a>
                                {% else %}
                                    {{ meta.title|truncate(40) }}
                                {% endif %}
                            {% endblock %}
                        </div>
                    </div>
                </div>

                {% if loop.index % 4 == 0 %}
                    <div class=\"clearfix hidden-xs\"></div>
                {% endif %}
                {% if loop.index % 2 == 0 %}
                    <div class=\"clearfix visible-xs\"></div>
                {% endif %}
            {% endfor %}
        </div>
    </td>
</tr>
", "@SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_outer_rows_mosaic.html.twig");
    }
}