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
        $__internal_00a6d736d2f2eadd459c5c8808c0f7e72ec098efe56f8d12f3c40ba82c0a9c0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00a6d736d2f2eadd459c5c8808c0f7e72ec098efe56f8d12f3c40ba82c0a9c0d->enter($__internal_00a6d736d2f2eadd459c5c8808c0f7e72ec098efe56f8d12f3c40ba82c0a9c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_2b7c5e6c811792377b32a3101bfe453501c5c118df1885962d141190489f2005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b7c5e6c811792377b32a3101bfe453501c5c118df1885962d141190489f2005->enter($__internal_2b7c5e6c811792377b32a3101bfe453501c5c118df1885962d141190489f2005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_00a6d736d2f2eadd459c5c8808c0f7e72ec098efe56f8d12f3c40ba82c0a9c0d->leave($__internal_00a6d736d2f2eadd459c5c8808c0f7e72ec098efe56f8d12f3c40ba82c0a9c0d_prof);

        
        $__internal_2b7c5e6c811792377b32a3101bfe453501c5c118df1885962d141190489f2005->leave($__internal_2b7c5e6c811792377b32a3101bfe453501c5c118df1885962d141190489f2005_prof);

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
