<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_f08dd98d6e43b7fbdb2b10081c6c18daf7cd3365e838deeb628c7a2be93633b2 extends Twig_Template
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
        $__internal_4234d7e70985dbafb2f258f34d1e9009c031489f618114c41d0c326a8639b57b = $this->env->getExtension("native_profiler");
        $__internal_4234d7e70985dbafb2f258f34d1e9009c031489f618114c41d0c326a8639b57b->enter($__internal_4234d7e70985dbafb2f258f34d1e9009c031489f618114c41d0c326a8639b57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_4234d7e70985dbafb2f258f34d1e9009c031489f618114c41d0c326a8639b57b->leave($__internal_4234d7e70985dbafb2f258f34d1e9009c031489f618114c41d0c326a8639b57b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
