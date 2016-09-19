<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_d2259a197e116859d4d56ec5c50766a9145960d969e4889d323acef5649dc5e0 extends Twig_Template
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
        $__internal_9e2ddb29499c5d77512ad77fe4f9ccae314cea6684c71ae16a4697c3baf71ef1 = $this->env->getExtension("native_profiler");
        $__internal_9e2ddb29499c5d77512ad77fe4f9ccae314cea6684c71ae16a4697c3baf71ef1->enter($__internal_9e2ddb29499c5d77512ad77fe4f9ccae314cea6684c71ae16a4697c3baf71ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_9e2ddb29499c5d77512ad77fe4f9ccae314cea6684c71ae16a4697c3baf71ef1->leave($__internal_9e2ddb29499c5d77512ad77fe4f9ccae314cea6684c71ae16a4697c3baf71ef1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
