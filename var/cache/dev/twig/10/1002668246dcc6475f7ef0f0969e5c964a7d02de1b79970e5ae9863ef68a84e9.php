<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_ee3b2e03b74483783f9efc53f41a8b3cc6071955fd55eeb04bd45e79e01bfb81 extends Twig_Template
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
        $__internal_1a86e98774e34ed6d5a59745dce4a466237326ac314a26118937d26b3a73d4fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a86e98774e34ed6d5a59745dce4a466237326ac314a26118937d26b3a73d4fa->enter($__internal_1a86e98774e34ed6d5a59745dce4a466237326ac314a26118937d26b3a73d4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_f5fb780c704f32cf9b95b6b9dba0b47c23799a80f4686a84c038a4c83b31c376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5fb780c704f32cf9b95b6b9dba0b47c23799a80f4686a84c038a4c83b31c376->enter($__internal_f5fb780c704f32cf9b95b6b9dba0b47c23799a80f4686a84c038a4c83b31c376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_1a86e98774e34ed6d5a59745dce4a466237326ac314a26118937d26b3a73d4fa->leave($__internal_1a86e98774e34ed6d5a59745dce4a466237326ac314a26118937d26b3a73d4fa_prof);

        
        $__internal_f5fb780c704f32cf9b95b6b9dba0b47c23799a80f4686a84c038a4c83b31c376->leave($__internal_f5fb780c704f32cf9b95b6b9dba0b47c23799a80f4686a84c038a4c83b31c376_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
