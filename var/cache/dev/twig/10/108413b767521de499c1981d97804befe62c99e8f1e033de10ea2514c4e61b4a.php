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
        $__internal_6fd217e368782afafd0e8a32407cb8a4e112a69f1e81156d60a47a5655e96334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fd217e368782afafd0e8a32407cb8a4e112a69f1e81156d60a47a5655e96334->enter($__internal_6fd217e368782afafd0e8a32407cb8a4e112a69f1e81156d60a47a5655e96334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_cc3bdd35396d91cce0cc355e7978788b1883e13cc79c7a75c2f77c15aaab6ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc3bdd35396d91cce0cc355e7978788b1883e13cc79c7a75c2f77c15aaab6ecf->enter($__internal_cc3bdd35396d91cce0cc355e7978788b1883e13cc79c7a75c2f77c15aaab6ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_6fd217e368782afafd0e8a32407cb8a4e112a69f1e81156d60a47a5655e96334->leave($__internal_6fd217e368782afafd0e8a32407cb8a4e112a69f1e81156d60a47a5655e96334_prof);

        
        $__internal_cc3bdd35396d91cce0cc355e7978788b1883e13cc79c7a75c2f77c15aaab6ecf->leave($__internal_cc3bdd35396d91cce0cc355e7978788b1883e13cc79c7a75c2f77c15aaab6ecf_prof);

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
", "@Framework/Form/integer_widget.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
