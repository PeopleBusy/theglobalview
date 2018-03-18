<?php

/* GlobalViewBundle:Default:article_detail_en.html.twig */
class __TwigTemplate_a3ffa861c18170c0c42d801ca8beed7fbeb43437f8f8714ccc404a7f023ed96c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_en.html.twig", "GlobalViewBundle:Default:article_detail_en.html.twig", 1);
        $this->blocks = array(
            'carousel_content' => array($this, 'block_carousel_content'),
            'article_content' => array($this, 'block_article_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_en.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_707bab4ca49266f96089422aa428a1c8f26c9caef81cb906ef206e6de84078f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_707bab4ca49266f96089422aa428a1c8f26c9caef81cb906ef206e6de84078f3->enter($__internal_707bab4ca49266f96089422aa428a1c8f26c9caef81cb906ef206e6de84078f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default:article_detail_en.html.twig"));

        $__internal_98f5a5b15ed19ba80cc5fd6ad0fb9b0351dfb64bed99b9b917af3df4c9faf6a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98f5a5b15ed19ba80cc5fd6ad0fb9b0351dfb64bed99b9b917af3df4c9faf6a2->enter($__internal_98f5a5b15ed19ba80cc5fd6ad0fb9b0351dfb64bed99b9b917af3df4c9faf6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default:article_detail_en.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_707bab4ca49266f96089422aa428a1c8f26c9caef81cb906ef206e6de84078f3->leave($__internal_707bab4ca49266f96089422aa428a1c8f26c9caef81cb906ef206e6de84078f3_prof);

        
        $__internal_98f5a5b15ed19ba80cc5fd6ad0fb9b0351dfb64bed99b9b917af3df4c9faf6a2->leave($__internal_98f5a5b15ed19ba80cc5fd6ad0fb9b0351dfb64bed99b9b917af3df4c9faf6a2_prof);

    }

    // line 3
    public function block_carousel_content($context, array $blocks = array())
    {
        $__internal_929733e0b0dd3258727bd634bd42f24367e2e6676f7bb9851a972c701b4ac934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_929733e0b0dd3258727bd634bd42f24367e2e6676f7bb9851a972c701b4ac934->enter($__internal_929733e0b0dd3258727bd634bd42f24367e2e6676f7bb9851a972c701b4ac934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel_content"));

        $__internal_d0e07debb5616e275111b83934ff0c711db5b0cafefec6880929609f1f28450c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e07debb5616e275111b83934ff0c711db5b0cafefec6880929609f1f28450c->enter($__internal_d0e07debb5616e275111b83934ff0c711db5b0cafefec6880929609f1f28450c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel_content"));

        
        $__internal_d0e07debb5616e275111b83934ff0c711db5b0cafefec6880929609f1f28450c->leave($__internal_d0e07debb5616e275111b83934ff0c711db5b0cafefec6880929609f1f28450c_prof);

        
        $__internal_929733e0b0dd3258727bd634bd42f24367e2e6676f7bb9851a972c701b4ac934->leave($__internal_929733e0b0dd3258727bd634bd42f24367e2e6676f7bb9851a972c701b4ac934_prof);

    }

    // line 5
    public function block_article_content($context, array $blocks = array())
    {
        $__internal_dd723bc51ed85333f45c38ab4982b7acd807b395ead922c52b2cbe08f1bf0094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd723bc51ed85333f45c38ab4982b7acd807b395ead922c52b2cbe08f1bf0094->enter($__internal_dd723bc51ed85333f45c38ab4982b7acd807b395ead922c52b2cbe08f1bf0094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_content"));

        $__internal_c070d244084122704c7888dd8504187bb8c93fa1e6bc292718120f951e91fae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c070d244084122704c7888dd8504187bb8c93fa1e6bc292718120f951e91fae8->enter($__internal_c070d244084122704c7888dd8504187bb8c93fa1e6bc292718120f951e91fae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_content"));

        // line 6
        echo "
    <!-- ARTICLES V1 WIDGET -->
    <section class=\"widget articles-v1\">
        <!-- Widget Header -->
        <header class=\"clearfix\">
            <h4>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "titleEn", array()), "html", null, true);
        echo "</h4>
            <a href=\"#\" class=\"control\"><i class=\"fa fa-plus\"></i></a>
        </header>

        <!-- POST CONTENT -->
        <article class=\"article-large hentry\">
            <!--Image-->
            <div class=\"frame thick clearfix\">
                <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/uploads/articles/" . $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "imageUrl", array()))), "html", null, true);
        echo "\" class=\"image\" data-lightbox title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "titleEn", array()), "html", null, true);
        echo "\">
                    <figure class=\"\">
                        ";
        // line 21
        if ($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "imageUrl", array())) {
            // line 22
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("/uploads/articles/" . $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "imageUrl", array()))), "html", null, true);
            echo "\" width=\"730px\" height=\"370px\" />
                        ";
        } else {
            // line 24
            echo "                            <img src=\"http://placehold.it/730x370.jpg\" alt=\"\">
                        ";
        }
        // line 26
        echo "                    </figure>
                    <div class=\"image-light\"></div>
                </a>
                <div class=\"hide icons entry-footer\">
                    <span class=\"vcard\">
                        <a href=\"#\" class=\"url fn\" title=\"Siska\"><span class=\"hidden\">Siska</span><img src=\"http://placehold.it/75x75.jpg\" alt=\"Siska\"></a>
                    </span>
                    <a href=\"#\" title=\"Post format image\"><i class=\"dashicons dashicons-format-image\"></i></a>
                    <a href=\"#\" title=\"1,347 Comments\"><i class=\"fa fa-comments\"></i><span class=\"comment\">1,347</span></a>
                </div>
                <p class=\"post-meta entry-footer pull-right\">
                    <a href=\"#\" rel=\"bookmark\"><time class=\"entry-date published updated\" datetime=\"2014-01-08T11:42:20+00:00\">";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "dateCreation", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "</time></a>
                </p>
            </div>
            <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/shadow.png"), "html", null, true);
        echo "\" class=\"shadow\" alt=\"shadow\">

            <header class=\"hidden\">
                <h1 class=\"entry-title\">Quasi Architecto Beatae Vitae Dicta Sunt Explicabo Nemo Enim Ipsam Voluptatem</h1>
            </header>

            <div class=\"entry-content\">

                <a class=\"pull-right\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_view_posts_by_subcategory", array("id" => $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "subcategory", array()), "id", array()), "_locale" => "en")), "html", null, true);
        echo "\">
                    <span class=\"fa fa-folder\"></span> ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "subcategory", array()), "nomEn", array()), "html", null, true);
        echo "</a>
                <p>
                    ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "descriptionEn", array()), "html", null, true);
        echo "
                </p>

                <div class=\"page-links hide\">
                    ";
        // line 55
        if (($context["pagination"] ?? $this->getContext($context, "pagination"))) {
            // line 56
            echo "                        ";
            $this->loadTemplate("GlobalViewBundle:Default:pagination.html.twig", "GlobalViewBundle:Default:article_detail_en.html.twig", 56)->display($context);
            // line 57
            echo "                    ";
        }
        // line 58
        echo "                </div>

                <!-- SHARE POST -->
                <section class=\"share-post clearfix hide\">
                    <h5>Share:</h5>
                    <ul>
                        <li><a href=\"#\"><i class=\"sc-sm sc-facebook\"></i><span>426</span></a></li>
                        <li><a href=\"#\"><i class=\"sc-sm sc-twitter\"></i><span>526</span></a></li>
                        <li><a href=\"#\"><i class=\"sc-sm sc-pinterest\"></i><span>283</span></a></li>
                        <li><a href=\"#\"><i class=\"sc-sm sc-linkedin\"></i><span>329</span></a></li>
                        <li><a href=\"#\"><i class=\"sc-sm sc-googleplus\"></i><span>429</span></a></li>
                    </ul>
                </section>

            </div><!-- .entry-content -->

        </article><!-- .hentry -->



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
        <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/shadow.png"), "html", null, true);
        echo "\" alt=\"shadow\" class=\"shadow\">
    </section>

