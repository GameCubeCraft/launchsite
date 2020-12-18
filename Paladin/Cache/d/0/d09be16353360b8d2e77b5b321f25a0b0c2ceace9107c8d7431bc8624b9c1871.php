<?php

/* Pages/Install/Install.php.twig */
class __TwigTemplate_d09be16353360b8d2e77b5b321f25a0b0c2ceace9107c8d7431bc8624b9c1871 extends Twig_Template
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
    <title>S-Update-Server - Setup</title>

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

    <!-- S-Update-Server global CSS -->
    <link href=\"";
        // line 49
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("shared", "css/global.css", true)), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Login CSS -->
    <link href=\"";
        // line 52
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("Install", "css/style.css", true)), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Lato Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class='fulldiv'>
        <div class=\"center\" id=\"centerDiv\">
            <span id=\"textspan\">Loading</span>

            <img onclick=\"frenchSelected()\" id=\"frenchflag\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("Install", "images/france.png", true)), "html", null, true);
        echo "\" />
            <img onclick=\"englishSelected()\" id=\"ukflag\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("Install", "images/uk.png", true)), "html", null, true);
        echo "\" />

            <div id=\"formDiv\">
                <form id=\"form\" method=\"post\" target=\"\">
                    <input id=\"language\" style=\"display: none;\" type=\"text\" name=\"language\" id=\"language\" />

                    <input class=\"text-field\" placeholder=\"Password\" style=\"display: none;\" type=\"password\" name=\"password\" id=\"password\" required/><br />
                    <input class=\"text-field\" placeholder=\"Validation Password\" style=\"display: none;\" type=\"password\" name=\"vpassword\" id=\"vpassword\" required/><br /><br />
                </form>
                <button onclick=\"finishConfig()\" style=\"display: none\" class=\"submit-button\" id=\"sub\">Finish</button><br /><br />
                <span id=\"error\"></span>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("shared", "js/jquery-1.11.3.min.js", false)), "html", null, true);
        echo "\"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("shared", "js/bootstrap.min.js", false)), "html", null, true);
        echo "\"></script>

    <!-- The Install JS -->
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("Install", "js/install.js", false)), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "Pages/Install/Install.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 86,  120 => 83,  114 => 80,  95 => 64,  91 => 63,  77 => 52,  71 => 49,  58 => 39,  52 => 36,  40 => 26,  19 => 1,);
    }
}
