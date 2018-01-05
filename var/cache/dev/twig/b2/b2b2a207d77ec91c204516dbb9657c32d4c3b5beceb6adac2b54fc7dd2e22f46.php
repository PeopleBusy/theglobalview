<?php

/* GlobalViewBundle:Default:index_fr.html.twig */
class __TwigTemplate_8516a44d44d0e7166ffc9698289df50f24013e2465fc62a312551653fd58d48b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_fr.html.twig", "GlobalViewBundle:Default:index_fr.html.twig", 1);
        $this->blocks = array(
            'article_content' => array($this, 'block_article_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_fr.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_406008a137b62320392aa3df0433120649e872df17f848b3292b22df41ec8721 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_406008a137b62320392aa3df0433120649e872df17f848b3292b22df41ec8721->enter($__internal_406008a137b62320392aa3df0433120649e872df17f848b3292b22df41ec8721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default:index_fr.html.twig"));

        $__internal_1d45a5cbcfcd6f0529d185e8f405db1fc595b939ee3205a440197cfc172fadd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d45a5cbcfcd6f0529d185e8f405db1fc595b939ee3205a440197cfc172fadd9->enter($__internal_1d45a5cbcfcd6f0529d185e8f405db1fc595b939ee3205a440197cfc172fadd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default:index_fr.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_406008a137b62320392aa3df0433120649e872df17f848b3292b22df41ec8721->leave($__internal_406008a137b62320392aa3df0433120649e872df17f848b3292b22df41ec8721_prof);

        
        $__internal_1d45a5cbcfcd6f0529d185e8f405db1fc595b939ee3205a440197cfc172fadd9->leave($__internal_1d45a5cbcfcd6f0529d185e8f405db1fc595b939ee3205a440197cfc172fadd9_prof);

    }

    // line 3
    public function block_article_content($context, array $blocks = array())
    {
        $__internal_e05d63bf8faf9b9d2768b04b7fb106523e17a413422a26d487b28d48d00a864f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e05d63bf8faf9b9d2768b04b7fb106523e17a413422a26d487b28d48d00a864f->enter($__internal_e05d63bf8faf9b9d2768b04b7fb106523e17a413422a26d487b28d48d00a864f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_content"));

        $__internal_bda1c88dc358f441195c68254bfae164a1ff7009bc248fab7c96aa6bd001023d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bda1c88dc358f441195c68254bfae164a1ff7009bc248fab7c96aa6bd001023d->enter($__internal_bda1c88dc358f441195c68254bfae164a1ff7009bc248fab7c96aa6bd001023d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_content"));

        // line 4
        echo "

    <!-- ARTICLES V1 WIDGET -->
    <section class=\"widget articles-v1\">
        <!-- Widget Header -->
        <header class=\"clearfix\">
            <h4>Grands titres</h4>
            <a href=\"#\" class=\"control\"><i class=\"fa fa-plus\"></i></a>
        </header>

        <!-- Widget Contents: Articles-->
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 16
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
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/shadow.png"), "html", null, true);
            echo "\" class=\"shadow\" alt=\"shadow\">
                    </div>

                    <!--Content-->
                    <div class=\"col-sm-6\">
                        <h4><a href=\"#\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "titleFr", array()), "html", null, true);
            echo "</a></h4>
                        <p class=\"post-meta\">
                            <a href=\"#\"><span class=\"fa fa-clock-o\"></span> ";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "dateCreation", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</a> &nbsp;
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_view_posts_by_subcategory", array("id" => $this->getAttribute($this->getAttribute($context["p"], "subcategory", array()), "id", array()), "_locale" => "fr")), "html", null, true);
            echo "\"><span class=\"fa fa-folder\"></span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "subcategory", array()), "nomFr", array()), "html", null, true);
            echo "</a> &nbsp;
                            <a class=\"hide\" href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                            <a class=\"hide\" href=\"#\"><span class=\"fa fa-eye\"></span> 0</a>
                        </p>
                        <p>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "descriptionFr", array()), "html", null, true);
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
        // line 47
        echo "
        ";
        // line 48
        if (($context["pagination"] ?? $this->getContext($context, "pagination"))) {
            // line 49
            echo "            ";
            $this->loadTemplate("GlobalViewBundle:Default:pagination.html.twig", "GlobalViewBundle:Default:index_fr.html.twig", 49)->display($context);
            // line 50
            echo "        ";
        }
        // line 51
        echo "
    </section>

    <!-- ADS -->
    <section class=\"widget\">
        <!-- Widget Header -->
        <header class=\"clearfix\"><h4>Publicités</h4></header>

        <!-- Widget Content -->
        <div class=\"frame thick\">
            <a href=\"http://themeforest.net/user/friskamax/portfolio?ref=friskamax\" target=\"_blank\">
                <img src=\"http://placehold.it/728x90/f0f0f9\" alt=\"ads\">
            </a>
        </div>
        <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/shadow.png"), "html", null, true);
        echo "\" alt=\"shadow\" class=\"shadow\">
    </section>

";
        
        $__internal_bda1c88dc358f441195c68254bfae164a1ff7009bc248fab7c96aa6bd001023d->leave($__internal_bda1c88dc358f441195c68254bfae164a1ff7009bc248fab7c96aa6bd001023d_prof);

        
        $__internal_e05d63bf8faf9b9d2768b04b7fb106523e17a413422a26d487b28d48d00a864f->leave($__internal_e05d63bf8faf9b9d2768b04b7fb106523e17a413422a26d487b28d48d00a864f_prof);

    }

    public function getTemplateName()
    {
        return "GlobalViewBundle:Default:index_fr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 65,  130 => 51,  127 => 50,  124 => 49,  122 => 48,  119 => 47,  107 => 41,  98 => 37,  94 => 36,  89 => 34,  81 => 29,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base_fr.html.twig\" %}

{% block article_content %}


    <!-- ARTICLES V1 WIDGET -->
    <section class=\"widget articles-v1\">
        <!-- Widget Header -->
        <header class=\"clearfix\">
            <h4>Grands titres</h4>
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
                        <h4><a href=\"#\">{{ p.titleFr }}</a></h4>
                        <p class=\"post-meta\">
                            <a href=\"#\"><span class=\"fa fa-clock-o\"></span> {{ p.dateCreation | date('d/m/Y H:i:s') }}</a> &nbsp;
                            <a href=\"{{ path('global_view_posts_by_subcategory', {'id' : p.subcategory.id, '_locale' : 'fr'}) }}\"><span class=\"fa fa-folder\"></span> {{ p.subcategory.nomFr }}</a> &nbsp;
                            <a class=\"hide\" href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                            <a class=\"hide\" href=\"#\"><span class=\"fa fa-eye\"></span> 0</a>
                        </p>
                        <p>{{ p.descriptionFr }}</p>
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
        <header class=\"clearfix\"><h4>Publicités</h4></header>

        <!-- Widget Content -->
        <div class=\"frame thick\">
            <a href=\"http://themeforest.net/user/friskamax/portfolio?ref=friskamax\" target=\"_blank\">
                <img src=\"http://placehold.it/728x90/f0f0f9\" alt=\"ads\">
            </a>
        </div>
        <img src=\"{{ asset('img/shadow.png') }}\" alt=\"shadow\" class=\"shadow\">
    </section>

{% endblock %}", "GlobalViewBundle:Default:index_fr.html.twig", "/Users/Rachid/SymfonyProjects/theglobalview/src/GlobalViewBundle/Resources/views/Default/index_fr.html.twig");
    }
}
