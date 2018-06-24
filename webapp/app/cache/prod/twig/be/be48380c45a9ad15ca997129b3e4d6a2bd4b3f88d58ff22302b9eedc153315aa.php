<?php

/* @App/Form/fields.html.twig */
class __TwigTemplate_279aaf3aec3872bfda9e52c8decfd37f83828826efb82f4e92745a962b0ef355 extends Twig_Template
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
        // line 1
        $this->displayBlock('form_modal_widget', $context, $blocks);
        // line 205
        echo "

";
        // line 207
        $this->displayBlock('multiple_upload_widget', $context, $blocks);
    }

    // line 1
    public function block_form_modal_widget($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) ? $context["columns"] : null));
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
                if (!\$.inArray(\$('#' + obj.n).val(), JSON.parse('\"' + obj.v + '\"'))) {
                    \$('#' + obj.n).addClass(\"ui-state-error\");
                    updateTips(obj.n);
                    return false;
                } else {
                    return true;
                }
            };

            var curFields = \"\";
            // Set the current fields
            ";
        // line 58
        $context["fieldIndex"] = 0;
        // line 59
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableData"]) ? $context["tableData"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 60
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 61
                echo "            ";
                if (twig_test_iterable($context["column"])) {
                    // line 62
                    echo "            ";
                    $context["inpKey"] = twig_first($this->env, twig_get_array_keys_filter($context["column"]));
                    // line 63
                    echo "            ";
                }
                // line 64
                echo "            curFields += '<input data-key=\"";
                echo twig_escape_filter($this->env, (isset($context["inpKey"]) ? $context["inpKey"] : null), "html", null, true);
                echo "\" type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, (isset($context["fieldIndex"]) ? $context["fieldIndex"] : null), "html", null, true);
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
            // line 66
            echo "            ";
            $context["fieldIndex"] = ((isset($context["fieldIndex"]) ? $context["fieldIndex"] : null) + 1);
            // line 67
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "            \$(\"#users\").after(curFields);

            fieldIndex = ";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["fieldIndex"]) ? $context["fieldIndex"] : null), "html", null, true);
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
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["validators"]) ? $context["validators"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 85
            echo "                valid = valid && doClean(\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "validator", array(), "array"), "html", null, true);
            echo "\", JSON.parse('";
            echo $this->getAttribute($context["value"], "args", array(), "array");
            echo "'));

                var val = '';
                var selector = '#' + '";
            // line 88
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
            // line 98
            echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
            echo "[' + fieldIndex + '][";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "]\" value=\"' + \$(selector).val() + '\" />';
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
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
        // line 159
        echo "        <fieldset>
            ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) ? $context["columns"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 161
            echo "                ";
            if (($this->getAttribute($context["value"], "type", array(), "array") == "text")) {
                // line 162
                echo "                    <label for=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "name", array(), "array"), "html", null, true);
                echo "</label>
                    <input type=\"text\" name=\"";
                // line 163
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"
                           class=\"text ui-widget-content ui-corner-all form-control\">
                ";
            } elseif (($this->getAttribute(            // line 165
$context["value"], "type", array(), "array") == "choice")) {
                // line 166
                echo "                    <label for=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "name", array(), "array"), "html", null, true);
                echo "</label>
                    <select name=\"";
                // line 167
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" class=\"text ui-widget-content ui-corner-all\">
                        <option>-- Chọn --</option>
                        ";
                // line 169
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["value"], "data", array(), "array"));
                foreach ($context['_seq'] as $context["id"] => $context["name"]) {
                    // line 170
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
                // line 172
                echo "                    </select>
                ";
            }
            // line 174
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "
            <!-- Allow form submission with keyboard without duplicating the dialog button -->
            <input type=\"submit\" tabindex=\"-1\" style=\"position:absolute; top:-1000px\">
        </fieldset>
        ";
        // line 180
        echo "    </div>

    <div id=\"users-contain\" class=\"ui-widget\">
        ";
        // line 184
        echo "        <table id=\"users\" class=\"table ui-widget ui-widget-content\">
            <thead>
            <tr class=\"ui-widget-header \">
                ";
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) ? $context["columns"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 188
            echo "                    <th>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "name", array(), "array"), "html", null, true);
            echo "</th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "            </tr>
            </thead>
            <tbody>
            ";
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableData"]) ? $context["tableData"] : null));
        foreach ($context['_seq'] as $context["rowKey"] => $context["row"]) {
            // line 194
            echo "                <tr data-key=\"";
            echo twig_escape_filter($this->env, $context["rowKey"], "html", null, true);
            echo "\">
                    ";
            // line 195
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 196
                echo "                        <td>";
                echo twig_escape_filter($this->env, ((twig_test_iterable($context["column"])) ? (twig_first($this->env, $context["column"])) : ($context["column"])), "html", null, true);
                echo "</td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rowKey'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "            </tbody>
        </table>
    </div>
    <button id=\"create-user\" type=\"button\" class=\"btn\">Thêm mới</button>
";
    }

    // line 207
    public function block_multiple_upload_widget($context, array $blocks = array())
    {
        // line 208
        echo "    ";
        if ( !(null === (isset($context["object_id"]) ? $context["object_id"] : null))) {
            // line 209
            echo "        ";
            echo (isset($context["template"]) ? $context["template"] : null);
            echo "
    ";
        } else {
            // line 211
            echo "        <div><b>* Lưu ý:</b> Lưu để cập nhật ảnh mô tả</div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@App/Form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  418 => 211,  412 => 209,  409 => 208,  406 => 207,  398 => 200,  391 => 198,  382 => 196,  378 => 195,  373 => 194,  369 => 193,  364 => 190,  355 => 188,  351 => 187,  346 => 184,  341 => 180,  335 => 175,  329 => 174,  325 => 172,  314 => 170,  310 => 169,  303 => 167,  296 => 166,  294 => 165,  287 => 163,  280 => 162,  277 => 161,  273 => 160,  270 => 159,  210 => 100,  200 => 98,  187 => 88,  176 => 85,  172 => 84,  155 => 70,  151 => 68,  145 => 67,  142 => 66,  125 => 64,  122 => 63,  119 => 62,  116 => 61,  111 => 60,  106 => 59,  104 => 58,  59 => 15,  50 => 13,  46 => 12,  34 => 2,  31 => 1,  27 => 207,  23 => 205,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/Form/fields.html.twig", "D:\\Projects\\yourhome_v1\\src\\AppBundle\\Resources\\views\\Form\\fields.html.twig");
    }
}
