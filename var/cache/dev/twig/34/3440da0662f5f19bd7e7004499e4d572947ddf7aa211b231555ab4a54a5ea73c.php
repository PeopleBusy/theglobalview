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
        $__internal_d4c0d2363f91b934e6dbcc2c45581638c949aa590e26573615f1c50a2f2256d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4c0d2363f91b934e6dbcc2c45581638c949aa590e26573615f1c50a2f2256d6->enter($__internal_d4c0d2363f91b934e6dbcc2c45581638c949aa590e26573615f1c50a2f2256d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_7cbcf865d7d04243140ce76784488357a67f21ef3c1d0bd5773af8ac0e124f8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cbcf865d7d04243140ce76784488357a67f21ef3c1d0bd5773af8ac0e124f8f->enter($__internal_7cbcf865d7d04243140ce76784488357a67f21ef3c1d0bd5773af8ac0e124f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_d4c0d2363f91b934e6dbcc2c45581638c949aa590e26573615f1c50a2f2256d6->leave($__internal_d4c0d2363f91b934e6dbcc2c45581638c949aa590e26573615f1c50a2f2256d6_prof);

        
        $__internal_7cbcf865d7d04243140ce76784488357a67f21ef3c1d0bd5773af8ac0e124f8f->leave($__internal_7cbcf865d7d04243140ce76784488357a67f21ef3c1d0bd5773af8ac0e124f8f_prof);

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
", "@Framework/Form/password_widget.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
