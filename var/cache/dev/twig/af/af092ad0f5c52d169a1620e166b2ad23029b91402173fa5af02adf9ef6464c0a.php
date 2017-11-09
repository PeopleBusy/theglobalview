<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_321b75fdb1648d51a4454a33d432fce75ea6f1f0e377efae9beab94272628bb3 extends Twig_Template
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
        $__internal_4f1eb0bbd6ca6dc904503615b721b692b680f6b3ca0b5506b7274393200f5f28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f1eb0bbd6ca6dc904503615b721b692b680f6b3ca0b5506b7274393200f5f28->enter($__internal_4f1eb0bbd6ca6dc904503615b721b692b680f6b3ca0b5506b7274393200f5f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_dfd6e39f3ebe018b13070a87fe63e1ed76f8db0d8e54b64dd60d60b7c41514d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd6e39f3ebe018b13070a87fe63e1ed76f8db0d8e54b64dd60d60b7c41514d4->enter($__internal_dfd6e39f3ebe018b13070a87fe63e1ed76f8db0d8e54b64dd60d60b7c41514d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_4f1eb0bbd6ca6dc904503615b721b692b680f6b3ca0b5506b7274393200f5f28->leave($__internal_4f1eb0bbd6ca6dc904503615b721b692b680f6b3ca0b5506b7274393200f5f28_prof);

        
        $__internal_dfd6e39f3ebe018b13070a87fe63e1ed76f8db0d8e54b64dd60d60b7c41514d4->leave($__internal_dfd6e39f3ebe018b13070a87fe63e1ed76f8db0d8e54b64dd60d60b7c41514d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
