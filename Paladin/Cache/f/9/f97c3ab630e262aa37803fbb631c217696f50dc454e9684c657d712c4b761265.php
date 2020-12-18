<?php

/* Pages/FileExplorer/FileExplorer.php.twig */
class __TwigTemplate_f97c3ab630e262aa37803fbb631c217696f50dc454e9684c657d712c4b761265 extends Twig_Template
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLangText')->getCallable(), array("file-explorer")), "html", null, true);
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("FileExplorer", "css/style.css", true)), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- S-Update-Server global CSS -->
    <link href=\"";
        // line 45
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("shared", "css/global.css", true)), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>

<body onresize=\"resizeCanvas()\">
    <div id=\"mainDiv\">
        <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("shared", "logo.png", true)), "html", null, true);
        echo "\" />
        <br />
        <br />
        <button style=\"width: 200px\" onclick=\"window.location.href='";
        // line 53
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getHome')->getCallable(), array()), "html", null, true);
        echo "';\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLangText')->getCallable(), array("home")), "html", null, true);
        echo "</button>
        <button style=\"width: 200px\" onclick=\"window.location.href='";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["root"]) ? $context["root"] : null), "html", null, true);
        echo "Dashboard';\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLangText')->getCallable(), array("dashboard")), "html", null, true);
        echo "</button>
        <br />
        <br />

        <hr />

        <div id=\"toolbar\">
            <button id=\"reload\" class=\"imgbutton\" onclick=\"location.reload();\"><img src=\"";
        // line 61
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("FileExplorer", "images/reload.png", true)), "html", null, true);
        echo "\" /></button>
            <button id=\"newfolder\" class=\"imgbutton\" onclick=\"newFolder('";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["root"]) ? $context["root"] : null), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
        echo "')\"><img src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("FileExplorer", "images/newfolder.png", true)), "html", null, true);
        echo "\" /></button>
        </div>

        <hr />

        <div id=\"dropzone\">
            <a id=\"message\" onclick=\"upload()\">";
        // line 68
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLangText')->getCallable(), array("clicktoupload")), "html", null, true);
        echo "</a><br />
            <canvas width=\"100\" height=\"20\" id=\"barcanvas\"></canvas>

            <form style=\"display: none;\">
                <input name=\"filesToUpload[]\" id=\"filesToUpload\" type=\"file\" multiple=\"\" />
            </form>
        </div>

        <hr />

        <div id=\"explorer\">
            ";
        // line 79
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["files"]) ? $context["files"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 80
            echo "                <div class=\"file\">
                    <img class=\"type\" src=\"";
            // line 81
            echo twig_escape_filter($this->env, (($this->getAttribute($context["file"], "folder", array())) ? (call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("FileExplorer", "images/folder.png", true))) : (call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("FileExplorer", "images/file.png", true)))), "html", null, true);
            echo "\" />
                    <a href=\"";
            // line 82
            echo twig_escape_filter($this->env, (isset($context["root"]) ? $context["root"] : null), "html", null, true);
            echo "FileExplorer/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "path", array()), "html", null, true);
            echo "\"><span class=\"name\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "name", array()), "html", null, true);
            echo "</span></a>

                    <span class=\"lastdate\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "lastdate", array()), "html", null, true);
            echo "</span>
                    <span class=\"size\">";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "size", array()), "html", null, true);
            echo "</span>

                    <button class=\"imgbutton delete\" onclick=\"deleteFile('";
            // line 87
            echo twig_escape_filter($this->env, strtr(call_user_func_array($this->env->getFunction('getLangText')->getCallable(), array("delete-sure")), array("
" => "", "" => "")), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "path", array()), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, (isset($context["root"]) ? $context["root"] : null), "html", null, true);
            echo "')\"><img src=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("FileExplorer", "images/delete.png", true)), "html", null, true);
            echo "\" /></button>
                    <button class=\"imgbutton rename\" onclick=\"rename('";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "path", array()), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, (isset($context["root"]) ? $context["root"] : null), "html", null, true);
            echo "')\"><img src=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("FileExplorer", "images/rename.png", true)), "html", null, true);
            echo "\" /></button>
                    ";
            // line 89
            if ((is_string($__internal_e4bbfd546b3ca00404bde22cf14c3cc1aaf647b84b4580cc31ac6315bd9cbef1 = $this->getAttribute($context["file"], "name", array())) && is_string($__internal_05aeb9e92625a98a9a140481e85c03aee87db63bb6e376e26b80d661f8e09d61 = ".zip") && ('' === $__internal_05aeb9e92625a98a9a140481e85c03aee87db63bb6e376e26b80d661f8e09d61 || $__internal_05aeb9e92625a98a9a140481e85c03aee87db63bb6e376e26b80d661f8e09d61 === substr($__internal_e4bbfd546b3ca00404bde22cf14c3cc1aaf647b84b4580cc31ac6315bd9cbef1, -strlen($__internal_05aeb9e92625a98a9a140481e85c03aee87db63bb6e376e26b80d661f8e09d61))))) {
                // line 90
                echo "                        <button class=\"imgbutton unzip\" onclick=\"unzip('";
                echo twig_escape_filter($this->env, strtr(call_user_func_array($this->env->getFunction('getLangText')->getCallable(), array("unzip-sure")), array("
" => "", "" => "")), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "path", array()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, (isset($context["root"]) ? $context["root"] : null), "html", null, true);
                echo "')\"><img src=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("FileExplorer", "images/unzip.png", true)), "html", null, true);
                echo "\" /></button>
                    ";
            }
            // line 92
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "        </div>
    </div>

    <!-- Defining root -->
    <script>
        var root = \"";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["root"]) ? $context["root"] : null), "html", null, true);
        echo "\";
    </script>

    <!-- The File Explorer Page Script -->
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("FileExplorer", "js/fileexplorer.js", true)), "html", null, true);
        echo "\"></script>

    <!-- The Upload Script -->
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getResource')->getCallable(), array("FileExplorer", "js/uploader.js", false)), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "Pages/FileExplorer/FileExplorer.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 106,  224 => 103,  217 => 99,  210 => 94,  203 => 92,  190 => 90,  188 => 89,  180 => 88,  169 => 87,  164 => 85,  160 => 84,  151 => 82,  147 => 81,  144 => 80,  140 => 79,  126 => 68,  113 => 62,  109 => 61,  97 => 54,  91 => 53,  85 => 50,  77 => 45,  71 => 42,  58 => 32,  52 => 29,  46 => 26,  19 => 1,);
    }
}
