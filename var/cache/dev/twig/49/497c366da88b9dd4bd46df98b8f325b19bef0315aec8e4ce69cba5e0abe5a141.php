<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f24be7e63f8c76b4f41c23d97743cc756d0002643c4a20ac7711d39996a521d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9df705fb792d57fff42b3660b421171c1bab07681770389c6ba7059abc4fde22 = $this->env->getExtension("native_profiler");
        $__internal_9df705fb792d57fff42b3660b421171c1bab07681770389c6ba7059abc4fde22->enter($__internal_9df705fb792d57fff42b3660b421171c1bab07681770389c6ba7059abc4fde22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9df705fb792d57fff42b3660b421171c1bab07681770389c6ba7059abc4fde22->leave($__internal_9df705fb792d57fff42b3660b421171c1bab07681770389c6ba7059abc4fde22_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8b63f1adcc2f88a312c2a210a9468d6fa56896745ad56668e02ec267082e0827 = $this->env->getExtension("native_profiler");
        $__internal_8b63f1adcc2f88a312c2a210a9468d6fa56896745ad56668e02ec267082e0827->enter($__internal_8b63f1adcc2f88a312c2a210a9468d6fa56896745ad56668e02ec267082e0827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8b63f1adcc2f88a312c2a210a9468d6fa56896745ad56668e02ec267082e0827->leave($__internal_8b63f1adcc2f88a312c2a210a9468d6fa56896745ad56668e02ec267082e0827_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d0165da1e797c0ce02706762ef732aa6083edc2c14b4ea4004848e7bc6479b45 = $this->env->getExtension("native_profiler");
        $__internal_d0165da1e797c0ce02706762ef732aa6083edc2c14b4ea4004848e7bc6479b45->enter($__internal_d0165da1e797c0ce02706762ef732aa6083edc2c14b4ea4004848e7bc6479b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d0165da1e797c0ce02706762ef732aa6083edc2c14b4ea4004848e7bc6479b45->leave($__internal_d0165da1e797c0ce02706762ef732aa6083edc2c14b4ea4004848e7bc6479b45_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c60598fdc3f0e7d1cef47abc3193f343eccdc1525826e47d82afe7533e37f0cc = $this->env->getExtension("native_profiler");
        $__internal_c60598fdc3f0e7d1cef47abc3193f343eccdc1525826e47d82afe7533e37f0cc->enter($__internal_c60598fdc3f0e7d1cef47abc3193f343eccdc1525826e47d82afe7533e37f0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c60598fdc3f0e7d1cef47abc3193f343eccdc1525826e47d82afe7533e37f0cc->leave($__internal_c60598fdc3f0e7d1cef47abc3193f343eccdc1525826e47d82afe7533e37f0cc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
