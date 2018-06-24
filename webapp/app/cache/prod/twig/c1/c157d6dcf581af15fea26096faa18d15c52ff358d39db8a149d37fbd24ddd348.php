<?php

/* @SonataAdmin/CRUD/list_choice.html.twig */
class __TwigTemplate_63c4287ce43d988a7c2b05baad5e18bbf0be94fff5c9bbb1be7faa90e2a13f8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_choice.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 14
        $context["is_editable"] = (($this->getAttribute($this->getAttribute(        // line 15
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute(        // line 16
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array()), "editable", array())) && $this->getAttribute(        // line 17
(isset($context["admin"]) ? $context["admin"] : null), "hasAccess", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"));
        // line 19
        $context["x_editable_type"] = $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getXEditableType($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "type", array()));
        // line 21
        if (((isset($context["is_editable"]) ? $context["is_editable"] : null) && (isset($context["x_editable_type"]) ? $context["x_editable_type"] : null))) {
        }
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_field_span_attributes($context, array $blocks = array())
    {
        // line 23
        echo "        ";
        ob_start();
        // line 24
        echo "            ";
        $this->displayParentBlock("field_span_attributes", $context, $blocks);
        echo "
            data-source=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getXEditableChoices((isset($context["field_description"]) ? $context["field_description"] : null))), "html", null, true);
        echo "\"
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 27
        echo "    ";
    }

    // line 30
    public function block_field($context, array $blocks = array())
    {
        // line 31
        ob_start();
        // line 32
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "choices", array(), "any", true, true)) {
            // line 33
            echo "        ";
            if ((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "multiple", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array()), "multiple", array()) == true)) && twig_test_iterable((isset($context["value"]) ? $context["value"] : null)))) {
                // line 34
                echo "
            ";
                // line 35
                $context["result"] = "";
                // line 36
                echo "            ";
                $context["delimiter"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "delimiter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "delimiter", array()), ", ")) : (", "));
                // line 37
                echo "
            ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                    // line 39
                    echo "                ";
                    if ( !twig_test_empty((isset($context["result"]) ? $context["result"] : null))) {
                        // line 40
                        echo "                    ";
                        $context["result"] = ((isset($context["result"]) ? $context["result"] : null) . (isset($context["delimiter"]) ? $context["delimiter"] : null));
                        // line 41
                        echo "                ";
                    }
                    // line 42
                    echo "
                ";
                    // line 43
                    if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "choices", array(), "any", false, true), $context["val"], array(), "array", true, true)) {
                        // line 44
                        echo "                    ";
                        if ( !$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) {
                            // line 45
                            echo "                        ";
                            $context["result"] = ((isset($context["result"]) ? $context["result"] : null) . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array()), "choices", array()), $context["val"], array(), "array"));
                            // line 46
                            echo "                    ";
                        } else {
                            // line 47
                            echo "                        ";
                            $context["result"] = ((isset($context["result"]) ? $context["result"] : null) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array()), "choices", array()), $context["val"], array(), "array"), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array()), "catalogue", array())));
                            // line 48
                            echo "                    ";
                        }
                        // line 49
                        echo "                ";
                    } else {
                        // line 50
                        echo "                    ";
                        $context["result"] = ((isset($context["result"]) ? $context["result"] : null) . $context["val"]);
                        // line 51
                        echo "                ";
                    }
                    // line 52
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "
            ";
                // line 54
                $context["value"] = (isset($context["result"]) ? $context["result"] : null);
                // line 55
                echo "
        ";
            } elseif (twig_in_filter(            // line 56
(isset($context["value"]) ? $context["value"] : null), twig_get_array_keys_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array()), "choices", array())))) {
                // line 57
                echo "            ";
                if ( !$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) {
                    // line 58
                    echo "                ";
                    $context["value"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array()), "choices", array()), (isset($context["value"]) ? $context["value"] : null), array(), "array");
                    // line 59
                    echo "            ";
                } else {
                    // line 60
                    echo "                ";
                    $context["value"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array()), "choices", array()), (isset($context["value"]) ? $context["value"] : null), array(), "array"), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array()), "catalogue", array()));
                    // line 61
                    echo "            ";
                }
                // line 62
                echo "        ";
            }
            // line 63
            echo "    ";
        }
        // line 64
        echo "
    ";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 65,  160 => 64,  157 => 63,  154 => 62,  151 => 61,  148 => 60,  145 => 59,  142 => 58,  139 => 57,  137 => 56,  134 => 55,  132 => 54,  129 => 53,  123 => 52,  120 => 51,  117 => 50,  114 => 49,  111 => 48,  108 => 47,  105 => 46,  102 => 45,  99 => 44,  97 => 43,  94 => 42,  91 => 41,  88 => 40,  85 => 39,  81 => 38,  78 => 37,  75 => 36,  73 => 35,  70 => 34,  67 => 33,  64 => 32,  62 => 31,  59 => 30,  55 => 27,  50 => 25,  45 => 24,  42 => 23,  39 => 22,  35 => 12,  32 => 21,  30 => 19,  28 => 17,  27 => 16,  26 => 15,  25 => 14,  19 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataAdmin/CRUD/list_choice.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_choice.html.twig");
    }
}
