<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_bb952cb851519ecf766c087c29b6c56ea7d44eac3ab97b027829ba0536531959 extends Twig_Template
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
        $__internal_ed9c90581be8ed6682c9e3e9205fd24b0de6a14a6b1dddd72ab5696420f11b10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed9c90581be8ed6682c9e3e9205fd24b0de6a14a6b1dddd72ab5696420f11b10->enter($__internal_ed9c90581be8ed6682c9e3e9205fd24b0de6a14a6b1dddd72ab5696420f11b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_14445ae2de752c9a25e449a1a44b18461a023a2443ae30091790a57c6f70b461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14445ae2de752c9a25e449a1a44b18461a023a2443ae30091790a57c6f70b461->enter($__internal_14445ae2de752c9a25e449a1a44b18461a023a2443ae30091790a57c6f70b461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ed9c90581be8ed6682c9e3e9205fd24b0de6a14a6b1dddd72ab5696420f11b10->leave($__internal_ed9c90581be8ed6682c9e3e9205fd24b0de6a14a6b1dddd72ab5696420f11b10_prof);

        
        $__internal_14445ae2de752c9a25e449a1a44b18461a023a2443ae30091790a57c6f70b461->leave($__internal_14445ae2de752c9a25e449a1a44b18461a023a2443ae30091790a57c6f70b461_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
