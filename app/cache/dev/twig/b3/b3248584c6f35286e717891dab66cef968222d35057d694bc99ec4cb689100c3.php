<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_48cc43d1503729bd9b41b3125825381d3779ad6d59bae470508723baeac22cf6 extends Twig_Template
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
        $__internal_a6a963ee0714660c21fc2a97dbd2da60a5c9b3b6791263f2f854c2697cc9a9db = $this->env->getExtension("native_profiler");
        $__internal_a6a963ee0714660c21fc2a97dbd2da60a5c9b3b6791263f2f854c2697cc9a9db->enter($__internal_a6a963ee0714660c21fc2a97dbd2da60a5c9b3b6791263f2f854c2697cc9a9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a6a963ee0714660c21fc2a97dbd2da60a5c9b3b6791263f2f854c2697cc9a9db->leave($__internal_a6a963ee0714660c21fc2a97dbd2da60a5c9b3b6791263f2f854c2697cc9a9db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
