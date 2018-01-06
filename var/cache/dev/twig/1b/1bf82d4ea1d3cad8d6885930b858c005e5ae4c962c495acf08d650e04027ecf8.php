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
        $__internal_e0c6304d9dc4ab319a5a5d1ca0154bded771015b8a6c631c70999ddc3cd2cc22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0c6304d9dc4ab319a5a5d1ca0154bded771015b8a6c631c70999ddc3cd2cc22->enter($__internal_e0c6304d9dc4ab319a5a5d1ca0154bded771015b8a6c631c70999ddc3cd2cc22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::admin_base.html.twig"));

        $__internal_681cfc2e2b9f052ca1051379bdafe4cdc61941031fd7dc2f63ce9a57e0ab6bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_681cfc2e2b9f052ca1051379bdafe4cdc61941031fd7dc2f63ce9a57e0ab6bef->enter($__internal_681cfc2e2b9f052ca1051379bdafe4cdc61941031fd7dc2f63ce9a57e0ab6bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::admin_base.html.twig"));

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
            echo "                            <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_admin");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/logo_global.png"), "html", null, true);
            echo "\" alt=\"logo\"></a>
                        ";
        }
        // line 106
        echo "
                        ";
        // line 107
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method") == "fr")) {
            // line 108
            echo "                            <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_admin");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/logo_global.png"), "html", null, true);
            echo "\" alt=\"logo\"></a>
                        ";
        }
        // line 110
        echo "
                        ";
        // line 111
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method") == "de")) {
            // line 112
            echo "                            <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_admin");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/logo_global.png"), "html", null, true);
            echo "\" alt=\"logo\"></a>
                        ";
        }
        // line 114
        echo "
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"main-nav-collapse\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"active\"><a href=\"";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_admin");
        echo "\"><i class=\"fa fa-home\"></i></a></li>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Warta scripts -->
        <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/script.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/initialize.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 207
        $this->displayBlock('javascripts', $context, $blocks);
        // line 208
        echo "    </body>
