<?php

/* GlobalViewBundle:Default:article_detail_de.html.twig */
class __TwigTemplate_68d16aa0fe8329a41daae0af157fb7aa93d85a3f6112b2f1bdeaaa2d719e51e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_de.html.twig", "GlobalViewBundle:Default:article_detail_de.html.twig", 1);
        $this->blocks = array(
            'carousel_content' => array($this, 'block_carousel_content'),
            'article_content' => array($this, 'block_article_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_de.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf4029f035cf2961ce2adbcc74dc31def01b0c5581ea1c50e1b69d70ae94de4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf4029f035cf2961ce2adbcc74dc31def01b0c5581ea1c50e1b69d70ae94de4c->enter($__internal_bf4029f035cf2961ce2adbcc74dc31def01b0c5581ea1c50e1b69d70ae94de4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default:article_detail_de.html.twig"));

        $__internal_83ca92b53430db0ac143957e9989035e7c609a21b6c575585657adcf7494a026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ca92b53430db0ac143957e9989035e7c609a21b6c575585657adcf7494a026->enter($__internal_83ca92b53430db0ac143957e9989035e7c609a21b6c575585657adcf7494a026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default:article_detail_de.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf4029f035cf2961ce2adbcc74dc31def01b0c5581ea1c50e1b69d70ae94de4c->leave($__internal_bf4029f035cf2961ce2adbcc74dc31def01b0c5581ea1c50e1b69d70ae94de4c_prof);

        
        $__internal_83ca92b53430db0ac143957e9989035e7c609a21b6c575585657adcf7494a026->leave($__internal_83ca92b53430db0ac143957e9989035e7c609a21b6c575585657adcf7494a026_prof);

    }

    // line 3
    public function block_carousel_content($context, array $blocks = array())
    {
        $__internal_b2ebf006736f167029be0dd07de2b5e8a34288d10c5af1c62bf5ef272cb64789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2ebf006736f167029be0dd07de2b5e8a34288d10c5af1c62bf5ef272cb64789->enter($__internal_b2ebf006736f167029be0dd07de2b5e8a34288d10c5af1c62bf5ef272cb64789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel_content"));

        $__internal_5bea33880eb65ef7a96b0e376ec3b10e5c855332ef2b9bfcd3f3b3da8f91011b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bea33880eb65ef7a96b0e376ec3b10e5c855332ef2b9bfcd3f3b3da8f91011b->enter($__internal_5bea33880eb65ef7a96b0e376ec3b10e5c855332ef2b9bfcd3f3b3da8f91011b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel_content"));

        
        $__internal_5bea33880eb65ef7a96b0e376ec3b10e5c855332ef2b9bfcd3f3b3da8f91011b->leave($__internal_5bea33880eb65ef7a96b0e376ec3b10e5c855332ef2b9bfcd3f3b3da8f91011b_prof);

        
        $__internal_b2ebf006736f167029be0dd07de2b5e8a34288d10c5af1c62bf5ef272cb64789->leave($__internal_b2ebf006736f167029be0dd07de2b5e8a34288d10c5af1c62bf5ef272cb64789_prof);

    }

    // line 5
    public function block_article_content($context, array $blocks = array())
    {
        $__internal_231d9643d236283291d5850f0e6d30537d1d269e959d092c025f607e3339ca9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_231d9643d236283291d5850f0e6d30537d1d269e959d092c025f607e3339ca9d->enter($__internal_231d9643d236283291d5850f0e6d30537d1d269e959d092c025f607e3339ca9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_content"));

        $__internal_b1913c09ab0cadab7db88cb02c54d8fb6fe85ec0471ed7e91b9e331b3b623021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1913c09ab0cadab7db88cb02c54d8fb6fe85ec0471ed7e91b9e331b3b623021->enter($__internal_b1913c09ab0cadab7db88cb02c54d8fb6fe85ec0471ed7e91b9e331b3b623021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article_content"));

        // line 6
        echo "
    <!-- ARTICLES V1 WIDGET -->
    <section class=\"widget articles-v1\">
        <!-- Widget Header -->
        <header class=\"clearfix\">
            <h4>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "titleDe", array()), "html", null, true);
        echo "</h4>
            <a href=\"#\" class=\"control\"><i class=\"fa fa-plus\"></i></a>
        </header>

        <!-- POST CONTENT -->
        <article class=\"article-large hentry\">
            <!--Image-->
            <div class=\"frame thick clearfix\">
                <a href=\"http://placehold.it/1024x512.jpg\" class=\"image\" data-lightbox title=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "titleDe", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_view_posts_by_subcategory", array("id" => $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "subcategory", array()), "id", array()), "_locale" => "de")), "html", null, true);
        echo "\">
                    <span class=\"fa fa-folder\"></span> ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "subcategory", array()), "nomDe", array()), "html", null, true);
        echo "</a>
                <p>
                    ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "descriptionDe", array()), "html", null, true);
        echo "
                </p>

                <div class=\"page-links hide\">
                    ";
        // line 55
        if (($context["pagination"] ?? $this->getContext($context, "pagination"))) {
            // line 56
            echo "                        ";
            $this->loadTemplate("GlobalViewBundle:Default:pagination.html.twig", "GlobalViewBundle:Default:article_detail_de.html.twig", 56)->display($context);
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
        <header class=\"clearfix\"><h4>Werbung</h4></header>

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
        
        $__internal_b1913c09ab0cadab7db88cb02c54d8fb6fe85ec0471ed7e91b9e331b3b623021->leave($__internal_b1913c09ab0cadab7db88cb02c54d8fb6fe85ec0471ed7e91b9e331b3b623021_prof);

        
        $__internal_231d9643d236283291d5850f0e6d30537d1d269e959d092c025f607e3339ca9d->leave($__internal_231d9643d236283291d5850f0e6d30537d1d269e959d092c025f607e3339ca9d_prof);

    }

    public function getTemplateName()
    {
        return "GlobalViewBundle:Default:article_detail_de.html.twig";
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
        return new Twig_Source("{% extends \"::base_de.html.twig\" %}

{% block carousel_content %}{% endblock %}

{% block article_content %}

    <!-- ARTICLES V1 WIDGET -->
    <section class=\"widget articles-v1\">
        <!-- Widget Header -->
        <header class=\"clearfix\">
            <h4>{{ post.titleDe }}</h4>
            <a href=\"#\" class=\"control\"><i class=\"fa fa-plus\"></i></a>
        </header>

        <!-- POST CONTENT -->
        <article class=\"article-large hentry\">
            <!--Image-->
            <div class=\"frame thick clearfix\">
                <a href=\"http://placehold.it/1024x512.jpg\" class=\"image\" data-lightbox title=\"{{ post.titleDe }}\">
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

                <a class=\"pull-right\" href=\"{{ path('global_view_posts_by_subcategory', {'id' : post.subcategory.id, '_locale' : 'de'}) }}\">
                    <span class=\"fa fa-folder\"></span> {{ post.subcategory.nomDe }}</a>
                <p>
                    {{ post.descriptionDe }}
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
        <header class=\"clearfix\"><h4>Werbung</h4></header>

        <!-- Widget Content -->
        <div class=\"frame thick\">
            <a href=\"http://themeforest.net/user/friskamax/portfolio?ref=friskamax\" target=\"_blank\">
                <img src=\"http://placehold.it/728x90/f0f0f9\" alt=\"ads\">
            </a>
        </div>
        <img src=\"{{ asset('/img/shadow.png') }}\" alt=\"shadow\" class=\"shadow\">
    </section>

{% endblock %}", "GlobalViewBundle:Default:article_detail_de.html.twig", "/Users/Rachid/SymfonyProjects/theglobalview/src/GlobalViewBundle/Resources/views/Default/article_detail_de.html.twig");
    }
}
