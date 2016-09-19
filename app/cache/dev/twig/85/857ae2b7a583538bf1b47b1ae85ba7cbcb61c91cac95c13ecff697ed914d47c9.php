<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ba12d507b74c4f8bf36016fcc41a85f98bd014a8f285b16b031a07768ab374b6 extends Twig_Template
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
        $__internal_0650195395e24495acef46de7cabf3790b3de0a69cd1087629582ddfa082d769 = $this->env->getExtension("native_profiler");
        $__internal_0650195395e24495acef46de7cabf3790b3de0a69cd1087629582ddfa082d769->enter($__internal_0650195395e24495acef46de7cabf3790b3de0a69cd1087629582ddfa082d769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0650195395e24495acef46de7cabf3790b3de0a69cd1087629582ddfa082d769->leave($__internal_0650195395e24495acef46de7cabf3790b3de0a69cd1087629582ddfa082d769_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
