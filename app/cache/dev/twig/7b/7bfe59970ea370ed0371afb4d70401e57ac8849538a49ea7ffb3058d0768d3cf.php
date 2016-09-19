<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_8932ab0c33c1196b533b0d103a98f06927e193a73ace45038da31aa427f2411f extends Twig_Template
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
        $__internal_529077be313c60ee621a6db714acbfc74d7b56d9850e784dff7bf152516beb96 = $this->env->getExtension("native_profiler");
        $__internal_529077be313c60ee621a6db714acbfc74d7b56d9850e784dff7bf152516beb96->enter($__internal_529077be313c60ee621a6db714acbfc74d7b56d9850e784dff7bf152516beb96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_529077be313c60ee621a6db714acbfc74d7b56d9850e784dff7bf152516beb96->leave($__internal_529077be313c60ee621a6db714acbfc74d7b56d9850e784dff7bf152516beb96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
