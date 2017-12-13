<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b4b111d021ed83cca877b45db787a66bcbbe3e5d57b032e913aaedce511fbf82 extends Twig_Template
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
        $__internal_4a35c381989e275bbaa7d5bbf4a8a2dc96f9b72da948647b7fdce9d12474c4f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a35c381989e275bbaa7d5bbf4a8a2dc96f9b72da948647b7fdce9d12474c4f0->enter($__internal_4a35c381989e275bbaa7d5bbf4a8a2dc96f9b72da948647b7fdce9d12474c4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_3e8803cb3b53d8130a5f98ed896844dbcd0f4048734422325948205c38ac189c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e8803cb3b53d8130a5f98ed896844dbcd0f4048734422325948205c38ac189c->enter($__internal_3e8803cb3b53d8130a5f98ed896844dbcd0f4048734422325948205c38ac189c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4a35c381989e275bbaa7d5bbf4a8a2dc96f9b72da948647b7fdce9d12474c4f0->leave($__internal_4a35c381989e275bbaa7d5bbf4a8a2dc96f9b72da948647b7fdce9d12474c4f0_prof);

        
        $__internal_3e8803cb3b53d8130a5f98ed896844dbcd0f4048734422325948205c38ac189c->leave($__internal_3e8803cb3b53d8130a5f98ed896844dbcd0f4048734422325948205c38ac189c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
