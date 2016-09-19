<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_9fb317fd7ede583a46a5611cb8cce6428b1bbbe704425bad60f8426e5eacb4bc extends Twig_Template
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
        $__internal_8040ef6c227c863680e4ec61ab23d6d63ac0edbc8cf2f5240b7427c6a98c16d6 = $this->env->getExtension("native_profiler");
        $__internal_8040ef6c227c863680e4ec61ab23d6d63ac0edbc8cf2f5240b7427c6a98c16d6->enter($__internal_8040ef6c227c863680e4ec61ab23d6d63ac0edbc8cf2f5240b7427c6a98c16d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_8040ef6c227c863680e4ec61ab23d6d63ac0edbc8cf2f5240b7427c6a98c16d6->leave($__internal_8040ef6c227c863680e4ec61ab23d6d63ac0edbc8cf2f5240b7427c6a98c16d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
