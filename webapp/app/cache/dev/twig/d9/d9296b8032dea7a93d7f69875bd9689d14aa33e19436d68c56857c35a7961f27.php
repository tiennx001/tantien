<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_78f3e08069e8a3d5d59b2d89cace4349a18b315b9b6e52f7a0c35bb7431e6df9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle:Profile:action.html.twig", "FOSUserBundle:Profile:show.html.twig", 12);
        $this->blocks = array(
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b33b84c9ebc7d8293ea2b533cbeedad3bea9835ab30dae36811b07a54bd4a669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b33b84c9ebc7d8293ea2b533cbeedad3bea9835ab30dae36811b07a54bd4a669->enter($__internal_b33b84c9ebc7d8293ea2b533cbeedad3bea9835ab30dae36811b07a54bd4a669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b33b84c9ebc7d8293ea2b533cbeedad3bea9835ab30dae36811b07a54bd4a669->leave($__internal_b33b84c9ebc7d8293ea2b533cbeedad3bea9835ab30dae36811b07a54bd4a669_prof);

    }

    // line 14
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_fd03b66b19ef838312855f8b369711a211118af966c61d55a8aa8522db38b953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd03b66b19ef838312855f8b369711a211118af966c61d55a8aa8522db38b953->enter($__internal_fd03b66b19ef838312855f8b369711a211118af966c61d55a8aa8522db38b953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

        // line 15
        echo "    ";
        echo "<div class='alert alert-default alert-info'>
    <strong>This is the user profile template. Feel free to override it.</strong>
    <div>This file can be found in <code>{$this->getTemplateName()}</code>.</div>
</div>";        // line 16
        echo "
    <div class=\"row row-fluid\">
        ";
        // line 18
        $context["has_center"] = false;
        // line 19
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 20
            echo "            ";
            if (($this->getAttribute($context["block"], "position", array()) == "center")) {
                // line 21
                echo "                ";
                $context["has_center"] = true;
                // line 22
                echo "            ";
            }
            // line 23
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
        <div class=\"";
        // line 25
        if ((isset($context["has_center"]) ? $context["has_center"] : $this->getContext($context, "has_center"))) {
            echo "span4 col-lg-4";
        } else {
            echo "span6 col-lg-6";
        }
        echo "\">
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 27
            echo "                ";
            if (($this->getAttribute($context["block"], "position", array()) == "left")) {
                // line 28
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                echo "
                ";
            }
            // line 30
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </div>

        ";
        // line 33
        if ((isset($context["has_center"]) ? $context["has_center"] : $this->getContext($context, "has_center"))) {
            // line 34
            echo "            <div class=\"span4 col-lg-4\">
                ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 36
                echo "                    ";
                if (($this->getAttribute($context["block"], "position", array()) == "center")) {
                    // line 37
                    echo "                        ";
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                    echo "
                    ";
                }
                // line 39
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "            </div>
        ";
        }
        // line 42
        echo "
        <div class=\"";
        // line 43
        if ((isset($context["has_center"]) ? $context["has_center"] : $this->getContext($context, "has_center"))) {
            echo "span4 col-lg-4";
        } else {
            echo "span6 col-lg-6";
        }
        echo "\">
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 45
            echo "                ";
            if (($this->getAttribute($context["block"], "position", array()) == "right")) {
                // line 46
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                echo "
                ";
            }
            // line 48
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </div>
    </div>
";
        
        $__internal_fd03b66b19ef838312855f8b369711a211118af966c61d55a8aa8522db38b953->leave($__internal_fd03b66b19ef838312855f8b369711a211118af966c61d55a8aa8522db38b953_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 49,  157 => 48,  151 => 46,  148 => 45,  144 => 44,  136 => 43,  133 => 42,  129 => 40,  123 => 39,  117 => 37,  114 => 36,  110 => 35,  107 => 34,  105 => 33,  101 => 31,  95 => 30,  89 => 28,  86 => 27,  82 => 26,  74 => 25,  71 => 24,  65 => 23,  62 => 22,  59 => 21,  56 => 20,  51 => 19,  49 => 18,  45 => 16,  40 => 15,  34 => 14,  11 => 12,);
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

{% block sonata_profile_content %}
    {% sonata_template_box 'This is the user profile template. Feel free to override it.' %}

    <div class=\"row row-fluid\">
        {% set has_center = false %}
        {% for block in blocks %}
            {% if block.position == 'center' %}
                {% set has_center = true %}
            {% endif %}
        {% endfor %}

        <div class=\"{% if has_center %}span4 col-lg-4{% else %}span6 col-lg-6{% endif %}\">
            {% for block in blocks %}
                {% if block.position == 'left' %}
                    {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}
                {% endif %}
            {% endfor %}
        </div>

        {% if has_center %}
            <div class=\"span4 col-lg-4\">
                {% for block in blocks %}
                    {% if block.position == 'center' %}
                        {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}
                    {% endif %}
                {% endfor %}
            </div>
        {% endif %}

        <div class=\"{% if has_center %}span4 col-lg-4{% else %}span6 col-lg-6{% endif %}\">
            {% for block in blocks %}
                {% if block.position == 'right' %}
                    {{ sonata_block_render({ 'type': block.type, 'settings': block.settings}) }}
                {% endif %}
            {% endfor %}
        </div>
    </div>
{% endblock %}", "FOSUserBundle:Profile:show.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\user-bundle/Resources/views/Profile/show.html.twig");
    }
}
