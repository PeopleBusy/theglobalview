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
        $__internal_e924a0b141e991ccf83d1976ab8dc7133b992824d2eb8cc93f724a7e12d4e682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e924a0b141e991ccf83d1976ab8dc7133b992824d2eb8cc93f724a7e12d4e682->enter($__internal_e924a0b141e991ccf83d1976ab8dc7133b992824d2eb8cc93f724a7e12d4e682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_53b48aad1aaa9b3e9d82b36cf70bb159e565d48772ee94bf95c616a8ca3cfa42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b48aad1aaa9b3e9d82b36cf70bb159e565d48772ee94bf95c616a8ca3cfa42->enter($__internal_53b48aad1aaa9b3e9d82b36cf70bb159e565d48772ee94bf95c616a8ca3cfa42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_e924a0b141e991ccf83d1976ab8dc7133b992824d2eb8cc93f724a7e12d4e682->leave($__internal_e924a0b141e991ccf83d1976ab8dc7133b992824d2eb8cc93f724a7e12d4e682_prof);

        
        $__internal_53b48aad1aaa9b3e9d82b36cf70bb159e565d48772ee94bf95c616a8ca3cfa42->leave($__internal_53b48aad1aaa9b3e9d82b36cf70bb159e565d48772ee94bf95c616a8ca3cfa42_prof);

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
