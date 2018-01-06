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
        $__internal_5c10e6601a854b2359d3e4f50d638885b15b34bf434b251421d3e03d4481ff92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c10e6601a854b2359d3e4f50d638885b15b34bf434b251421d3e03d4481ff92->enter($__internal_5c10e6601a854b2359d3e4f50d638885b15b34bf434b251421d3e03d4481ff92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_bbd985a7a7df01e1f7534ce0b9436f18d819e457bd64e2732bcaa60aa015e949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbd985a7a7df01e1f7534ce0b9436f18d819e457bd64e2732bcaa60aa015e949->enter($__internal_bbd985a7a7df01e1f7534ce0b9436f18d819e457bd64e2732bcaa60aa015e949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_5c10e6601a854b2359d3e4f50d638885b15b34bf434b251421d3e03d4481ff92->leave($__internal_5c10e6601a854b2359d3e4f50d638885b15b34bf434b251421d3e03d4481ff92_prof);

        
        $__internal_bbd985a7a7df01e1f7534ce0b9436f18d819e457bd64e2732bcaa60aa015e949->leave($__internal_bbd985a7a7df01e1f7534ce0b9436f18d819e457bd64e2732bcaa60aa015e949_prof);

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
