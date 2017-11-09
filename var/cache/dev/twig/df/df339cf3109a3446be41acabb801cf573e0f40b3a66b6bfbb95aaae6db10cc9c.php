<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_aaf375094ff5668e0dfa485d63c74634f55fc2a0dec922e2802fe260e6362a06 extends Twig_Template
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
        $__internal_943cbf0858c5ea118eea7d2dcf8156599b73ee2db1d04e9a708fa5120d8d6ada = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_943cbf0858c5ea118eea7d2dcf8156599b73ee2db1d04e9a708fa5120d8d6ada->enter($__internal_943cbf0858c5ea118eea7d2dcf8156599b73ee2db1d04e9a708fa5120d8d6ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_5259aa6cb3371d3cd15b06198e83aa582d7e51b578efb635460d09f97fbcd156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5259aa6cb3371d3cd15b06198e83aa582d7e51b578efb635460d09f97fbcd156->enter($__internal_5259aa6cb3371d3cd15b06198e83aa582d7e51b578efb635460d09f97fbcd156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_943cbf0858c5ea118eea7d2dcf8156599b73ee2db1d04e9a708fa5120d8d6ada->leave($__internal_943cbf0858c5ea118eea7d2dcf8156599b73ee2db1d04e9a708fa5120d8d6ada_prof);

        
        $__internal_5259aa6cb3371d3cd15b06198e83aa582d7e51b578efb635460d09f97fbcd156->leave($__internal_5259aa6cb3371d3cd15b06198e83aa582d7e51b578efb635460d09f97fbcd156_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
