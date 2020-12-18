<?php

/* Pages/Login/Login.php.twig */
class __TwigTemplate_c4cd5cacd7f2825e32e1073d68e6024b4492a37bc9e9c3f09c3aa6c877307873 extends Twig_Template
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLangText')->getCallable(), array("login")), "html", null, true);
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

    <!-- Login CSS -->
    <link href=\"";
        // line 49
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("Login", "css/style.css", true)), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- S-Update-Server global CSS -->
    <link href=\"";
        // line 52
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("shared", "css/global.css", true)), "html", null, true);
        echo "\" rel=\"stylesheet\">

    ";
        // line 55
        echo "    ";
        if ( !(isset($context["serverActivated"]) ? $context["serverActivated"] : null)) {
            // line 56
            echo "        <style>
            html, body {
                background-image: none;
                background: black;
            }
        </style>
    ";
        }
        // line 63
        echo "</head>

<body>
    <div class='fulldiv'>
        <div class=\"center\" id=\"centerDiv\">
            <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("shared", "logo.png", false)), "html", null, true);
        echo "\" />

            <form method=\"post\" target=\"\">
                <label for=\"password\">";
        // line 71
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLangText')->getCallable(), array("password")), "html", null, true);
        echo "</label> : <input class=\"text-field\" type=\"password\" name=\"password\" id=\"password\" required/>
                <br />
                <br />
                <input class=\"submit-button\" type=\"submit\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLangText')->getCallable(), array("login")), "html", null, true);
        echo "\" />
            </form>

            <br />

            ";
        // line 79
        if ((isset($context["drawMessage"]) ? $context["drawMessage"] : null)) {
            // line 80
            echo "                <span style=\"color: red\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLangText')->getCallable(), array((isset($context["message"]) ? $context["message"] : null))), "html", null, true);
            echo "</span>
            ";
        }
        // line 82
        echo "        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("shared", "js/jquery-1.11.3.min.js", false)), "html", null, true);
        echo "\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("shared", "js/bootstrap.min.js", false)), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "Pages/Login/Login.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 88,  138 => 86,  132 => 82,  126 => 80,  124 => 79,  116 => 74,  110 => 71,  104 => 68,  97 => 63,  88 => 56,  85 => 55,  80 => 52,  74 => 49,  61 => 39,  55 => 36,  49 => 33,  40 => 26,  19 => 1,);
    }
}
