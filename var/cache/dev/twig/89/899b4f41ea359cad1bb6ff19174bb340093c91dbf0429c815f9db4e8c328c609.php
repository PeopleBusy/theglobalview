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
        $__internal_91f36ecb3e5d15d49fc05a90f0ef7ad60b6971f13ccc5fc4a324ecb5b419c633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91f36ecb3e5d15d49fc05a90f0ef7ad60b6971f13ccc5fc4a324ecb5b419c633->enter($__internal_91f36ecb3e5d15d49fc05a90f0ef7ad60b6971f13ccc5fc4a324ecb5b419c633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_1281e0f4539779acdf3d335b053dbc92819f607a4cd0fca092551d595a42ee1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1281e0f4539779acdf3d335b053dbc92819f607a4cd0fca092551d595a42ee1d->enter($__internal_1281e0f4539779acdf3d335b053dbc92819f607a4cd0fca092551d595a42ee1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_91f36ecb3e5d15d49fc05a90f0ef7ad60b6971f13ccc5fc4a324ecb5b419c633->leave($__internal_91f36ecb3e5d15d49fc05a90f0ef7ad60b6971f13ccc5fc4a324ecb5b419c633_prof);

        
        $__internal_1281e0f4539779acdf3d335b053dbc92819f607a4cd0fca092551d595a42ee1d->leave($__internal_1281e0f4539779acdf3d335b053dbc92819f607a4cd0fca092551d595a42ee1d_prof);

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
