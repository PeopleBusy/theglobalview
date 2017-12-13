<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_e756c9b35e3245737322110e7bf59608e5415a7010a74216843b16b4041cd8b8 extends Twig_Template
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
        $__internal_c476a9300f15ee9d640eed93852f915649f3174ba4ff6b23ec03258269c2e1f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c476a9300f15ee9d640eed93852f915649f3174ba4ff6b23ec03258269c2e1f1->enter($__internal_c476a9300f15ee9d640eed93852f915649f3174ba4ff6b23ec03258269c2e1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_644844a089f4d120da913ae1a598ccfba7b622987ce6cf2c83064543c750d449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_644844a089f4d120da913ae1a598ccfba7b622987ce6cf2c83064543c750d449->enter($__internal_644844a089f4d120da913ae1a598ccfba7b622987ce6cf2c83064543c750d449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_c476a9300f15ee9d640eed93852f915649f3174ba4ff6b23ec03258269c2e1f1->leave($__internal_c476a9300f15ee9d640eed93852f915649f3174ba4ff6b23ec03258269c2e1f1_prof);

        
        $__internal_644844a089f4d120da913ae1a598ccfba7b622987ce6cf2c83064543c750d449->leave($__internal_644844a089f4d120da913ae1a598ccfba7b622987ce6cf2c83064543c750d449_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
