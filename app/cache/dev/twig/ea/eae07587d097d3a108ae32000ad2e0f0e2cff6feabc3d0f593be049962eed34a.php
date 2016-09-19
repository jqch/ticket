<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_1a0d2f74b8c4f7c4ee1f31aae00c7ad31ceb086ab805e19492ab0a5594f3d2ca extends Twig_Template
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
        $__internal_102e72f1dad89cbb32899043d0dfd170ef11cbe8c04b5042d278683050a06d39 = $this->env->getExtension("native_profiler");
        $__internal_102e72f1dad89cbb32899043d0dfd170ef11cbe8c04b5042d278683050a06d39->enter($__internal_102e72f1dad89cbb32899043d0dfd170ef11cbe8c04b5042d278683050a06d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_102e72f1dad89cbb32899043d0dfd170ef11cbe8c04b5042d278683050a06d39->leave($__internal_102e72f1dad89cbb32899043d0dfd170ef11cbe8c04b5042d278683050a06d39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
