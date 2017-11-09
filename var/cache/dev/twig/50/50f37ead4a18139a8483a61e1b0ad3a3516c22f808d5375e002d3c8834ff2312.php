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
        $__internal_d13b81081290b0da8f4f52b31b38b5d0074a4917b53d68c177665fd84534233d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d13b81081290b0da8f4f52b31b38b5d0074a4917b53d68c177665fd84534233d->enter($__internal_d13b81081290b0da8f4f52b31b38b5d0074a4917b53d68c177665fd84534233d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_11132393bc80a5ca8c3f3b3b605298231ec8bd51848e9cfc97672b31cd3e0b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11132393bc80a5ca8c3f3b3b605298231ec8bd51848e9cfc97672b31cd3e0b5e->enter($__internal_11132393bc80a5ca8c3f3b3b605298231ec8bd51848e9cfc97672b31cd3e0b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d13b81081290b0da8f4f52b31b38b5d0074a4917b53d68c177665fd84534233d->leave($__internal_d13b81081290b0da8f4f52b31b38b5d0074a4917b53d68c177665fd84534233d_prof);

        
        $__internal_11132393bc80a5ca8c3f3b3b605298231ec8bd51848e9cfc97672b31cd3e0b5e->leave($__internal_11132393bc80a5ca8c3f3b3b605298231ec8bd51848e9cfc97672b31cd3e0b5e_prof);

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
