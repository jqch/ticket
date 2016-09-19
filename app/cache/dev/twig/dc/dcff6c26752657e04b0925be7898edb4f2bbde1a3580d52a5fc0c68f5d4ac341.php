<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_9ba8930038962f6f150a2b701f6a305ae48bb85221c4ce27eef7d3eacd89f9c4 extends Twig_Template
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
        $__internal_59aae83f41bee77f3c198d7ead9a9f30f4f9517d6eec2463f95ccd9fc894e7a4 = $this->env->getExtension("native_profiler");
        $__internal_59aae83f41bee77f3c198d7ead9a9f30f4f9517d6eec2463f95ccd9fc894e7a4->enter($__internal_59aae83f41bee77f3c198d7ead9a9f30f4f9517d6eec2463f95ccd9fc894e7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_59aae83f41bee77f3c198d7ead9a9f30f4f9517d6eec2463f95ccd9fc894e7a4->leave($__internal_59aae83f41bee77f3c198d7ead9a9f30f4f9517d6eec2463f95ccd9fc894e7a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
