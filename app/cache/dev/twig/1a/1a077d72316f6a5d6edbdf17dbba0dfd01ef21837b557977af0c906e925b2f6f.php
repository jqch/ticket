<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_990be54b18cfac05ced7191dfd506e8f5ff1cf45c81f623f9c85580ad6fef6af extends Twig_Template
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
        $__internal_639729de9d5cd99440d00f184e9103c5d3ea99226f6bd2f2c72df5c8fa69476d = $this->env->getExtension("native_profiler");
        $__internal_639729de9d5cd99440d00f184e9103c5d3ea99226f6bd2f2c72df5c8fa69476d->enter($__internal_639729de9d5cd99440d00f184e9103c5d3ea99226f6bd2f2c72df5c8fa69476d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_639729de9d5cd99440d00f184e9103c5d3ea99226f6bd2f2c72df5c8fa69476d->leave($__internal_639729de9d5cd99440d00f184e9103c5d3ea99226f6bd2f2c72df5c8fa69476d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
