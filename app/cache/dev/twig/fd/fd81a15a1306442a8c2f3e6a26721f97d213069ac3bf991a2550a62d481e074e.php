<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_e73c33a3eaa4a3135f19c7da6375ca38992858174558b6cd98a3ce06566e4456 extends Twig_Template
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
        $__internal_360babce6fedb213ac734630e55b67e5a5fc707222462fb3b80f0d08fa874845 = $this->env->getExtension("native_profiler");
        $__internal_360babce6fedb213ac734630e55b67e5a5fc707222462fb3b80f0d08fa874845->enter($__internal_360babce6fedb213ac734630e55b67e5a5fc707222462fb3b80f0d08fa874845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_360babce6fedb213ac734630e55b67e5a5fc707222462fb3b80f0d08fa874845->leave($__internal_360babce6fedb213ac734630e55b67e5a5fc707222462fb3b80f0d08fa874845_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
