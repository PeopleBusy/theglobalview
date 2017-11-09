<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_0d50d9db3256af99586c93425286a6cffb3e5e27d4b81a6c9a69485554c43186 extends Twig_Template
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
        $__internal_cea841f16423b4348c593be5a80d5a4b222240524e305d090e7080421f8d233e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cea841f16423b4348c593be5a80d5a4b222240524e305d090e7080421f8d233e->enter($__internal_cea841f16423b4348c593be5a80d5a4b222240524e305d090e7080421f8d233e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_0956242a7188894e8db875f5f71af6d9789b98a36691ccfcb5d1c6a38004cd4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0956242a7188894e8db875f5f71af6d9789b98a36691ccfcb5d1c6a38004cd4c->enter($__internal_0956242a7188894e8db875f5f71af6d9789b98a36691ccfcb5d1c6a38004cd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_cea841f16423b4348c593be5a80d5a4b222240524e305d090e7080421f8d233e->leave($__internal_cea841f16423b4348c593be5a80d5a4b222240524e305d090e7080421f8d233e_prof);

        
        $__internal_0956242a7188894e8db875f5f71af6d9789b98a36691ccfcb5d1c6a38004cd4c->leave($__internal_0956242a7188894e8db875f5f71af6d9789b98a36691ccfcb5d1c6a38004cd4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
