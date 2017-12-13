<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_dade7c19e62c9349ca5997ebda3952d28f8b85da060fff1725113890272baf96 extends Twig_Template
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
        $__internal_65ea5e8d6cb9682dc1e191f5f05a8b1129cca0e9ecf86d481a4297e296cfab3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65ea5e8d6cb9682dc1e191f5f05a8b1129cca0e9ecf86d481a4297e296cfab3e->enter($__internal_65ea5e8d6cb9682dc1e191f5f05a8b1129cca0e9ecf86d481a4297e296cfab3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_87b8369b6063364ea9071045a8d9dd38288bfb65b373acd9248c0c1a03689220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87b8369b6063364ea9071045a8d9dd38288bfb65b373acd9248c0c1a03689220->enter($__internal_87b8369b6063364ea9071045a8d9dd38288bfb65b373acd9248c0c1a03689220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_65ea5e8d6cb9682dc1e191f5f05a8b1129cca0e9ecf86d481a4297e296cfab3e->leave($__internal_65ea5e8d6cb9682dc1e191f5f05a8b1129cca0e9ecf86d481a4297e296cfab3e_prof);

        
        $__internal_87b8369b6063364ea9071045a8d9dd38288bfb65b373acd9248c0c1a03689220->leave($__internal_87b8369b6063364ea9071045a8d9dd38288bfb65b373acd9248c0c1a03689220_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/rachid/Documents/Projet Client/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
