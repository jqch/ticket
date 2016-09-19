<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_b445abe9ccb2e686381a359e024bf4de984cbec46eb6b828f305ded707328428 extends Twig_Template
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
        $__internal_f29ea158724c7e37122dfa4d98e1cc7f4f3c8154500e0e0521905871beb63eb5 = $this->env->getExtension("native_profiler");
        $__internal_f29ea158724c7e37122dfa4d98e1cc7f4f3c8154500e0e0521905871beb63eb5->enter($__internal_f29ea158724c7e37122dfa4d98e1cc7f4f3c8154500e0e0521905871beb63eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f29ea158724c7e37122dfa4d98e1cc7f4f3c8154500e0e0521905871beb63eb5->leave($__internal_f29ea158724c7e37122dfa4d98e1cc7f4f3c8154500e0e0521905871beb63eb5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
