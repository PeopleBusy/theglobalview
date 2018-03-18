<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_84a08d5aff659eb1162de69ab3af959857724d7b5a48bfe7bcead5a0bc9cc294 extends Twig_Template
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
        $__internal_aa065d0df61130dffabcc51bedd7b4923ac22a2948e82787dd086d58e6ad19bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa065d0df61130dffabcc51bedd7b4923ac22a2948e82787dd086d58e6ad19bc->enter($__internal_aa065d0df61130dffabcc51bedd7b4923ac22a2948e82787dd086d58e6ad19bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_4e1b693ce076ad51c631e943d55d3b5ec2ef1769f8477fbba9da8d6cf35e9bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1b693ce076ad51c631e943d55d3b5ec2ef1769f8477fbba9da8d6cf35e9bf4->enter($__internal_4e1b693ce076ad51c631e943d55d3b5ec2ef1769f8477fbba9da8d6cf35e9bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_aa065d0df61130dffabcc51bedd7b4923ac22a2948e82787dd086d58e6ad19bc->leave($__internal_aa065d0df61130dffabcc51bedd7b4923ac22a2948e82787dd086d58e6ad19bc_prof);

        
        $__internal_4e1b693ce076ad51c631e943d55d3b5ec2ef1769f8477fbba9da8d6cf35e9bf4->leave($__internal_4e1b693ce076ad51c631e943d55d3b5ec2ef1769f8477fbba9da8d6cf35e9bf4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
