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
        $__internal_afc431a84429f50d4cf97051ee84a7675afae1c22d06fbb09484a9e170284fa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afc431a84429f50d4cf97051ee84a7675afae1c22d06fbb09484a9e170284fa4->enter($__internal_afc431a84429f50d4cf97051ee84a7675afae1c22d06fbb09484a9e170284fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_7d44ef2fad3d19083acf0868204a06a25dad29d9c4dadf64e8b8dc5fd7393cd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d44ef2fad3d19083acf0868204a06a25dad29d9c4dadf64e8b8dc5fd7393cd3->enter($__internal_7d44ef2fad3d19083acf0868204a06a25dad29d9c4dadf64e8b8dc5fd7393cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_afc431a84429f50d4cf97051ee84a7675afae1c22d06fbb09484a9e170284fa4->leave($__internal_afc431a84429f50d4cf97051ee84a7675afae1c22d06fbb09484a9e170284fa4_prof);

        
        $__internal_7d44ef2fad3d19083acf0868204a06a25dad29d9c4dadf64e8b8dc5fd7393cd3->leave($__internal_7d44ef2fad3d19083acf0868204a06a25dad29d9c4dadf64e8b8dc5fd7393cd3_prof);

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
