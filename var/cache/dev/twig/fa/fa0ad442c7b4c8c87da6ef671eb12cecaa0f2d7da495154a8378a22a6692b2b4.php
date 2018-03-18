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
        $__internal_08ed9066ce5068b3e21904afbc08e54627d4486e1a7bfde2f28eddcc1a41a602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08ed9066ce5068b3e21904afbc08e54627d4486e1a7bfde2f28eddcc1a41a602->enter($__internal_08ed9066ce5068b3e21904afbc08e54627d4486e1a7bfde2f28eddcc1a41a602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_5339fb8e520103fad95cb5a9489897532e93f02388b73b27b6282185e21be62c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5339fb8e520103fad95cb5a9489897532e93f02388b73b27b6282185e21be62c->enter($__internal_5339fb8e520103fad95cb5a9489897532e93f02388b73b27b6282185e21be62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_08ed9066ce5068b3e21904afbc08e54627d4486e1a7bfde2f28eddcc1a41a602->leave($__internal_08ed9066ce5068b3e21904afbc08e54627d4486e1a7bfde2f28eddcc1a41a602_prof);

        
        $__internal_5339fb8e520103fad95cb5a9489897532e93f02388b73b27b6282185e21be62c->leave($__internal_5339fb8e520103fad95cb5a9489897532e93f02388b73b27b6282185e21be62c_prof);

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
", "@Framework/Form/submit_widget.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
