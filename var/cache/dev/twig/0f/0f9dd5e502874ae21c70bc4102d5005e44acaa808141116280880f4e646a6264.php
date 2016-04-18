<?php

/* todo/create.html.twig */
class __TwigTemplate_0b214546d4acc9502a88dec92a0d638de112798436ff54bf930c615a81cb2d97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "todo/create.html.twig", 1);
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
        $__internal_2a53787ccc59ccdb0b73f43968460e4fc75c77ee30264b35337525667b7c518f = $this->env->getExtension("native_profiler");
        $__internal_2a53787ccc59ccdb0b73f43968460e4fc75c77ee30264b35337525667b7c518f->enter($__internal_2a53787ccc59ccdb0b73f43968460e4fc75c77ee30264b35337525667b7c518f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a53787ccc59ccdb0b73f43968460e4fc75c77ee30264b35337525667b7c518f->leave($__internal_2a53787ccc59ccdb0b73f43968460e4fc75c77ee30264b35337525667b7c518f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_71add84cb0cbce8608e94509c841d7474d6d33096a0ab1385ba2b4f192ed5a30 = $this->env->getExtension("native_profiler");
        $__internal_71add84cb0cbce8608e94509c841d7474d6d33096a0ab1385ba2b4f192ed5a30->enter($__internal_71add84cb0cbce8608e94509c841d7474d6d33096a0ab1385ba2b4f192ed5a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    todo create

";
        
        $__internal_71add84cb0cbce8608e94509c841d7474d6d33096a0ab1385ba2b4f192ed5a30->leave($__internal_71add84cb0cbce8608e94509c841d7474d6d33096a0ab1385ba2b4f192ed5a30_prof);

    }

    public function getTemplateName()
    {
        return "todo/create.html.twig";
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
/*     todo create*/
/* */
/* {% endblock %}*/
