<?php

/* GlobalViewBundle:Default/login:login.html.twig */
class __TwigTemplate_8e5cbaa7a57f517217064728204b9629e0797b6987ea57682da229c336f7f300 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_686f9fdc7e6c6ac1b25be87f25b7ad9570e052e1f4712a1e65cc29d2198114e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_686f9fdc7e6c6ac1b25be87f25b7ad9570e052e1f4712a1e65cc29d2198114e2->enter($__internal_686f9fdc7e6c6ac1b25be87f25b7ad9570e052e1f4712a1e65cc29d2198114e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default/login:login.html.twig"));

        $__internal_0027ef3ccd5a0b5acf26c7aa9b055e9a300b876e0c1da994d15882d31f639430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0027ef3ccd5a0b5acf26c7aa9b055e9a300b876e0c1da994d15882d31f639430->enter($__internal_0027ef3ccd5a0b5acf26c7aa9b055e9a300b876e0c1da994d15882d31f639430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GlobalViewBundle:Default/login:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html id=\"sign-in\" class=\" csstransforms js csstransitions\">
<head>
    <meta charset=\"UTF-8\" />
    <title>Authentification</title>

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

    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <style>
        .sf-display-none{
            display: none !important;
        }
    </style>
</head>
<body>

    <!-- CONTENT
                ============ -->
    <div id=\"content\">
        <h4 class=\"text-center\">Veuillez vous connecter!</h4>
        <hr>

        ";
        // line 47
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 48
            echo "            <div style=\"text-align: center\">
                <span class=\"btn btn-primary\">";
            // line 49
            echo twig_escape_filter($this->env, ($context["error"] ?? $this->getContext($context, "error")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 52
        echo "
        <br>

        <form role=\"form\" action=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_login");
        echo "\" method=\"post\">
            <div class=\"form-group\">
                <label for=\"username\">Nom d'utilisateur</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label for=\"password\">Mot de passe</label>
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\">
            </div>
            <div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\"> Remember me
                </label>
            </div>
            <input type=\"hidden\" name=\"_target_path\" value=\"/admin/home\" />
            <button type=\"submit\" class=\"btn btn-primary\">Se connecter</button> &nbsp;&nbsp;
            <a class=\"no-color\" href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("global_view_homepage");
        echo "\" target=\"_blank\">Continuer vers le site</a>
        </form>
    </div><!--#content-->


</body>
</html>
";
        
        $__internal_686f9fdc7e6c6ac1b25be87f25b7ad9570e052e1f4712a1e65cc29d2198114e2->leave($__internal_686f9fdc7e6c6ac1b25be87f25b7ad9570e052e1f4712a1e65cc29d2198114e2_prof);

        
        $__internal_0027ef3ccd5a0b5acf26c7aa9b055e9a300b876e0c1da994d15882d31f639430->leave($__internal_0027ef3ccd5a0b5acf26c7aa9b055e9a300b876e0c1da994d15882d31f639430_prof);

    }

    public function getTemplateName()
    {
        return "GlobalViewBundle:Default/login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 71,  116 => 58,  110 => 55,  105 => 52,  99 => 49,  96 => 48,  94 => 47,  76 => 32,  70 => 29,  64 => 26,  56 => 21,  50 => 18,  44 => 15,  40 => 14,  25 => 1,);
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
<html id=\"sign-in\" class=\" csstransforms js csstransitions\">
<head>
    <meta charset=\"UTF-8\" />
    <title>Authentification</title>

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

    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <style>
        .sf-display-none{
            display: none !important;
        }
    </style>
</head>
<body>

    <!-- CONTENT
                ============ -->
    <div id=\"content\">
        <h4 class=\"text-center\">Veuillez vous connecter!</h4>
        <hr>

        {% if error %}
            <div style=\"text-align: center\">
                <span class=\"btn btn-primary\">{{ error }}</span>
            </div>
        {% endif %}

        <br>

        <form role=\"form\" action=\"{{ path(\"global_login\") }}\" method=\"post\">
            <div class=\"form-group\">
                <label for=\"username\">Nom d'utilisateur</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label for=\"password\">Mot de passe</label>
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\">
            </div>
            <div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\"> Remember me
                </label>
            </div>
            <input type=\"hidden\" name=\"_target_path\" value=\"/admin/home\" />
            <button type=\"submit\" class=\"btn btn-primary\">Se connecter</button> &nbsp;&nbsp;
            <a class=\"no-color\" href=\"{{ path('global_view_homepage') }}\" target=\"_blank\">Continuer vers le site</a>
        </form>
    </div><!--#content-->


</body>
</html>
", "GlobalViewBundle:Default/login:login.html.twig", "/Users/Rachid/SymfonyProjects/theglobalview/src/GlobalViewBundle/Resources/views/Default/login/login.html.twig");
    }
}
