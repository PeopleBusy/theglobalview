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
        $__internal_bb1d8084d037b1e30be71623d86cdbb9d8b4bdf4d0de139076d87f4172781cd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb1d8084d037b1e30be71623d86cdbb9d8b4bdf4d0de139076d87f4172781cd3->enter($__internal_bb1d8084d037b1e30be71623d86cdbb9d8b4bdf4d0de139076d87f4172781cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_5c7608727fc83afb399431ebbabc95bab2d231e1bd64d307069a5ff953db290c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7608727fc83afb399431ebbabc95bab2d231e1bd64d307069a5ff953db290c->enter($__internal_5c7608727fc83afb399431ebbabc95bab2d231e1bd64d307069a5ff953db290c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_bb1d8084d037b1e30be71623d86cdbb9d8b4bdf4d0de139076d87f4172781cd3->leave($__internal_bb1d8084d037b1e30be71623d86cdbb9d8b4bdf4d0de139076d87f4172781cd3_prof);

        
        $__internal_5c7608727fc83afb399431ebbabc95bab2d231e1bd64d307069a5ff953db290c->leave($__internal_5c7608727fc83afb399431ebbabc95bab2d231e1bd64d307069a5ff953db290c_prof);

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
