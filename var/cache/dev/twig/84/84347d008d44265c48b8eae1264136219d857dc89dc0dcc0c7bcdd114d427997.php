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
        $__internal_fba74c7822dade884a1fb27d3aba38c921ad3d0cb0a3bf7ac9d072d8ff48e8d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fba74c7822dade884a1fb27d3aba38c921ad3d0cb0a3bf7ac9d072d8ff48e8d1->enter($__internal_fba74c7822dade884a1fb27d3aba38c921ad3d0cb0a3bf7ac9d072d8ff48e8d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_6d7393f4ef06fe4908488e1c43d8c1345a90f4021659cc3fb829e80951c9ddb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d7393f4ef06fe4908488e1c43d8c1345a90f4021659cc3fb829e80951c9ddb7->enter($__internal_6d7393f4ef06fe4908488e1c43d8c1345a90f4021659cc3fb829e80951c9ddb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_fba74c7822dade884a1fb27d3aba38c921ad3d0cb0a3bf7ac9d072d8ff48e8d1->leave($__internal_fba74c7822dade884a1fb27d3aba38c921ad3d0cb0a3bf7ac9d072d8ff48e8d1_prof);

        
        $__internal_6d7393f4ef06fe4908488e1c43d8c1345a90f4021659cc3fb829e80951c9ddb7->leave($__internal_6d7393f4ef06fe4908488e1c43d8c1345a90f4021659cc3fb829e80951c9ddb7_prof);

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
