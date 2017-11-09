<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_fd30ac2723f65fa427fc1bec979d18dca99ab79db3dd9dd951b5929657d48bc8 extends Twig_Template
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
        $__internal_54e14915d4c27084079a12682fb0b4c81090daf18f097a2191688f2a36648557 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54e14915d4c27084079a12682fb0b4c81090daf18f097a2191688f2a36648557->enter($__internal_54e14915d4c27084079a12682fb0b4c81090daf18f097a2191688f2a36648557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_7abaac75fc9976645e33d20e3f0f58a281151c3b5b1f6f751dc2b8ca21dea882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7abaac75fc9976645e33d20e3f0f58a281151c3b5b1f6f751dc2b8ca21dea882->enter($__internal_7abaac75fc9976645e33d20e3f0f58a281151c3b5b1f6f751dc2b8ca21dea882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_54e14915d4c27084079a12682fb0b4c81090daf18f097a2191688f2a36648557->leave($__internal_54e14915d4c27084079a12682fb0b4c81090daf18f097a2191688f2a36648557_prof);

        
        $__internal_7abaac75fc9976645e33d20e3f0f58a281151c3b5b1f6f751dc2b8ca21dea882->leave($__internal_7abaac75fc9976645e33d20e3f0f58a281151c3b5b1f6f751dc2b8ca21dea882_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
