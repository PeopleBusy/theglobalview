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
        $__internal_b93acca63c3047bbae9df2439c48266b05928fb19217a6bcec7787f54cfa56b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b93acca63c3047bbae9df2439c48266b05928fb19217a6bcec7787f54cfa56b5->enter($__internal_b93acca63c3047bbae9df2439c48266b05928fb19217a6bcec7787f54cfa56b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_3a08fc8ab310bc686bfaba6bf64b465d7282a8bad622f85bce154e95645a2f69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a08fc8ab310bc686bfaba6bf64b465d7282a8bad622f85bce154e95645a2f69->enter($__internal_3a08fc8ab310bc686bfaba6bf64b465d7282a8bad622f85bce154e95645a2f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_b93acca63c3047bbae9df2439c48266b05928fb19217a6bcec7787f54cfa56b5->leave($__internal_b93acca63c3047bbae9df2439c48266b05928fb19217a6bcec7787f54cfa56b5_prof);

        
        $__internal_3a08fc8ab310bc686bfaba6bf64b465d7282a8bad622f85bce154e95645a2f69->leave($__internal_3a08fc8ab310bc686bfaba6bf64b465d7282a8bad622f85bce154e95645a2f69_prof);

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
", "@Framework/Form/reset_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
