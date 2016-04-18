<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6d7e57d9095b70cd3b3c4a90ed54413f6ffbee2eca33e7bf0f53519a2ed1f361 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6609c5cfed5fae7a36a3fd242bc411ed6922d31800a050d09279aa04c1d9956a = $this->env->getExtension("native_profiler");
        $__internal_6609c5cfed5fae7a36a3fd242bc411ed6922d31800a050d09279aa04c1d9956a->enter($__internal_6609c5cfed5fae7a36a3fd242bc411ed6922d31800a050d09279aa04c1d9956a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6609c5cfed5fae7a36a3fd242bc411ed6922d31800a050d09279aa04c1d9956a->leave($__internal_6609c5cfed5fae7a36a3fd242bc411ed6922d31800a050d09279aa04c1d9956a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ea02247895e17324bc2d20764ea8d50103dbf5e9278e7a31f73295a5295ff16b = $this->env->getExtension("native_profiler");
        $__internal_ea02247895e17324bc2d20764ea8d50103dbf5e9278e7a31f73295a5295ff16b->enter($__internal_ea02247895e17324bc2d20764ea8d50103dbf5e9278e7a31f73295a5295ff16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ea02247895e17324bc2d20764ea8d50103dbf5e9278e7a31f73295a5295ff16b->leave($__internal_ea02247895e17324bc2d20764ea8d50103dbf5e9278e7a31f73295a5295ff16b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_611696ce7c875c21c8a70dbea8c759635bce083591370fa7bf24f59f27e6517e = $this->env->getExtension("native_profiler");
        $__internal_611696ce7c875c21c8a70dbea8c759635bce083591370fa7bf24f59f27e6517e->enter($__internal_611696ce7c875c21c8a70dbea8c759635bce083591370fa7bf24f59f27e6517e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_611696ce7c875c21c8a70dbea8c759635bce083591370fa7bf24f59f27e6517e->leave($__internal_611696ce7c875c21c8a70dbea8c759635bce083591370fa7bf24f59f27e6517e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e9051c72db4aba435ed11d252ac08f10bbe528547415025851fcd93d70f5ae69 = $this->env->getExtension("native_profiler");
        $__internal_e9051c72db4aba435ed11d252ac08f10bbe528547415025851fcd93d70f5ae69->enter($__internal_e9051c72db4aba435ed11d252ac08f10bbe528547415025851fcd93d70f5ae69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e9051c72db4aba435ed11d252ac08f10bbe528547415025851fcd93d70f5ae69->leave($__internal_e9051c72db4aba435ed11d252ac08f10bbe528547415025851fcd93d70f5ae69_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
