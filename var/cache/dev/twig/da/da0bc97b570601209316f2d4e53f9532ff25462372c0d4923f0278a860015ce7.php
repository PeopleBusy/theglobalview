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
        $__internal_87e590f94636e28082505da661204c3af9bf1de981a9162dd3b7bc53abf2f1db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87e590f94636e28082505da661204c3af9bf1de981a9162dd3b7bc53abf2f1db->enter($__internal_87e590f94636e28082505da661204c3af9bf1de981a9162dd3b7bc53abf2f1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_a9a2949cacf4d4d3d8de0c86b1e03905ea105221e61fdcdffba6e403e02141e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9a2949cacf4d4d3d8de0c86b1e03905ea105221e61fdcdffba6e403e02141e0->enter($__internal_a9a2949cacf4d4d3d8de0c86b1e03905ea105221e61fdcdffba6e403e02141e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_87e590f94636e28082505da661204c3af9bf1de981a9162dd3b7bc53abf2f1db->leave($__internal_87e590f94636e28082505da661204c3af9bf1de981a9162dd3b7bc53abf2f1db_prof);

        
        $__internal_a9a2949cacf4d4d3d8de0c86b1e03905ea105221e61fdcdffba6e403e02141e0->leave($__internal_a9a2949cacf4d4d3d8de0c86b1e03905ea105221e61fdcdffba6e403e02141e0_prof);

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
