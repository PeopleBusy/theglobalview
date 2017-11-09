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
        $__internal_a00ea5783eafd19ca5767384b6b50a700ebf4392efe7487679e1b4532773e75c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a00ea5783eafd19ca5767384b6b50a700ebf4392efe7487679e1b4532773e75c->enter($__internal_a00ea5783eafd19ca5767384b6b50a700ebf4392efe7487679e1b4532773e75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_f3cb6e18c81be26036723f6a1c602bbb55985e22278019df1c414ea1477ed5ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3cb6e18c81be26036723f6a1c602bbb55985e22278019df1c414ea1477ed5ad->enter($__internal_f3cb6e18c81be26036723f6a1c602bbb55985e22278019df1c414ea1477ed5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a00ea5783eafd19ca5767384b6b50a700ebf4392efe7487679e1b4532773e75c->leave($__internal_a00ea5783eafd19ca5767384b6b50a700ebf4392efe7487679e1b4532773e75c_prof);

        
        $__internal_f3cb6e18c81be26036723f6a1c602bbb55985e22278019df1c414ea1477ed5ad->leave($__internal_f3cb6e18c81be26036723f6a1c602bbb55985e22278019df1c414ea1477ed5ad_prof);

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
