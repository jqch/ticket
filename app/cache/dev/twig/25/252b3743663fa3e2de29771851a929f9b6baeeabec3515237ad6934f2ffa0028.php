<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_1759cb01f1ccf81437f33f8ef76573bffcab9f4ef975180a0df1f57faa48f0ec extends Twig_Template
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
        $__internal_a248abf1d970c05db2f5d3b341174dac5eb0bb55ebd437e90be65e1564b3a654 = $this->env->getExtension("native_profiler");
        $__internal_a248abf1d970c05db2f5d3b341174dac5eb0bb55ebd437e90be65e1564b3a654->enter($__internal_a248abf1d970c05db2f5d3b341174dac5eb0bb55ebd437e90be65e1564b3a654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a248abf1d970c05db2f5d3b341174dac5eb0bb55ebd437e90be65e1564b3a654->leave($__internal_a248abf1d970c05db2f5d3b341174dac5eb0bb55ebd437e90be65e1564b3a654_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
