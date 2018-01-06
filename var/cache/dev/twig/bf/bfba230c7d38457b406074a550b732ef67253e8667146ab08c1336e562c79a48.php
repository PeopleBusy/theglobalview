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
        $__internal_7f4473c7431b140feba3669cc675ada6aaa2b015a5bf6db9e31138734d20991d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f4473c7431b140feba3669cc675ada6aaa2b015a5bf6db9e31138734d20991d->enter($__internal_7f4473c7431b140feba3669cc675ada6aaa2b015a5bf6db9e31138734d20991d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_8dc15e54a8330caa8cb4bf1ab5a58b5e1179567ccbad6418104ba93e2dcd8a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc15e54a8330caa8cb4bf1ab5a58b5e1179567ccbad6418104ba93e2dcd8a4e->enter($__internal_8dc15e54a8330caa8cb4bf1ab5a58b5e1179567ccbad6418104ba93e2dcd8a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_7f4473c7431b140feba3669cc675ada6aaa2b015a5bf6db9e31138734d20991d->leave($__internal_7f4473c7431b140feba3669cc675ada6aaa2b015a5bf6db9e31138734d20991d_prof);

        
        $__internal_8dc15e54a8330caa8cb4bf1ab5a58b5e1179567ccbad6418104ba93e2dcd8a4e->leave($__internal_8dc15e54a8330caa8cb4bf1ab5a58b5e1179567ccbad6418104ba93e2dcd8a4e_prof);

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
