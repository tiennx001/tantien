<?php

/* @SonataAdmin/CRUD/list_array.html.twig */
class __TwigTemplate_75267f053d882b1e5f133dbb78f3104708caf7a5d893ec06ff62826840d7670f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 22
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_array.html.twig", 22);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13bdcf4e55bf38d9c82c1062154493007e2c2415e0828dfd34afa14fff9d2f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13bdcf4e55bf38d9c82c1062154493007e2c2415e0828dfd34afa14fff9d2f8d->enter($__internal_13bdcf4e55bf38d9c82c1062154493007e2c2415e0828dfd34afa14fff9d2f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_array.html.twig"));

        // line 11
        $context["list"] = $this;
        // line 22
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13bdcf4e55bf38d9c82c1062154493007e2c2415e0828dfd34afa14fff9d2f8d->leave($__internal_13bdcf4e55bf38d9c82c1062154493007e2c2415e0828dfd34afa14fff9d2f8d_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_642d443143587f7716da46a1cf61c7b65e9463a3549cb61bd1ef76ca35f2bf55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_642d443143587f7716da46a1cf61c7b65e9463a3549cb61bd1ef76ca35f2bf55->enter($__internal_642d443143587f7716da46a1cf61c7b65e9463a3549cb61bd1ef76ca35f2bf55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 25
        echo "    ";
        echo $context["list"]->getrender_array((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        echo "
";
        
        $__internal_642d443143587f7716da46a1cf61c7b65e9463a3549cb61bd1ef76ca35f2bf55->leave($__internal_642d443143587f7716da46a1cf61c7b65e9463a3549cb61bd1ef76ca35f2bf55_prof);

    }

    // line 12
    public function getrender_array($__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_fe7dfc5f9131a00c363d80e7f5293293358e1bf7dbce46cbc60201f189d1e1e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_fe7dfc5f9131a00c363d80e7f5293293358e1bf7dbce46cbc60201f189d1e1e6->enter($__internal_fe7dfc5f9131a00c363d80e7f5293293358e1bf7dbce46cbc60201f189d1e1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

            // line 13
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 14
                echo "        ";
                if (twig_test_iterable($context["val"])) {
                    // line 15
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo $context["list"]->getrender_array($context["val"]);
                    echo "}]
        ";
                } else {
                    // line 17
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "]
        ";
                }
                // line 19
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_fe7dfc5f9131a00c363d80e7f5293293358e1bf7dbce46cbc60201f189d1e1e6->leave($__internal_fe7dfc5f9131a00c363d80e7f5293293358e1bf7dbce46cbc60201f189d1e1e6_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 19,  83 => 17,  75 => 15,  72 => 14,  67 => 13,  52 => 12,  42 => 25,  36 => 24,  29 => 22,  27 => 11,  18 => 22,);
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
{% import _self as list %}
{%  macro render_array(value) %}
    {% for key, val in value %}
        {% if val is iterable %}
            [{{ key }} => {{ list.render_array(val) }}}]
        {%  else %}
            [{{ key }} => {{ val }}]
        {%  endif %}
    {% endfor %}
{% endmacro %}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {{ list.render_array(value) }}
{% endblock %}
", "@SonataAdmin/CRUD/list_array.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_array.html.twig");
    }
}
