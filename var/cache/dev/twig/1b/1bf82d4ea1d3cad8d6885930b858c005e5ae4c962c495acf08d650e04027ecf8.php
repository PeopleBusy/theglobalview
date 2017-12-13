<?php

/* ::admin_base.html.twig */
class __TwigTemplate_a44eca7651788a07814dba8b6aa7ab166887f8e79d1bf9e4cc42ea4db16a6eb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'admin_title' => array($this, 'block_admin_title'),
            'admin_content' => array($this, 'block_admin_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a437d8d1247c96f7a15e480e93776bd11a64481d4ab16781ae8b79aeab074cc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a437d8d1247c96f7a15e480e93776bd11a64481d4ab16781ae8b79aeab074cc4->enter($__internal_a437d8d1247c96f7a15e480e93776bd11a64481d4ab16781ae8b79aeab074cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::admin_base.html.twig"));

        $__internal_c435b880445c621cf5d5a5150a03c9189ea53be3f4e442eb58e1c24fb7de2c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c435b880445c621cf5d5a5150a03c9189ea53be3f4e442eb58e1c24fb7de2c7c->enter($__internal_c435b880445c621cf5d5a5150a03c9189ea53be3f4e442eb58e1c24fb7de2c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::admin_base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html id=\"home-version-2\" class=\"boxed-style\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <!--Import Google font-->
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>

        <!-- Stylesheets -->
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/style.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Flags icons css -->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/flags/css/flag-icon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!--Modernizr-->
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/modernizr.min.js"), "html", null, true);
        echo "\"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
             ie8.css and ie8.js custom style  and script that needed for IE8. -->
        <!--[if lt IE 9]>
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/ie8.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/ie8.js"), "html", null, true);
        echo "\"></script>
        <![endif]-->

        ";
        // line 32
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <style>

            .sf-display-none{
                display: none !important;
            }

            .secondary {
                color: #f0f0f8 !important;
                background-color: #606068 !important;
                font-family: \"Roboto Condensed\",\"Arial Narrow\",Arial,sans-serif !important;
                font-weight: bold !important;
            }

        </style>
    </head>
    <body>
        ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "
        <!--HEADER
                ==========-->
        <header>
            <!-- TOP NAVBAR
            =============== -->
            <nav class=\"navbar navbar-inverse\" id=\"top-nav\" role=\"navigation\">
                <div class=\"container\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#top-nav-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"top-nav-collapse\">
                        <form class=\"navbar-form navbar-right\" role=\"search\">
                            <label class=\"sr-only\" for=\"top_search_form\">Search for</label>
                            <input id=\"top_search_form\" type=\"search\" placeholder=\"Search\">
                            <button type=\"submit\" >
                                <span class=\"fa fa-search\"></span>
                                <span class=\"sr-only\">Search/submit</span>
                            </button>
                        </form>

                        <ul class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"#\" title=\"Facebook\"><span class=\"sc-sm sc-dark sc-facebook\"></span></a></li>
                            <li><a href=\"#\" title=\"Twitter\"><span class=\"sc-sm sc-dark sc-twitter\"></span></a></li>
                            <li><a href=\"#\" title=\"Google+\"><span class=\"sc-sm sc-dark sc-googleplus\"></span></a></li>
                            <li><a href=\"#\" title=\"RSS\"><span class=\"sc-sm sc-dark sc-rss\"></span></a></li>
                        </ul>
                    </div>
                </div>
            </nav><!-- #top-nav -->

            <!-- MAIN NAVBAR
            ================ -->
            <nav class=\"navbar navbar-default\" id=\"main-nav\" role=\"navigation\">
                <div class=\"container\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-nav-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        ";
        // line 103
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method") == "en")) {
            // line 104
            echo "                            <a class=\"navbar-brand\" href=\"#\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/logo_en.png"), "html", null, true);
            echo "\" alt=\"logo\"></a>
                        ";
        }
        // line 106
        echo "
                        ";
        // line 107
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method") == "fr")) {
            // line 108
            echo "                            <a class=\"navbar-brand\" href=\"#\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/logo_fr.png"), "html", null, true);
            echo "\" alt=\"logo\"></a>
                        ";
        }
        // line 110
        echo "
                        ";
        // line 111
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method") == "de")) {
            // line 112
            echo "                            <a class=\"navbar-brand\" href=\"#\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/logo_de.png"), "html", null, true);
            echo "\" alt=\"logo\"></a>
                        ";
        }
        // line 114
        echo "
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"main-nav-collapse\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"active\"><a href=\"#\"><i class=\"fa fa-home\"></i></a></li>
                            <li class=\"\">
                                <a href=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_admin_category");
        echo "\"> Gestion des categories </a>
                            </li>
                            <li class=\"\">
                                <a href=\"";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_admin_subcategory");
        echo "\"> Gestion des sous categories </a>
                            </li>
                            <li class=\"\">
                                <a href=\"";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_admin_post");
        echo "\"> Gestion des posts </a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Réglages<b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <a href=\"";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_admin_post");
        echo "\" class=\"\">Logo</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_admin_post");
        echo "\" class=\"\">Bandeau</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_admin_post");
        echo "\" class=\"\">Slider</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle secondary\" data-toggle=\"dropdown\">";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo "<b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li>

                                        ";
        // line 149
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 150
            echo "                                            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_logout");
            echo "\" class=\"\">Déconnecter</a>
                                        ";
        } else {
            // line 152
            echo "                                            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_login");
            echo "\" class=\"\">Se connecter</a>
                                        ";
        }
        // line 154
        echo "
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav><!--#main-nav-->
        </header>

        <!-- CONTENT
        ============ -->
        <div id=\"content\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- MAIN CONTENT
                    ================= -->
                    <main id=\"main-content\" class=\"row\">
                        <!-- MESSAGE FORM -->
                        <div class=\"widget message-form col-md-12\">
                            <header class=\"clearfix\"><h4>";
        // line 174
        $this->displayBlock('admin_title', $context, $blocks);
        echo "</h4></header>

                            ";
        // line 176
        $this->displayBlock('admin_content', $context, $blocks);
        // line 179
        echo "
                        </div>
                    </main><!--#main-content-->

                </div><!--.row-->
            </div><!--.container-->
        </div><!--#content-->

        <footer>
            <!-- FOOTER BOTTOM
            ================== -->
            <div id=\"footer-bottom\">
                <div class=\"container\">
                    <p>Copyright &copy; 2017 - <strong>TheGlobalView</strong></p>
                </div>
            </div><!--#footer-bottom-->
        </footer><!--footer-->


        <!-- jQuery  -->
        <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Warta scripts -->
        <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/script.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/initialize.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 206
        $this->displayBlock('javascripts', $context, $blocks);
        // line 207
        echo "    </body>
