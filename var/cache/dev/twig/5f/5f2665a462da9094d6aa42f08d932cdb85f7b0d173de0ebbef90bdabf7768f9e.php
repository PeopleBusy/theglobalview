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
        $__internal_226584c156ae1b7e6c91e6c8090da56660aefd90e9b089837db2cf116990211a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_226584c156ae1b7e6c91e6c8090da56660aefd90e9b089837db2cf116990211a->enter($__internal_226584c156ae1b7e6c91e6c8090da56660aefd90e9b089837db2cf116990211a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_b392fc967dc72507a70516120b490cb44a29552d8da6b410d4387fda523cc449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b392fc967dc72507a70516120b490cb44a29552d8da6b410d4387fda523cc449->enter($__internal_b392fc967dc72507a70516120b490cb44a29552d8da6b410d4387fda523cc449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_226584c156ae1b7e6c91e6c8090da56660aefd90e9b089837db2cf116990211a->leave($__internal_226584c156ae1b7e6c91e6c8090da56660aefd90e9b089837db2cf116990211a_prof);

        
        $__internal_b392fc967dc72507a70516120b490cb44a29552d8da6b410d4387fda523cc449->leave($__internal_b392fc967dc72507a70516120b490cb44a29552d8da6b410d4387fda523cc449_prof);

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
