<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_1e3b2a1705cc4e07615184a888a48c1c72617e630db4289eb42766b7c78b4a03 extends Twig_Template
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
        $__internal_faf9ead0bb01bac4b238040ab13c392254a949abcaa7592d6dc3b529895a1e51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faf9ead0bb01bac4b238040ab13c392254a949abcaa7592d6dc3b529895a1e51->enter($__internal_faf9ead0bb01bac4b238040ab13c392254a949abcaa7592d6dc3b529895a1e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_7f5613ce8e4702f0e8511c692e8106b8abc59baad5f4628f6e85a6135b64e23f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f5613ce8e4702f0e8511c692e8106b8abc59baad5f4628f6e85a6135b64e23f->enter($__internal_7f5613ce8e4702f0e8511c692e8106b8abc59baad5f4628f6e85a6135b64e23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_faf9ead0bb01bac4b238040ab13c392254a949abcaa7592d6dc3b529895a1e51->leave($__internal_faf9ead0bb01bac4b238040ab13c392254a949abcaa7592d6dc3b529895a1e51_prof);

        
        $__internal_7f5613ce8e4702f0e8511c692e8106b8abc59baad5f4628f6e85a6135b64e23f->leave($__internal_7f5613ce8e4702f0e8511c692e8106b8abc59baad5f4628f6e85a6135b64e23f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
