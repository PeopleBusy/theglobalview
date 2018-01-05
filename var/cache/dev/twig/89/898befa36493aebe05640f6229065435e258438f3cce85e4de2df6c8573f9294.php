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
        $__internal_8950fb18aa0925f70703e8dcb1b11bcf1c5fa9cdee38a4ea62b392219a9d4659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8950fb18aa0925f70703e8dcb1b11bcf1c5fa9cdee38a4ea62b392219a9d4659->enter($__internal_8950fb18aa0925f70703e8dcb1b11bcf1c5fa9cdee38a4ea62b392219a9d4659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_aaee32ab8504152ba88428500cb1ebd9de7e5540b7e984c0f28a14ef25401736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaee32ab8504152ba88428500cb1ebd9de7e5540b7e984c0f28a14ef25401736->enter($__internal_aaee32ab8504152ba88428500cb1ebd9de7e5540b7e984c0f28a14ef25401736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8950fb18aa0925f70703e8dcb1b11bcf1c5fa9cdee38a4ea62b392219a9d4659->leave($__internal_8950fb18aa0925f70703e8dcb1b11bcf1c5fa9cdee38a4ea62b392219a9d4659_prof);

        
        $__internal_aaee32ab8504152ba88428500cb1ebd9de7e5540b7e984c0f28a14ef25401736->leave($__internal_aaee32ab8504152ba88428500cb1ebd9de7e5540b7e984c0f28a14ef25401736_prof);

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
