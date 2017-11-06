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
        $__internal_f5aa4214b78995e643f075c459e0de5600aa86d12e5a40ae599eed89b9e8b84d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5aa4214b78995e643f075c459e0de5600aa86d12e5a40ae599eed89b9e8b84d->enter($__internal_f5aa4214b78995e643f075c459e0de5600aa86d12e5a40ae599eed89b9e8b84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_06390d120a9b9fa45976e9f9184f17a98695ce2acf174462ea6f00d5f744629f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06390d120a9b9fa45976e9f9184f17a98695ce2acf174462ea6f00d5f744629f->enter($__internal_06390d120a9b9fa45976e9f9184f17a98695ce2acf174462ea6f00d5f744629f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f5aa4214b78995e643f075c459e0de5600aa86d12e5a40ae599eed89b9e8b84d->leave($__internal_f5aa4214b78995e643f075c459e0de5600aa86d12e5a40ae599eed89b9e8b84d_prof);

        
        $__internal_06390d120a9b9fa45976e9f9184f17a98695ce2acf174462ea6f00d5f744629f->leave($__internal_06390d120a9b9fa45976e9f9184f17a98695ce2acf174462ea6f00d5f744629f_prof);

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
