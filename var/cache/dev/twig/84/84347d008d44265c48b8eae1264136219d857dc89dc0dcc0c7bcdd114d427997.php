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
        $__internal_5418116ce55719cec7769d69f419f68d487a8c6c4dee69d9af5e2d904d3a866f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5418116ce55719cec7769d69f419f68d487a8c6c4dee69d9af5e2d904d3a866f->enter($__internal_5418116ce55719cec7769d69f419f68d487a8c6c4dee69d9af5e2d904d3a866f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_99fce3864958d3f3f698976bf94251e31b256f8a7b5eec1a839c6e7f20270315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99fce3864958d3f3f698976bf94251e31b256f8a7b5eec1a839c6e7f20270315->enter($__internal_99fce3864958d3f3f698976bf94251e31b256f8a7b5eec1a839c6e7f20270315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_5418116ce55719cec7769d69f419f68d487a8c6c4dee69d9af5e2d904d3a866f->leave($__internal_5418116ce55719cec7769d69f419f68d487a8c6c4dee69d9af5e2d904d3a866f_prof);

        
        $__internal_99fce3864958d3f3f698976bf94251e31b256f8a7b5eec1a839c6e7f20270315->leave($__internal_99fce3864958d3f3f698976bf94251e31b256f8a7b5eec1a839c6e7f20270315_prof);

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
", "@Framework/Form/form_rest.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
