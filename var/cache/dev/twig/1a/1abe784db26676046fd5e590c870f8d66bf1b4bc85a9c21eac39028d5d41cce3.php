<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_fd30ac2723f65fa427fc1bec979d18dca99ab79db3dd9dd951b5929657d48bc8 extends Twig_Template
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
        $__internal_9e4dcfb215d2c6a6a3b03012f5fc2334ce9647420459451fc3de66f0e6922054 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e4dcfb215d2c6a6a3b03012f5fc2334ce9647420459451fc3de66f0e6922054->enter($__internal_9e4dcfb215d2c6a6a3b03012f5fc2334ce9647420459451fc3de66f0e6922054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_aebf7a885d8748f87f59e7dfb8bf53cbfe340a303eb23bcd4072fedd27172c7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aebf7a885d8748f87f59e7dfb8bf53cbfe340a303eb23bcd4072fedd27172c7b->enter($__internal_aebf7a885d8748f87f59e7dfb8bf53cbfe340a303eb23bcd4072fedd27172c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_9e4dcfb215d2c6a6a3b03012f5fc2334ce9647420459451fc3de66f0e6922054->leave($__internal_9e4dcfb215d2c6a6a3b03012f5fc2334ce9647420459451fc3de66f0e6922054_prof);

        
        $__internal_aebf7a885d8748f87f59e7dfb8bf53cbfe340a303eb23bcd4072fedd27172c7b->leave($__internal_aebf7a885d8748f87f59e7dfb8bf53cbfe340a303eb23bcd4072fedd27172c7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
