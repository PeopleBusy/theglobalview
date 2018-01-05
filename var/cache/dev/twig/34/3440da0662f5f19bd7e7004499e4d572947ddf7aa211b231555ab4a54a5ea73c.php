<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_e756c9b35e3245737322110e7bf59608e5415a7010a74216843b16b4041cd8b8 extends Twig_Template
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
        $__internal_b79f49e8ece1b0eca82d2731d96e42b1804b2f27b28afee47438d67e8586399b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b79f49e8ece1b0eca82d2731d96e42b1804b2f27b28afee47438d67e8586399b->enter($__internal_b79f49e8ece1b0eca82d2731d96e42b1804b2f27b28afee47438d67e8586399b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_fd97a96068e634ad41317e41288618afa7dc35e8830572bf58a5093ae38bef2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd97a96068e634ad41317e41288618afa7dc35e8830572bf58a5093ae38bef2b->enter($__internal_fd97a96068e634ad41317e41288618afa7dc35e8830572bf58a5093ae38bef2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_b79f49e8ece1b0eca82d2731d96e42b1804b2f27b28afee47438d67e8586399b->leave($__internal_b79f49e8ece1b0eca82d2731d96e42b1804b2f27b28afee47438d67e8586399b_prof);

        
        $__internal_fd97a96068e634ad41317e41288618afa7dc35e8830572bf58a5093ae38bef2b->leave($__internal_fd97a96068e634ad41317e41288618afa7dc35e8830572bf58a5093ae38bef2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/Rachid/SymfonyProjects/theglobalview/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
