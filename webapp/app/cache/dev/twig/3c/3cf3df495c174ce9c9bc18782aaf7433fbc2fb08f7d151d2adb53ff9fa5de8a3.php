<?php

/* @SonataAdmin/CRUD/base_show.html.twig */
class __TwigTemplate_5dd0eac46b8ce8bd60fba986b4a5d1fac859de0fd3db4647a138e17de170d2d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navbar_title' => array($this, 'block_navbar_title'),
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'show' => array($this, 'block_show'),
            'show_groups' => array($this, 'block_show_groups'),
            'field_row' => array($this, 'block_field_row'),
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/base_show.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3ec99ff6f600fdbe286b3a31b8e3298c3981e7796cb3ebcebf27c9fad8e9810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ec99ff6f600fdbe286b3a31b8e3298c3981e7796cb3ebcebf27c9fad8e9810->enter($__internal_a3ec99ff6f600fdbe286b3a31b8e3298c3981e7796cb3ebcebf27c9fad8e9810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3ec99ff6f600fdbe286b3a31b8e3298c3981e7796cb3ebcebf27c9fad8e9810->leave($__internal_a3ec99ff6f600fdbe286b3a31b8e3298c3981e7796cb3ebcebf27c9fad8e9810_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_822af9eccf28540dd5628b3dd935e269b94da5985fc29fbf83dcc65a51549eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_822af9eccf28540dd5628b3dd935e269b94da5985fc29fbf83dcc65a51549eb0->enter($__internal_822af9eccf28540dd5628b3dd935e269b94da5985fc29fbf83dcc65a51549eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_show", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
        echo "
";
        
        $__internal_822af9eccf28540dd5628b3dd935e269b94da5985fc29fbf83dcc65a51549eb0->leave($__internal_822af9eccf28540dd5628b3dd935e269b94da5985fc29fbf83dcc65a51549eb0_prof);

    }

    // line 18
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_6ba1981e1da6f52bd0212ecceb1615ced3fe3945501399d199b50a3767071d5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba1981e1da6f52bd0212ecceb1615ced3fe3945501399d199b50a3767071d5f->enter($__internal_6ba1981e1da6f52bd0212ecceb1615ced3fe3945501399d199b50a3767071d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 19
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6ba1981e1da6f52bd0212ecceb1615ced3fe3945501399d199b50a3767071d5f->leave($__internal_6ba1981e1da6f52bd0212ecceb1615ced3fe3945501399d199b50a3767071d5f_prof);

    }

    // line 22
    public function block_actions($context, array $blocks = array())
    {
        $__internal_a54bcddd410f87f0f0083b96a5671e3eb2c4c26075cb6de77387a240f94487f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a54bcddd410f87f0f0083b96a5671e3eb2c4c26075cb6de77387a240f94487f7->enter($__internal_a54bcddd410f87f0f0083b96a5671e3eb2c4c26075cb6de77387a240f94487f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 23
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_show.html.twig", 23)->display($context);
        
        $__internal_a54bcddd410f87f0f0083b96a5671e3eb2c4c26075cb6de77387a240f94487f7->leave($__internal_a54bcddd410f87f0f0083b96a5671e3eb2c4c26075cb6de77387a240f94487f7_prof);

    }

    // line 26
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_d3fabf601fdb4bd0acbc8a5e36a8113c60f0fca8abdf48fcba5375baa8bd85ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3fabf601fdb4bd0acbc8a5e36a8113c60f0fca8abdf48fcba5375baa8bd85ef->enter($__internal_d3fabf601fdb4bd0acbc8a5e36a8113c60f0fca8abdf48fcba5375baa8bd85ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 27
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(        // line 29
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        // line 30
        echo "
";
        
        $__internal_d3fabf601fdb4bd0acbc8a5e36a8113c60f0fca8abdf48fcba5375baa8bd85ef->leave($__internal_d3fabf601fdb4bd0acbc8a5e36a8113c60f0fca8abdf48fcba5375baa8bd85ef_prof);

    }

    // line 33
    public function block_show($context, array $blocks = array())
    {
        $__internal_93163684cd9e37c4cdd02210d68a3adf02c91ac3fdcb5ca86df492d27285fc54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93163684cd9e37c4cdd02210d68a3adf02c91ac3fdcb5ca86df492d27285fc54->enter($__internal_93163684cd9e37c4cdd02210d68a3adf02c91ac3fdcb5ca86df492d27285fc54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        // line 34
        echo "    <div class=\"sonata-ba-view\">

        ";
        // line 36
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

        ";
        // line 38
        $context["has_tab"] = (((twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array())) == 1) && ($this->getAttribute(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array())), 0, array(), "array") != "default")) || (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array())) > 1));
        // line 39
        echo "
        ";
        // line 40
        if ((isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab"))) {
            // line 41
            echo "            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array()));
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
            foreach ($context['_seq'] as $context["name"] => $context["show_tab"]) {
                // line 44
                echo "                        <li";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " class=\"active\"";
                }
                echo ">
                            <a href=\"#tab_";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" data-toggle=\"tab\">
                                <i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i>
                                ";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), (($this->getAttribute($context["show_tab"], "translation_domain", array())) ? ($this->getAttribute($context["show_tab"], "translation_domain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                </ul>

                <div class=\"tab-content\">
                    ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array()));
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
            foreach ($context['_seq'] as $context["code"] => $context["show_tab"]) {
                // line 55
                echo "                        <div
                                class=\"tab-pane fade";
                // line 56
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " in active";
                }
                echo "\"
                                id=\"tab_";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    ";
                // line 61
                if (($this->getAttribute($context["show_tab"], "description", array()) != false)) {
                    // line 62
                    echo "                                        <p>";
                    echo $this->getAttribute($context["show_tab"], "description", array());
                    echo "</p>
                                    ";
                }
                // line 64
                echo "
                                    ";
                // line 65
                $context["groups"] = $this->getAttribute($context["show_tab"], "groups", array());
                // line 66
                echo "                                    ";
                $this->displayBlock("show_groups", $context, $blocks);
                echo "
                                </div>
                            </div>
                        </div>
                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                </div>
            </div>
        ";
        } elseif (twig_test_iterable($this->getAttribute(        // line 73
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array()))) {
            // line 74
            echo "            ";
            $context["groups"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array()), "default", array()), "groups", array());
            // line 75
            echo "            ";
            $this->displayBlock("show_groups", $context, $blocks);
            echo "
        ";
        }
        // line 77
        echo "
    </div>

    ";
        // line 80
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "
";
        
        $__internal_93163684cd9e37c4cdd02210d68a3adf02c91ac3fdcb5ca86df492d27285fc54->leave($__internal_93163684cd9e37c4cdd02210d68a3adf02c91ac3fdcb5ca86df492d27285fc54_prof);

    }

    // line 83
    public function block_show_groups($context, array $blocks = array())
    {
        $__internal_510503159686cc41be5e74fd6dcdcad34cf4f0bf6380d1b75b6289f9afae7b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_510503159686cc41be5e74fd6dcdcad34cf4f0bf6380d1b75b6289f9afae7b0e->enter($__internal_510503159686cc41be5e74fd6dcdcad34cf4f0bf6380d1b75b6289f9afae7b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_groups"));

        // line 84
        echo "    <div class=\"row\">
        ";
        // line 85
        $this->displayBlock('field_row', $context, $blocks);
        // line 117
        echo "
    </div>
";
        
        $__internal_510503159686cc41be5e74fd6dcdcad34cf4f0bf6380d1b75b6289f9afae7b0e->leave($__internal_510503159686cc41be5e74fd6dcdcad34cf4f0bf6380d1b75b6289f9afae7b0e_prof);

    }

    // line 85
    public function block_field_row($context, array $blocks = array())
    {
        $__internal_323f122f21c74264955948f6490fab920f865d9e3dc8e35f19b60038dd0bc3ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323f122f21c74264955948f6490fab920f865d9e3dc8e35f19b60038dd0bc3ea->enter($__internal_323f122f21c74264955948f6490fab920f865d9e3dc8e35f19b60038dd0bc3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        // line 86
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 87
            echo "                ";
            $context["show_group"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()), $context["code"], array(), "array");
            // line 88
            echo "
                <div class=\"";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo " ";
            echo ((((array_key_exists("no_padding", $context)) ? (_twig_default_filter((isset($context["no_padding"]) ? $context["no_padding"] : $this->getContext($context, "no_padding")), false)) : (false))) ? ("nopadding") : (""));
            echo "\">
                    <div class=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "box_class", array()), "html", null, true);
            echo "\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                ";
            // line 93
            $this->displayBlock('show_title', $context, $blocks);
            // line 96
            echo "                            </h4>
                        </div>
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table\">
                                <tbody>
                                ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "fields", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 102
                echo "                                    ";
                $this->displayBlock('show_field', $context, $blocks);
                // line 109
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "        ";
        
        $__internal_323f122f21c74264955948f6490fab920f865d9e3dc8e35f19b60038dd0bc3ea->leave($__internal_323f122f21c74264955948f6490fab920f865d9e3dc8e35f19b60038dd0bc3ea_prof);

    }

    // line 93
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_6b5acbed6e8b521680a98a02798bb314b233789984b551301a020325723073f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b5acbed6e8b521680a98a02798bb314b233789984b551301a020325723073f4->enter($__internal_6b5acbed6e8b521680a98a02798bb314b233789984b551301a020325723073f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 94
        echo "                                    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "name", array()), array(), (($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "translation_domain", array()), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        echo "
                                ";
        
        $__internal_6b5acbed6e8b521680a98a02798bb314b233789984b551301a020325723073f4->leave($__internal_6b5acbed6e8b521680a98a02798bb314b233789984b551301a020325723073f4_prof);

    }

    // line 102
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_485783696ed163b8b698dadad09c28e52e633e79052f8ac9130a0e536b81edf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_485783696ed163b8b698dadad09c28e52e633e79052f8ac9130a0e536b81edf5->enter($__internal_485783696ed163b8b698dadad09c28e52e633e79052f8ac9130a0e536b81edf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 103
        echo "                                        <tr class=\"sonata-ba-view-container\">
                                            ";
        // line 104
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 105
            echo "                                                ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
            echo "
                                            ";
        }
        // line 107
        echo "                                        </tr>
                                    ";
        
        $__internal_485783696ed163b8b698dadad09c28e52e633e79052f8ac9130a0e536b81edf5->leave($__internal_485783696ed163b8b698dadad09c28e52e633e79052f8ac9130a0e536b81edf5_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  445 => 107,  439 => 105,  437 => 104,  434 => 103,  428 => 102,  418 => 94,  412 => 93,  405 => 116,  386 => 110,  372 => 109,  369 => 102,  352 => 101,  345 => 96,  343 => 93,  337 => 90,  331 => 89,  328 => 88,  325 => 87,  307 => 86,  301 => 85,  292 => 117,  290 => 85,  287 => 84,  281 => 83,  272 => 80,  267 => 77,  261 => 75,  258 => 74,  256 => 73,  252 => 71,  232 => 66,  230 => 65,  227 => 64,  221 => 62,  219 => 61,  210 => 57,  204 => 56,  201 => 55,  184 => 54,  179 => 51,  161 => 47,  154 => 45,  147 => 44,  130 => 43,  126 => 41,  124 => 40,  121 => 39,  119 => 38,  114 => 36,  110 => 34,  104 => 33,  96 => 30,  94 => 29,  92 => 27,  86 => 26,  79 => 23,  73 => 22,  63 => 19,  57 => 18,  47 => 15,  41 => 14,  26 => 12,);
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

