<?php

/* Pages/Index/Index.php.twig */
class __TwigTemplate_eb9c5f7be2ab3be89882441547155ba4491ad1aae20bd4ddcf220eb1c60d887a extends Twig_Template
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
        // line 1
        echo "<!--
  Copyright 2015 TheShark34

  This file is part of S-Update-Server.

  S-Update-Server is free software: you can redistribute it and/or modify
  it under the terms of the GNU Lesser General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.

  S-Update-Server is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU Lesser General Public License for more details.

  You should have received a copy of the GNU Lesser General Public License
  along with S-Update-Server.  If not, see <http://www.gnu.org/licenses/>.
-->

";
        // line 26
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>S-Update-Server - ";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLangText')->getCallable(), array("home")), "html", null, true);
        echo "</title>

    <!-- Bootstrap -->
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("shared", "css/bootstrap.min.css", true)), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- The S-Update Icon -->
    <link rel=\"icon\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("shared", "icon.png", true)), "html", null, true);
        echo "\" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <!-- Index CSS -->
    <link href=\"";
        // line 49
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("Index", "css/style.css", true)), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- S-Update-Server global CSS -->
    <link href=\"";
        // line 52
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("shared", "css/global.css", true)), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>

<body>
    <div class='fulldiv'>
        <div id=\"centerDiv\">
            <div id=\"left-buttons\">
                <a href=\"Dashboard\">
                    <div id=\"dashboard\" class=\"button top-button\" style=\"display: none;\">
                        <img id=\"dashboard-icon\" class=\"button-icon\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("Index", "images/dashboard.png", true)), "html", null, true);
        echo "\" />
                        <p id=\"dashboard-label\" class=\"button-label\">";
        // line 62
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLangText')->getCallable(), array("dashboard")), "html", null, true);
        echo "</p>
                    </div>
                </a>

                <a href=\"Disconnect\">
                    <div id=\"disconnect\" class=\"button bottom-button\" style=\"display: none;\">
                        <img id=\"disconnect-icon\" class=\"button-icon\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("Index", "images/disconnect.png", true)), "html", null, true);
        echo "\" />
                        <p id=\"disconnect-label\" class=\"button-label\">";
        // line 69
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLangText')->getCallable(), array("disconnect")), "html", null, true);
        echo "</p>
                    </div>
                </a>
            </div>

            <div style=\"text-align: center;\">
                <img id=\"sharklogo\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("shared", "sharklogo.png", true)), "html", null, true);
        echo "\" />
                <canvas id=\"canvas\" width=\"350\" height=\"350\"></canvas>
                <img id=\"logo\" style=\"display: none;\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("shared", "icon.png", true)), "html", null, true);
        echo "\" />
                <img id=\"textlogo\" style=\"display: none;\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("Index", "images/textlogo.png", true)), "html", null, true);
        echo "\" />

                <div id=\"infos\">
                    <b>";
        // line 81
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLangText')->getCallable(), array("status")), "html", null, true);
        echo " : <span style=\"color: #00ff00\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLangText')->getCallable(), array("working")), "html", null, true);
        echo "</span></b><br /><br />

                    Paladin : <span style=\"color: #00ff00\">";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["paladinVersion"]) ? $context["paladinVersion"] : null), "html", null, true);
        echo "</span><br />
                    Twig : <span style=\"color: #00ff00\">";
        // line 84
        echo twig_escape_filter($this->env, twig_constant("Twig_Environment::VERSION"), "html", null, true);
        echo "</span><br />
                    jQuery : <span style=\"color: #00ff00\">jQueryVersion</span><br />
                    Server : <span style=\"color: #00ff00\">";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["serverVersion"]) ? $context["serverVersion"] : null), "html", null, true);
        echo "</span><br />
                </div>
            </div>

            <div id=\"right-buttons\">
                <a href=\"Settings\">
                    <div id=\"settings\" class=\"button top-button\" style=\"display: none;\">
                        <img id=\"settings-icon\" class=\"button-icon\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("Index", "images/settings.png", true)), "html", null, true);
        echo "\" />
                        <p id=\"settings-label\" class=\"button-label\">";
        // line 94
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLangText')->getCallable(), array("settings")), "html", null, true);
        echo "</p>
                    </div>
                </a>

                <a href=\"About\">
                    <div id=\"about\" class=\"button bottom-button\" style=\"display: none;\">
                        <img id=\"about-icon\" class=\"button-icon\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("Index", "images/about.png", true)), "html", null, true);
        echo "\" />
                        <p id=\"about-label\" class=\"button-label\">";
        // line 101
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLangText')->getCallable(), array("about")), "html", null, true);
        echo "</p>
                    </div>
                </a>
            </div>
        </div>


    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("shared", "js/jquery-1.11.3.min.js", false)), "html", null, true);
        echo "\"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("shared", "js/bootstrap.min.js", false)), "html", null, true);
        echo "\"></script>

    <!-- Index JS script -->
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("Index", "js/index.js", false)), "html", null, true);
        echo "\"></script>

    <!-- Starting the JS script -->
    <script>
        start(";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["serverEnabled"]) ? $context["serverEnabled"] : null), "html", null, true);
        echo ");
    </script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "Pages/Index/Index.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 121,  201 => 117,  195 => 114,  189 => 111,  176 => 101,  172 => 100,  163 => 94,  159 => 93,  149 => 86,  144 => 84,  140 => 83,  133 => 81,  127 => 78,  123 => 77,  118 => 75,  109 => 69,  105 => 68,  96 => 62,  92 => 61,  80 => 52,  74 => 49,  61 => 39,  55 => 36,  49 => 33,  40 => 26,  19 => 1,);
    }
}
