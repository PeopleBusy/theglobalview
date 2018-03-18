<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_0686b450d569e5207f5dd08b74fb8fe729220a278b8bb503093c27e448b9d589 extends Twig_Template
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
        $__internal_2c5aeec1144f1f06598671af738bf43640b69edba0fa6ad6036408b6b6db1ba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c5aeec1144f1f06598671af738bf43640b69edba0fa6ad6036408b6b6db1ba2->enter($__internal_2c5aeec1144f1f06598671af738bf43640b69edba0fa6ad6036408b6b6db1ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_81d3d6f05bf7f4abd57abc1190319c2e879dc7ad852d6f20ba983047c247824a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81d3d6f05bf7f4abd57abc1190319c2e879dc7ad852d6f20ba983047c247824a->enter($__internal_81d3d6f05bf7f4abd57abc1190319c2e879dc7ad852d6f20ba983047c247824a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_2c5aeec1144f1f06598671af738bf43640b69edba0fa6ad6036408b6b6db1ba2->leave($__internal_2c5aeec1144f1f06598671af738bf43640b69edba0fa6ad6036408b6b6db1ba2_prof);

        
        $__internal_81d3d6f05bf7f4abd57abc1190319c2e879dc7ad852d6f20ba983047c247824a->leave($__internal_81d3d6f05bf7f4abd57abc1190319c2e879dc7ad852d6f20ba983047c247824a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
