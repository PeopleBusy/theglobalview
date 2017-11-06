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
        $__internal_f9511d30c806d24f0cf6a3a138faa6cf4aac0e0fb29a672e4d9b42a7eb4f6bbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9511d30c806d24f0cf6a3a138faa6cf4aac0e0fb29a672e4d9b42a7eb4f6bbd->enter($__internal_f9511d30c806d24f0cf6a3a138faa6cf4aac0e0fb29a672e4d9b42a7eb4f6bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_7c69d5cb389c22d69dcdab5016635f19cb81896a5ed651c51f522ac6fc839c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c69d5cb389c22d69dcdab5016635f19cb81896a5ed651c51f522ac6fc839c43->enter($__internal_7c69d5cb389c22d69dcdab5016635f19cb81896a5ed651c51f522ac6fc839c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_f9511d30c806d24f0cf6a3a138faa6cf4aac0e0fb29a672e4d9b42a7eb4f6bbd->leave($__internal_f9511d30c806d24f0cf6a3a138faa6cf4aac0e0fb29a672e4d9b42a7eb4f6bbd_prof);

        
        $__internal_7c69d5cb389c22d69dcdab5016635f19cb81896a5ed651c51f522ac6fc839c43->leave($__internal_7c69d5cb389c22d69dcdab5016635f19cb81896a5ed651c51f522ac6fc839c43_prof);

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
", "@Framework/Form/hidden_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
