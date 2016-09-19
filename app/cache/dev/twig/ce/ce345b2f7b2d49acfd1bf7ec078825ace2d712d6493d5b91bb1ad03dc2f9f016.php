<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_43eb8fca86a50d6ad7c6642cddbfaa0895a15a765daf6c2f7fe24277d87ecb40 extends Twig_Template
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
        $__internal_6a1feac6b3c4183259c8c98a9bc2fdd7a91f14974c1cb829e0edd8471ac8a337 = $this->env->getExtension("native_profiler");
        $__internal_6a1feac6b3c4183259c8c98a9bc2fdd7a91f14974c1cb829e0edd8471ac8a337->enter($__internal_6a1feac6b3c4183259c8c98a9bc2fdd7a91f14974c1cb829e0edd8471ac8a337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6a1feac6b3c4183259c8c98a9bc2fdd7a91f14974c1cb829e0edd8471ac8a337->leave($__internal_6a1feac6b3c4183259c8c98a9bc2fdd7a91f14974c1cb829e0edd8471ac8a337_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
