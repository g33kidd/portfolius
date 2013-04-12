<?php

/* kiddLayout/index.html */
class __TwigTemplate_d7d4ee1b8e0f66f50974dd515c9f4527 extends Twig_Template
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
        echo "<!doctype html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\" />
\t<title>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo " &mdash; ";
        echo twig_escape_filter($this->env, (isset($context["subtitle"]) ? $context["subtitle"] : null), "html", null, true);
        echo "</title>
\t<base href=\"design/theme/kiddLayout/\">
\t<link rel=\"stylesheet\" href=\"style.css\" type=\"text/css\" media=\"screen\" title=\"no title\" charset=\"utf-8\"/>
</head>
<body>
\t
\t<div class=\"container\">
\t\t<div class=\"sitetitle left\">";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</div>
\t\t<div class=\"subtitle left\">";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["subtitle"]) ? $context["subtitle"] : null), "html", null, true);
        echo "</div>
\t\t<div class=\"clear\"></div>
\t</div>
\t
\t<ul>

\t\t";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contact"]) ? $context["contact"] : null));
        foreach ($context['_seq'] as $context["types"] => $context["infos"]) {
            // line 20
            echo "\t\t    <li>";
            echo twig_escape_filter($this->env, (isset($context["types"]) ? $context["types"] : null), "html", null, true);
            echo "</li>
\t\t  ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["infos"]) ? $context["infos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                // line 22
                echo "\t\t      <ul><li>";
                echo twig_escape_filter($this->env, (isset($context["info"]) ? $context["info"] : null), "html", null, true);
                echo "</li></ul>
\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 24
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['types'], $context['infos'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 25
        echo "
\t</ul>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "kiddLayout/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 25,  72 => 24,  63 => 22,  59 => 21,  54 => 20,  50 => 19,  41 => 13,  37 => 12,  25 => 5,  19 => 1,);
    }
}
