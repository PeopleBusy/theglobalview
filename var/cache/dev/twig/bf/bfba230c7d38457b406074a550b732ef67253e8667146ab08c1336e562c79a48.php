<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_68f23f8cdf0c6fd2c4f770126a0cb229a89959ef007c70f8ed4d687d9cb81ba1 extends Twig_Template
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
        $__internal_a3627deb249b5146c7f8666385c60f5d156320718d8e07131994a1c2f8e3d64b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3627deb249b5146c7f8666385c60f5d156320718d8e07131994a1c2f8e3d64b->enter($__internal_a3627deb249b5146c7f8666385c60f5d156320718d8e07131994a1c2f8e3d64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_522b330141018159d287d25dc801b7872573a7a75e28b672be19cb950fe93cf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_522b330141018159d287d25dc801b7872573a7a75e28b672be19cb950fe93cf4->enter($__internal_522b330141018159d287d25dc801b7872573a7a75e28b672be19cb950fe93cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_a3627deb249b5146c7f8666385c60f5d156320718d8e07131994a1c2f8e3d64b->leave($__internal_a3627deb249b5146c7f8666385c60f5d156320718d8e07131994a1c2f8e3d64b_prof);

        
        $__internal_522b330141018159d287d25dc801b7872573a7a75e28b672be19cb950fe93cf4->leave($__internal_522b330141018159d287d25dc801b7872573a7a75e28b672be19cb950fe93cf4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
