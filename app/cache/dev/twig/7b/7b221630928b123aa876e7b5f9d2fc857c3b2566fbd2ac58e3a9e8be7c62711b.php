<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_c4d8231dcf79f608317138ff93a78b0152938384e974b5043767e9727ff104d3 extends Twig_Template
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
        $__internal_ef2ad0bba40ce14672d9527b247847fee97dceafe32c61e7fef792eeddefc313 = $this->env->getExtension("native_profiler");
        $__internal_ef2ad0bba40ce14672d9527b247847fee97dceafe32c61e7fef792eeddefc313->enter($__internal_ef2ad0bba40ce14672d9527b247847fee97dceafe32c61e7fef792eeddefc313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_ef2ad0bba40ce14672d9527b247847fee97dceafe32c61e7fef792eeddefc313->leave($__internal_ef2ad0bba40ce14672d9527b247847fee97dceafe32c61e7fef792eeddefc313_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
