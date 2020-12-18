<?php

/* Pages/Dashboard/Dashboard.php.twig */
class __TwigTemplate_546820069608ba052917a6444dc06a4da10174d10284808be2595950fff707c7 extends Twig_Template
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

<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>S-Update-Server - ";
        // line 26
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLangText')->getCallable(), array("dashboard")), "html", null, true);
        echo "</title>

    <!-- Bootstrap -->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("shared", "css/bootstrap.min.css", true)), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- The S-Update Icon -->
    <link rel=\"icon\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("shared", "icon.png", true)), "html", null, true);
        echo "\" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <!-- About CSS -->
    <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("Dashboard", "css/style.css", true)), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- S-Update-Server global CSS -->
    <link href=\"";
        // line 45
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("shared", "css/global.css", true)), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>

<body>
    <div id=\"mainDiv\">
        <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("shared", "logo.png", true)), "html", null, true);
        echo "\" />
        <br />
        <br />
        <button onclick=\"window.location.href='";
        // line 53
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getHome')->getCallable(), array()), "html", null, true);
        echo "';\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLangText')->getCallable(), array("home")), "html", null, true);
        echo "</button>
        <br />
        <br />

        <hr />

        <div id=\"dashboard\">
            ";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entries"]) ? $context["entries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 61
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "link", array()), "html", null, true);
            echo "\">
                    <div class=\"dashboard-entry\">
                        <img src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "icon", array()), "html", null, true);
            echo "\" /><br />
                        <span>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "name", array()), "html", null, true);
            echo "</span>
                    </div>
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "        </div>
    </div>

    <!-- The FieldChecker JS -->
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("Settings", "js/fieldChecker.js", false)), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "Pages/Dashboard/Dashboard.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 72,  127 => 68,  117 => 64,  113 => 63,  107 => 61,  103 => 60,  91 => 53,  85 => 50,  77 => 45,  71 => 42,  58 => 32,  52 => 29,  46 => 26,  19 => 1,);
    }
}