</html>
";
        
        $__internal_e0c6304d9dc4ab319a5a5d1ca0154bded771015b8a6c631c70999ddc3cd2cc22->leave($__internal_e0c6304d9dc4ab319a5a5d1ca0154bded771015b8a6c631c70999ddc3cd2cc22_prof);

        
        $__internal_681cfc2e2b9f052ca1051379bdafe4cdc61941031fd7dc2f63ce9a57e0ab6bef->leave($__internal_681cfc2e2b9f052ca1051379bdafe4cdc61941031fd7dc2f63ce9a57e0ab6bef_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3369ea89ae455697770b72afcd00fbd70bc538f988cb30815aaa0e28f56b269c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3369ea89ae455697770b72afcd00fbd70bc538f988cb30815aaa0e28f56b269c->enter($__internal_3369ea89ae455697770b72afcd00fbd70bc538f988cb30815aaa0e28f56b269c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5ebf6769aa9ccb1482cfd11e9084243a058cc5523250dc32967557794fa4b834 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ebf6769aa9ccb1482cfd11e9084243a058cc5523250dc32967557794fa4b834->enter($__internal_5ebf6769aa9ccb1482cfd11e9084243a058cc5523250dc32967557794fa4b834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administration";
        
        $__internal_5ebf6769aa9ccb1482cfd11e9084243a058cc5523250dc32967557794fa4b834->leave($__internal_5ebf6769aa9ccb1482cfd11e9084243a058cc5523250dc32967557794fa4b834_prof);

        
        $__internal_3369ea89ae455697770b72afcd00fbd70bc538f988cb30815aaa0e28f56b269c->leave($__internal_3369ea89ae455697770b72afcd00fbd70bc538f988cb30815aaa0e28f56b269c_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_170e96834fd54f849411bbc2bf1aa89494405c3139a4cd8effaf9a74ffd0e438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_170e96834fd54f849411bbc2bf1aa89494405c3139a4cd8effaf9a74ffd0e438->enter($__internal_170e96834fd54f849411bbc2bf1aa89494405c3139a4cd8effaf9a74ffd0e438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_99b2e4be559749bc75ea2d4c45b71652da8aa48fc3dd1f700be5456002f93c14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99b2e4be559749bc75ea2d4c45b71652da8aa48fc3dd1f700be5456002f93c14->enter($__internal_99b2e4be559749bc75ea2d4c45b71652da8aa48fc3dd1f700be5456002f93c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_99b2e4be559749bc75ea2d4c45b71652da8aa48fc3dd1f700be5456002f93c14->leave($__internal_99b2e4be559749bc75ea2d4c45b71652da8aa48fc3dd1f700be5456002f93c14_prof);

        
        $__internal_170e96834fd54f849411bbc2bf1aa89494405c3139a4cd8effaf9a74ffd0e438->leave($__internal_170e96834fd54f849411bbc2bf1aa89494405c3139a4cd8effaf9a74ffd0e438_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd54ab5fd4d4ca44f17fa07ac503106dcff641f2e6b46a806095b4014f45d62a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd54ab5fd4d4ca44f17fa07ac503106dcff641f2e6b46a806095b4014f45d62a->enter($__internal_fd54ab5fd4d4ca44f17fa07ac503106dcff641f2e6b46a806095b4014f45d62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f19c8ea28bf909e92abada2beec876e6b58986c65ac99edaadd18ee06ff38e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f19c8ea28bf909e92abada2beec876e6b58986c65ac99edaadd18ee06ff38e0f->enter($__internal_f19c8ea28bf909e92abada2beec876e6b58986c65ac99edaadd18ee06ff38e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f19c8ea28bf909e92abada2beec876e6b58986c65ac99edaadd18ee06ff38e0f->leave($__internal_f19c8ea28bf909e92abada2beec876e6b58986c65ac99edaadd18ee06ff38e0f_prof);

        
        $__internal_fd54ab5fd4d4ca44f17fa07ac503106dcff641f2e6b46a806095b4014f45d62a->leave($__internal_fd54ab5fd4d4ca44f17fa07ac503106dcff641f2e6b46a806095b4014f45d62a_prof);

    }

    // line 174
    public function block_admin_title($context, array $blocks = array())
    {
        $__internal_f7deb1f0990204be242e5f72f0ed328180f1abb330728d0cfd5612efd3c43217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7deb1f0990204be242e5f72f0ed328180f1abb330728d0cfd5612efd3c43217->enter($__internal_f7deb1f0990204be242e5f72f0ed328180f1abb330728d0cfd5612efd3c43217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_title"));

        $__internal_daca39f18fa34cd7efbaa799e54dfae19675565e3b462591826843fc221cfb52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daca39f18fa34cd7efbaa799e54dfae19675565e3b462591826843fc221cfb52->enter($__internal_daca39f18fa34cd7efbaa799e54dfae19675565e3b462591826843fc221cfb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_title"));

        echo "Bienvenue sur la page d'administration";
        
        $__internal_daca39f18fa34cd7efbaa799e54dfae19675565e3b462591826843fc221cfb52->leave($__internal_daca39f18fa34cd7efbaa799e54dfae19675565e3b462591826843fc221cfb52_prof);

        
        $__internal_f7deb1f0990204be242e5f72f0ed328180f1abb330728d0cfd5612efd3c43217->leave($__internal_f7deb1f0990204be242e5f72f0ed328180f1abb330728d0cfd5612efd3c43217_prof);

    }

    // line 176
    public function block_admin_content($context, array $blocks = array())
    {
        $__internal_43882d04d6d2f430bb9e3628d3c8e94c820d539aa05dd66d0f7ea46630bf2109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43882d04d6d2f430bb9e3628d3c8e94c820d539aa05dd66d0f7ea46630bf2109->enter($__internal_43882d04d6d2f430bb9e3628d3c8e94c820d539aa05dd66d0f7ea46630bf2109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_content"));

        $__internal_3573f1241978af9861d29875d46818f08e1980d42443ddbb37e95618c2a936db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3573f1241978af9861d29875d46818f08e1980d42443ddbb37e95618c2a936db->enter($__internal_3573f1241978af9861d29875d46818f08e1980d42443ddbb37e95618c2a936db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_content"));

        // line 177
        echo "
                            ";
        
        $__internal_3573f1241978af9861d29875d46818f08e1980d42443ddbb37e95618c2a936db->leave($__internal_3573f1241978af9861d29875d46818f08e1980d42443ddbb37e95618c2a936db_prof);

        
        $__internal_43882d04d6d2f430bb9e3628d3c8e94c820d539aa05dd66d0f7ea46630bf2109->leave($__internal_43882d04d6d2f430bb9e3628d3c8e94c820d539aa05dd66d0f7ea46630bf2109_prof);

    }

    // line 207
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9b60f3b095bee5f2851102719e0d4ce7f8fc515cd970493ee5f9e14b7ebbbdba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b60f3b095bee5f2851102719e0d4ce7f8fc515cd970493ee5f9e14b7ebbbdba->enter($__internal_9b60f3b095bee5f2851102719e0d4ce7f8fc515cd970493ee5f9e14b7ebbbdba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ff24dfa774c97181ed12312d28428446d11f83ada969834c2fdfe373e4833827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff24dfa774c97181ed12312d28428446d11f83ada969834c2fdfe373e4833827->enter($__internal_ff24dfa774c97181ed12312d28428446d11f83ada969834c2fdfe373e4833827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ff24dfa774c97181ed12312d28428446d11f83ada969834c2fdfe373e4833827->leave($__internal_ff24dfa774c97181ed12312d28428446d11f83ada969834c2fdfe373e4833827_prof);

        
        $__internal_9b60f3b095bee5f2851102719e0d4ce7f8fc515cd970493ee5f9e14b7ebbbdba->leave($__internal_9b60f3b095bee5f2851102719e0d4ce7f8fc515cd970493ee5f9e14b7ebbbdba_prof);

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
        return array (  455 => 207,  444 => 177,  435 => 176,  417 => 174,  400 => 51,  383 => 32,  365 => 5,  353 => 208,  351 => 207,  346 => 205,  342 => 204,  336 => 201,  332 => 200,  328 => 199,  306 => 179,  304 => 176,  299 => 174,  277 => 154,  271 => 152,  265 => 150,  263 => 149,  254 => 145,  246 => 140,  240 => 137,  234 => 134,  225 => 128,  219 => 125,  213 => 122,  208 => 120,  200 => 114,  192 => 112,  190 => 111,  187 => 110,  179 => 108,  177 => 107,  174 => 106,  166 => 104,  164 => 103,  111 => 52,  109 => 51,  87 => 33,  85 => 32,  79 => 29,  73 => 26,  65 => 21,  59 => 18,  53 => 15,  49 => 14,  37 => 5,  31 => 1,);
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
                            <a class=\"navbar-brand\" href=\"{{ path('global_admin') }}\"><img src=\"{{ asset('/img/logo_global.png') }}\" alt=\"logo\"></a>
                        {% endif %}

                        {% if (app.request.getLocale() == 'fr') %}
                            <a class=\"navbar-brand\" href=\"{{ path('global_admin') }}\"><img src=\"{{ asset('/img/logo_global.png') }}\" alt=\"logo\"></a>
                        {% endif %}

                        {% if (app.request.getLocale() == 'de') %}
                            <a class=\"navbar-brand\" href=\"{{ path('global_admin') }}\"><img src=\"{{ asset('/img/logo_global.png') }}\" alt=\"logo\"></a>
                        {% endif %}

                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"main-nav-collapse\">
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"active\"><a href=\"{{ path('global_admin') }}\"><i class=\"fa fa-home\"></i></a></li>
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
        <script src=\"{{ asset('/js/app.js') }}\"></script>
        <script src=\"{{ asset('/js/jquery-ui.custom.min.js') }}\"></script>

        <!-- Warta scripts -->
        <script src=\"{{ asset('/js/script.min.js') }}\"></script>
        <script src=\"{{ asset('/js/initialize.js') }}\"></script>

        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::admin_base.html.twig", "/Users/Rachid/SymfonyProjects/theglobalview/app/Resources/views/admin_base.html.twig");
    }
}
