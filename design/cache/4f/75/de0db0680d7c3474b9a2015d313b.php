<?php

/* kiddLayout/v1/index.html */
class __TwigTemplate_4f75de0db0680d7c3474b9a2015d313b extends Twig_Template
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
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\" />
\t<title>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo " &mdash; ";
        echo twig_escape_filter($this->env, (isset($context["subtitle"]) ? $context["subtitle"] : null), "html", null, true);
        echo "</title>
\t<link rel=\"stylesheet\" href=\"style.css\" type=\"text/css\"/>
</head>
<body>
\t
\t<div class=\"container\">
\t\t<div class=\"sitetitle left\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</div>
\t\t<div class=\"subtitle left\">";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["subtitle"]) ? $context["subtitle"] : null), "html", null, true);
        echo "</div>
\t\t<div class=\"clear\"></div>
\t\t<br>
\t\t<br>
\t\t<h3>Contact info!</h3>
\t\t<ul>
\t\t\t
\t\t\t";
        // line 20
        echo "\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contact"]) ? $context["contact"] : null));
        foreach ($context['_seq'] as $context["types"] => $context["infos"]) {
            // line 21
            echo "\t\t\t\t    <li>";
            echo twig_escape_filter($this->env, (isset($context["types"]) ? $context["types"] : null), "html");
            echo "</li>
\t\t\t\t  ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["infos"]) ? $context["infos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                // line 23
                echo "\t\t\t\t      <ul><li>";
                echo twig_escape_filter($this->env, (isset($context["info"]) ? $context["info"] : null), "html");
                echo "</li></ul>
\t\t\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 25
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['types'], $context['infos'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 26
        echo "\t\t\t";
        // line 27
        echo "
\t\t</ul>
\t\t<hr>
\t\t<h3>Social media!</h3>
\t\t<ul>
\t\t\t";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["social"]) ? $context["social"] : null));
        foreach ($context['_seq'] as $context["net"] => $context["link"]) {
            // line 33
            echo "\t\t\t\t<li><a href=\"http://";
            echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
            echo "\" target=\"_new\">";
            echo twig_escape_filter($this->env, (isset($context["net"]) ? $context["net"] : null), "html", null, true);
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['net'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 35
        echo "\t\t</ul>
\t
\t</div>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "kiddLayout/v1/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 35,  92 => 33,  88 => 32,  81 => 27,  79 => 26,  73 => 25,  64 => 23,  60 => 22,  55 => 21,  50 => 20,  40 => 12,  36 => 11,  25 => 5,  19 => 1,);
    }
}
