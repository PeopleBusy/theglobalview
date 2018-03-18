<?php

/* GlobalViewBundle:Default:index_de.html.twig */
class __TwigTemplate_e177ffb8e4d819227e943c502c9bcdde702ab96ab9d4ddb472e18445d1e613a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_de.html.twig", "GlobalViewBundle:Default:index_de.html.twig", 1);
        $this->blocks = array(
            'article_content' => array($this, 'block_article_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_de.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_925339ecc0917c170cc21880c8b9ca78ae58c8f7b345614884d7beefe7f8b740 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_925339ecc0917c170cc21880c8b9ca78ae58c8f7b345614884d7beefe7f8b740->enter($__internal_925339ecc0917c170cc21880c8b9ca78ae58c8f7b345614884d7beefe7f8b740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default:index_de.html.twig"));

        $__internal_5545529babc639ff72b442a5a05a212d08f51abf7bc7b7cccdc95a09c29177f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5545529babc639ff72b442a5a05a212d08f51abf7bc7b7cccdc95a09c29177f2->enter($__internal_5545529babc639ff72b442a5a05a212d08f51abf7bc7b7cccdc95a09c29177f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default:index_de.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_925339ecc0917c170cc21880c8b9ca78ae58c8f7b345614884d7beefe7f8b740->leave($__internal_925339ecc0917c170cc21880c8b9ca78ae58c8f7b345614884d7beefe7f8b740_prof);

        
        $__internal_5545529babc639ff72b442a5a05a212d08f51abf7bc7b7cccdc95a09c29177f2->leave($__internal_5545529babc639ff72b442a5a05a212d08f51abf7bc7b7cccdc95a09c29177f2_prof);

    }

    // line 3
    public function block_article_content($context, array $blocks = array())
    {
        $__internal_8eadbd23f131acb275fa8d31c8b4d0f6d9e7c68579bc68ca69984a1d49fdfa64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eadbd23f131acb275fa8d31c8b4d0f6d9e7c68579bc68ca69984a1d49fdfa64->enter($__internal_8eadbd23f131acb275fa8d31c8b4d0f6d9e7c68579bc68ca69984a1d49fdfa64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_content"));

        $__internal_f97bcd0d8c671e80ffec781cba93462ce1e4246205a8a3afbc2155ed92a62986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f97bcd0d8c671e80ffec781cba93462ce1e4246205a8a3afbc2155ed92a62986->enter($__internal_f97bcd0d8c671e80ffec781cba93462ce1e4246205a8a3afbc2155ed92a62986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_content"));

        // line 4
        echo "
    <!-- ARTICLES V1 WIDGET -->
    <section class=\"widget articles-v1\">
        <!-- Widget Header -->
        <header class=\"clearfix\">
            <h4>Schlagzeilen</h4>
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
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_view_post_detail", array("id" => $this->getAttribute($context["p"], "id", array()), "_locale" => "fr")), "html", null, true);
                echo "\">
                                            <img src=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/uploads/articles/" . $this->getAttribute($context["p"], "imageUrl", array()))), "html", null, true);
                echo "\" width=\"350px\" height=\"185px\" />
                                        </a>
                                    ";
            } else {
                // line 27
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_view_post_detail", array("id" => $this->getAttribute($context["p"], "id", array()), "_locale" => "fr")), "html", null, true);
                echo "\">
                                            <img src=\"http://placehold.it/350x185\" alt=\"\">
                                        </a>
                                    ";
            }
            // line 31
            echo "                                </figure>
                                <div class=\"image-light\"></div>
                                <span class=\"dashicons dashicons-format-gallery\"></span>
                            </a>
                        </div>
                        <img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/shadow.png"), "html", null, true);
            echo "\" class=\"shadow\" alt=\"shadow\">
                    </div>

                    <!--Content-->
                    <div class=\"col-sm-6\">
                        <h4><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_view_post_detail", array("id" => $this->getAttribute($context["p"], "id", array()), "_locale" => "de")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "titleDe", array()), "html", null, true);
            echo "</a></h4>
                        <p class=\"post-meta\">
                            <a href=\"#\"><span class=\"fa fa-clock-o\"></span> ";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "dateCreation", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</a> &nbsp;
                            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_view_posts_by_subcategory", array("id" => $this->getAttribute($this->getAttribute($context["p"], "subcategory", array()), "id", array()), "_locale" => "de")), "html", null, true);
            echo "\"><span class=\"fa fa-folder\"></span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "subcategory", array()), "nomDe", array()), "html", null, true);
            echo "</a> &nbsp;
                            <a class=\"hide\" href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                            <a class=\"hide\" href=\"#\"><span class=\"fa fa-eye\"></span> 0</a>
                        </p>
                        <p>";
            // line 48
            echo (((twig_length_filter($this->env, $this->getAttribute($context["p"], "descriptionDe", array())) > 160)) ? ((twig_slice($this->env, $this->getAttribute($context["p"], "descriptionDe", array()), 0, 160) . "&hellip;")) : ($this->getAttribute($context["p"], "descriptionDe", array())));
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
        // line 54
        echo "
        ";
        // line 55
        if (($context["pagination"] ?? $this->getContext($context, "pagination"))) {
            // line 56
            echo "            ";
            $this->loadTemplate("GlobalViewBundle:Default:pagination.html.twig", "GlobalViewBundle:Default:index_de.html.twig", 56)->display($context);
            // line 57
            echo "        ";
        }
        // line 58
        echo "
    </section>

    <!-- ADS -->
    <section class=\"widget\">
        <!-- Widget Header -->
        <header class=\"clearfix\"><h4>Werbung</h4></header>

        <!-- Widget Content -->
        <div class=\"frame thick\">
            <a href=\"http://themeforest.net/user/friskamax/portfolio?ref=friskamax\" target=\"_blank\">
                <img src=\"http://placehold.it/728x90/f0f0f9\" alt=\"ads\">
            </a>
        </div>
        <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/shadow.png"), "html", null, true);
        echo "\" alt=\"shadow\" class=\"shadow\">
    </section>

";
        
        $__internal_f97bcd0d8c671e80ffec781cba93462ce1e4246205a8a3afbc2155ed92a62986->leave($__internal_f97bcd0d8c671e80ffec781cba93462ce1e4246205a8a3afbc2155ed92a62986_prof);

        
        $__internal_8eadbd23f131acb275fa8d31c8b4d0f6d9e7c68579bc68ca69984a1d49fdfa64->leave($__internal_8eadbd23f131acb275fa8d31c8b4d0f6d9e7c68579bc68ca69984a1d49fdfa64_prof);

    }

    public function getTemplateName()
    {
        return "GlobalViewBundle:Default:index_de.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 72,  153 => 58,  150 => 57,  147 => 56,  145 => 55,  142 => 54,  130 => 48,  121 => 44,  117 => 43,  110 => 41,  102 => 36,  95 => 31,  87 => 27,  81 => 24,  76 => 23,  74 => 22,  65 => 15,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base_de.html.twig\" %}

{% block article_content %}

    <!-- ARTICLES V1 WIDGET -->
    <section class=\"widget articles-v1\">
        <!-- Widget Header -->
        <header class=\"clearfix\">
            <h4>Schlagzeilen</h4>
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
                                        <a href=\"{{ path('global_view_post_detail', {'id' : p.id, '_locale' : 'fr'}) }}\">
                                            <img src=\"{{ asset('/uploads/articles/' ~ p.imageUrl ) }}\" width=\"350px\" height=\"185px\" />
                                        </a>
                                    {% else %}
                                        <a href=\"{{ path('global_view_post_detail', {'id' : p.id, '_locale' : 'fr'}) }}\">
                                            <img src=\"http://placehold.it/350x185\" alt=\"\">
                                        </a>
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
                        <h4><a href=\"{{ path('global_view_post_detail', {'id' : p.id, '_locale' : 'de'}) }}\">{{ p.titleDe }}</a></h4>
                        <p class=\"post-meta\">
                            <a href=\"#\"><span class=\"fa fa-clock-o\"></span> {{ p.dateCreation | date('d/m/Y H:i:s') }}</a> &nbsp;
                            <a href=\"{{ path('global_view_posts_by_subcategory', {'id' : p.subcategory.id, '_locale' : 'de'}) }}\"><span class=\"fa fa-folder\"></span> {{ p.subcategory.nomDe }}</a> &nbsp;
                            <a class=\"hide\" href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                            <a class=\"hide\" href=\"#\"><span class=\"fa fa-eye\"></span> 0</a>
                        </p>
                        <p>{{ (p.descriptionDe|length > 160 ? p.descriptionDe|slice(0, 160) ~ '&hellip;' : p.descriptionDe)|raw }}</p>
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
        <header class=\"clearfix\"><h4>Werbung</h4></header>

        <!-- Widget Content -->
        <div class=\"frame thick\">
            <a href=\"http://themeforest.net/user/friskamax/portfolio?ref=friskamax\" target=\"_blank\">
                <img src=\"http://placehold.it/728x90/f0f0f9\" alt=\"ads\">
            </a>
        </div>
        <img src=\"{{ asset('/img/shadow.png') }}\" alt=\"shadow\" class=\"shadow\">
    </section>

{% endblock %}", "GlobalViewBundle:Default:index_de.html.twig", "/Users/Rachid/SymfonyProjects/theglobalview/src/GlobalViewBundle/Resources/views/Default/index_de.html.twig");
    }
}
