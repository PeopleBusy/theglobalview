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
        $__internal_b36bfd113dcc6edc7ae160b1d872af576dd43f9a7366c1f8ec6c3fd8a1dd845b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b36bfd113dcc6edc7ae160b1d872af576dd43f9a7366c1f8ec6c3fd8a1dd845b->enter($__internal_b36bfd113dcc6edc7ae160b1d872af576dd43f9a7366c1f8ec6c3fd8a1dd845b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_937c7b10b0c906c438d1cf1d8186f3bfb51bbc3d58f64ac82e9154e24b2ed07b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_937c7b10b0c906c438d1cf1d8186f3bfb51bbc3d58f64ac82e9154e24b2ed07b->enter($__internal_937c7b10b0c906c438d1cf1d8186f3bfb51bbc3d58f64ac82e9154e24b2ed07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_b36bfd113dcc6edc7ae160b1d872af576dd43f9a7366c1f8ec6c3fd8a1dd845b->leave($__internal_b36bfd113dcc6edc7ae160b1d872af576dd43f9a7366c1f8ec6c3fd8a1dd845b_prof);

        
        $__internal_937c7b10b0c906c438d1cf1d8186f3bfb51bbc3d58f64ac82e9154e24b2ed07b->leave($__internal_937c7b10b0c906c438d1cf1d8186f3bfb51bbc3d58f64ac82e9154e24b2ed07b_prof);

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
