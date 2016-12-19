<?php

/* master.twig */
class __TwigTemplate_07d84c907e0b680279e590b7570383ba5b80eeb036820b386888a82d1bb8c0a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html ng-app>
<head>
    <title>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["meta"]) ? $context["meta"] : null));
        foreach ($context['_seq'] as $context["metaname"] => $context["metavalue"]) {
            // line 9
            echo "        <meta name=\"";
            echo twig_escape_filter($this->env, $context["metaname"], "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $context["metavalue"], "html", null, true);
            echo "\"/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['metaname'], $context['metavalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
    <!-- publish javascript variable -->
    <script>
        var global = ";
        // line 14
        echo twig_jsonencode_filter((isset($context["global"]) ? $context["global"] : null));
        echo "
    </script>

</head>
<body>
<!-- Include registered css -->
";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["css"]) ? $context["css"] : null), "external", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["cssfile"]) {
            // line 21
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $context["cssfile"], "html", null, true);
            echo "\"/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cssfile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["css"]) ? $context["css"] : null), "internal", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["cssfile"]) {
            // line 25
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["assetUrl"]) ? $context["assetUrl"] : null), "html", null, true);
            echo "css/";
            echo twig_escape_filter($this->env, $context["cssfile"], "html", null, true);
            echo "\"/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cssfile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
";
        // line 28
        $this->loadTemplate("include/header.twig", "master.twig", 28)->display($context);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "
<!-- Include registered javascript -->
";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["js"]) ? $context["js"] : null), "external", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["jsfile"]) {
            // line 34
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $context["jsfile"], "html", null, true);
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jsfile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["js"]) ? $context["js"] : null), "internal", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["jsfile"]) {
            // line 38
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["assetUrl"]) ? $context["assetUrl"] : null), "html", null, true);
            echo "js/";
            echo twig_escape_filter($this->env, $context["jsfile"], "html", null, true);
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jsfile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
";
        // line 41
        $this->loadTemplate("include/footer.twig", "master.twig", 41)->display($context);
        // line 42
        echo "
</body>
</html>";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "master.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 30,  142 => 42,  140 => 41,  137 => 40,  126 => 38,  122 => 37,  119 => 36,  110 => 34,  106 => 33,  102 => 31,  100 => 30,  97 => 29,  95 => 28,  92 => 27,  81 => 25,  77 => 24,  74 => 23,  65 => 21,  61 => 20,  52 => 14,  47 => 11,  36 => 9,  32 => 8,  25 => 4,  20 => 1,);
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
<html ng-app>
<head>
    <title>{{ title }}</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    {% for metaname, metavalue in meta %}
        <meta name=\"{{ metaname }}\" value=\"{{ metavalue }}\"/>
    {% endfor %}

    <!-- publish javascript variable -->
    <script>
        var global = {{ global|json_encode|raw }}
    </script>

</head>
<body>
<!-- Include registered css -->
{% for cssfile in css.external %}
    <link rel=\"stylesheet\" href=\"{{ cssfile }}\"/>
{% endfor %}

{% for cssfile in css.internal %}
    <link rel=\"stylesheet\" href=\"{{ assetUrl }}css/{{ cssfile }}\"/>
{% endfor %}

{% include 'include/header.twig' %}

{% block body %}{% endblock %}

<!-- Include registered javascript -->
{% for jsfile in js.external %}
    <script src=\"{{ jsfile }}\"></script>
{% endfor %}

{% for jsfile in js.internal %}
    <script src=\"{{ assetUrl }}js/{{ jsfile }}\"></script>
{% endfor %}

{% include 'include/footer.twig' %}

</body>
</html>", "master.twig", "/Applications/XAMPP/xamppfiles/htdocs/candy/app/views/master.twig");
    }
}
