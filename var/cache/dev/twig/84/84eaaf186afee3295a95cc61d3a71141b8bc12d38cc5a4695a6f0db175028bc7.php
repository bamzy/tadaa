<?php

/* todo/signup.html.twig */
class __TwigTemplate_af472d0ebafa90f7e3c8d13a424b977bbffd48ca9689cba81a7fcfdc893847a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "todo/signup.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be2fc2da18b366165bc4aa931b09f4710f06c309d68522800abcb2ce55c73a06 = $this->env->getExtension("native_profiler");
        $__internal_be2fc2da18b366165bc4aa931b09f4710f06c309d68522800abcb2ce55c73a06->enter($__internal_be2fc2da18b366165bc4aa931b09f4710f06c309d68522800abcb2ce55c73a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/signup.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be2fc2da18b366165bc4aa931b09f4710f06c309d68522800abcb2ce55c73a06->leave($__internal_be2fc2da18b366165bc4aa931b09f4710f06c309d68522800abcb2ce55c73a06_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f7d9d389f5c73b5921a2956182109572c56acdc72ce4c21516fe6d8980ee257 = $this->env->getExtension("native_profiler");
        $__internal_8f7d9d389f5c73b5921a2956182109572c56acdc72ce4c21516fe6d8980ee257->enter($__internal_8f7d9d389f5c73b5921a2956182109572c56acdc72ce4c21516fe6d8980ee257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    todo signup

";
        
        $__internal_8f7d9d389f5c73b5921a2956182109572c56acdc72ce4c21516fe6d8980ee257->leave($__internal_8f7d9d389f5c73b5921a2956182109572c56acdc72ce4c21516fe6d8980ee257_prof);

    }

    public function getTemplateName()
    {
        return "todo/signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     todo signup*/
/* */
/* {% endblock %}*/
