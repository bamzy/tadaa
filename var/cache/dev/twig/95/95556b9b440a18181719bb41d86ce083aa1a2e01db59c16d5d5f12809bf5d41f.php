<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9e8ea34ddadaf520e6090f92ed791cacefa3b938b36f6c502066a6efa6669cb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_202a473e201143cc8d497a777003516cc636e88a55b78d77fc4f8a380ddfc708 = $this->env->getExtension("native_profiler");
        $__internal_202a473e201143cc8d497a777003516cc636e88a55b78d77fc4f8a380ddfc708->enter($__internal_202a473e201143cc8d497a777003516cc636e88a55b78d77fc4f8a380ddfc708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_202a473e201143cc8d497a777003516cc636e88a55b78d77fc4f8a380ddfc708->leave($__internal_202a473e201143cc8d497a777003516cc636e88a55b78d77fc4f8a380ddfc708_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7bc2d4c57804d7ee4b9cbe2882d57ffe07d22224f382961b43db9534724bc336 = $this->env->getExtension("native_profiler");
        $__internal_7bc2d4c57804d7ee4b9cbe2882d57ffe07d22224f382961b43db9534724bc336->enter($__internal_7bc2d4c57804d7ee4b9cbe2882d57ffe07d22224f382961b43db9534724bc336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7bc2d4c57804d7ee4b9cbe2882d57ffe07d22224f382961b43db9534724bc336->leave($__internal_7bc2d4c57804d7ee4b9cbe2882d57ffe07d22224f382961b43db9534724bc336_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_361b26a425953367fd2cb5f0b8f06d445f09c05205c468e570c796d8e23c6e18 = $this->env->getExtension("native_profiler");
        $__internal_361b26a425953367fd2cb5f0b8f06d445f09c05205c468e570c796d8e23c6e18->enter($__internal_361b26a425953367fd2cb5f0b8f06d445f09c05205c468e570c796d8e23c6e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_361b26a425953367fd2cb5f0b8f06d445f09c05205c468e570c796d8e23c6e18->leave($__internal_361b26a425953367fd2cb5f0b8f06d445f09c05205c468e570c796d8e23c6e18_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_80786a34e481efb572a5abb6570ddf67d191b2e0c8af285d72172600efcb779b = $this->env->getExtension("native_profiler");
        $__internal_80786a34e481efb572a5abb6570ddf67d191b2e0c8af285d72172600efcb779b->enter($__internal_80786a34e481efb572a5abb6570ddf67d191b2e0c8af285d72172600efcb779b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_80786a34e481efb572a5abb6570ddf67d191b2e0c8af285d72172600efcb779b->leave($__internal_80786a34e481efb572a5abb6570ddf67d191b2e0c8af285d72172600efcb779b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
