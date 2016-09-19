<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_fa2ce8316edd069dc6d357a24597a121b3639483bb60f454652b632f74e21fd6 extends Twig_Template
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
        $__internal_c509d46394da9ab1bf504088a70bebee6a008da9668f71f5fadc7271440c825d = $this->env->getExtension("native_profiler");
        $__internal_c509d46394da9ab1bf504088a70bebee6a008da9668f71f5fadc7271440c825d->enter($__internal_c509d46394da9ab1bf504088a70bebee6a008da9668f71f5fadc7271440c825d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c509d46394da9ab1bf504088a70bebee6a008da9668f71f5fadc7271440c825d->leave($__internal_c509d46394da9ab1bf504088a70bebee6a008da9668f71f5fadc7271440c825d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
