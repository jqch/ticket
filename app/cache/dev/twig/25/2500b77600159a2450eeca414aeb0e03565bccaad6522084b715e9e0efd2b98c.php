<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_a92b34003e38bcd48fd4f67400ca50b388e244a19f1af05d700902fdd43e272f extends Twig_Template
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
        $__internal_1e8d41021884a73825f6184410fdb8fad8de9a4e35824b5879afa05ec8cc4cef = $this->env->getExtension("native_profiler");
        $__internal_1e8d41021884a73825f6184410fdb8fad8de9a4e35824b5879afa05ec8cc4cef->enter($__internal_1e8d41021884a73825f6184410fdb8fad8de9a4e35824b5879afa05ec8cc4cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_1e8d41021884a73825f6184410fdb8fad8de9a4e35824b5879afa05ec8cc4cef->leave($__internal_1e8d41021884a73825f6184410fdb8fad8de9a4e35824b5879afa05ec8cc4cef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
