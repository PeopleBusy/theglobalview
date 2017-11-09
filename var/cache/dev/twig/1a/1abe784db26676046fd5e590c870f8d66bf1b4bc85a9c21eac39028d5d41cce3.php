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
        $__internal_9325cc889dfac867b5bbad13e8c7a00e0f4c9ea7eaf78137c6d57373b7a41afc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9325cc889dfac867b5bbad13e8c7a00e0f4c9ea7eaf78137c6d57373b7a41afc->enter($__internal_9325cc889dfac867b5bbad13e8c7a00e0f4c9ea7eaf78137c6d57373b7a41afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_40f685f4aa9fc41eb42a60b28e51c680429899f9a6edb7efc8ba73610115535a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f685f4aa9fc41eb42a60b28e51c680429899f9a6edb7efc8ba73610115535a->enter($__internal_40f685f4aa9fc41eb42a60b28e51c680429899f9a6edb7efc8ba73610115535a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_9325cc889dfac867b5bbad13e8c7a00e0f4c9ea7eaf78137c6d57373b7a41afc->leave($__internal_9325cc889dfac867b5bbad13e8c7a00e0f4c9ea7eaf78137c6d57373b7a41afc_prof);

        
        $__internal_40f685f4aa9fc41eb42a60b28e51c680429899f9a6edb7efc8ba73610115535a->leave($__internal_40f685f4aa9fc41eb42a60b28e51c680429899f9a6edb7efc8ba73610115535a_prof);

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
