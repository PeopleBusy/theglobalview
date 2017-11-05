<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_0ba95a9347fc2cd647874fd1690a4387da35ae3de9097213c51cadb78be49048 extends Twig_Template
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
        $__internal_a0e4eb4a0845b006dfb650cd143d17ed920d7bf9bedd0666a3d7d8f63d02a3d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0e4eb4a0845b006dfb650cd143d17ed920d7bf9bedd0666a3d7d8f63d02a3d1->enter($__internal_a0e4eb4a0845b006dfb650cd143d17ed920d7bf9bedd0666a3d7d8f63d02a3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_d8c43ac0a63ff48622e4b9101c3cb83a74403af4b4801a24fdf68fe813fa06b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8c43ac0a63ff48622e4b9101c3cb83a74403af4b4801a24fdf68fe813fa06b5->enter($__internal_d8c43ac0a63ff48622e4b9101c3cb83a74403af4b4801a24fdf68fe813fa06b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_a0e4eb4a0845b006dfb650cd143d17ed920d7bf9bedd0666a3d7d8f63d02a3d1->leave($__internal_a0e4eb4a0845b006dfb650cd143d17ed920d7bf9bedd0666a3d7d8f63d02a3d1_prof);

        
        $__internal_d8c43ac0a63ff48622e4b9101c3cb83a74403af4b4801a24fdf68fe813fa06b5->leave($__internal_d8c43ac0a63ff48622e4b9101c3cb83a74403af4b4801a24fdf68fe813fa06b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
