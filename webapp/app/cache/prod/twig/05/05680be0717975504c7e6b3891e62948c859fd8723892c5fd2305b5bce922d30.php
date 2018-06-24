<?php

/* @SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_sortable_script_table.html.twig */
class __TwigTemplate_defe5acec90053369215ca433eadf6808e161eac1407b9661c140d775cf666ab extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    jQuery('div#field_container_";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo " tbody.sonata-ba-tbody').first().sortable({
        axis: 'y',
        opacity: 0.6,
        items: '> tr',
        stop: apply_position_value_";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "
    });

    function apply_position_value_";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "() {
        // update the input value position
        jQuery('div#field_container_";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo " tbody.sonata-ba-tbody td.sonata-ba-td-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array()), "options", array()), "sortable", array()), "html", null, true);
        echo "').each(function(index, element) {
            // remove the sortable handler and put it back
            jQuery('span.sonata-ba-sortable-handler', element).remove();
            jQuery(element).append('<span class=\"sonata-ba-sortable-handler ui-icon ui-icon-grip-solid-horizontal\"></span>');
            jQuery('input', element).hide();
        });

        jQuery('div#field_container_";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo " tbody.sonata-ba-tbody td.sonata-ba-td-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array()), "options", array()), "sortable", array()), "html", null, true);
        echo " input').each(function(index, value) {
            jQuery(value).val(index + 1);
        });
    }

    // refresh the sortable option when a new element is added
    jQuery('#sonata-ba-field-container-";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "').bind('sonata.add_element', function() {
        apply_position_value_";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "();
        jQuery('div#field_container_";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo " tbody.sonata-ba-tbody').sortable('refresh');
    });

    apply_position_value_";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "();
</script>
";
    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_sortable_script_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 39,  75 => 36,  71 => 35,  67 => 34,  54 => 28,  40 => 21,  35 => 19,  29 => 16,  22 => 12,  19 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_sortable_script_table.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\CRUD\\edit_orm_one_to_many_sortable_script_table.html.twig");
    }
}
