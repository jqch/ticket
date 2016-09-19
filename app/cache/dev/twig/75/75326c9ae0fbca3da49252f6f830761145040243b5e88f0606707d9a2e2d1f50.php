<?php

/* ::base.html.twig */
class __TwigTemplate_86b84ed56ef8fa785844563ee035cd7c66f23bbaf41b25f942fc6f65ca43d1e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9ba692adb49b1247dc872d3d7b1ef138e58e9fba288555899521bad7e459d89 = $this->env->getExtension("native_profiler");
        $__internal_a9ba692adb49b1247dc872d3d7b1ef138e58e9fba288555899521bad7e459d89->enter($__internal_a9ba692adb49b1247dc872d3d7b1ef138e58e9fba288555899521bad7e459d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
        
        $__internal_a9ba692adb49b1247dc872d3d7b1ef138e58e9fba288555899521bad7e459d89->leave($__internal_a9ba692adb49b1247dc872d3d7b1ef138e58e9fba288555899521bad7e459d89_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b329511d5dda77eedd01de41a6f2c86c9a23259fd994f174393be322833fa24f = $this->env->getExtension("native_profiler");
        $__internal_b329511d5dda77eedd01de41a6f2c86c9a23259fd994f174393be322833fa24f->enter($__internal_b329511d5dda77eedd01de41a6f2c86c9a23259fd994f174393be322833fa24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenido!";
        
        $__internal_b329511d5dda77eedd01de41a6f2c86c9a23259fd994f174393be322833fa24f->leave($__internal_b329511d5dda77eedd01de41a6f2c86c9a23259fd994f174393be322833fa24f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_709afd4b5810ed3f8aa1f6baf65962e9a7db2380fe026529785f571cb1dba582 = $this->env->getExtension("native_profiler");
        $__internal_709afd4b5810ed3f8aa1f6baf65962e9a7db2380fe026529785f571cb1dba582->enter($__internal_709afd4b5810ed3f8aa1f6baf65962e9a7db2380fe026529785f571cb1dba582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css\">
        ";
        
        $__internal_709afd4b5810ed3f8aa1f6baf65962e9a7db2380fe026529785f571cb1dba582->leave($__internal_709afd4b5810ed3f8aa1f6baf65962e9a7db2380fe026529785f571cb1dba582_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7a247621eca2490a9d466fdf9eaf440b48120808e39a886ca1c30cb24641043 = $this->env->getExtension("native_profiler");
        $__internal_d7a247621eca2490a9d466fdf9eaf440b48120808e39a886ca1c30cb24641043->enter($__internal_d7a247621eca2490a9d466fdf9eaf440b48120808e39a886ca1c30cb24641043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d7a247621eca2490a9d466fdf9eaf440b48120808e39a886ca1c30cb24641043->leave($__internal_d7a247621eca2490a9d466fdf9eaf440b48120808e39a886ca1c30cb24641043_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e57a60e2f7a97ce04ecb44b7169b39b2db2f773a7dce9f6cc3be44fc8944898d = $this->env->getExtension("native_profiler");
        $__internal_e57a60e2f7a97ce04ecb44b7169b39b2db2f773a7dce9f6cc3be44fc8944898d->enter($__internal_e57a60e2f7a97ce04ecb44b7169b39b2db2f773a7dce9f6cc3be44fc8944898d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            <script src=\"http://code.jquery.com/jquery-1.11.0.min.js\"></script>
            <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
            <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_e57a60e2f7a97ce04ecb44b7169b39b2db2f773a7dce9f6cc3be44fc8944898d->leave($__internal_e57a60e2f7a97ce04ecb44b7169b39b2db2f773a7dce9f6cc3be44fc8944898d_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 16,  105 => 15,  102 => 14,  96 => 13,  85 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 19,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Bienvenido!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*             <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>*/
/*             <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*             <script src="{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}"></script>*/
/*             <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
