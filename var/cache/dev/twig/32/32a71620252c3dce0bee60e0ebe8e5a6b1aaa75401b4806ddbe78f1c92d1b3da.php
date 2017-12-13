<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_0686b450d569e5207f5dd08b74fb8fe729220a278b8bb503093c27e448b9d589 extends Twig_Template
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
        $__internal_c2defe639ca8bdc920095491f87cb4aae925915445e54788f6cdaf1e624373db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2defe639ca8bdc920095491f87cb4aae925915445e54788f6cdaf1e624373db->enter($__internal_c2defe639ca8bdc920095491f87cb4aae925915445e54788f6cdaf1e624373db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_f72d7cc5f79237842375b9a5f6ee6286cb88b5a22aa1d93cd7260489548a1e34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f72d7cc5f79237842375b9a5f6ee6286cb88b5a22aa1d93cd7260489548a1e34->enter($__internal_f72d7cc5f79237842375b9a5f6ee6286cb88b5a22aa1d93cd7260489548a1e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_c2defe639ca8bdc920095491f87cb4aae925915445e54788f6cdaf1e624373db->leave($__internal_c2defe639ca8bdc920095491f87cb4aae925915445e54788f6cdaf1e624373db_prof);

        
        $__internal_f72d7cc5f79237842375b9a5f6ee6286cb88b5a22aa1d93cd7260489548a1e34->leave($__internal_f72d7cc5f79237842375b9a5f6ee6286cb88b5a22aa1d93cd7260489548a1e34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
