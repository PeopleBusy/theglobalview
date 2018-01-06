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
        $__internal_cd6b40b14e56373326275b67522ba5bf38fba9425c19594db1a637985bf9236d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd6b40b14e56373326275b67522ba5bf38fba9425c19594db1a637985bf9236d->enter($__internal_cd6b40b14e56373326275b67522ba5bf38fba9425c19594db1a637985bf9236d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_0af039715e171920dc6fa33a37fb8d385c18907d265dd1e54e763a3a786102a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af039715e171920dc6fa33a37fb8d385c18907d265dd1e54e763a3a786102a9->enter($__internal_0af039715e171920dc6fa33a37fb8d385c18907d265dd1e54e763a3a786102a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_cd6b40b14e56373326275b67522ba5bf38fba9425c19594db1a637985bf9236d->leave($__internal_cd6b40b14e56373326275b67522ba5bf38fba9425c19594db1a637985bf9236d_prof);

        
        $__internal_0af039715e171920dc6fa33a37fb8d385c18907d265dd1e54e763a3a786102a9->leave($__internal_0af039715e171920dc6fa33a37fb8d385c18907d265dd1e54e763a3a786102a9_prof);

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
