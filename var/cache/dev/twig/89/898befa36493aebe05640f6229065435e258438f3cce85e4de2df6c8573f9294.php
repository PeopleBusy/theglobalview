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
        $__internal_f72049182305b01fa2de7f7175bed75b578ac3d14feca362f20e8899122ee6b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f72049182305b01fa2de7f7175bed75b578ac3d14feca362f20e8899122ee6b0->enter($__internal_f72049182305b01fa2de7f7175bed75b578ac3d14feca362f20e8899122ee6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_d7fd29eefc5c6676f869360533428a73e714b25fd34d58b7e4fac539ff859b2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7fd29eefc5c6676f869360533428a73e714b25fd34d58b7e4fac539ff859b2a->enter($__internal_d7fd29eefc5c6676f869360533428a73e714b25fd34d58b7e4fac539ff859b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_f72049182305b01fa2de7f7175bed75b578ac3d14feca362f20e8899122ee6b0->leave($__internal_f72049182305b01fa2de7f7175bed75b578ac3d14feca362f20e8899122ee6b0_prof);

        
        $__internal_d7fd29eefc5c6676f869360533428a73e714b25fd34d58b7e4fac539ff859b2a->leave($__internal_d7fd29eefc5c6676f869360533428a73e714b25fd34d58b7e4fac539ff859b2a_prof);

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
