<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_05d30222a8028b3c54913e06b11eeaeea8d0f95e86caa087686eaa21f6895885 extends Twig_Template
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
        $__internal_9486cd216320f645fc1983d8eac54033863690f11f967b67616682228d1e9eb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9486cd216320f645fc1983d8eac54033863690f11f967b67616682228d1e9eb5->enter($__internal_9486cd216320f645fc1983d8eac54033863690f11f967b67616682228d1e9eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_312a6ea4aac36fc9acab7d571ae0ad99dfb4014ad1a454cf2f484f8d5d4abce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_312a6ea4aac36fc9acab7d571ae0ad99dfb4014ad1a454cf2f484f8d5d4abce1->enter($__internal_312a6ea4aac36fc9acab7d571ae0ad99dfb4014ad1a454cf2f484f8d5d4abce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_9486cd216320f645fc1983d8eac54033863690f11f967b67616682228d1e9eb5->leave($__internal_9486cd216320f645fc1983d8eac54033863690f11f967b67616682228d1e9eb5_prof);

        
        $__internal_312a6ea4aac36fc9acab7d571ae0ad99dfb4014ad1a454cf2f484f8d5d4abce1->leave($__internal_312a6ea4aac36fc9acab7d571ae0ad99dfb4014ad1a454cf2f484f8d5d4abce1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
