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
        $__internal_2160d11b99e36fceba7ae23991efbff082dcdf9bd320e5019e41201e658b9534 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2160d11b99e36fceba7ae23991efbff082dcdf9bd320e5019e41201e658b9534->enter($__internal_2160d11b99e36fceba7ae23991efbff082dcdf9bd320e5019e41201e658b9534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_82453a4da56b8b21c97f36514f1069e0c2d1161014896342a7736bfc18f05f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82453a4da56b8b21c97f36514f1069e0c2d1161014896342a7736bfc18f05f96->enter($__internal_82453a4da56b8b21c97f36514f1069e0c2d1161014896342a7736bfc18f05f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_2160d11b99e36fceba7ae23991efbff082dcdf9bd320e5019e41201e658b9534->leave($__internal_2160d11b99e36fceba7ae23991efbff082dcdf9bd320e5019e41201e658b9534_prof);

        
        $__internal_82453a4da56b8b21c97f36514f1069e0c2d1161014896342a7736bfc18f05f96->leave($__internal_82453a4da56b8b21c97f36514f1069e0c2d1161014896342a7736bfc18f05f96_prof);

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