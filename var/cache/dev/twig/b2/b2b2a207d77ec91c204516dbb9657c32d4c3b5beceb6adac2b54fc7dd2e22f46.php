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
        $__internal_7cb30f82e90b05d17b542eb364a5dad37b9bed7bd5be6a7ab16bfca6a3db6162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cb30f82e90b05d17b542eb364a5dad37b9bed7bd5be6a7ab16bfca6a3db6162->enter($__internal_7cb30f82e90b05d17b542eb364a5dad37b9bed7bd5be6a7ab16bfca6a3db6162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default:index_fr.html.twig"));

        $__internal_2a634fe30cbb2142a05b713893445ef406604a517ad71b550a4ec49aa83f500c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a634fe30cbb2142a05b713893445ef406604a517ad71b550a4ec49aa83f500c->enter($__internal_2a634fe30cbb2142a05b713893445ef406604a517ad71b550a4ec49aa83f500c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default:index_fr.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cb30f82e90b05d17b542eb364a5dad37b9bed7bd5be6a7ab16bfca6a3db6162->leave($__internal_7cb30f82e90b05d17b542eb364a5dad37b9bed7bd5be6a7ab16bfca6a3db6162_prof);

        
        $__internal_2a634fe30cbb2142a05b713893445ef406604a517ad71b550a4ec49aa83f500c->leave($__internal_2a634fe30cbb2142a05b713893445ef406604a517ad71b550a4ec49aa83f500c_prof);

    }

    // line 3
    public function block_article_content($context, array $blocks = array())
    {
        $__internal_fcfaecfacbaed39907426578f0cd39bf710256cfa29d941d6591049c2f913b08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcfaecfacbaed39907426578f0cd39bf710256cfa29d941d6591049c2f913b08->enter($__internal_fcfaecfacbaed39907426578f0cd39bf710256cfa29d941d6591049c2f913b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_content"));

        $__internal_f363f4aa5fd3832e2b17bf2d9406a5b96db0d016bd0dd8434878d89f50695567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f363f4aa5fd3832e2b17bf2d9406a5b96db0d016bd0dd8434878d89f50695567->enter($__internal_f363f4aa5fd3832e2b17bf2d9406a5b96db0d016bd0dd8434878d89f50695567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_content"));

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
                                    ";
            // line 23
            if ($this->getAttribute($context["p"], "imageUrl", array())) {
                // line 24
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_view_post_detail", array("id" => $this->getAttribute($context["p"], "id", array()), "_locale" => "fr")), "html", null, true);
                echo "\">
                                        <img src=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/uploads/articles/" . $this->getAttribute($context["p"], "imageUrl", array()))), "html", null, true);
                echo "\" width=\"350px\" height=\"185px\" />
                                    </a>
                                    ";
            } else {
                // line 28
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_view_post_detail", array("id" => $this->getAttribute($context["p"], "id", array()), "_locale" => "fr")), "html", null, true);
                echo "\">
                                        <img src=\"http://placehold.it/350x185\" alt=\"\">
                                    </a>
                                    ";
            }
            // line 32
            echo "                                </figure>
                                <div class=\"image-light\"></div>
                                <span class=\"dashicons dashicons-format-gallery\"></span>
                            </a>
                        </div>
                        <img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/shadow.png"), "html", null, true);
            echo "\" class=\"shadow\" alt=\"shadow\">
                    </div>

                    <!--Content-->
                    <div class=\"col-sm-6\">
                        <h4><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_view_post_detail", array("id" => $this->getAttribute($context["p"], "id", array()), "_locale" => "fr")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "titleFr", array()), "html", null, true);
            echo "</a></h4>
                        <p class=\"post-meta\">
                            <a href=\"#\"><span class=\"fa fa-clock-o\"></span> ";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "dateCreation", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</a> &nbsp;
                            <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_view_posts_by_subcategory", array("id" => $this->getAttribute($this->getAttribute($context["p"], "subcategory", array()), "id", array()), "_locale" => "fr")), "html", null, true);
            echo "\"><span class=\"fa fa-folder\"></span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "subcategory", array()), "nomFr", array()), "html", null, true);
            echo "</a> &nbsp;
                            <a class=\"hide\" href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                            <a class=\"hide\" href=\"#\"><span class=\"fa fa-eye\"></span> 0</a>
                        </p>
                        <p>";
            // line 49
            echo (((twig_length_filter($this->env, $this->getAttribute($context["p"], "descriptionFr", array())) > 160)) ? ((twig_slice($this->env, $this->getAttribute($context["p"], "descriptionFr", array()), 0, 160) . "&hellip;")) : ($this->getAttribute($context["p"], "descriptionFr", array())));
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
        // line 55
        echo "
        ";
        // line 56
        if (($context["pagination"] ?? $this->getContext($context, "pagination"))) {
            // line 57
            echo "            ";
            $this->loadTemplate("GlobalViewBundle:Default:pagination.html.twig", "GlobalViewBundle:Default:index_fr.html.twig", 57)->display($context);
            // line 58
            echo "        ";
        }
        // line 59
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
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/shadow.png"), "html", null, true);
        echo "\" alt=\"shadow\" class=\"shadow\">
    </section>

";
        
        $__internal_f363f4aa5fd3832e2b17bf2d9406a5b96db0d016bd0dd8434878d89f50695567->leave($__internal_f363f4aa5fd3832e2b17bf2d9406a5b96db0d016bd0dd8434878d89f50695567_prof);

        
        $__internal_fcfaecfacbaed39907426578f0cd39bf710256cfa29d941d6591049c2f913b08->leave($__internal_fcfaecfacbaed39907426578f0cd39bf710256cfa29d941d6591049c2f913b08_prof);

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
        return array (  170 => 73,  154 => 59,  151 => 58,  148 => 57,  146 => 56,  143 => 55,  131 => 49,  122 => 45,  118 => 44,  111 => 42,  103 => 37,  96 => 32,  88 => 28,  82 => 25,  77 => 24,  75 => 23,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
                        <h4><a href=\"{{ path('global_view_post_detail', {'id' : p.id, '_locale' : 'fr'}) }}\">{{ p.titleFr }}</a></h4>
                        <p class=\"post-meta\">
                            <a href=\"#\"><span class=\"fa fa-clock-o\"></span> {{ p.dateCreation | date('d/m/Y H:i:s') }}</a> &nbsp;
                            <a href=\"{{ path('global_view_posts_by_subcategory', {'id' : p.subcategory.id, '_locale' : 'fr'}) }}\"><span class=\"fa fa-folder\"></span> {{ p.subcategory.nomFr }}</a> &nbsp;
                            <a class=\"hide\" href=\"#\"><span class=\"fa fa-comments\"></span> 1,324</a> &nbsp;
                            <a class=\"hide\" href=\"#\"><span class=\"fa fa-eye\"></span> 0</a>
                        </p>
                        <p>{{ (p.descriptionFr|length > 160 ? p.descriptionFr|slice(0, 160) ~ '&hellip;' : p.descriptionFr)|raw }}</p>
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
