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
        $__internal_b6658f3d2971afc7dfe2fe8a19f6114c0bf6b6a6634e00a51746b9df14eda022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6658f3d2971afc7dfe2fe8a19f6114c0bf6b6a6634e00a51746b9df14eda022->enter($__internal_b6658f3d2971afc7dfe2fe8a19f6114c0bf6b6a6634e00a51746b9df14eda022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default:index_en.html.twig"));

        $__internal_2c578b8cdedb35078de69b8d6fe926ed42ea89b51e22cc4839596875b0903c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c578b8cdedb35078de69b8d6fe926ed42ea89b51e22cc4839596875b0903c39->enter($__internal_2c578b8cdedb35078de69b8d6fe926ed42ea89b51e22cc4839596875b0903c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default:index_en.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6658f3d2971afc7dfe2fe8a19f6114c0bf6b6a6634e00a51746b9df14eda022->leave($__internal_b6658f3d2971afc7dfe2fe8a19f6114c0bf6b6a6634e00a51746b9df14eda022_prof);

        
        $__internal_2c578b8cdedb35078de69b8d6fe926ed42ea89b51e22cc4839596875b0903c39->leave($__internal_2c578b8cdedb35078de69b8d6fe926ed42ea89b51e22cc4839596875b0903c39_prof);

    }

    // line 3
    public function block_article_content($context, array $blocks = array())
    {
        $__internal_2c12d40707f8fd61cea7e23f25508c857775b45971c8be892df0435dd0aa91dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c12d40707f8fd61cea7e23f25508c857775b45971c8be892df0435dd0aa91dc->enter($__internal_2c12d40707f8fd61cea7e23f25508c857775b45971c8be892df0435dd0aa91dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_content"));

        $__internal_b4a99dda4eb90cbd6e5594fa16d46ac31d97f0f4b222d92900b5fb039aa2879c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a99dda4eb90cbd6e5594fa16d46ac31d97f0f4b222d92900b5fb039aa2879c->enter($__internal_b4a99dda4eb90cbd6e5594fa16d46ac31d97f0f4b222d92900b5fb039aa2879c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_content"));

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
                                    ";
            // line 22
            if ($this->getAttribute($context["p"], "imageUrl", array())) {
                // line 23
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/uploads/articles/" . $this->getAttribute($context["p"], "imageUrl", array()))), "html", null, true);
                echo "\" width=\"350px\" height=\"185px\" />
                                    ";
            } else {
                // line 25
                echo "                                        <img src=\"http://placehold.it/350x185\" alt=\"\">
                                    ";
            }
            // line 27
            echo "                                </figure>
                                <div class=\"image-light\"></div>
                                <span class=\"dashicons dashicons-format-gallery\"></span>
                            </a>
                        </div>
                        <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/shadow.png"), "html", null, true);
            echo "\" class=\"shadow\" alt=\"shadow\">
                    </div>

                    <!--Content-->
                    <div class=\"col-sm-6\">
                        <h4><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_view_post_detail", array("id" => $this->getAttribute($context["p"], "id", array()), "_locale" => "en")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "titleEn", array()), "html", null, true);
            echo "</a></h4>
                        <p class=\"post-meta\">
                            <a href=\"#\"><span class=\"fa fa-clock-o\"></span> ";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "dateCreation", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</a> &nbsp;
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_view_posts_by_subcategory", array("id" => $this->getAttribute($this->getAttribute($context["p"], "subcategory", array()), "id", array()), "_locale" => "en")), "html", null, true);
            echo "\"><span class=\"fa fa-folder\"></span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "subcategory", array()), "nomEn", array()), "html", null, true);
            echo "</a> &nbsp;
                            <a class=\"hide\" href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                            <a class=\"hide\" href=\"#\"><span class=\"fa fa-eye\"></span> 0</a>
                        </p>
                        <p>";
            // line 44
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
        // line 50
        echo "
        ";
        // line 51
        if (($context["pagination"] ?? $this->getContext($context, "pagination"))) {
            // line 52
            echo "            ";
            $this->loadTemplate("GlobalViewBundle:Default:pagination.html.twig", "GlobalViewBundle:Default:index_en.html.twig", 52)->display($context);
            // line 53
            echo "        ";
        }
        // line 54
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
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/shadow.png"), "html", null, true);
        echo "\" alt=\"shadow\" class=\"shadow\">
    </section>

";
        
        $__internal_b4a99dda4eb90cbd6e5594fa16d46ac31d97f0f4b222d92900b5fb039aa2879c->leave($__internal_b4a99dda4eb90cbd6e5594fa16d46ac31d97f0f4b222d92900b5fb039aa2879c_prof);

        
        $__internal_2c12d40707f8fd61cea7e23f25508c857775b45971c8be892df0435dd0aa91dc->leave($__internal_2c12d40707f8fd61cea7e23f25508c857775b45971c8be892df0435dd0aa91dc_prof);

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
        return array (  159 => 67,  144 => 54,  141 => 53,  138 => 52,  136 => 51,  133 => 50,  121 => 44,  112 => 40,  108 => 39,  101 => 37,  93 => 32,  86 => 27,  82 => 25,  76 => 23,  74 => 22,  65 => 15,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
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
                                    {% if p.imageUrl %}
                                        <img src=\"{{ asset('/uploads/articles/' ~ p.imageUrl ) }}\" width=\"350px\" height=\"185px\" />
                                    {% else %}
                                        <img src=\"http://placehold.it/350x185\" alt=\"\">
                                    {% endif %}
                                </figure>
                                <div class=\"image-light\"></div>
                                <span class=\"dashicons dashicons-format-gallery\"></span>
                            </a>
                        </div>
                        <img src=\"{{ asset('/img/shadow.png') }}\" class=\"shadow\" alt=\"shadow\">
                    </div>

                    <!--Content-->
                    <div class=\"col-sm-6\">
                        <h4><a href=\"{{ path('global_view_post_detail', {'id' : p.id, '_locale' : 'en'}) }}\">{{ p.titleEn }}</a></h4>
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
