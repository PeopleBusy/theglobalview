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
        $__internal_c6c93c2f543fbc85ec17bad0be5cd659e6debe3cd480567291811d9ceb483d7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6c93c2f543fbc85ec17bad0be5cd659e6debe3cd480567291811d9ceb483d7f->enter($__internal_c6c93c2f543fbc85ec17bad0be5cd659e6debe3cd480567291811d9ceb483d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_d1cafbf8477b6b7b8ed3f2bc47d7c3bc9734650bbf02ba8d444bcdcd1bd44d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1cafbf8477b6b7b8ed3f2bc47d7c3bc9734650bbf02ba8d444bcdcd1bd44d74->enter($__internal_d1cafbf8477b6b7b8ed3f2bc47d7c3bc9734650bbf02ba8d444bcdcd1bd44d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_c6c93c2f543fbc85ec17bad0be5cd659e6debe3cd480567291811d9ceb483d7f->leave($__internal_c6c93c2f543fbc85ec17bad0be5cd659e6debe3cd480567291811d9ceb483d7f_prof);

        
        $__internal_d1cafbf8477b6b7b8ed3f2bc47d7c3bc9734650bbf02ba8d444bcdcd1bd44d74->leave($__internal_d1cafbf8477b6b7b8ed3f2bc47d7c3bc9734650bbf02ba8d444bcdcd1bd44d74_prof);

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
