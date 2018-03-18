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
        $__internal_a2c8fcdfd555f7b0f3fb81f37bead494c26ffa428a2e716190203d696d91061f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2c8fcdfd555f7b0f3fb81f37bead494c26ffa428a2e716190203d696d91061f->enter($__internal_a2c8fcdfd555f7b0f3fb81f37bead494c26ffa428a2e716190203d696d91061f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::admin_base.html.twig"));

        $__internal_5dce3ef3099924aa0193c23c88ebdf0676935351b675728b891f352f001e631c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dce3ef3099924aa0193c23c88ebdf0676935351b675728b891f352f001e631c->enter($__internal_5dce3ef3099924aa0193c23c88ebdf0676935351b675728b891f352f001e631c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::admin_base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/style.css"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/logo_global.png"), "html", null, true);
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
        
        $__internal_a2c8fcdfd555f7b0f3fb81f37bead494c26ffa428a2e716190203d696d91061f->leave($__internal_a2c8fcdfd555f7b0f3fb81f37bead494c26ffa428a2e716190203d696d91061f_prof);

        
        $__internal_5dce3ef3099924aa0193c23c88ebdf0676935351b675728b891f352f001e631c->leave($__internal_5dce3ef3099924aa0193c23c88ebdf0676935351b675728b891f352f001e631c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_20ffefe338ef9a95a43bebfb3b8a248a8832465446da1d2227e4b2f9caaab428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20ffefe338ef9a95a43bebfb3b8a248a8832465446da1d2227e4b2f9caaab428->enter($__internal_20ffefe338ef9a95a43bebfb3b8a248a8832465446da1d2227e4b2f9caaab428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_25355766d756a0897677ef749d50c8bc913aa11faf75b15e6703a2c582b833cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25355766d756a0897677ef749d50c8bc913aa11faf75b15e6703a2c582b833cf->enter($__internal_25355766d756a0897677ef749d50c8bc913aa11faf75b15e6703a2c582b833cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administration";
        
        $__internal_25355766d756a0897677ef749d50c8bc913aa11faf75b15e6703a2c582b833cf->leave($__internal_25355766d756a0897677ef749d50c8bc913aa11faf75b15e6703a2c582b833cf_prof);

        
        $__internal_20ffefe338ef9a95a43bebfb3b8a248a8832465446da1d2227e4b2f9caaab428->leave($__internal_20ffefe338ef9a95a43bebfb3b8a248a8832465446da1d2227e4b2f9caaab428_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4eed8afa18e1770ec3c0c54f1136f3be3825e0ac16abc2dcecdcb87f7d6ac09d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eed8afa18e1770ec3c0c54f1136f3be3825e0ac16abc2dcecdcb87f7d6ac09d->enter($__internal_4eed8afa18e1770ec3c0c54f1136f3be3825e0ac16abc2dcecdcb87f7d6ac09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_edc8a1fd674101bec02d6e4461c1bf713a7eb13ca0f57837ddc8e44055d31e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc8a1fd674101bec02d6e4461c1bf713a7eb13ca0f57837ddc8e44055d31e28->enter($__internal_edc8a1fd674101bec02d6e4461c1bf713a7eb13ca0f57837ddc8e44055d31e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_edc8a1fd674101bec02d6e4461c1bf713a7eb13ca0f57837ddc8e44055d31e28->leave($__internal_edc8a1fd674101bec02d6e4461c1bf713a7eb13ca0f57837ddc8e44055d31e28_prof);

        
        $__internal_4eed8afa18e1770ec3c0c54f1136f3be3825e0ac16abc2dcecdcb87f7d6ac09d->leave($__internal_4eed8afa18e1770ec3c0c54f1136f3be3825e0ac16abc2dcecdcb87f7d6ac09d_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc549a8f61d6bdb70adb8e53422225328d5d886ba069fb037a5d06f98e5e86fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc549a8f61d6bdb70adb8e53422225328d5d886ba069fb037a5d06f98e5e86fc->enter($__internal_bc549a8f61d6bdb70adb8e53422225328d5d886ba069fb037a5d06f98e5e86fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_86d03349d412f6b1d521403b54cf91d61f41c9c65f66da462bca4b3f9d237b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86d03349d412f6b1d521403b54cf91d61f41c9c65f66da462bca4b3f9d237b66->enter($__internal_86d03349d412f6b1d521403b54cf91d61f41c9c65f66da462bca4b3f9d237b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_86d03349d412f6b1d521403b54cf91d61f41c9c65f66da462bca4b3f9d237b66->leave($__internal_86d03349d412f6b1d521403b54cf91d61f41c9c65f66da462bca4b3f9d237b66_prof);

        
        $__internal_bc549a8f61d6bdb70adb8e53422225328d5d886ba069fb037a5d06f98e5e86fc->leave($__internal_bc549a8f61d6bdb70adb8e53422225328d5d886ba069fb037a5d06f98e5e86fc_prof);

    }

    // line 174
    public function block_admin_title($context, array $blocks = array())
    {
        $__internal_ee3a6314d04c91cfaa5edb5f53ea1dc6d58926bd5063fda0556d6624f01e3aa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee3a6314d04c91cfaa5edb5f53ea1dc6d58926bd5063fda0556d6624f01e3aa9->enter($__internal_ee3a6314d04c91cfaa5edb5f53ea1dc6d58926bd5063fda0556d6624f01e3aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_title"));

        $__internal_57785ebae23c9ad1bc972dc52a1769172f7c5c0ccc93afb4bc6846b61c0c9ad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57785ebae23c9ad1bc972dc52a1769172f7c5c0ccc93afb4bc6846b61c0c9ad8->enter($__internal_57785ebae23c9ad1bc972dc52a1769172f7c5c0ccc93afb4bc6846b61c0c9ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_title"));

        echo "Bienvenue sur la page d'administration";
        
        $__internal_57785ebae23c9ad1bc972dc52a1769172f7c5c0ccc93afb4bc6846b61c0c9ad8->leave($__internal_57785ebae23c9ad1bc972dc52a1769172f7c5c0ccc93afb4bc6846b61c0c9ad8_prof);

        
        $__internal_ee3a6314d04c91cfaa5edb5f53ea1dc6d58926bd5063fda0556d6624f01e3aa9->leave($__internal_ee3a6314d04c91cfaa5edb5f53ea1dc6d58926bd5063fda0556d6624f01e3aa9_prof);

    }

    // line 176
    public function block_admin_content($context, array $blocks = array())
    {
        $__internal_4fd4cd4fa4caab119fed1f843cd933345b7a131f7dbf046686824d6d592de14c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fd4cd4fa4caab119fed1f843cd933345b7a131f7dbf046686824d6d592de14c->enter($__internal_4fd4cd4fa4caab119fed1f843cd933345b7a131f7dbf046686824d6d592de14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_content"));

        $__internal_f63e78edd1879bbfcd81469b97ac0e53fee37bf2b68412d836184a5f23b6a30e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f63e78edd1879bbfcd81469b97ac0e53fee37bf2b68412d836184a5f23b6a30e->enter($__internal_f63e78edd1879bbfcd81469b97ac0e53fee37bf2b68412d836184a5f23b6a30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_content"));

        // line 177
        echo "
                            ";
        
        $__internal_f63e78edd1879bbfcd81469b97ac0e53fee37bf2b68412d836184a5f23b6a30e->leave($__internal_f63e78edd1879bbfcd81469b97ac0e53fee37bf2b68412d836184a5f23b6a30e_prof);

        
        $__internal_4fd4cd4fa4caab119fed1f843cd933345b7a131f7dbf046686824d6d592de14c->leave($__internal_4fd4cd4fa4caab119fed1f843cd933345b7a131f7dbf046686824d6d592de14c_prof);

    }

    // line 207
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_200ecb467e535339c098fac1a1f2957022bd420bbf38a67244c705d576e65226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_200ecb467e535339c098fac1a1f2957022bd420bbf38a67244c705d576e65226->enter($__internal_200ecb467e535339c098fac1a1f2957022bd420bbf38a67244c705d576e65226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6305a3847e8cbeadd31cda9d5c5a128c661d1aa92a414e0dcbe57d13adb067f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6305a3847e8cbeadd31cda9d5c5a128c661d1aa92a414e0dcbe57d13adb067f1->enter($__internal_6305a3847e8cbeadd31cda9d5c5a128c661d1aa92a414e0dcbe57d13adb067f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6305a3847e8cbeadd31cda9d5c5a128c661d1aa92a414e0dcbe57d13adb067f1->leave($__internal_6305a3847e8cbeadd31cda9d5c5a128c661d1aa92a414e0dcbe57d13adb067f1_prof);

        
        $__internal_200ecb467e535339c098fac1a1f2957022bd420bbf38a67244c705d576e65226->leave($__internal_200ecb467e535339c098fac1a1f2957022bd420bbf38a67244c705d576e65226_prof);

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
        <link href=\"{{ asset('/css/style.css') }}\" rel=\"stylesheet\">
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
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('/img/logo_global.png') }}\" />

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
