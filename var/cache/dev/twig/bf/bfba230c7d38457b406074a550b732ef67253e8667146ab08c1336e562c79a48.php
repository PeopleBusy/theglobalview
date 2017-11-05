<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_68f23f8cdf0c6fd2c4f770126a0cb229a89959ef007c70f8ed4d687d9cb81ba1 extends Twig_Template
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
        $__internal_99c212e0cb0bbb6afa8aec516b6cc37f626c91f5f2676648bfb8d0934cbf73a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99c212e0cb0bbb6afa8aec516b6cc37f626c91f5f2676648bfb8d0934cbf73a5->enter($__internal_99c212e0cb0bbb6afa8aec516b6cc37f626c91f5f2676648bfb8d0934cbf73a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_ce8cc6b3baa326383dde857f0bbf2d5bb55999c17038481a2c14c82c5e40a06a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce8cc6b3baa326383dde857f0bbf2d5bb55999c17038481a2c14c82c5e40a06a->enter($__internal_ce8cc6b3baa326383dde857f0bbf2d5bb55999c17038481a2c14c82c5e40a06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_99c212e0cb0bbb6afa8aec516b6cc37f626c91f5f2676648bfb8d0934cbf73a5->leave($__internal_99c212e0cb0bbb6afa8aec516b6cc37f626c91f5f2676648bfb8d0934cbf73a5_prof);

        
        $__internal_ce8cc6b3baa326383dde857f0bbf2d5bb55999c17038481a2c14c82c5e40a06a->leave($__internal_ce8cc6b3baa326383dde857f0bbf2d5bb55999c17038481a2c14c82c5e40a06a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
