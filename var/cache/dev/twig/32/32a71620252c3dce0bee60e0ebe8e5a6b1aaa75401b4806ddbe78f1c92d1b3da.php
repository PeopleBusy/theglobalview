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
        $__internal_c3f739e8fe0f0e0c78f5f4d7b1ddf635427e6f197a21a229b8a414d937ad0556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3f739e8fe0f0e0c78f5f4d7b1ddf635427e6f197a21a229b8a414d937ad0556->enter($__internal_c3f739e8fe0f0e0c78f5f4d7b1ddf635427e6f197a21a229b8a414d937ad0556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_cbf56875f29e0dd9aa55e898b91ff981331aa8019637e9c811ef6dd02cd5af57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbf56875f29e0dd9aa55e898b91ff981331aa8019637e9c811ef6dd02cd5af57->enter($__internal_cbf56875f29e0dd9aa55e898b91ff981331aa8019637e9c811ef6dd02cd5af57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_c3f739e8fe0f0e0c78f5f4d7b1ddf635427e6f197a21a229b8a414d937ad0556->leave($__internal_c3f739e8fe0f0e0c78f5f4d7b1ddf635427e6f197a21a229b8a414d937ad0556_prof);

        
        $__internal_cbf56875f29e0dd9aa55e898b91ff981331aa8019637e9c811ef6dd02cd5af57->leave($__internal_cbf56875f29e0dd9aa55e898b91ff981331aa8019637e9c811ef6dd02cd5af57_prof);

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
