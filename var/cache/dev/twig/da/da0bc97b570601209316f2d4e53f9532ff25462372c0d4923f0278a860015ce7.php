<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_e999c309926efc15881591657cd48a12515a60774e22d8d8e20b6d066bd7a138 extends Twig_Template
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
        $__internal_45bbd1c54af674d9d94d73d5ebef86c3e94bfe71ecf99f01aa6981bd75ef9233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45bbd1c54af674d9d94d73d5ebef86c3e94bfe71ecf99f01aa6981bd75ef9233->enter($__internal_45bbd1c54af674d9d94d73d5ebef86c3e94bfe71ecf99f01aa6981bd75ef9233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_a6212177e8d0a1da8c7c20665c5a9bb62902d1d2d5e6578c015fedae7f4f9d24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6212177e8d0a1da8c7c20665c5a9bb62902d1d2d5e6578c015fedae7f4f9d24->enter($__internal_a6212177e8d0a1da8c7c20665c5a9bb62902d1d2d5e6578c015fedae7f4f9d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_45bbd1c54af674d9d94d73d5ebef86c3e94bfe71ecf99f01aa6981bd75ef9233->leave($__internal_45bbd1c54af674d9d94d73d5ebef86c3e94bfe71ecf99f01aa6981bd75ef9233_prof);

        
        $__internal_a6212177e8d0a1da8c7c20665c5a9bb62902d1d2d5e6578c015fedae7f4f9d24->leave($__internal_a6212177e8d0a1da8c7c20665c5a9bb62902d1d2d5e6578c015fedae7f4f9d24_prof);

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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
