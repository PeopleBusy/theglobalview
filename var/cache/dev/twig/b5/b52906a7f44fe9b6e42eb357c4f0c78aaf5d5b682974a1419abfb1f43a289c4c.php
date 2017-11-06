<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_67ac38eb8851a1e005ef822c718c50ff1a2b331fe31ad61881edc4b6ce05b9a8 extends Twig_Template
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
        $__internal_34d3ee90eb9b9852a303edf6fe589b76887eaa1dc5c92251679e45b12cf57913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34d3ee90eb9b9852a303edf6fe589b76887eaa1dc5c92251679e45b12cf57913->enter($__internal_34d3ee90eb9b9852a303edf6fe589b76887eaa1dc5c92251679e45b12cf57913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_149368836fee9f5d4951bcd0e651c81c018a464bbafbd8e0d62e88b4ab129f7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_149368836fee9f5d4951bcd0e651c81c018a464bbafbd8e0d62e88b4ab129f7d->enter($__internal_149368836fee9f5d4951bcd0e651c81c018a464bbafbd8e0d62e88b4ab129f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_34d3ee90eb9b9852a303edf6fe589b76887eaa1dc5c92251679e45b12cf57913->leave($__internal_34d3ee90eb9b9852a303edf6fe589b76887eaa1dc5c92251679e45b12cf57913_prof);

        
        $__internal_149368836fee9f5d4951bcd0e651c81c018a464bbafbd8e0d62e88b4ab129f7d->leave($__internal_149368836fee9f5d4951bcd0e651c81c018a464bbafbd8e0d62e88b4ab129f7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
