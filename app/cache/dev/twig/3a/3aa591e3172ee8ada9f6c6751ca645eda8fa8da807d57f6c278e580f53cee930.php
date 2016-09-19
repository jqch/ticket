<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c235d75b0b3730092250aacb0c34f0362fce6819615cdbecec5495323a80f64c extends Twig_Template
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
        $__internal_6cc1deb76fdc4ee17ddf8e4b7d49589bbcb6c21b30436ede8802bd9de8c38511 = $this->env->getExtension("native_profiler");
        $__internal_6cc1deb76fdc4ee17ddf8e4b7d49589bbcb6c21b30436ede8802bd9de8c38511->enter($__internal_6cc1deb76fdc4ee17ddf8e4b7d49589bbcb6c21b30436ede8802bd9de8c38511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6cc1deb76fdc4ee17ddf8e4b7d49589bbcb6c21b30436ede8802bd9de8c38511->leave($__internal_6cc1deb76fdc4ee17ddf8e4b7d49589bbcb6c21b30436ede8802bd9de8c38511_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
