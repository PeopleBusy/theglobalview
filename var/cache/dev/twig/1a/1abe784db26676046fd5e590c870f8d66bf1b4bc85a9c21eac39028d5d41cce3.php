<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_fd30ac2723f65fa427fc1bec979d18dca99ab79db3dd9dd951b5929657d48bc8 extends Twig_Template
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
        $__internal_fbf0fc7ac2ed57f638b81c0745abd358eba3beca5e645cc18d95da7bfda00a82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbf0fc7ac2ed57f638b81c0745abd358eba3beca5e645cc18d95da7bfda00a82->enter($__internal_fbf0fc7ac2ed57f638b81c0745abd358eba3beca5e645cc18d95da7bfda00a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_ef71776acd8b5217cef65c2794c8b994c3d1cf42af04b2bbe2644cb3b4542cb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef71776acd8b5217cef65c2794c8b994c3d1cf42af04b2bbe2644cb3b4542cb4->enter($__internal_ef71776acd8b5217cef65c2794c8b994c3d1cf42af04b2bbe2644cb3b4542cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_fbf0fc7ac2ed57f638b81c0745abd358eba3beca5e645cc18d95da7bfda00a82->leave($__internal_fbf0fc7ac2ed57f638b81c0745abd358eba3beca5e645cc18d95da7bfda00a82_prof);

        
        $__internal_ef71776acd8b5217cef65c2794c8b994c3d1cf42af04b2bbe2644cb3b4542cb4->leave($__internal_ef71776acd8b5217cef65c2794c8b994c3d1cf42af04b2bbe2644cb3b4542cb4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
