<?php

/* GlobalViewBundle:Default:index_en.html.twig */
class __TwigTemplate_ea93d7465495d8310ccce037be68a9da310a4c5d4e278b4f8519ef8248c5180f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_en.html.twig", "GlobalViewBundle:Default:index_en.html.twig", 1);
        $this->blocks = array(
            'article_content' => array($this, 'block_article_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_en.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c33b26085d35d79a322aea5dcd7f0e63b0c0a56d99640d1b0dc5f80f9c9ecb83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c33b26085d35d79a322aea5dcd7f0e63b0c0a56d99640d1b0dc5f80f9c9ecb83->enter($__internal_c33b26085d35d79a322aea5dcd7f0e63b0c0a56d99640d1b0dc5f80f9c9ecb83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default:index_en.html.twig"));

        $__internal_aa8ed27ab76a1dd3ce9d277fc2889569fcade8dcdd473651e10c0326894909b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8ed27ab76a1dd3ce9d277fc2889569fcade8dcdd473651e10c0326894909b3->enter($__internal_aa8ed27ab76a1dd3ce9d277fc2889569fcade8dcdd473651e10c0326894909b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default:index_en.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c33b26085d35d79a322aea5dcd7f0e63b0c0a56d99640d1b0dc5f80f9c9ecb83->leave($__internal_c33b26085d35d79a322aea5dcd7f0e63b0c0a56d99640d1b0dc5f80f9c9ecb83_prof);

        
        $__internal_aa8ed27ab76a1dd3ce9d277fc2889569fcade8dcdd473651e10c0326894909b3->leave($__internal_aa8ed27ab76a1dd3ce9d277fc2889569fcade8dcdd473651e10c0326894909b3_prof);

    }

    // line 3
    public function block_article_content($context, array $blocks = array())
    {
        $__internal_dc6c93b9b1db61af3cd46916f3915db3388e53f0ecd150b3819de89fc3607770 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc6c93b9b1db61af3cd46916f3915db3388e53f0ecd150b3819de89fc3607770->enter($__internal_dc6c93b9b1db61af3cd46916f3915db3388e53f0ecd150b3819de89fc3607770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_content"));

        $__internal_e1f93482941a25b119f638a99af423102012efe85cb3bdb4a89e980c50c120d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f93482941a25b119f638a99af423102012efe85cb3bdb4a89e980c50c120d0->enter($__internal_e1f93482941a25b119f638a99af423102012efe85cb3bdb4a89e980c50c120d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_content"));

        // line 4
        echo "
    <!-- ARTICLES V1 WIDGET -->
    <section class=\"widget articles-v1\">
        <!-- Widget Header -->
        <header class=\"clearfix\">
            <h4>Headline</h4>
            <a href=\"#\" class=\"control\"><i class=\"fa fa-plus\"></i></a>
        </header>

        <!-- Widget Contents: Articles-->
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 15
            echo "            <div class=\"article-medium\">
                <div class=\"row\">
                    <!--Image-->
                    <div class=\"col-sm-6\">
                        <div class=\"frame\">
                            <a class=\"image\" href=\"#\">
                                <figure class=\"image-holder\">
                                    <img src=\"http://placehold.it/350x185\" alt=\"Pub qui dolorem ipsum quia dol consectetur amet adipisci velit sed\">
                                </figure>
                                <div class=\"image-light\"></div>
                                <span class=\"dashicons dashicons-format-gallery\"></span>
                            </a>
                        </div>
                        <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/shadow.png"), "html", null, true);
            echo "\" class=\"shadow\" alt=\"shadow\">
                    </div>

                    <!--Content-->
                    <div class=\"col-sm-6\">
                        <h4><a href=\"#\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "titleEn", array()), "html", null, true);
            echo "</a></h4>
                        <p class=\"post-meta\">
                            <a href=\"#\"><span class=\"fa fa-clock-o\"></span> ";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "dateCreation", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</a> &nbsp;
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_view_posts_by_subcategory", array("id" => $this->getAttribute($this->getAttribute($context["p"], "subcategory", array()), "id", array()), "_locale" => "en")), "html", null, true);
            echo "\"><span class=\"fa fa-folder\"></span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "subcategory", array()), "nomEn", array()), "html", null, true);
            echo "</a> &nbsp;
                            <a class=\"hide\" href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                            <a class=\"hide\" href=\"#\"><span class=\"fa fa-eye\"></span> 0</a>
                        </p>
                        <p>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "descriptionEn", array()), "html", null, true);
            echo "</p>
                    </div>
                </div>
            </div>
            <hr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
        ";
        // line 47
        if (($context["pagination"] ?? $this->getContext($context, "pagination"))) {
            // line 48
            echo "            ";
            $this->loadTemplate("GlobalViewBundle:Default:pagination.html.twig", "GlobalViewBundle:Default:index_en.html.twig", 48)->display($context);
            // line 49
            echo "        ";
        }
        // line 50
        echo "    </section>

    <!-- ADS -->
    <section class=\"widget\">
        <!-- Widget Header -->
        <header class=\"clearfix\"><h4>Advertisement</h4></header>

        <!-- Widget Content -->
        <div class=\"frame thick\">
            <a href=\"http://themeforest.net/user/friskamax/portfolio?ref=friskamax\" target=\"_blank\">
                <img src=\"http://placehold.it/728x90/f0f0f9\" alt=\"ads\">
            </a>
        </div>
        <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/shadow.png"), "html", null, true);
        echo "\" alt=\"shadow\" class=\"shadow\">
    </section>

";
        
        $__internal_e1f93482941a25b119f638a99af423102012efe85cb3bdb4a89e980c50c120d0->leave($__internal_e1f93482941a25b119f638a99af423102012efe85cb3bdb4a89e980c50c120d0_prof);

        
        $__internal_dc6c93b9b1db61af3cd46916f3915db3388e53f0ecd150b3819de89fc3607770->leave($__internal_dc6c93b9b1db61af3cd46916f3915db3388e53f0ecd150b3819de89fc3607770_prof);

    }

    public function getTemplateName()
    {
        return "GlobalViewBundle:Default:index_en.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 63,  129 => 50,  126 => 49,  123 => 48,  121 => 47,  118 => 46,  106 => 40,  97 => 36,  93 => 35,  88 => 33,  80 => 28,  65 => 15,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base_en.html.twig\" %}

{% block article_content %}

    <!-- ARTICLES V1 WIDGET -->
    <section class=\"widget articles-v1\">
        <!-- Widget Header -->
        <header class=\"clearfix\">
            <h4>Headline</h4>
            <a href=\"#\" class=\"control\"><i class=\"fa fa-plus\"></i></a>
        </header>

        <!-- Widget Contents: Articles-->
        {% for p in posts %}
            <div class=\"article-medium\">
                <div class=\"row\">
                    <!--Image-->
                    <div class=\"col-sm-6\">
                        <div class=\"frame\">
                            <a class=\"image\" href=\"#\">
                                <figure class=\"image-holder\">
                                    <img src=\"http://placehold.it/350x185\" alt=\"Pub qui dolorem ipsum quia dol consectetur amet adipisci velit sed\">
                                </figure>
                                <div class=\"image-light\"></div>
                                <span class=\"dashicons dashicons-format-gallery\"></span>
                            </a>
                        </div>
                        <img src=\"{{ asset('/img/shadow.png') }}\" class=\"shadow\" alt=\"shadow\">
                    </div>

                    <!--Content-->
                    <div class=\"col-sm-6\">
                        <h4><a href=\"#\">{{ p.titleEn }}</a></h4>
                        <p class=\"post-meta\">
                            <a href=\"#\"><span class=\"fa fa-clock-o\"></span> {{ p.dateCreation | date('d/m/Y H:i:s') }}</a> &nbsp;
                            <a href=\"{{ path('global_view_posts_by_subcategory', {'id' : p.subcategory.id, '_locale' : 'en'}) }}\"><span class=\"fa fa-folder\"></span> {{ p.subcategory.nomEn }}</a> &nbsp;
                            <a class=\"hide\" href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                            <a class=\"hide\" href=\"#\"><span class=\"fa fa-eye\"></span> 0</a>
                        </p>
                        <p>{{ p.descriptionEn }}</p>
                    </div>
                </div>
            </div>
            <hr>
        {% endfor %}

        {% if pagination %}
            {% include 'GlobalViewBundle:Default:pagination.html.twig' %}
        {% endif %}
    </section>

    <!-- ADS -->
    <section class=\"widget\">
        <!-- Widget Header -->
        <header class=\"clearfix\"><h4>Advertisement</h4></header>

        <!-- Widget Content -->
        <div class=\"frame thick\">
            <a href=\"http://themeforest.net/user/friskamax/portfolio?ref=friskamax\" target=\"_blank\">
                <img src=\"http://placehold.it/728x90/f0f0f9\" alt=\"ads\">
            </a>
        </div>
        <img src=\"{{ asset('/img/shadow.png') }}\" alt=\"shadow\" class=\"shadow\">
    </section>

{% endblock %}", "GlobalViewBundle:Default:index_en.html.twig", "/Users/Rachid/SymfonyProjects/theglobalview/src/GlobalViewBundle/Resources/views/Default/index_en.html.twig");
    }
}
