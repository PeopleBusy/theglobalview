<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_95f3960d2ecc13233d7c5b465148685aafd81671e39054636612bedf73699f69 extends Twig_Template
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
        $__internal_8b7d6810f96660afee12d12402b99d39e9efeab8d348f906ff7102b4775b4388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b7d6810f96660afee12d12402b99d39e9efeab8d348f906ff7102b4775b4388->enter($__internal_8b7d6810f96660afee12d12402b99d39e9efeab8d348f906ff7102b4775b4388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_dd9c7286c71b42514889fb360b1d9efe9a425abfc971d2227691f7620bb5a230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd9c7286c71b42514889fb360b1d9efe9a425abfc971d2227691f7620bb5a230->enter($__internal_dd9c7286c71b42514889fb360b1d9efe9a425abfc971d2227691f7620bb5a230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_8b7d6810f96660afee12d12402b99d39e9efeab8d348f906ff7102b4775b4388->leave($__internal_8b7d6810f96660afee12d12402b99d39e9efeab8d348f906ff7102b4775b4388_prof);

        
        $__internal_dd9c7286c71b42514889fb360b1d9efe9a425abfc971d2227691f7620bb5a230->leave($__internal_dd9c7286c71b42514889fb360b1d9efe9a425abfc971d2227691f7620bb5a230_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
