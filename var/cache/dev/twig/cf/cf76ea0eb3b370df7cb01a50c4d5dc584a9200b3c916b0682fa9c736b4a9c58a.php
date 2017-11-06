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
        $__internal_6537dcdf6fb1f458ba48d55389c1c443218188a6ee982893749b89118f9cff24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6537dcdf6fb1f458ba48d55389c1c443218188a6ee982893749b89118f9cff24->enter($__internal_6537dcdf6fb1f458ba48d55389c1c443218188a6ee982893749b89118f9cff24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_4164c5071aba6d1af1fcd6a41edf2b4d030b1f3ed4646eba992b1e5ca8bdd216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4164c5071aba6d1af1fcd6a41edf2b4d030b1f3ed4646eba992b1e5ca8bdd216->enter($__internal_4164c5071aba6d1af1fcd6a41edf2b4d030b1f3ed4646eba992b1e5ca8bdd216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6537dcdf6fb1f458ba48d55389c1c443218188a6ee982893749b89118f9cff24->leave($__internal_6537dcdf6fb1f458ba48d55389c1c443218188a6ee982893749b89118f9cff24_prof);

        
        $__internal_4164c5071aba6d1af1fcd6a41edf2b4d030b1f3ed4646eba992b1e5ca8bdd216->leave($__internal_4164c5071aba6d1af1fcd6a41edf2b4d030b1f3ed4646eba992b1e5ca8bdd216_prof);

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
