<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_3e667b6f2f794c6d2d926d7bc9a1c996ed0f379874fee82edcc8529ebb5d41be extends Twig_Template
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
        $__internal_0f9c8b8d53662da7b8e562cf9bfca0e4d0f79275c66fb33b9340bbdb3409d56f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f9c8b8d53662da7b8e562cf9bfca0e4d0f79275c66fb33b9340bbdb3409d56f->enter($__internal_0f9c8b8d53662da7b8e562cf9bfca0e4d0f79275c66fb33b9340bbdb3409d56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_c0c40140a13a40af2ebc8ec45e27c257b5d1e180a124ca3cd6497ae900f0112a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0c40140a13a40af2ebc8ec45e27c257b5d1e180a124ca3cd6497ae900f0112a->enter($__internal_c0c40140a13a40af2ebc8ec45e27c257b5d1e180a124ca3cd6497ae900f0112a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_0f9c8b8d53662da7b8e562cf9bfca0e4d0f79275c66fb33b9340bbdb3409d56f->leave($__internal_0f9c8b8d53662da7b8e562cf9bfca0e4d0f79275c66fb33b9340bbdb3409d56f_prof);

        
        $__internal_c0c40140a13a40af2ebc8ec45e27c257b5d1e180a124ca3cd6497ae900f0112a->leave($__internal_c0c40140a13a40af2ebc8ec45e27c257b5d1e180a124ca3cd6497ae900f0112a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
