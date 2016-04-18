<?php

/* base.html.twig */
class __TwigTemplate_511d9add2ab4e2e77353fb5fdce348638843d263500000c620f57752d8e251b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a09cf72ceffe2ccdedd0e0bb36bb8d7826931aa9660487b70288f9b2a25efc87 = $this->env->getExtension("native_profiler");
        $__internal_a09cf72ceffe2ccdedd0e0bb36bb8d7826931aa9660487b70288f9b2a25efc87->enter($__internal_a09cf72ceffe2ccdedd0e0bb36bb8d7826931aa9660487b70288f9b2a25efc87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\">
    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    ";
        // line 20
        echo "
    <!-- Custom styles for this template -->
    ";
        // line 23
        echo "
    ";
        // line 25
        echo "    ";
        // line 26
        echo "    ";
        // line 27
        echo "
    ";
        // line 29
        echo "    ";
        // line 30
        echo "    ";
        // line 31
        echo "    ";
        // line 32
        echo "    ";
        // line 33
        echo "</head>

<body>

<div class=\"container\">
    <div class=\"header clearfix\">
        <nav>
            <ul class=\"nav nav-pills pull-right\">
                <li role=\"presentation\" class=\"active\"><a href=\"./\">Home</a></li>
                <li role=\"presentation\"><a href=\"./create\">Add Todo</a></li>
                <li role=\"presentation\"><a href=\"#\">About</a></li>
                <li role=\"presentation\"><a href=\"#\">Contact</a></li>
            </ul>
        </nav>
        <h3 class=\"text-muted\">Tadaa List</h3>
    </div>

    <div class=\"jumbotron\">
        <h1>Tadaa List</h1>
        <p class=\"lead\">Welcome to your personal task organizer.</p>
        <p><a class=\"btn btn-lg btn-success\" href=\"./signup\" role=\"button\">Sign up today</a></p>
    </div>

    ";
        // line 57
        echo "        ";
        // line 58
        echo "        ";
        // line 59
        echo "

    ";
        // line 62
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "
    <footer class=\"footer\">
        <p></p>
        <p class=\"bg-primary\">&copy; 2016 Huco618 Company, Inc.<br></p>
    </footer>

</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
</body>
</html>
";
        
        $__internal_a09cf72ceffe2ccdedd0e0bb36bb8d7826931aa9660487b70288f9b2a25efc87->leave($__internal_a09cf72ceffe2ccdedd0e0bb36bb8d7826931aa9660487b70288f9b2a25efc87_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_f61ada00542c10a1c2c0070f09c295b7869ac626b51a707580296fb59f560132 = $this->env->getExtension("native_profiler");
        $__internal_f61ada00542c10a1c2c0070f09c295b7869ac626b51a707580296fb59f560132->enter($__internal_f61ada00542c10a1c2c0070f09c295b7869ac626b51a707580296fb59f560132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f61ada00542c10a1c2c0070f09c295b7869ac626b51a707580296fb59f560132->leave($__internal_f61ada00542c10a1c2c0070f09c295b7869ac626b51a707580296fb59f560132_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_159d357f2b376d983a449af3c8fa921bc475a2dc1debef60ad68a61cadcb8fe2 = $this->env->getExtension("native_profiler");
        $__internal_159d357f2b376d983a449af3c8fa921bc475a2dc1debef60ad68a61cadcb8fe2->enter($__internal_159d357f2b376d983a449af3c8fa921bc475a2dc1debef60ad68a61cadcb8fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_159d357f2b376d983a449af3c8fa921bc475a2dc1debef60ad68a61cadcb8fe2->leave($__internal_159d357f2b376d983a449af3c8fa921bc475a2dc1debef60ad68a61cadcb8fe2_prof);

    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        $__internal_6955a5028ca6a85e21729f13b58f0a54430f1aa0fa003b8b99df15602c10a612 = $this->env->getExtension("native_profiler");
        $__internal_6955a5028ca6a85e21729f13b58f0a54430f1aa0fa003b8b99df15602c10a612->enter($__internal_6955a5028ca6a85e21729f13b58f0a54430f1aa0fa003b8b99df15602c10a612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6955a5028ca6a85e21729f13b58f0a54430f1aa0fa003b8b99df15602c10a612->leave($__internal_6955a5028ca6a85e21729f13b58f0a54430f1aa0fa003b8b99df15602c10a612_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 62,  143 => 16,  131 => 12,  111 => 63,  108 => 62,  104 => 59,  102 => 58,  100 => 57,  75 => 33,  73 => 32,  71 => 31,  69 => 30,  67 => 29,  64 => 27,  62 => 26,  60 => 25,  57 => 23,  53 => 20,  47 => 17,  45 => 16,  38 => 12,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <link rel="icon" href="../../favicon.ico">*/
/* */
/*     <title>{% block title %}Welcome!{% endblock %}</title>*/
/* */
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">*/
/*     {% block stylesheets %}{% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/*     {#<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">#}*/
/* */
/*     <!-- Custom styles for this template -->*/
/*     {#<link href="jumbotron-narrow.css" rel="stylesheet">#}*/
/* */
/*     {#<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->#}*/
/*     {#<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->#}*/
/*     {#<script src="../../assets/js/ie-emulation-modes-warning.js"></script>#}*/
/* */
/*     {#<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->#}*/
/*     {#<!--[if lt IE 9]>#}*/
/*     {#<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>#}*/
/*     {#<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>#}*/
/*     {#<![endif]-->#}*/
/* </head>*/
/* */
/* <body>*/
/* */
/* <div class="container">*/
/*     <div class="header clearfix">*/
/*         <nav>*/
/*             <ul class="nav nav-pills pull-right">*/
/*                 <li role="presentation" class="active"><a href="./">Home</a></li>*/
/*                 <li role="presentation"><a href="./create">Add Todo</a></li>*/
/*                 <li role="presentation"><a href="#">About</a></li>*/
/*                 <li role="presentation"><a href="#">Contact</a></li>*/
/*             </ul>*/
/*         </nav>*/
/*         <h3 class="text-muted">Tadaa List</h3>*/
/*     </div>*/
/* */
/*     <div class="jumbotron">*/
/*         <h1>Tadaa List</h1>*/
/*         <p class="lead">Welcome to your personal task organizer.</p>*/
/*         <p><a class="btn btn-lg btn-success" href="./signup" role="button">Sign up today</a></p>*/
/*     </div>*/
/* */
/*     {#<div class="row marketing">#}*/
/*         {#<div class="col-lg-6">#}*/
/*         {#</div>#}*/
/* */
/* */
/*     {#</div>#}*/
/*             {% block body %}{% endblock %}*/
/* */
/*     <footer class="footer">*/
/*         <p></p>*/
/*         <p class="bg-primary">&copy; 2016 Huco618 Company, Inc.<br></p>*/
/*     </footer>*/
/* */
/* </div> <!-- /container -->*/
/* */
/* */
/* <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/* <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>*/
/* </body>*/
/* </html>*/
/* */
