<?php

/* @SonataAdmin/CRUD/list__batch.html.twig */
class __TwigTemplate_01762e094a3c5ba4f13145a0a67fe2201c6964207ecbcca4409b5980cf5475c2 extends Twig_Template
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
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_034fd8a3797111da740006f5065576ce992a9d10723a8b7068564c9e56cd6f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_034fd8a3797111da740006f5065576ce992a9d10723a8b7068564c9e56cd6f53->enter($__internal_034fd8a3797111da740006f5065576ce992a9d10723a8b7068564c9e56cd6f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_034fd8a3797111da740006f5065576ce992a9d10723a8b7068564c9e56cd6f53->leave($__internal_034fd8a3797111da740006f5065576ce992a9d10723a8b7068564c9e56cd6f53_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_38c0d8c4eca94d69a7f0f76845e6f224844ce79b8c9ace69e0ce0ec5a3fc1d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38c0d8c4eca94d69a7f0f76845e6f224844ce79b8c9ace69e0ce0ec5a3fc1d0c->enter($__internal_38c0d8c4eca94d69a7f0f76845e6f224844ce79b8c9ace69e0ce0ec5a3fc1d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_38c0d8c4eca94d69a7f0f76845e6f224844ce79b8c9ace69e0ce0ec5a3fc1d0c->leave($__internal_38c0d8c4eca94d69a7f0f76845e6f224844ce79b8c9ace69e0ce0ec5a3fc1d0c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "@SonataAdmin/CRUD/list__batch.html.twig", "D:\\Projects\\yourhome_v1\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list__batch.html.twig");
    }
}
