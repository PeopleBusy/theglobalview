<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_efca0a0dfdf7562edb3926b8578c80fe5a6955488f21a924dafba193be2765e2 extends Twig_Template
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
        $__internal_7f339c01d9241dc3a0dae6a4fe56d9b12fa25044462a3cb9beb00f2dcf64ce84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f339c01d9241dc3a0dae6a4fe56d9b12fa25044462a3cb9beb00f2dcf64ce84->enter($__internal_7f339c01d9241dc3a0dae6a4fe56d9b12fa25044462a3cb9beb00f2dcf64ce84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_61d89975fae463f98504be258c39d0ef75413fb4546f5551489b28056a2a1aae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61d89975fae463f98504be258c39d0ef75413fb4546f5551489b28056a2a1aae->enter($__internal_61d89975fae463f98504be258c39d0ef75413fb4546f5551489b28056a2a1aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_7f339c01d9241dc3a0dae6a4fe56d9b12fa25044462a3cb9beb00f2dcf64ce84->leave($__internal_7f339c01d9241dc3a0dae6a4fe56d9b12fa25044462a3cb9beb00f2dcf64ce84_prof);

        
        $__internal_61d89975fae463f98504be258c39d0ef75413fb4546f5551489b28056a2a1aae->leave($__internal_61d89975fae463f98504be258c39d0ef75413fb4546f5551489b28056a2a1aae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
