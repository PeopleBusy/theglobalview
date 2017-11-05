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
        $__internal_d4fabd11591723ee40bb9f80f751e414610c9e9b165a22bf1e972b402a2852aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4fabd11591723ee40bb9f80f751e414610c9e9b165a22bf1e972b402a2852aa->enter($__internal_d4fabd11591723ee40bb9f80f751e414610c9e9b165a22bf1e972b402a2852aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_c4e48da7400cb3a8df485b2d93f8da0f0c0eefad2eb15678af568f22e25676c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e48da7400cb3a8df485b2d93f8da0f0c0eefad2eb15678af568f22e25676c2->enter($__internal_c4e48da7400cb3a8df485b2d93f8da0f0c0eefad2eb15678af568f22e25676c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d4fabd11591723ee40bb9f80f751e414610c9e9b165a22bf1e972b402a2852aa->leave($__internal_d4fabd11591723ee40bb9f80f751e414610c9e9b165a22bf1e972b402a2852aa_prof);

        
        $__internal_c4e48da7400cb3a8df485b2d93f8da0f0c0eefad2eb15678af568f22e25676c2->leave($__internal_c4e48da7400cb3a8df485b2d93f8da0f0c0eefad2eb15678af568f22e25676c2_prof);

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
", "@Framework/Form/form_end.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
