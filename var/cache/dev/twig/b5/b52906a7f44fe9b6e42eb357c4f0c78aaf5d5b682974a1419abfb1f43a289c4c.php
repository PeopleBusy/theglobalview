<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_67ac38eb8851a1e005ef822c718c50ff1a2b331fe31ad61881edc4b6ce05b9a8 extends Twig_Template
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
        $__internal_6a5ba378146bb643884eb10eac5a875529c132c0315a711aee3e024185840695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a5ba378146bb643884eb10eac5a875529c132c0315a711aee3e024185840695->enter($__internal_6a5ba378146bb643884eb10eac5a875529c132c0315a711aee3e024185840695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_d68e4bbe9c7ed1845ceca53864ca83a93857f07e2d509f1c52d5842ba5adebef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d68e4bbe9c7ed1845ceca53864ca83a93857f07e2d509f1c52d5842ba5adebef->enter($__internal_d68e4bbe9c7ed1845ceca53864ca83a93857f07e2d509f1c52d5842ba5adebef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_6a5ba378146bb643884eb10eac5a875529c132c0315a711aee3e024185840695->leave($__internal_6a5ba378146bb643884eb10eac5a875529c132c0315a711aee3e024185840695_prof);

        
        $__internal_d68e4bbe9c7ed1845ceca53864ca83a93857f07e2d509f1c52d5842ba5adebef->leave($__internal_d68e4bbe9c7ed1845ceca53864ca83a93857f07e2d509f1c52d5842ba5adebef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
