<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_bb952cb851519ecf766c087c29b6c56ea7d44eac3ab97b027829ba0536531959 extends Twig_Template
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
        $__internal_6bdd9dd35d9a822146630a1b527e73ea8bf40941d21696214a37edd026e961d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bdd9dd35d9a822146630a1b527e73ea8bf40941d21696214a37edd026e961d0->enter($__internal_6bdd9dd35d9a822146630a1b527e73ea8bf40941d21696214a37edd026e961d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_925cb2130ec35fd9a838d1d11193863f20a1d2189d6dda83829d803c4ac0d239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_925cb2130ec35fd9a838d1d11193863f20a1d2189d6dda83829d803c4ac0d239->enter($__internal_925cb2130ec35fd9a838d1d11193863f20a1d2189d6dda83829d803c4ac0d239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6bdd9dd35d9a822146630a1b527e73ea8bf40941d21696214a37edd026e961d0->leave($__internal_6bdd9dd35d9a822146630a1b527e73ea8bf40941d21696214a37edd026e961d0_prof);

        
        $__internal_925cb2130ec35fd9a838d1d11193863f20a1d2189d6dda83829d803c4ac0d239->leave($__internal_925cb2130ec35fd9a838d1d11193863f20a1d2189d6dda83829d803c4ac0d239_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
