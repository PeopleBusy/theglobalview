<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_c5434cd9ef5d9d17d019833879c15c7b088e909e1bef668dc4ad1fcc2dcfc969 extends Twig_Template
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
        $__internal_5a32bc74fd87eae8cb856a72d347037cdfb4d27c32226fe7d93222bb6f579830 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a32bc74fd87eae8cb856a72d347037cdfb4d27c32226fe7d93222bb6f579830->enter($__internal_5a32bc74fd87eae8cb856a72d347037cdfb4d27c32226fe7d93222bb6f579830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_1f69a01f56f09ecb0bdf63cae6cdd94340cd12d08fa00fdea1cb4b4523060381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f69a01f56f09ecb0bdf63cae6cdd94340cd12d08fa00fdea1cb4b4523060381->enter($__internal_1f69a01f56f09ecb0bdf63cae6cdd94340cd12d08fa00fdea1cb4b4523060381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_5a32bc74fd87eae8cb856a72d347037cdfb4d27c32226fe7d93222bb6f579830->leave($__internal_5a32bc74fd87eae8cb856a72d347037cdfb4d27c32226fe7d93222bb6f579830_prof);

        
        $__internal_1f69a01f56f09ecb0bdf63cae6cdd94340cd12d08fa00fdea1cb4b4523060381->leave($__internal_1f69a01f56f09ecb0bdf63cae6cdd94340cd12d08fa00fdea1cb4b4523060381_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
