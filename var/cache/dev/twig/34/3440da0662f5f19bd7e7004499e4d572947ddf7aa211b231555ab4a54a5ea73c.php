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
        $__internal_06ac240aef6ac477879663ff5f31c787764cdfa8a4839a9e8ee3222ef0091266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06ac240aef6ac477879663ff5f31c787764cdfa8a4839a9e8ee3222ef0091266->enter($__internal_06ac240aef6ac477879663ff5f31c787764cdfa8a4839a9e8ee3222ef0091266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_b8b029cbc5c67209674e60dcba22326965f10f14e14f56da7d1d0ae9f1f0bf7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8b029cbc5c67209674e60dcba22326965f10f14e14f56da7d1d0ae9f1f0bf7b->enter($__internal_b8b029cbc5c67209674e60dcba22326965f10f14e14f56da7d1d0ae9f1f0bf7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_06ac240aef6ac477879663ff5f31c787764cdfa8a4839a9e8ee3222ef0091266->leave($__internal_06ac240aef6ac477879663ff5f31c787764cdfa8a4839a9e8ee3222ef0091266_prof);

        
        $__internal_b8b029cbc5c67209674e60dcba22326965f10f14e14f56da7d1d0ae9f1f0bf7b->leave($__internal_b8b029cbc5c67209674e60dcba22326965f10f14e14f56da7d1d0ae9f1f0bf7b_prof);

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
