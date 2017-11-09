<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_84a08d5aff659eb1162de69ab3af959857724d7b5a48bfe7bcead5a0bc9cc294 extends Twig_Template
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
        $__internal_ce5c2478eae1af13b222a2e41127c0de777bb3cb9f6544960163b8d0bc2fefb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce5c2478eae1af13b222a2e41127c0de777bb3cb9f6544960163b8d0bc2fefb7->enter($__internal_ce5c2478eae1af13b222a2e41127c0de777bb3cb9f6544960163b8d0bc2fefb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_c916eaf33f528c34eaeb3b91f1f577d95e76aa47f0fa50ed3985206cbb7406aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c916eaf33f528c34eaeb3b91f1f577d95e76aa47f0fa50ed3985206cbb7406aa->enter($__internal_c916eaf33f528c34eaeb3b91f1f577d95e76aa47f0fa50ed3985206cbb7406aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_ce5c2478eae1af13b222a2e41127c0de777bb3cb9f6544960163b8d0bc2fefb7->leave($__internal_ce5c2478eae1af13b222a2e41127c0de777bb3cb9f6544960163b8d0bc2fefb7_prof);

        
        $__internal_c916eaf33f528c34eaeb3b91f1f577d95e76aa47f0fa50ed3985206cbb7406aa->leave($__internal_c916eaf33f528c34eaeb3b91f1f577d95e76aa47f0fa50ed3985206cbb7406aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
