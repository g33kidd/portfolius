<?php

/* 3/1/index.html */
class __TwigTemplate_665626d481396d7664103a0a2788d91a extends Twig_Template
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
        echo "<!DOCTYPE html>
<!-- HTML Resume Template from http://www.alexking.org/software/resume/ -->
<html>
<head>
<title>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo " &mdash; ";
        echo twig_escape_filter($this->env, (isset($context["subtitle"]) ? $context["subtitle"] : null), "html", null, true);
        echo "</title>
<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
<style type=\"text/css\" media=\"screen\">
\t@import url(http://alexking.org/site/projects/html-resume-template/demo/resume.php?output=css_screen);
</style>
<link rel=\"stylesheet\" type=\"text/css\" media=\"print\" href=\"http://alexking.org/site/projects/html-resume-template/demo/resume.php?output=css_print\" />
</head>

<body>

<h1>";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</h1>

<p id=\"bio_left\">
";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "phone"), "html", null, true);
        echo "<br /><a href=\"mailto:";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "email"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "email"), "html", null, true);
        echo "</a>
</p>
<p id=\"bio_right\">
";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "street"), "html", null, true);
        echo "<br />";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "city"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "state"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["address"]) ? $context["address"] : null), "zip"), "html", null, true);
        echo "</p>

<h2>OBJECTIVE</h2>
<p class=\"data\">";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["objective"]) ? $context["objective"] : null), "html", null, true);
        echo "</p>

<p id=\"references\">References available upon request.</p>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "3/1/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 24,  56 => 21,  46 => 18,  40 => 15,  25 => 5,  19 => 1,);
    }
}
