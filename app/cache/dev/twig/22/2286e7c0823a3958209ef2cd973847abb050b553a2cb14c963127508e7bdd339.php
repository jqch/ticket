<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_76fb5d316ef3b8fe1441b19912869377b61c907caa4e0c9298ab021068ef9c2e extends Twig_Template
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
        $__internal_0d4d93c4acd74d66cd5d2677fd49881c61c1a6841b0f0a9186067a304fb46b50 = $this->env->getExtension("native_profiler");
        $__internal_0d4d93c4acd74d66cd5d2677fd49881c61c1a6841b0f0a9186067a304fb46b50->enter($__internal_0d4d93c4acd74d66cd5d2677fd49881c61c1a6841b0f0a9186067a304fb46b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_0d4d93c4acd74d66cd5d2677fd49881c61c1a6841b0f0a9186067a304fb46b50->leave($__internal_0d4d93c4acd74d66cd5d2677fd49881c61c1a6841b0f0a9186067a304fb46b50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
