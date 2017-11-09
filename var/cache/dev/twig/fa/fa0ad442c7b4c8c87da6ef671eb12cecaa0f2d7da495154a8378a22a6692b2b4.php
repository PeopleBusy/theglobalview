<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_dade7c19e62c9349ca5997ebda3952d28f8b85da060fff1725113890272baf96 extends Twig_Template
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
        $__internal_e70d80ddb558395096b2098d62351149b20c4154023ba61d59a52debaffd9e49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e70d80ddb558395096b2098d62351149b20c4154023ba61d59a52debaffd9e49->enter($__internal_e70d80ddb558395096b2098d62351149b20c4154023ba61d59a52debaffd9e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_64f5452342f1672a82935eff7ecc5dfa7ee3617554728e92f15c4bfc7c49a203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64f5452342f1672a82935eff7ecc5dfa7ee3617554728e92f15c4bfc7c49a203->enter($__internal_64f5452342f1672a82935eff7ecc5dfa7ee3617554728e92f15c4bfc7c49a203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_e70d80ddb558395096b2098d62351149b20c4154023ba61d59a52debaffd9e49->leave($__internal_e70d80ddb558395096b2098d62351149b20c4154023ba61d59a52debaffd9e49_prof);

        
        $__internal_64f5452342f1672a82935eff7ecc5dfa7ee3617554728e92f15c4bfc7c49a203->leave($__internal_64f5452342f1672a82935eff7ecc5dfa7ee3617554728e92f15c4bfc7c49a203_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
