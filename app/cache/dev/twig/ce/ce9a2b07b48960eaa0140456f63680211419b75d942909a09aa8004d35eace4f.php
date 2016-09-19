<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_47c7c0ebac350b6314517b7bfa49b9652ce51eea583a82d7b57aa3aa917db755 extends Twig_Template
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
        $__internal_9e6d682f174b6070e9840de978036803e6bda50932289fe3d69e6866392d1597 = $this->env->getExtension("native_profiler");
        $__internal_9e6d682f174b6070e9840de978036803e6bda50932289fe3d69e6866392d1597->enter($__internal_9e6d682f174b6070e9840de978036803e6bda50932289fe3d69e6866392d1597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9e6d682f174b6070e9840de978036803e6bda50932289fe3d69e6866392d1597->leave($__internal_9e6d682f174b6070e9840de978036803e6bda50932289fe3d69e6866392d1597_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