";
        
        $__internal_c070d244084122704c7888dd8504187bb8c93fa1e6bc292718120f951e91fae8->leave($__internal_c070d244084122704c7888dd8504187bb8c93fa1e6bc292718120f951e91fae8_prof);

        
        $__internal_dd723bc51ed85333f45c38ab4982b7acd807b395ead922c52b2cbe08f1bf0094->leave($__internal_dd723bc51ed85333f45c38ab4982b7acd807b395ead922c52b2cbe08f1bf0094_prof);

    }

    public function getTemplateName()
    {
        return "GlobalViewBundle:Default:article_detail_en.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 91,  158 => 58,  155 => 57,  152 => 56,  150 => 55,  143 => 51,  138 => 49,  134 => 48,  123 => 40,  117 => 37,  104 => 26,  100 => 24,  94 => 22,  92 => 21,  85 => 19,  74 => 11,  67 => 6,  58 => 5,  41 => 3,  11 => 1,);
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

{% block carousel_content %}{% endblock %}

{% block article_content %}

    <!-- ARTICLES V1 WIDGET -->
    <section class=\"widget articles-v1\">
        <!-- Widget Header -->
        <header class=\"clearfix\">
            <h4>{{ post.titleEn }}</h4>
            <a href=\"#\" class=\"control\"><i class=\"fa fa-plus\"></i></a>
        </header>

        <!-- POST CONTENT -->
        <article class=\"article-large hentry\">
            <!--Image-->
            <div class=\"frame thick clearfix\">
                <a href=\"{{ asset('/uploads/articles/' ~ post.imageUrl ) }}\" class=\"image\" data-lightbox title=\"{{ post.titleEn }}\">
                    <figure class=\"\">
                        {% if post.imageUrl %}
                            <img src=\"{{ asset('/uploads/articles/' ~ post.imageUrl ) }}\" width=\"730px\" height=\"370px\" />
                        {% else %}
                            <img src=\"http://placehold.it/730x370.jpg\" alt=\"\">
                        {% endif %}
                    </figure>
                    <div class=\"image-light\"></div>
                </a>
                <div class=\"hide icons entry-footer\">
                    <span class=\"vcard\">
                        <a href=\"#\" class=\"url fn\" title=\"Siska\"><span class=\"hidden\">Siska</span><img src=\"http://placehold.it/75x75.jpg\" alt=\"Siska\"></a>
                    </span>
                    <a href=\"#\" title=\"Post format image\"><i class=\"dashicons dashicons-format-image\"></i></a>
                    <a href=\"#\" title=\"1,347 Comments\"><i class=\"fa fa-comments\"></i><span class=\"comment\">1,347</span></a>
                </div>
                <p class=\"post-meta entry-footer pull-right\">
                    <a href=\"#\" rel=\"bookmark\"><time class=\"entry-date published updated\" datetime=\"2014-01-08T11:42:20+00:00\">{{ post.dateCreation | date('d/m/Y H:i:s') }}</time></a>
                </p>
            </div>
            <img src=\"{{ asset('/img/shadow.png') }}\" class=\"shadow\" alt=\"shadow\">

            <header class=\"hidden\">
                <h1 class=\"entry-title\">Quasi Architecto Beatae Vitae Dicta Sunt Explicabo Nemo Enim Ipsam Voluptatem</h1>
            </header>

            <div class=\"entry-content\">

                <a class=\"pull-right\" href=\"{{ path('global_view_posts_by_subcategory', {'id' : post.subcategory.id, '_locale' : 'en'}) }}\">
                    <span class=\"fa fa-folder\"></span> {{ post.subcategory.nomEn }}</a>
                <p>
                    {{ post.descriptionEn }}
                </p>

                <div class=\"page-links hide\">
                    {% if pagination %}
                        {% include 'GlobalViewBundle:Default:pagination.html.twig' %}
                    {% endif %}
                </div>

                <!-- SHARE POST -->
                <section class=\"share-post clearfix hide\">
                    <h5>Share:</h5>
                    <ul>
                        <li><a href=\"#\"><i class=\"sc-sm sc-facebook\"></i><span>426</span></a></li>
                        <li><a href=\"#\"><i class=\"sc-sm sc-twitter\"></i><span>526</span></a></li>
                        <li><a href=\"#\"><i class=\"sc-sm sc-pinterest\"></i><span>283</span></a></li>
                        <li><a href=\"#\"><i class=\"sc-sm sc-linkedin\"></i><span>329</span></a></li>
                        <li><a href=\"#\"><i class=\"sc-sm sc-googleplus\"></i><span>429</span></a></li>
                    </ul>
                </section>

            </div><!-- .entry-content -->

        </article><!-- .hentry -->



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

{% endblock %}", "GlobalViewBundle:Default:article_detail_en.html.twig", "/Users/Rachid/SymfonyProjects/theglobalview/src/GlobalViewBundle/Resources/views/Default/article_detail_en.html.twig");
    }
}
