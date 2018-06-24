<?php

/* AppBundle:Form:fields.html.twig */
class __TwigTemplate_0596a2cfc66ac662158b0d52c26c41a5676bdea5cf915f3c3aaf8d2e295649a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_modal_widget' => array($this, 'block_form_modal_widget'),
            'multiple_upload_widget' => array($this, 'block_multiple_upload_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57ebdd0f40c050f4b4eeb8d37d914a2b0cd8ab01fd8208dbd36313079d5cb850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57ebdd0f40c050f4b4eeb8d37d914a2b0cd8ab01fd8208dbd36313079d5cb850->enter($__internal_57ebdd0f40c050f4b4eeb8d37d914a2b0cd8ab01fd8208dbd36313079d5cb850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('form_modal_widget', $context, $blocks);
        // line 210
        echo "

";
        // line 212
        $this->displayBlock('multiple_upload_widget', $context, $blocks);
        
        $__internal_57ebdd0f40c050f4b4eeb8d37d914a2b0cd8ab01fd8208dbd36313079d5cb850->leave($__internal_57ebdd0f40c050f4b4eeb8d37d914a2b0cd8ab01fd8208dbd36313079d5cb850_prof);

    }

    // line 1
    public function block_form_modal_widget($context, array $blocks = array())
    {
        $__internal_b5c6914360cd6570db7c2d110213d9814ff640a71a8d1fb95b886886710eecf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5c6914360cd6570db7c2d110213d9814ff640a71a8d1fb95b886886710eecf6->enter($__internal_b5c6914360cd6570db7c2d110213d9814ff640a71a8d1fb95b886886710eecf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_modal_widget"));

        // line 2
        echo "    <script>
        var fieldIndex = 0;

        \$(function () {
            var dialog, form, tips = \$(\".validateTips\");

            // From http://www.whatwg.org/specs/web-apps/current-work/multipage/states-of-the-type-attribute.html#e-mail-state-%28type=email%29
//                emailRegex = /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,

            var allFields;
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) ? $context["columns"] : $this->getContext($context, "columns")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 13
            echo "            allFields = \$([]).add(\$(";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "));
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
            function updateTips(t) {
                tips
                        .text(t)
                        .addClass(\"ui-state-highlight\");
                setTimeout(function () {
                    tips.removeClass(\"ui-state-highlight\", 1500);
                }, 500);
            }

            window.checkLength = function (obj) {
                if (\$('#' + obj.n).val().length > obj.max || \$('#' + obj.n).val().length < obj.min) {
                    \$('#' + obj.n).addClass(\"ui-state-error\");
                    updateTips(\"Length of \" + obj.l + \" must be between \" +
                            obj.min + \" and \" + obj.max + \".\");
                    return false;
                } else {
                    return true;
                }
            };

            window.checkRegexp = function (obj) {
                if (!( obj.regexp.test(\$('#' + obj.n).val()) )) {
                    \$('#' + obj.n).addClass(\"ui-state-error\");
                    updateTips(obj.n);
                    return false;
                } else {
                    return true;
                }
            };

            window.checkChoices = function (obj) {
                var checkArr = [];
                \$.each(obj.v, function(i, e) {
                    checkArr.push(i);
                });

                if (!checkArr.includes(\$('#' + obj.n).val())) {
                    \$('#' + obj.n).addClass(\"ui-state-error\");
                    updateTips(\"Value of \" + obj.n + \" is invalid.\");
                    return false;
                } else {
                    return true;
                }
            };

            var curFields = \"\";
            // Set the current fields
            ";
        // line 63
        $context["fieldIndex"] = 0;
        // line 64
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableData"]) ? $context["tableData"] : $this->getContext($context, "tableData")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 65
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 66
                echo "            ";
                if (twig_test_iterable($context["column"])) {
                    // line 67
                    echo "            ";
                    $context["inpKey"] = twig_first($this->env, twig_get_array_keys_filter($context["column"]));
                    // line 68
                    echo "            ";
                }
                // line 69
                echo "            curFields += '<input data-key=\"";
                echo twig_escape_filter($this->env, (isset($context["inpKey"]) ? $context["inpKey"] : $this->getContext($context, "inpKey")), "html", null, true);
                echo "\" type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, (isset($context["fieldIndex"]) ? $context["fieldIndex"] : $this->getContext($context, "fieldIndex")), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "]\" value=\"";
                echo twig_escape_filter($this->env, ((twig_test_iterable($context["column"])) ? (twig_first($this->env, twig_get_array_keys_filter($context["column"]))) : ($context["column"])), "html", null, true);
                echo "\" />';
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "            ";
            $context["fieldIndex"] = ((isset($context["fieldIndex"]) ? $context["fieldIndex"] : $this->getContext($context, "fieldIndex")) + 1);
            // line 72
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "            \$(\"#users\").after(curFields);

            fieldIndex = ";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["fieldIndex"]) ? $context["fieldIndex"] : $this->getContext($context, "fieldIndex")), "html", null, true);
        echo ";

            // Add row to table function
            function addUser() {
                var valid = true;
                allFields.removeClass(\"ui-state-error\");


//            valid = valid && checkLength( name, \"username\", 3, 16 );
//            valid = valid && checkRegexp( name, /^[a-z]([0-9a-z_\\s])+\$/i, \"Username may consist of a-z, 0-9, underscores, spaces and must begin with a letter.\" );

                var td = \"\";
                var newFields = \"\";
                var trKey;
                ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["validators"]) ? $context["validators"] : $this->getContext($context, "validators")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 90
            echo "                valid = valid && doClean(\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "validator", array(), "array"), "html", null, true);
            echo "\", JSON.parse('";
            echo $this->getAttribute($context["value"], "args", array(), "array");
            echo "'));

                var val = '';
                var selector = '#' + '";
            // line 93
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "';
                if (\$(selector).is('input')) {
                    val = \$(selector).val();
                } else {
                    val = \$(selector + ' option:selected').text();
                    trKey = \$(selector + ' option:selected').val();
                }

                td += \"<td>\" + val + \"</td>\";

                newFields += '<input data-key=' + trKey + ' type=\"hidden\" name=\"";
            // line 103
            echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
            echo "[' + fieldIndex + '][";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "]\" value=\"' + \$(selector).val() + '\" />';
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                // Increase the array index
                fieldIndex = fieldIndex + 1;

                if (valid) {
                    var existTr = \$('tr[data-key=\"' + trKey + '\"]');
                    var existInp = \$('input[data-key=\"' + trKey + '\"]');
                    // If the row is exist -> replace old element
                    if (existTr.length) {
                        existTr.html(td);
                        existInp.remove();
                    } else {
                        \$(\"#users tbody\").append(\"<tr data-key=\" + trKey + \">\" + td + \"</tr>\");
                    }
                    \$(\"#users\").after(newFields);

                    dialog.dialog(\"close\");
                }
                return valid;
            }

            function doClean(name, validator, options) {
                options = \$.extend({
                    n: name
                }, options);
                return window[validator](options);
            }

            dialog = \$(\"#dialog-form\").dialog({
                autoOpen: false,
                height: 400,
                width: 350,
                modal: true,
                buttons: {
                    \"Lưu\": addUser,
                    \"Hủy\": function () {
                        dialog.dialog(\"close\");
                    }
                },
                close: function () {
//                form[ 0 ].reset();
                    allFields.removeClass(\"ui-state-error\");
                }
            });

//        form = dialog.find( \"form\" ).on( \"submit\", function( event ) {
//            event.preventDefault();
//            addUser();
//        });

            \$(\"#create-user\").button().on(\"click\", function () {
                dialog.dialog(\"open\");
            });
        });
    </script>

    <div id=\"dialog-form\" title=\"Thêm mới\">
        <p class=\"validateTips\">All form fields are required.</p>

        ";
        // line 164
        echo "        <fieldset>
            ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) ? $context["columns"] : $this->getContext($context, "columns")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 166
            echo "                ";
            if (($this->getAttribute($context["value"], "type", array(), "array") == "text")) {
                // line 167
                echo "                    <label for=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "name", array(), "array"), "html", null, true);
                echo "</label>
                    <input type=\"text\" name=\"";
                // line 168
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"
                           class=\"text ui-widget-content ui-corner-all form-control\">
                ";
            } elseif (($this->getAttribute(            // line 170
$context["value"], "type", array(), "array") == "choice")) {
                // line 171
                echo "                    <label for=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "name", array(), "array"), "html", null, true);
                echo "</label>
                    <select name=\"";
                // line 172
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" class=\"text ui-widget-content ui-corner-all\">
                        <option>-- Chọn --</option>
                        ";
                // line 174
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["value"], "data", array(), "array"));
                foreach ($context['_seq'] as $context["id"] => $context["name"]) {
                    // line 175
                    echo "                            <option value=\"";
                    echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 177
                echo "                    </select>
                ";
            }
            // line 179
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "
            <!-- Allow form submission with keyboard without duplicating the dialog button -->
            <input type=\"submit\" tabindex=\"-1\" style=\"position:absolute; top:-1000px\">
        </fieldset>
        ";
        // line 185
        echo "    </div>

    <div id=\"users-contain\" class=\"ui-widget\">
        ";
        // line 189
        echo "        <table id=\"users\" class=\"table ui-widget ui-widget-content\">
            <thead>
            <tr class=\"ui-widget-header \">
                ";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) ? $context["columns"] : $this->getContext($context, "columns")));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 193
            echo "                    <th>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "name", array(), "array"), "html", null, true);
            echo "</th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "            </tr>
            </thead>
            <tbody>
            ";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableData"]) ? $context["tableData"] : $this->getContext($context, "tableData")));
        foreach ($context['_seq'] as $context["rowKey"] => $context["row"]) {
            // line 199
            echo "                <tr data-key=\"";
            echo twig_escape_filter($this->env, $context["rowKey"], "html", null, true);
            echo "\">
                    ";
            // line 200
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 201
                echo "                        <td>";
                echo twig_escape_filter($this->env, ((twig_test_iterable($context["column"])) ? (twig_first($this->env, $context["column"])) : ($context["column"])), "html", null, true);
                echo "</td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 203
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rowKey'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "            </tbody>
        </table>
    </div>
    <button id=\"create-user\" type=\"button\" class=\"btn\">Thêm mới</button>
";
        
        $__internal_b5c6914360cd6570db7c2d110213d9814ff640a71a8d1fb95b886886710eecf6->leave($__internal_b5c6914360cd6570db7c2d110213d9814ff640a71a8d1fb95b886886710eecf6_prof);

    }

    // line 212
    public function block_multiple_upload_widget($context, array $blocks = array())
    {
        $__internal_04317c866dea8165b06090a291ff2e7effcc8c58a32ecad5ecbd68588e036767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04317c866dea8165b06090a291ff2e7effcc8c58a32ecad5ecbd68588e036767->enter($__internal_04317c866dea8165b06090a291ff2e7effcc8c58a32ecad5ecbd68588e036767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "multiple_upload_widget"));

        // line 213
        echo "    ";
        if ( !(null === (isset($context["object_id"]) ? $context["object_id"] : $this->getContext($context, "object_id")))) {
            // line 214
            echo "        ";
            echo (isset($context["template"]) ? $context["template"] : $this->getContext($context, "template"));
            echo "
    ";
        } else {
            // line 216
            echo "        <div><b>* Lưu ý:</b> Lưu để cập nhật ảnh mô tả</div>
    ";
        }
        
        $__internal_04317c866dea8165b06090a291ff2e7effcc8c58a32ecad5ecbd68588e036767->leave($__internal_04317c866dea8165b06090a291ff2e7effcc8c58a32ecad5ecbd68588e036767_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  438 => 216,  432 => 214,  429 => 213,  423 => 212,  412 => 205,  405 => 203,  396 => 201,  392 => 200,  387 => 199,  383 => 198,  378 => 195,  369 => 193,  365 => 192,  360 => 189,  355 => 185,  349 => 180,  343 => 179,  339 => 177,  328 => 175,  324 => 174,  317 => 172,  310 => 171,  308 => 170,  301 => 168,  294 => 167,  291 => 166,  287 => 165,  284 => 164,  224 => 105,  214 => 103,  201 => 93,  190 => 90,  186 => 89,  169 => 75,  165 => 73,  159 => 72,  156 => 71,  139 => 69,  136 => 68,  133 => 67,  130 => 66,  125 => 65,  120 => 64,  118 => 63,  68 => 15,  59 => 13,  55 => 12,  43 => 2,  37 => 1,  30 => 212,  26 => 210,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block form_modal_widget %}
    <script>
        var fieldIndex = 0;

        \$(function () {
            var dialog, form, tips = \$(\".validateTips\");

            // From http://www.whatwg.org/specs/web-apps/current-work/multipage/states-of-the-type-attribute.html#e-mail-state-%28type=email%29
//                emailRegex = /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,

            var allFields;
            {% for key, value in columns %}
            allFields = \$([]).add(\$({{ key }}));
            {% endfor %}

            function updateTips(t) {
                tips
                        .text(t)
                        .addClass(\"ui-state-highlight\");
                setTimeout(function () {
                    tips.removeClass(\"ui-state-highlight\", 1500);
                }, 500);
            }

            window.checkLength = function (obj) {
                if (\$('#' + obj.n).val().length > obj.max || \$('#' + obj.n).val().length < obj.min) {
                    \$('#' + obj.n).addClass(\"ui-state-error\");
                    updateTips(\"Length of \" + obj.l + \" must be between \" +
                            obj.min + \" and \" + obj.max + \".\");
                    return false;
                } else {
                    return true;
                }
            };

            window.checkRegexp = function (obj) {
                if (!( obj.regexp.test(\$('#' + obj.n).val()) )) {
                    \$('#' + obj.n).addClass(\"ui-state-error\");
                    updateTips(obj.n);
                    return false;
                } else {
                    return true;
                }
            };

            window.checkChoices = function (obj) {
                var checkArr = [];
                \$.each(obj.v, function(i, e) {
                    checkArr.push(i);
                });

                if (!checkArr.includes(\$('#' + obj.n).val())) {
                    \$('#' + obj.n).addClass(\"ui-state-error\");
                    updateTips(\"Value of \" + obj.n + \" is invalid.\");
                    return false;
                } else {
                    return true;
                }
            };

            var curFields = \"\";
            // Set the current fields
            {% set fieldIndex = 0 %}
            {% for row in tableData %}
            {% for key, column in row %}
            {% if (column is iterable) %}
            {% set inpKey = column|keys|first %}
            {% endif %}
            curFields += '<input data-key=\"{{ inpKey }}\" type=\"hidden\" name=\"{{ full_name }}[{{ fieldIndex }}][{{ key }}]\" value=\"{{ column is iterable ? column|keys|first : column }}\" />';
            {% endfor %}
            {% set fieldIndex = fieldIndex + 1 %}
            {% endfor %}
            \$(\"#users\").after(curFields);

            fieldIndex = {{ fieldIndex }};

            // Add row to table function
            function addUser() {
                var valid = true;
                allFields.removeClass(\"ui-state-error\");


//            valid = valid && checkLength( name, \"username\", 3, 16 );
//            valid = valid && checkRegexp( name, /^[a-z]([0-9a-z_\\s])+\$/i, \"Username may consist of a-z, 0-9, underscores, spaces and must begin with a letter.\" );

                var td = \"\";
                var newFields = \"\";
                var trKey;
                {% for key, value in validators %}
                valid = valid && doClean(\"{{ key }}\", \"{{ value['validator'] }}\", JSON.parse('{{  value['args']|raw }}'));

                var val = '';
                var selector = '#' + '{{ key }}';
                if (\$(selector).is('input')) {
                    val = \$(selector).val();
                } else {
                    val = \$(selector + ' option:selected').text();
                    trKey = \$(selector + ' option:selected').val();
                }

                td += \"<td>\" + val + \"</td>\";

                newFields += '<input data-key=' + trKey + ' type=\"hidden\" name=\"{{ full_name }}[' + fieldIndex + '][{{ key }}]\" value=\"' + \$(selector).val() + '\" />';
                {% endfor %}
                // Increase the array index
                fieldIndex = fieldIndex + 1;

                if (valid) {
                    var existTr = \$('tr[data-key=\"' + trKey + '\"]');
                    var existInp = \$('input[data-key=\"' + trKey + '\"]');
                    // If the row is exist -> replace old element
                    if (existTr.length) {
                        existTr.html(td);
                        existInp.remove();
                    } else {
                        \$(\"#users tbody\").append(\"<tr data-key=\" + trKey + \">\" + td + \"</tr>\");
                    }
                    \$(\"#users\").after(newFields);

                    dialog.dialog(\"close\");
                }
                return valid;
            }

            function doClean(name, validator, options) {
                options = \$.extend({
                    n: name
                }, options);
                return window[validator](options);
            }

            dialog = \$(\"#dialog-form\").dialog({
                autoOpen: false,
                height: 400,
                width: 350,
                modal: true,
                buttons: {
                    \"Lưu\": addUser,
                    \"Hủy\": function () {
                        dialog.dialog(\"close\");
                    }
                },
                close: function () {
//                form[ 0 ].reset();
                    allFields.removeClass(\"ui-state-error\");
                }
            });

//        form = dialog.find( \"form\" ).on( \"submit\", function( event ) {
//            event.preventDefault();
//            addUser();
//        });

            \$(\"#create-user\").button().on(\"click\", function () {
                dialog.dialog(\"open\");
            });
        });
    </script>

    <div id=\"dialog-form\" title=\"Thêm mới\">
        <p class=\"validateTips\">All form fields are required.</p>

        {#<form>#}
        <fieldset>
            {% for key, value in columns %}
                {% if value['type'] == 'text' %}
                    <label for=\"{{ key }}\">{{ value['name'] }}</label>
                    <input type=\"text\" name=\"{{ key }}\" id=\"{{ key }}\"
                           class=\"text ui-widget-content ui-corner-all form-control\">
                {% elseif value['type'] == 'choice' %}
                    <label for=\"{{ key }}\">{{ value['name'] }}</label>
                    <select name=\"{{ key }}\" id=\"{{ key }}\" class=\"text ui-widget-content ui-corner-all\">
                        <option>-- Chọn --</option>
                        {% for id, name in value['data'] %}
                            <option value=\"{{ id }}\">{{ name }}</option>
                        {% endfor %}
                    </select>
                {% endif %}
            {% endfor %}

            <!-- Allow form submission with keyboard without duplicating the dialog button -->
            <input type=\"submit\" tabindex=\"-1\" style=\"position:absolute; top:-1000px\">
        </fieldset>
        {#</form>#}
    </div>

    <div id=\"users-contain\" class=\"ui-widget\">
        {#<h1>Danh sách:</h1>#}
        <table id=\"users\" class=\"table ui-widget ui-widget-content\">
            <thead>
            <tr class=\"ui-widget-header \">
                {% for value in columns %}
                    <th>{{ value['name'] }}</th>
                {% endfor %}
            </tr>
            </thead>
            <tbody>
            {% for rowKey, row in tableData %}
                <tr data-key=\"{{ rowKey }}\">
                    {% for column in row %}
                        <td>{{ column is iterable ? column|first : column }}</td>
                    {% endfor %}
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
    <button id=\"create-user\" type=\"button\" class=\"btn\">Thêm mới</button>
{% endblock %}


{% block multiple_upload_widget %}
    {% if (object_id is not null) %}
        {{ template|raw }}
    {% else %}
        <div><b>* Lưu ý:</b> Lưu để cập nhật ảnh mô tả</div>
    {% endif %}
{% endblock %}
", "AppBundle:Form:fields.html.twig", "D:\\Projects\\yourhome_v1\\src\\AppBundle/Resources/views/Form/fields.html.twig");
    }
}
