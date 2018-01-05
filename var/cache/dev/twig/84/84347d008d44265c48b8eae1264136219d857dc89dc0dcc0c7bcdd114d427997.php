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
        $__internal_62bf252fa5b67c466760e397442943bed98a0375bdf5af67c3ecb62289901e8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62bf252fa5b67c466760e397442943bed98a0375bdf5af67c3ecb62289901e8b->enter($__internal_62bf252fa5b67c466760e397442943bed98a0375bdf5af67c3ecb62289901e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_24d96afa9aeb82221b759f6153dc17afe33e837a3a3bfe9b272b917c310ca159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24d96afa9aeb82221b759f6153dc17afe33e837a3a3bfe9b272b917c310ca159->enter($__internal_24d96afa9aeb82221b759f6153dc17afe33e837a3a3bfe9b272b917c310ca159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_62bf252fa5b67c466760e397442943bed98a0375bdf5af67c3ecb62289901e8b->leave($__internal_62bf252fa5b67c466760e397442943bed98a0375bdf5af67c3ecb62289901e8b_prof);

        
        $__internal_24d96afa9aeb82221b759f6153dc17afe33e837a3a3bfe9b272b917c310ca159->leave($__internal_24d96afa9aeb82221b759f6153dc17afe33e837a3a3bfe9b272b917c310ca159_prof);

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
