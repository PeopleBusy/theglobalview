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
        $__internal_05c15311d3dbbe08c6bc65f2485d5ee3a099852c69ce7f1bc5b73d4de5f9bde6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05c15311d3dbbe08c6bc65f2485d5ee3a099852c69ce7f1bc5b73d4de5f9bde6->enter($__internal_05c15311d3dbbe08c6bc65f2485d5ee3a099852c69ce7f1bc5b73d4de5f9bde6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_c7423264aa1d8c526430dbb8587f40aecdf1c3254b6d2fe9246cfcda7f842bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7423264aa1d8c526430dbb8587f40aecdf1c3254b6d2fe9246cfcda7f842bf4->enter($__internal_c7423264aa1d8c526430dbb8587f40aecdf1c3254b6d2fe9246cfcda7f842bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_05c15311d3dbbe08c6bc65f2485d5ee3a099852c69ce7f1bc5b73d4de5f9bde6->leave($__internal_05c15311d3dbbe08c6bc65f2485d5ee3a099852c69ce7f1bc5b73d4de5f9bde6_prof);

        
        $__internal_c7423264aa1d8c526430dbb8587f40aecdf1c3254b6d2fe9246cfcda7f842bf4->leave($__internal_c7423264aa1d8c526430dbb8587f40aecdf1c3254b6d2fe9246cfcda7f842bf4_prof);

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
", "@Framework/Form/form_errors.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
