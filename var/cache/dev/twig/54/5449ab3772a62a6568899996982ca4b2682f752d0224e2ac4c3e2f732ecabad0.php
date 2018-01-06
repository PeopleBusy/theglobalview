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
        $__internal_3aea1f1ce70811e650450150c45b1d02a3151226ecfe7d0014f97aea5a0c0926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aea1f1ce70811e650450150c45b1d02a3151226ecfe7d0014f97aea5a0c0926->enter($__internal_3aea1f1ce70811e650450150c45b1d02a3151226ecfe7d0014f97aea5a0c0926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default:index_de.html.twig"));

        $__internal_8a97aa265b6b3853bb5e5c32f66868d182085292e02514c2878d8f92f5c4776c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a97aa265b6b3853bb5e5c32f66868d182085292e02514c2878d8f92f5c4776c->enter($__internal_8a97aa265b6b3853bb5e5c32f66868d182085292e02514c2878d8f92f5c4776c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default:index_de.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3aea1f1ce70811e650450150c45b1d02a3151226ecfe7d0014f97aea5a0c0926->leave($__internal_3aea1f1ce70811e650450150c45b1d02a3151226ecfe7d0014f97aea5a0c0926_prof);

        
        $__internal_8a97aa265b6b3853bb5e5c32f66868d182085292e02514c2878d8f92f5c4776c->leave($__internal_8a97aa265b6b3853bb5e5c32f66868d182085292e02514c2878d8f92f5c4776c_prof);

    }

    // line 3
    public function block_article_content($context, array $blocks = array())
    {
        $__internal_991aa8539282973b7f7b2ba267c9912e821e6132d8f28ac332ce5c38bf06a955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_991aa8539282973b7f7b2ba267c9912e821e6132d8f28ac332ce5c38bf06a955->enter($__internal_991aa8539282973b7f7b2ba267c9912e821e6132d8f28ac332ce5c38bf06a955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_content"));

        $__internal_94b8913adf67c765c633fa00bb36f5573ba193f0b8b67b164b056c99dad185e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b8913adf67c765c633fa00bb36f5573ba193f0b8b67b164b056c99dad185e4->enter($__internal_94b8913adf67c765c633fa00bb36f5573ba193f0b8b67b164b056c99dad185e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_content"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_view_post_detail", array("id" => $this->getAttribute($context["p"], "id", array()), "_locale" => "de")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "titleDe", array()), "html", null, true);
            echo "</a></h4>
                        <p class=\"post-meta\">
                            <a href=\"#\"><span class=\"fa fa-clock-o\"></span> ";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "dateCreation", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</a> &nbsp;
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_view_posts_by_subcategory", array("id" => $this->getAttribute($this->getAttribute($context["p"], "subcategory", array()), "id", array()), "_locale" => "de")), "html", null, true);
            echo "\"><span class=\"fa fa-folder\"></span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "subcategory", array()), "nomDe", array()), "html", null, true);
            echo "</a> &nbsp;
                            <a class=\"hide\" href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                            <a class=\"hide\" href=\"#\"><span class=\"fa fa-eye\"></span> 0</a>
                        </p>
                        <p>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "descriptionDe", array()), "html", null, true);
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
            $this->loadTemplate("GlobalViewBundle:Default:pagination.html.twig", "GlobalViewBundle:Default:index_de.html.twig", 52)->display($context);
            // line 53
            echo "        ";
        }
        // line 54
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
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/shadow.png"), "html", null, true);
        echo "\" alt=\"shadow\" class=\"shadow\">
    </section>

";
        
        $__internal_94b8913adf67c765c633fa00bb36f5573ba193f0b8b67b164b056c99dad185e4->leave($__internal_94b8913adf67c765c633fa00bb36f5573ba193f0b8b67b164b056c99dad185e4_prof);

        
        $__internal_991aa8539282973b7f7b2ba267c9912e821e6132d8f28ac332ce5c38bf06a955->leave($__internal_991aa8539282973b7f7b2ba267c9912e821e6132d8f28ac332ce5c38bf06a955_prof);

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
        return array (  160 => 68,  144 => 54,  141 => 53,  138 => 52,  136 => 51,  133 => 50,  121 => 44,  112 => 40,  108 => 39,  101 => 37,  93 => 32,  86 => 27,  82 => 25,  76 => 23,  74 => 22,  65 => 15,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
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
                        <h4><a href=\"{{ path('global_view_post_detail', {'id' : p.id, '_locale' : 'de'}) }}\">{{ p.titleDe }}</a></h4>
                        <p class=\"post-meta\">
                            <a href=\"#\"><span class=\"fa fa-clock-o\"></span> {{ p.dateCreation | date('d/m/Y H:i:s') }}</a> &nbsp;
                            <a href=\"{{ path('global_view_posts_by_subcategory', {'id' : p.subcategory.id, '_locale' : 'de'}) }}\"><span class=\"fa fa-folder\"></span> {{ p.subcategory.nomDe }}</a> &nbsp;
                            <a class=\"hide\" href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                            <a class=\"hide\" href=\"#\"><span class=\"fa fa-eye\"></span> 0</a>
                        </p>
                        <p>{{ p.descriptionDe }}</p>
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
