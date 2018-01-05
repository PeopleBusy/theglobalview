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
        $__internal_c2dd007694fc5194b4f1074e32bf34f2ee4eddae1404cf5c29cb765244b263b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2dd007694fc5194b4f1074e32bf34f2ee4eddae1404cf5c29cb765244b263b2->enter($__internal_c2dd007694fc5194b4f1074e32bf34f2ee4eddae1404cf5c29cb765244b263b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::admin_base.html.twig"));

        $__internal_598631287394cc3c238c1ecda1c1cf624950d7fc040fb41f7205ba19541da151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_598631287394cc3c238c1ecda1c1cf624950d7fc040fb41f7205ba19541da151->enter($__internal_598631287394cc3c238c1ecda1c1cf624950d7fc040fb41f7205ba19541da151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::admin_base.html.twig"));

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
        
        $__internal_c2dd007694fc5194b4f1074e32bf34f2ee4eddae1404cf5c29cb765244b263b2->leave($__internal_c2dd007694fc5194b4f1074e32bf34f2ee4eddae1404cf5c29cb765244b263b2_prof);

        
        $__internal_598631287394cc3c238c1ecda1c1cf624950d7fc040fb41f7205ba19541da151->leave($__internal_598631287394cc3c238c1ecda1c1cf624950d7fc040fb41f7205ba19541da151_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b002ca0090102721aabcf235b4b84f44747d3de3df1d5c5c570f8552787592cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b002ca0090102721aabcf235b4b84f44747d3de3df1d5c5c570f8552787592cf->enter($__internal_b002ca0090102721aabcf235b4b84f44747d3de3df1d5c5c570f8552787592cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6a13c0a5179d1bb4fed8736f66932a697947d3082ef4ca53a1b1a7a4987814eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a13c0a5179d1bb4fed8736f66932a697947d3082ef4ca53a1b1a7a4987814eb->enter($__internal_6a13c0a5179d1bb4fed8736f66932a697947d3082ef4ca53a1b1a7a4987814eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administration";
        
        $__internal_6a13c0a5179d1bb4fed8736f66932a697947d3082ef4ca53a1b1a7a4987814eb->leave($__internal_6a13c0a5179d1bb4fed8736f66932a697947d3082ef4ca53a1b1a7a4987814eb_prof);

        
        $__internal_b002ca0090102721aabcf235b4b84f44747d3de3df1d5c5c570f8552787592cf->leave($__internal_b002ca0090102721aabcf235b4b84f44747d3de3df1d5c5c570f8552787592cf_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bcc119018873ed44efa513337b1262184e3fde99130d70a47c217ed4406a844f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcc119018873ed44efa513337b1262184e3fde99130d70a47c217ed4406a844f->enter($__internal_bcc119018873ed44efa513337b1262184e3fde99130d70a47c217ed4406a844f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_16bc6dbfb52828f3d9877294943d0380cc18e8c3fbb0e4467a64abe66c05c468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16bc6dbfb52828f3d9877294943d0380cc18e8c3fbb0e4467a64abe66c05c468->enter($__internal_16bc6dbfb52828f3d9877294943d0380cc18e8c3fbb0e4467a64abe66c05c468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_16bc6dbfb52828f3d9877294943d0380cc18e8c3fbb0e4467a64abe66c05c468->leave($__internal_16bc6dbfb52828f3d9877294943d0380cc18e8c3fbb0e4467a64abe66c05c468_prof);

        
        $__internal_bcc119018873ed44efa513337b1262184e3fde99130d70a47c217ed4406a844f->leave($__internal_bcc119018873ed44efa513337b1262184e3fde99130d70a47c217ed4406a844f_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f63eb5bd30ed220c7c5933ac5a6ae535c0ce874824f57cfaddbcb24494055c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f63eb5bd30ed220c7c5933ac5a6ae535c0ce874824f57cfaddbcb24494055c6->enter($__internal_3f63eb5bd30ed220c7c5933ac5a6ae535c0ce874824f57cfaddbcb24494055c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_417f454d702b2ea4aab2307dc3ba1e494eacb98848aabf0d4e24cf8420897a21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_417f454d702b2ea4aab2307dc3ba1e494eacb98848aabf0d4e24cf8420897a21->enter($__internal_417f454d702b2ea4aab2307dc3ba1e494eacb98848aabf0d4e24cf8420897a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_417f454d702b2ea4aab2307dc3ba1e494eacb98848aabf0d4e24cf8420897a21->leave($__internal_417f454d702b2ea4aab2307dc3ba1e494eacb98848aabf0d4e24cf8420897a21_prof);

        
        $__internal_3f63eb5bd30ed220c7c5933ac5a6ae535c0ce874824f57cfaddbcb24494055c6->leave($__internal_3f63eb5bd30ed220c7c5933ac5a6ae535c0ce874824f57cfaddbcb24494055c6_prof);

    }

    // line 174
    public function block_admin_title($context, array $blocks = array())
    {
        $__internal_e109dd476c7d14401e11607f6e99e5826b329c513aaa7ed9597a65a30f5fedf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e109dd476c7d14401e11607f6e99e5826b329c513aaa7ed9597a65a30f5fedf2->enter($__internal_e109dd476c7d14401e11607f6e99e5826b329c513aaa7ed9597a65a30f5fedf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_title"));

        $__internal_abcc3c5cdccabb41b048d2c97e34c1ce5886024af5452b7825aabf14a4d7616f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abcc3c5cdccabb41b048d2c97e34c1ce5886024af5452b7825aabf14a4d7616f->enter($__internal_abcc3c5cdccabb41b048d2c97e34c1ce5886024af5452b7825aabf14a4d7616f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_title"));

        echo "Bienvenue sur la page d'administration";
        
        $__internal_abcc3c5cdccabb41b048d2c97e34c1ce5886024af5452b7825aabf14a4d7616f->leave($__internal_abcc3c5cdccabb41b048d2c97e34c1ce5886024af5452b7825aabf14a4d7616f_prof);

        
        $__internal_e109dd476c7d14401e11607f6e99e5826b329c513aaa7ed9597a65a30f5fedf2->leave($__internal_e109dd476c7d14401e11607f6e99e5826b329c513aaa7ed9597a65a30f5fedf2_prof);

    }

    // line 176
    public function block_admin_content($context, array $blocks = array())
    {
        $__internal_fb209bc4e2626fb0b66703cd5702433a2ba041c22cdc6307fa7d126a16d78df6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb209bc4e2626fb0b66703cd5702433a2ba041c22cdc6307fa7d126a16d78df6->enter($__internal_fb209bc4e2626fb0b66703cd5702433a2ba041c22cdc6307fa7d126a16d78df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_content"));

        $__internal_73304987206b08712603ecf0999e84e4e0e397bd1f9f4a507e47a39ab873a538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73304987206b08712603ecf0999e84e4e0e397bd1f9f4a507e47a39ab873a538->enter($__internal_73304987206b08712603ecf0999e84e4e0e397bd1f9f4a507e47a39ab873a538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_content"));

        // line 177
        echo "
                            ";
        
        $__internal_73304987206b08712603ecf0999e84e4e0e397bd1f9f4a507e47a39ab873a538->leave($__internal_73304987206b08712603ecf0999e84e4e0e397bd1f9f4a507e47a39ab873a538_prof);

        
        $__internal_fb209bc4e2626fb0b66703cd5702433a2ba041c22cdc6307fa7d126a16d78df6->leave($__internal_fb209bc4e2626fb0b66703cd5702433a2ba041c22cdc6307fa7d126a16d78df6_prof);

    }

    // line 206
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4a6776315d9dc3864a1726b8f4adbf3f4f4a1db0882351f66e823531e713f5b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a6776315d9dc3864a1726b8f4adbf3f4f4a1db0882351f66e823531e713f5b9->enter($__internal_4a6776315d9dc3864a1726b8f4adbf3f4f4a1db0882351f66e823531e713f5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_15897ed6f08755e87d1ec4bd158401075a2f46556cb4e8696ff6525b50211105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15897ed6f08755e87d1ec4bd158401075a2f46556cb4e8696ff6525b50211105->enter($__internal_15897ed6f08755e87d1ec4bd158401075a2f46556cb4e8696ff6525b50211105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_15897ed6f08755e87d1ec4bd158401075a2f46556cb4e8696ff6525b50211105->leave($__internal_15897ed6f08755e87d1ec4bd158401075a2f46556cb4e8696ff6525b50211105_prof);

        
        $__internal_4a6776315d9dc3864a1726b8f4adbf3f4f4a1db0882351f66e823531e713f5b9->leave($__internal_4a6776315d9dc3864a1726b8f4adbf3f4f4a1db0882351f66e823531e713f5b9_prof);

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
        return array (  448 => 206,  437 => 177,  428 => 176,  410 => 174,  393 => 51,  376 => 32,  358 => 5,  346 => 207,  344 => 206,  339 => 204,  335 => 203,  329 => 200,  325 => 199,  303 => 179,  301 => 176,  296 => 174,  274 => 154,  268 => 152,  262 => 150,  260 => 149,  251 => 145,  243 => 140,  237 => 137,  231 => 134,  222 => 128,  216 => 125,  210 => 122,  200 => 114,  192 => 112,  190 => 111,  187 => 110,  179 => 108,  177 => 107,  174 => 106,  166 => 104,  164 => 103,  111 => 52,  109 => 51,  87 => 33,  85 => 32,  79 => 29,  73 => 26,  65 => 21,  59 => 18,  53 => 15,  49 => 14,  37 => 5,  31 => 1,);
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
", "::admin_base.html.twig", "/Users/Rachid/SymfonyProjects/theglobalview/app/Resources/views/admin_base.html.twig");
    }
}
