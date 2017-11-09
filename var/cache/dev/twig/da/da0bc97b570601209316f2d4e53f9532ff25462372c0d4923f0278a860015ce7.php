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
        $__internal_f0304fa5104d74fda4b578c8dcdcb945e0ef8f9d475ff5b03590cdf575616231 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0304fa5104d74fda4b578c8dcdcb945e0ef8f9d475ff5b03590cdf575616231->enter($__internal_f0304fa5104d74fda4b578c8dcdcb945e0ef8f9d475ff5b03590cdf575616231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_482c1e7729fd4d0300401da12df1524e7cef226fdea1ec1a92ff6472954383a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_482c1e7729fd4d0300401da12df1524e7cef226fdea1ec1a92ff6472954383a3->enter($__internal_482c1e7729fd4d0300401da12df1524e7cef226fdea1ec1a92ff6472954383a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_f0304fa5104d74fda4b578c8dcdcb945e0ef8f9d475ff5b03590cdf575616231->leave($__internal_f0304fa5104d74fda4b578c8dcdcb945e0ef8f9d475ff5b03590cdf575616231_prof);

        
        $__internal_482c1e7729fd4d0300401da12df1524e7cef226fdea1ec1a92ff6472954383a3->leave($__internal_482c1e7729fd4d0300401da12df1524e7cef226fdea1ec1a92ff6472954383a3_prof);

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
", "@Framework/Form/money_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
