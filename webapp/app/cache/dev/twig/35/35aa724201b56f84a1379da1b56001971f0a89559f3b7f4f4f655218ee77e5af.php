<?php

/* @SonataAdmin/CRUD/edit_sonata_type_immutable_array.html.twig */
class __TwigTemplate_5bcd3a6ab2e4cb20b9cfb420e603f24e4487577b0692aa2753f721a993de0e65 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_sonata_type_immutable_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ebfbe84a0cfdecc05a9b6d1ae81f074038fa7383ca6e5202eb40151c52025ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ebfbe84a0cfdecc05a9b6d1ae81f074038fa7383ca6e5202eb40151c52025ff->enter($__internal_6ebfbe84a0cfdecc05a9b6d1ae81f074038fa7383ca6e5202eb40151c52025ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_sonata_type_immutable_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ebfbe84a0cfdecc05a9b6d1ae81f074038fa7383ca6e5202eb40151c52025ff->leave($__internal_6ebfbe84a0cfdecc05a9b6d1ae81f074038fa7383ca6e5202eb40151c52025ff_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_sonata_type_immutable_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
", "@SonataAdmin/CRUD/edit_sonata_type_immutable_array.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_sonata_type_immutable_array.html.twig");
    }
}
