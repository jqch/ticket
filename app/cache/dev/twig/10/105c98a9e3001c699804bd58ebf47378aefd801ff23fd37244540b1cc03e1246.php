<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a44fc2fd1169a1a0ae637ad0df9d080ad4c07daccd95ebe4ecbe5d59ee943dc8 extends Twig_Template
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
        $__internal_b596ff71a4460a06462f45545e5a380da378a6a057909d9321b0525db00d9c8d = $this->env->getExtension("native_profiler");
        $__internal_b596ff71a4460a06462f45545e5a380da378a6a057909d9321b0525db00d9c8d->enter($__internal_b596ff71a4460a06462f45545e5a380da378a6a057909d9321b0525db00d9c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b596ff71a4460a06462f45545e5a380da378a6a057909d9321b0525db00d9c8d->leave($__internal_b596ff71a4460a06462f45545e5a380da378a6a057909d9321b0525db00d9c8d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
