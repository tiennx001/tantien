<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig */
class __TwigTemplate_48c7c171a111b79c793663917d3a8d4ed237248a1e8c4091178ac900fa3ed3db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        if ( !$this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array()), "hasassociationadmin", array())) {
            // line 12
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 13
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array())), "html", null, true);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 16
            echo "
    <div id=\"field_container_";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"field-container\">
        <span id=\"field_widget_";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" >
            ";
            // line 19
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit", array()) == "inline")) {
                // line 20
                echo "                ";
                if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "inline", array()) == "table")) {
                    // line 21
                    echo "                    ";
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array())) > 0)) {
                        // line 22
                        echo "                        ";
                        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_inline_table.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", 22)->display($context);
                        // line 23
                        echo "                    ";
                    }
                    // line 24
                    echo "                ";
                } elseif ((twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array())) > 0)) {
                    // line 25
                    echo "                    ";
                    $context["associationAdmin"] = $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array()), "associationadmin", array());
                    // line 26
                    echo "                    ";
                    $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_inline_tabs.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", 26)->display($context);
                    // line 27
                    echo "
                ";
                }
                // line 29
                echo "            ";
            } else {
                // line 30
                echo "                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
                echo "
            ";
            }
            // line 32
            echo "
        </span>

        ";
            // line 35
            $context["display_create_button"] = ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array()), "associationadmin", array()), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute(            // line 36
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "CREATE"), "method")) &&             // line 37
(isset($context["btn_add"]) ? $context["btn_add"] : null)) && ( !$this->getAttribute($this->getAttribute($this->getAttribute(            // line 39
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "limit", array(), "any", true, true) || (twig_length_filter($this->env, $this->getAttribute(            // line 40
(isset($context["form"]) ? $context["form"] : null), "children", array())) < $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array()), "options", array()), "limit", array()))));
            // line 42
            echo "
        ";
            // line 43
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit", array()) == "inline")) {
                // line 44
                echo "
            ";
                // line 45
                if ((isset($context["display_create_button"]) ? $context["display_create_button"] : null)) {
                    // line 46
                    echo "                <span id=\"field_actions_";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "\" >
                    <a
                        href=\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute(                    // line 50
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array()), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                    // line 51
                    echo "\"
                        onclick=\"return start_field_retrieve_";
                    // line 52
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"";
                    // line 54
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "\"
                    >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                    // line 57
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "
                    </a>
                </span>
            ";
                }
                // line 61
                echo "
            ";
                // line 63
                echo "            ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "sortable", array(), "any", true, true)) {
                    // line 64
                    echo "                ";
                    if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "inline", array()) == "table")) {
                        // line 65
                        echo "                    ";
                        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_sortable_script_table.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", 65)->display($context);
                        // line 66
                        echo "                ";
                    } else {
                        // line 67
                        echo "                    ";
                        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_sortable_script_tabs.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", 67)->display($context);
                        // line 68
                        echo "                ";
                    }
                    // line 69
                    echo "            ";
                }
                // line 70
                echo "
            ";
                // line 72
                echo "            ";
                $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", 72)->display($context);
                // line 73
                echo "
        ";
            } else {
                // line 75
                echo "            <span id=\"field_actions_";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\" >
                ";
                // line 76
                if ((isset($context["display_create_button"]) ? $context["display_create_button"] : null)) {
                    // line 77
                    echo "                    <a
                        href=\"";
                    // line 78
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute(                    // line 80
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array()), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                    // line 81
                    echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                    // line 82
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"";
                    // line 84
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "\"
                    >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                    // line 87
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 90
                echo "            </span>

            ";
                // line 92
                $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", 92)->display($context);
                // line 93
                echo "
            ";
                // line 94
                $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", 94)->display($context);
                // line 95
                echo "        ";
            }
            // line 96
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 96,  212 => 95,  210 => 94,  207 => 93,  205 => 92,  201 => 90,  195 => 87,  189 => 84,  184 => 82,  181 => 81,  179 => 80,  178 => 78,  175 => 77,  173 => 76,  168 => 75,  164 => 73,  161 => 72,  158 => 70,  155 => 69,  152 => 68,  149 => 67,  146 => 66,  143 => 65,  140 => 64,  137 => 63,  134 => 61,  127 => 57,  121 => 54,  116 => 52,  113 => 51,  111 => 50,  110 => 48,  104 => 46,  102 => 45,  99 => 44,  97 => 43,  94 => 42,  92 => 40,  91 => 39,  90 => 37,  89 => 36,  88 => 35,  83 => 32,  77 => 30,  74 => 29,  70 => 27,  67 => 26,  64 => 25,  61 => 24,  58 => 23,  55 => 22,  52 => 21,  49 => 20,  47 => 19,  43 => 18,  39 => 17,  36 => 16,  26 => 13,  21 => 12,  19 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\doctrine-orm-admin-bundle/Resources/views/CRUD/edit_orm_one_to_many.html.twig");
    }
}