{% extends base_template %}

{% block title %}
    {{ \"title_show\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}
    {{ knp_menu_render(admin.sidemenu(action), {
        'currentClass' : 'active',
        'template': sonata_admin.adminPool.getTemplate('tab_menu_template')
    }, 'twig') }}
{% endblock %}

{% block show %}
    <div class=\"sonata-ba-view\">

        {{ sonata_block_render_event('sonata.admin.show.top', { 'admin': admin, 'object': object }) }}

        {% set has_tab = (admin.showtabs|length == 1 and admin.showtabs|keys[0] != 'default') or admin.showtabs|length > 1 %}

        {% if has_tab %}
            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    {% for name, show_tab in admin.showtabs %}
                        <li{% if loop.first %} class=\"active\"{% endif %}>
                            <a href=\"#tab_{{ admin.uniqid }}_{{ loop.index }}\" data-toggle=\"tab\">
                                <i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i>
                                {{ name|trans({}, show_tab.translation_domain ?: admin.translationDomain) }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>

                <div class=\"tab-content\">
                    {% for code, show_tab in admin.showtabs %}
                        <div
                                class=\"tab-pane fade{% if loop.first %} in active{% endif %}\"
                                id=\"tab_{{ admin.uniqid }}_{{ loop.index }}\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    {% if show_tab.description != false %}
                                        <p>{{ show_tab.description|raw }}</p>
                                    {% endif %}

                                    {% set groups = show_tab.groups %}
                                    {{ block('show_groups') }}
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        {% elseif admin.showtabs is iterable %}
            {% set groups = admin.showtabs.default.groups %}
            {{ block('show_groups') }}
        {% endif %}

    </div>

    {{ sonata_block_render_event('sonata.admin.show.bottom', { 'admin': admin, 'object': object }) }}
{% endblock %}

{% block show_groups %}
    <div class=\"row\">
        {% block field_row %}
            {% for code in groups %}
                {% set show_group = admin.showgroups[code] %}

                <div class=\"{{ show_group.class|default('col-md-12') }} {{ no_padding|default(false) ? 'nopadding' }}\">
                    <div class=\"{{ show_group.box_class }}\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                {% block show_title %}
                                    {{ show_group.name|trans({}, show_group.translation_domain|default(admin.translationDomain)) }}
                                {% endblock %}
                            </h4>
                        </div>
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table\">
                                <tbody>
                                {% for field_name in show_group.fields %}
                                    {% block show_field %}
                                        <tr class=\"sonata-ba-view-container\">
                                            {% if elements[field_name] is defined %}
                                                {{ elements[field_name]|render_view_element(object)}}
                                            {% endif %}
                                        </tr>
                                    {% endblock %}
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            {% endfor %}
        {% endblock %}

    </div>
{% endblock %}
", "@SonataAdmin/CRUD/base_show.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_show.html.twig");
    }
}
