<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_dade7c19e62c9349ca5997ebda3952d28f8b85da060fff1725113890272baf96 extends Twig_Template
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
        $__internal_4d8d2c1514bd3bf1d86b91e2877806cc4e0b968dc1c38a61d5a3ad77b61947e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d8d2c1514bd3bf1d86b91e2877806cc4e0b968dc1c38a61d5a3ad77b61947e4->enter($__internal_4d8d2c1514bd3bf1d86b91e2877806cc4e0b968dc1c38a61d5a3ad77b61947e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_2254c1db10794e6d407693c528b5269f21f0771da1ccfed7a5a3e002d7cb6c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2254c1db10794e6d407693c528b5269f21f0771da1ccfed7a5a3e002d7cb6c42->enter($__internal_2254c1db10794e6d407693c528b5269f21f0771da1ccfed7a5a3e002d7cb6c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_4d8d2c1514bd3bf1d86b91e2877806cc4e0b968dc1c38a61d5a3ad77b61947e4->leave($__internal_4d8d2c1514bd3bf1d86b91e2877806cc4e0b968dc1c38a61d5a3ad77b61947e4_prof);

        
        $__internal_2254c1db10794e6d407693c528b5269f21f0771da1ccfed7a5a3e002d7cb6c42->leave($__internal_2254c1db10794e6d407693c528b5269f21f0771da1ccfed7a5a3e002d7cb6c42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