</html>
";
        
        $__internal_a437d8d1247c96f7a15e480e93776bd11a64481d4ab16781ae8b79aeab074cc4->leave($__internal_a437d8d1247c96f7a15e480e93776bd11a64481d4ab16781ae8b79aeab074cc4_prof);

        
        $__internal_c435b880445c621cf5d5a5150a03c9189ea53be3f4e442eb58e1c24fb7de2c7c->leave($__internal_c435b880445c621cf5d5a5150a03c9189ea53be3f4e442eb58e1c24fb7de2c7c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_25f60dd5d7397276b97b1fc3380d06a064b1387bfba803c5c57243095cd97bb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f60dd5d7397276b97b1fc3380d06a064b1387bfba803c5c57243095cd97bb1->enter($__internal_25f60dd5d7397276b97b1fc3380d06a064b1387bfba803c5c57243095cd97bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f36784c9a302275d3ecc02cbded7d4d182ab7de4f07b866894d7e176e92dd87d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f36784c9a302275d3ecc02cbded7d4d182ab7de4f07b866894d7e176e92dd87d->enter($__internal_f36784c9a302275d3ecc02cbded7d4d182ab7de4f07b866894d7e176e92dd87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administration";
        
        $__internal_f36784c9a302275d3ecc02cbded7d4d182ab7de4f07b866894d7e176e92dd87d->leave($__internal_f36784c9a302275d3ecc02cbded7d4d182ab7de4f07b866894d7e176e92dd87d_prof);

        
        $__internal_25f60dd5d7397276b97b1fc3380d06a064b1387bfba803c5c57243095cd97bb1->leave($__internal_25f60dd5d7397276b97b1fc3380d06a064b1387bfba803c5c57243095cd97bb1_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dbbc21bde445a1610e323fbbfbb6ed00fdc4f5cddf8d740393bf92cb220a95d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbbc21bde445a1610e323fbbfbb6ed00fdc4f5cddf8d740393bf92cb220a95d0->enter($__internal_dbbc21bde445a1610e323fbbfbb6ed00fdc4f5cddf8d740393bf92cb220a95d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3806d174266b6bc0b4bd1e60075bbc91e154a99889ae78cc0ef7831367a7f31d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3806d174266b6bc0b4bd1e60075bbc91e154a99889ae78cc0ef7831367a7f31d->enter($__internal_3806d174266b6bc0b4bd1e60075bbc91e154a99889ae78cc0ef7831367a7f31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3806d174266b6bc0b4bd1e60075bbc91e154a99889ae78cc0ef7831367a7f31d->leave($__internal_3806d174266b6bc0b4bd1e60075bbc91e154a99889ae78cc0ef7831367a7f31d_prof);

        
        $__internal_dbbc21bde445a1610e323fbbfbb6ed00fdc4f5cddf8d740393bf92cb220a95d0->leave($__internal_dbbc21bde445a1610e323fbbfbb6ed00fdc4f5cddf8d740393bf92cb220a95d0_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_32746fb60f46d0fc8b325322abe3e13c3f5f61fedc8ecc38cb52a1686d331bed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32746fb60f46d0fc8b325322abe3e13c3f5f61fedc8ecc38cb52a1686d331bed->enter($__internal_32746fb60f46d0fc8b325322abe3e13c3f5f61fedc8ecc38cb52a1686d331bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_806e69945e3a5d6f838dd090f77ec74e6283a8463f2924b4fd24b575e6451104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806e69945e3a5d6f838dd090f77ec74e6283a8463f2924b4fd24b575e6451104->enter($__internal_806e69945e3a5d6f838dd090f77ec74e6283a8463f2924b4fd24b575e6451104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_806e69945e3a5d6f838dd090f77ec74e6283a8463f2924b4fd24b575e6451104->leave($__internal_806e69945e3a5d6f838dd090f77ec74e6283a8463f2924b4fd24b575e6451104_prof);

        
        $__internal_32746fb60f46d0fc8b325322abe3e13c3f5f61fedc8ecc38cb52a1686d331bed->leave($__internal_32746fb60f46d0fc8b325322abe3e13c3f5f61fedc8ecc38cb52a1686d331bed_prof);

    }

    // line 174
    public function block_admin_title($context, array $blocks = array())
    {
        $__internal_b9340f3824d06c3e79a2c14dffc7fb27dc1415d3762e67fd738de26e280fe734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9340f3824d06c3e79a2c14dffc7fb27dc1415d3762e67fd738de26e280fe734->enter($__internal_b9340f3824d06c3e79a2c14dffc7fb27dc1415d3762e67fd738de26e280fe734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_title"));

        $__internal_7a81662b9e821b0d75895434721eadd05fac902d3234c8bce967daae6385f4bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a81662b9e821b0d75895434721eadd05fac902d3234c8bce967daae6385f4bd->enter($__internal_7a81662b9e821b0d75895434721eadd05fac902d3234c8bce967daae6385f4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_title"));

        echo "Bienvenue sur la page d'administration";
        
        $__internal_7a81662b9e821b0d75895434721eadd05fac902d3234c8bce967daae6385f4bd->leave($__internal_7a81662b9e821b0d75895434721eadd05fac902d3234c8bce967daae6385f4bd_prof);

        
        $__internal_b9340f3824d06c3e79a2c14dffc7fb27dc1415d3762e67fd738de26e280fe734->leave($__internal_b9340f3824d06c3e79a2c14dffc7fb27dc1415d3762e67fd738de26e280fe734_prof);

    }

    // line 176
    public function block_admin_content($context, array $blocks = array())
    {
        $__internal_5f8437a7d6da59c4651e0ccefdae0f9da96a4bb809943754668dcb2068baba1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f8437a7d6da59c4651e0ccefdae0f9da96a4bb809943754668dcb2068baba1c->enter($__internal_5f8437a7d6da59c4651e0ccefdae0f9da96a4bb809943754668dcb2068baba1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_content"));

        $__internal_6ddbdedce27f55af0881456b5e1fc2981409a35c357c0b57b373adb68d01828e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ddbdedce27f55af0881456b5e1fc2981409a35c357c0b57b373adb68d01828e->enter($__internal_6ddbdedce27f55af0881456b5e1fc2981409a35c357c0b57b373adb68d01828e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_content"));

        // line 177
        echo "
                            ";
        
        $__internal_6ddbdedce27f55af0881456b5e1fc2981409a35c357c0b57b373adb68d01828e->leave($__internal_6ddbdedce27f55af0881456b5e1fc2981409a35c357c0b57b373adb68d01828e_prof);

        
        $__internal_5f8437a7d6da59c4651e0ccefdae0f9da96a4bb809943754668dcb2068baba1c->leave($__internal_5f8437a7d6da59c4651e0ccefdae0f9da96a4bb809943754668dcb2068baba1c_prof);

    }

    // line 206
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ed9badc5ff5213ee11994ccf3c982f7d774e0b9976210809c50199500c69a362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed9badc5ff5213ee11994ccf3c982f7d774e0b9976210809c50199500c69a362->enter($__internal_ed9badc5ff5213ee11994ccf3c982f7d774e0b9976210809c50199500c69a362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a0fdcb86b22ecde22994ea0420fbac0b89a3e502946d3cbf5ee497d41fd1fc68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0fdcb86b22ecde22994ea0420fbac0b89a3e502946d3cbf5ee497d41fd1fc68->enter($__internal_a0fdcb86b22ecde22994ea0420fbac0b89a3e502946d3cbf5ee497d41fd1fc68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a0fdcb86b22ecde22994ea0420fbac0b89a3e502946d3cbf5ee497d41fd1fc68->leave($__internal_a0fdcb86b22ecde22994ea0420fbac0b89a3e502946d3cbf5ee497d41fd1fc68_prof);

        
        $__internal_ed9badc5ff5213ee11994ccf3c982f7d774e0b9976210809c50199500c69a362->leave($__internal_ed9badc5ff5213ee11994ccf3c982f7d774e0b9976210809c50199500c69a362_prof);

    }

    public function getTemplateName()
    {
        return "::admin_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 206,  431 => 177,  422 => 176,  404 => 174,  387 => 51,  370 => 32,  352 => 5,  340 => 207,  338 => 206,  333 => 204,  329 => 203,  323 => 200,  319 => 199,  297 => 179,  295 => 176,  290 => 174,  268 => 154,  262 => 152,  256 => 150,  254 => 149,  245 => 145,  237 => 140,  231 => 137,  225 => 134,  216 => 128,  210 => 125,  204 => 122,  194 => 114,  188 => 112,  186 => 111,  183 => 110,  177 => 108,  175 => 107,  172 => 106,  166 => 104,  164 => 103,  111 => 52,  109 => 51,  87 => 33,  85 => 32,  79 => 29,  73 => 26,  65 => 21,  59 => 18,  53 => 15,  49 => 14,  37 => 5,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html id=\"home-version-2\" class=\"boxed-style\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Administration{% endblock %}</title>

        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <!--Import Google font-->
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>

        <!-- Stylesheets -->
        <link href=\"{{ asset('/css/style.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('/css/custom.css') }}\" rel=\"stylesheet\">

        <!-- Flags icons css -->
        <link href=\"{{ asset('/css/flags/css/flag-icon.css') }}\" rel=\"stylesheet\">

        <!--Modernizr-->
        <script src=\"{{ asset('/js/modernizr.min.js') }}\"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
             ie8.css and ie8.js custom style  and script that needed for IE8. -->
        <!--[if lt IE 9]>
        <link href=\"{{ asset('/css/ie8.css') }}\" rel=\"stylesheet\">
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <script src=\"{{ asset('/js/ie8.js') }}\"></script>
        <![endif]-->

        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

        <style>

            .sf-display-none{
                display: none !important;
            }

            .secondary {
                color: #f0f0f8 !important;
                background-color: #606068 !important;
                font-family: \"Roboto Condensed\",\"Arial Narrow\",Arial,sans-serif !important;
                font-weight: bold !important;
            }

        </style>
    </head>
    <body>
        {% block body %}{% endblock %}

        <!--HEADER
                ==========-->
        <header>
            <!-- TOP NAVBAR
            =============== -->
            <nav class=\"navbar navbar-inverse\" id=\"top-nav\" role=\"navigation\">
                <div class=\"container\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#top-nav-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"top-nav-collapse\">
                        <form class=\"navbar-form navbar-right\" role=\"search\">
                            <label class=\"sr-only\" for=\"top_search_form\">Search for</label>
                            <input id=\"top_search_form\" type=\"search\" placeholder=\"Search\">
                            <button type=\"submit\" >
                                <span class=\"fa fa-search\"></span>
                                <span class=\"sr-only\">Search/submit</span>
                            </button>
                        </form>

                        <ul class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"#\" title=\"Facebook\"><span class=\"sc-sm sc-dark sc-facebook\"></span></a></li>
                            <li><a href=\"#\" title=\"Twitter\"><span class=\"sc-sm sc-dark sc-twitter\"></span></a></li>
                            <li><a href=\"#\" title=\"Google+\"><span class=\"sc-sm sc-dark sc-googleplus\"></span></a></li>
                            <li><a href=\"#\" title=\"RSS\"><span class=\"sc-sm sc-dark sc-rss\"></span></a></li>
                        </ul>
                    </div>
                </div>
            </nav><!-- #top-nav -->

            <!-- MAIN NAVBAR
            ================ -->
            <nav class=\"navbar navbar-default\" id=\"main-nav\" role=\"navigation\">
                <div class=\"container\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-nav-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        {% if (app.request.getLocale() == 'en') %}
                            <a class=\"navbar-brand\" href=\"#\"><img src=\"{{ asset('/img/logo_en.png') }}\" alt=\"logo\"></a>
                        {% endif %}

                        {% if (app.request.getLocale() == 'fr') %}
                            <a class=\"navbar-brand\" href=\"#\"><img src=\"{{ asset('/img/logo_fr.png') }}\" alt=\"logo\"></a>
                        {% endif %}

                        {% if (app.request.getLocale() == 'de') %}
                            <a class=\"navbar-brand\" href=\"#\"><img src=\"{{ asset('/img/logo_de.png') }}\" alt=\"logo\"></a>
                        {% endif %}

                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"main-nav-collapse\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"active\"><a href=\"#\"><i class=\"fa fa-home\"></i></a></li>
                            <li class=\"\">
                                <a href=\"{{ path('global_admin_category') }}\"> Gestion des categories </a>
                            </li>
                            <li class=\"\">
                                <a href=\"{{ path('global_admin_subcategory') }}\"> Gestion des sous categories </a>
                            </li>
                            <li class=\"\">
                                <a href=\"{{ path('global_admin_post') }}\"> Gestion des posts </a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Réglages<b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <a href=\"{{ path('global_admin_post') }}\" class=\"\">Logo</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('global_admin_post') }}\" class=\"\">Bandeau</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('global_admin_post') }}\" class=\"\">Slider</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle secondary\" data-toggle=\"dropdown\">{{ app.user.nom }} {{ app.user.prenom }}<b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li>

                                        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                                            <a href=\"{{ path('global_logout') }}\" class=\"\">Déconnecter</a>
                                        {% else %}
                                            <a href=\"{{ path('global_login') }}\" class=\"\">Se connecter</a>
                                        {% endif %}

                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav><!--#main-nav-->
        </header>

        <!-- CONTENT
        ============ -->
        <div id=\"content\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- MAIN CONTENT
                    ================= -->
                    <main id=\"main-content\" class=\"row\">
                        <!-- MESSAGE FORM -->
                        <div class=\"widget message-form col-md-12\">
                            <header class=\"clearfix\"><h4>{% block admin_title %}Bienvenue sur la page d'administration{% endblock %}</h4></header>

                            {% block admin_content %}

                            {% endblock %}

                        </div>
                    </main><!--#main-content-->

                </div><!--.row-->
            </div><!--.container-->
        </div><!--#content-->

        <footer>
            <!-- FOOTER BOTTOM
            ================== -->
            <div id=\"footer-bottom\">
                <div class=\"container\">
                    <p>Copyright &copy; 2017 - <strong>TheGlobalView</strong></p>
                </div>
            </div><!--#footer-bottom-->
        </footer><!--footer-->


        <!-- jQuery  -->
        <script src=\"{{ asset('/js/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('/js/jquery-ui.custom.min.js') }}\"></script>

        <!-- Warta scripts -->
        <script src=\"{{ asset('/js/script.min.js') }}\"></script>
        <script src=\"{{ asset('/js/initialize.js') }}\"></script>

        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::admin_base.html.twig", "/Users/rachid/Documents/Projet Client/theglobalview/app/Resources/views/admin_base.html.twig");
    }
}
