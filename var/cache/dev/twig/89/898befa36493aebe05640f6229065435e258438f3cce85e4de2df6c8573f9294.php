<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_bb952cb851519ecf766c087c29b6c56ea7d44eac3ab97b027829ba0536531959 extends Twig_Template
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
        $__internal_66a92954ea8408c7034d71060cefe7587c90d41070b18a69e90de3fba1d69ce7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66a92954ea8408c7034d71060cefe7587c90d41070b18a69e90de3fba1d69ce7->enter($__internal_66a92954ea8408c7034d71060cefe7587c90d41070b18a69e90de3fba1d69ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_b4d3f8e40512f8cd1b6d4237dac8963740ee51335e438c0fd0a757f4029a11d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4d3f8e40512f8cd1b6d4237dac8963740ee51335e438c0fd0a757f4029a11d1->enter($__internal_b4d3f8e40512f8cd1b6d4237dac8963740ee51335e438c0fd0a757f4029a11d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_66a92954ea8408c7034d71060cefe7587c90d41070b18a69e90de3fba1d69ce7->leave($__internal_66a92954ea8408c7034d71060cefe7587c90d41070b18a69e90de3fba1d69ce7_prof);

        
        $__internal_b4d3f8e40512f8cd1b6d4237dac8963740ee51335e438c0fd0a757f4029a11d1->leave($__internal_b4d3f8e40512f8cd1b6d4237dac8963740ee51335e438c0fd0a757f4029a11d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
