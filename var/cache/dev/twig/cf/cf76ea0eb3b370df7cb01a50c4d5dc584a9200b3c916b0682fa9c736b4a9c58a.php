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
        $__internal_19735ceca7fb1f0a20e02b56be07d4b154df07876ac9f8bf9e70bfe14c371a1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19735ceca7fb1f0a20e02b56be07d4b154df07876ac9f8bf9e70bfe14c371a1e->enter($__internal_19735ceca7fb1f0a20e02b56be07d4b154df07876ac9f8bf9e70bfe14c371a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_6cfe6244e1b277ad841635347024f97fd23ae308a746435e543135e616440704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cfe6244e1b277ad841635347024f97fd23ae308a746435e543135e616440704->enter($__internal_6cfe6244e1b277ad841635347024f97fd23ae308a746435e543135e616440704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_19735ceca7fb1f0a20e02b56be07d4b154df07876ac9f8bf9e70bfe14c371a1e->leave($__internal_19735ceca7fb1f0a20e02b56be07d4b154df07876ac9f8bf9e70bfe14c371a1e_prof);

        
        $__internal_6cfe6244e1b277ad841635347024f97fd23ae308a746435e543135e616440704->leave($__internal_6cfe6244e1b277ad841635347024f97fd23ae308a746435e543135e616440704_prof);

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
