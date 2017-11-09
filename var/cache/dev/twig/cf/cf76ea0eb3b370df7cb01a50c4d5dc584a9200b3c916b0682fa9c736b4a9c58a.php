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
        $__internal_6714c779969606ce9f9a4a4bf1b7c8a304a7f03f402648f6c0873537a1784b78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6714c779969606ce9f9a4a4bf1b7c8a304a7f03f402648f6c0873537a1784b78->enter($__internal_6714c779969606ce9f9a4a4bf1b7c8a304a7f03f402648f6c0873537a1784b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_edafd2f84656cf12db35fc544072cfa2ac5ca07a508ad415d25d9600adf24343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edafd2f84656cf12db35fc544072cfa2ac5ca07a508ad415d25d9600adf24343->enter($__internal_edafd2f84656cf12db35fc544072cfa2ac5ca07a508ad415d25d9600adf24343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6714c779969606ce9f9a4a4bf1b7c8a304a7f03f402648f6c0873537a1784b78->leave($__internal_6714c779969606ce9f9a4a4bf1b7c8a304a7f03f402648f6c0873537a1784b78_prof);

        
        $__internal_edafd2f84656cf12db35fc544072cfa2ac5ca07a508ad415d25d9600adf24343->leave($__internal_edafd2f84656cf12db35fc544072cfa2ac5ca07a508ad415d25d9600adf24343_prof);

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
