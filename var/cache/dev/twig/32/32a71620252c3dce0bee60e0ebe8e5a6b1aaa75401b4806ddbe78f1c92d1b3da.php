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
        $__internal_918dc2c139ab8305d6adefd09b57445f13968fd8152a7e0d41b083fffee73428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_918dc2c139ab8305d6adefd09b57445f13968fd8152a7e0d41b083fffee73428->enter($__internal_918dc2c139ab8305d6adefd09b57445f13968fd8152a7e0d41b083fffee73428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_832c8f6f4f72fe4d3137db3fde3bfb7508d8f509b8476eec07f1af753ed052b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832c8f6f4f72fe4d3137db3fde3bfb7508d8f509b8476eec07f1af753ed052b7->enter($__internal_832c8f6f4f72fe4d3137db3fde3bfb7508d8f509b8476eec07f1af753ed052b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_918dc2c139ab8305d6adefd09b57445f13968fd8152a7e0d41b083fffee73428->leave($__internal_918dc2c139ab8305d6adefd09b57445f13968fd8152a7e0d41b083fffee73428_prof);

        
        $__internal_832c8f6f4f72fe4d3137db3fde3bfb7508d8f509b8476eec07f1af753ed052b7->leave($__internal_832c8f6f4f72fe4d3137db3fde3bfb7508d8f509b8476eec07f1af753ed052b7_prof);

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
