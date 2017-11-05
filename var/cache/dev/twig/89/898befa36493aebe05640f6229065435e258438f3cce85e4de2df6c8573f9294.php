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
        $__internal_c85d170e4a5edfa7d083446987b9a9e2e7cf72cefa2acdc5a230a458d7f042de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c85d170e4a5edfa7d083446987b9a9e2e7cf72cefa2acdc5a230a458d7f042de->enter($__internal_c85d170e4a5edfa7d083446987b9a9e2e7cf72cefa2acdc5a230a458d7f042de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_dd13f5282e14642c8f337de5b1ae23f1744711fa99b0c4f24c1d5102f958f68f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd13f5282e14642c8f337de5b1ae23f1744711fa99b0c4f24c1d5102f958f68f->enter($__internal_dd13f5282e14642c8f337de5b1ae23f1744711fa99b0c4f24c1d5102f958f68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c85d170e4a5edfa7d083446987b9a9e2e7cf72cefa2acdc5a230a458d7f042de->leave($__internal_c85d170e4a5edfa7d083446987b9a9e2e7cf72cefa2acdc5a230a458d7f042de_prof);

        
        $__internal_dd13f5282e14642c8f337de5b1ae23f1744711fa99b0c4f24c1d5102f958f68f->leave($__internal_dd13f5282e14642c8f337de5b1ae23f1744711fa99b0c4f24c1d5102f958f68f_prof);

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
