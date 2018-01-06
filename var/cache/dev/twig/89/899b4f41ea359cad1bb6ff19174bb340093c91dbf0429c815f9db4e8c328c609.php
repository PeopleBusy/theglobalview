<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_219769d5c522f71a8b1adf7807920c0e58637a213593cf8fb05073530a997c02 extends Twig_Template
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
        $__internal_45249a91e765ba651ebdc95ffca7b5db713e61a3ec66d45dfb3f443838f3fd71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45249a91e765ba651ebdc95ffca7b5db713e61a3ec66d45dfb3f443838f3fd71->enter($__internal_45249a91e765ba651ebdc95ffca7b5db713e61a3ec66d45dfb3f443838f3fd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_b8380f4f875e2e12fbf73cc80364566b37582d2f1003d1fad90df3cd71805d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8380f4f875e2e12fbf73cc80364566b37582d2f1003d1fad90df3cd71805d36->enter($__internal_b8380f4f875e2e12fbf73cc80364566b37582d2f1003d1fad90df3cd71805d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_45249a91e765ba651ebdc95ffca7b5db713e61a3ec66d45dfb3f443838f3fd71->leave($__internal_45249a91e765ba651ebdc95ffca7b5db713e61a3ec66d45dfb3f443838f3fd71_prof);

        
        $__internal_b8380f4f875e2e12fbf73cc80364566b37582d2f1003d1fad90df3cd71805d36->leave($__internal_b8380f4f875e2e12fbf73cc80364566b37582d2f1003d1fad90df3cd71805d36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
