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
        $__internal_e0ce8d907a18b699fa774eedbddec64e7d4b5200dba79629abb73a85217f11a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0ce8d907a18b699fa774eedbddec64e7d4b5200dba79629abb73a85217f11a3->enter($__internal_e0ce8d907a18b699fa774eedbddec64e7d4b5200dba79629abb73a85217f11a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default:article_detail_en.html.twig"));

        $__internal_d7edbf5076a4dda5a318a140b55abd78c701c47bbae5a7696ba0dd7bd4cfb508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7edbf5076a4dda5a318a140b55abd78c701c47bbae5a7696ba0dd7bd4cfb508->enter($__internal_d7edbf5076a4dda5a318a140b55abd78c701c47bbae5a7696ba0dd7bd4cfb508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default:article_detail_en.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0ce8d907a18b699fa774eedbddec64e7d4b5200dba79629abb73a85217f11a3->leave($__internal_e0ce8d907a18b699fa774eedbddec64e7d4b5200dba79629abb73a85217f11a3_prof);

        
        $__internal_d7edbf5076a4dda5a318a140b55abd78c701c47bbae5a7696ba0dd7bd4cfb508->leave($__internal_d7edbf5076a4dda5a318a140b55abd78c701c47bbae5a7696ba0dd7bd4cfb508_prof);

    }

    // line 3
    public function block_carousel_content($context, array $blocks = array())
    {
        $__internal_731e9d79b989e913b1a2a78b60f51f5190a5021201ce3363e91419290d302364 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_731e9d79b989e913b1a2a78b60f51f5190a5021201ce3363e91419290d302364->enter($__internal_731e9d79b989e913b1a2a78b60f51f5190a5021201ce3363e91419290d302364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel_content"));

        $__internal_b74e072920bb9c3aebaf9e5e09e747e91b77740d1d0ff7f451b4127fc4b90bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b74e072920bb9c3aebaf9e5e09e747e91b77740d1d0ff7f451b4127fc4b90bd3->enter($__internal_b74e072920bb9c3aebaf9e5e09e747e91b77740d1d0ff7f451b4127fc4b90bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel_content"));

        
        $__internal_b74e072920bb9c3aebaf9e5e09e747e91b77740d1d0ff7f451b4127fc4b90bd3->leave($__internal_b74e072920bb9c3aebaf9e5e09e747e91b77740d1d0ff7f451b4127fc4b90bd3_prof);

        
        $__internal_731e9d79b989e913b1a2a78b60f51f5190a5021201ce3363e91419290d302364->leave($__internal_731e9d79b989e913b1a2a78b60f51f5190a5021201ce3363e91419290d302364_prof);

    }

    // line 5
    public function block_article_content($context, array $blocks = array())
    {
        $__internal_7ac94fa190def8c650bedc19c94bdafaaafab9b765e513304161f9e0bd8dc27c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ac94fa190def8c650bedc19c94bdafaaafab9b765e513304161f9e0bd8dc27c->enter($__internal_7ac94fa190def8c650bedc19c94bdafaaafab9b765e513304161f9e0bd8dc27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_content"));

        $__internal_6c32d33c9ab2326ae4a90c6851fe0ae70536915debeba40648d1c7523e04f1ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c32d33c9ab2326ae4a90c6851fe0ae70536915debeba40648d1c7523e04f1ed->enter($__internal_6c32d33c9ab2326ae4a90c6851fe0ae70536915debeba40648d1c7523e04f1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_content"));

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
                <a href=\"http://placehold.it/1024x512.jpg\" class=\"image\" data-lightbox title=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "titleEn", array()), "html", null, true);
        echo "\">
                    <figure class=\"image-holder\">
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "descriptionFr", array()), "html", null, true);
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
        
        $__internal_6c32d33c9ab2326ae4a90c6851fe0ae70536915debeba40648d1c7523e04f1ed->leave($__internal_6c32d33c9ab2326ae4a90c6851fe0ae70536915debeba40648d1c7523e04f1ed_prof);

        
        $__internal_7ac94fa190def8c650bedc19c94bdafaaafab9b765e513304161f9e0bd8dc27c->leave($__internal_7ac94fa190def8c650bedc19c94bdafaaafab9b765e513304161f9e0bd8dc27c_prof);

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
        return array (  191 => 91,  156 => 58,  153 => 57,  150 => 56,  148 => 55,  141 => 51,  136 => 49,  132 => 48,  121 => 40,  115 => 37,  102 => 26,  98 => 24,  92 => 22,  90 => 21,  85 => 19,  74 => 11,  67 => 6,  58 => 5,  41 => 3,  11 => 1,);
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
                <a href=\"http://placehold.it/1024x512.jpg\" class=\"image\" data-lightbox title=\"{{ post.titleEn }}\">
                    <figure class=\"image-holder\">
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
                    {{ post.descriptionFr }}
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
