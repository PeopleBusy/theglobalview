<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_3e667b6f2f794c6d2d926d7bc9a1c996ed0f379874fee82edcc8529ebb5d41be extends Twig_Template
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
        $__internal_b9caad156b8744a08e91906709dc4b6b6db1905d725610a1239d9e820fa0ae76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9caad156b8744a08e91906709dc4b6b6db1905d725610a1239d9e820fa0ae76->enter($__internal_b9caad156b8744a08e91906709dc4b6b6db1905d725610a1239d9e820fa0ae76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_4ba222ee25ebff4aea38dd562c85524de4906a0d60ff2e8170e220613546b4a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ba222ee25ebff4aea38dd562c85524de4906a0d60ff2e8170e220613546b4a6->enter($__internal_4ba222ee25ebff4aea38dd562c85524de4906a0d60ff2e8170e220613546b4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_b9caad156b8744a08e91906709dc4b6b6db1905d725610a1239d9e820fa0ae76->leave($__internal_b9caad156b8744a08e91906709dc4b6b6db1905d725610a1239d9e820fa0ae76_prof);

        
        $__internal_4ba222ee25ebff4aea38dd562c85524de4906a0d60ff2e8170e220613546b4a6->leave($__internal_4ba222ee25ebff4aea38dd562c85524de4906a0d60ff2e8170e220613546b4a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
