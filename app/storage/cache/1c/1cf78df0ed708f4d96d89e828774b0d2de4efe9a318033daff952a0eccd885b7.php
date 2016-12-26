<?php

/* recipe/input.twig */
class __TwigTemplate_2f56892b77f2afa47211b476a0b49de8a19f3d40570e8d5f92c5f6136401ad4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.twig", "recipe/input.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "master.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"contents\">
    <article>
        <section>
            <h2 class=\"ttl02\">レシピ入力画面</h2>
            <form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->site("recipe"), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                <table class=\"tblStyle01\">
                    <tr class=\"recipeTitle\">
                        <th>レシピタイトル</th>
                        <td><input type=\"text\" name=\"title\" value=\"\"></td>
                    </tr>
                    <tr class=\"recipeVideo\">
                        <th>動画</th>
                        <td><input type=\"file\" name=\"clip\" accept=\"video/*\"></td>
                    </tr>
                    <tr class=\"recipeExplain\">
                        <th>簡単な説明</th>
                        <td><textarea name=\"explain\" rows=\"3\"></textarea></td>
                    </tr>
                    <tr class=\"recipeIngredient\">
                        <th>材料</th>
                        <td>
                            <input type=\"text\" name=\"ingredient\" placeholder=\"何人分\">
                            <dl>
                                <dt><input type=\"text\" name=\"name\" value=\"\" placeholder=\"材料\"></dt>
                                <dd><input type=\"text\" name=\"quantity\" value=\"\" placeholder=\"分量\"></dd>
                                <dd><input type=\"button\" name=\"\" value=\"↑\"><input type=\"button\" name=\"\" value=\"↓\"></dd>
                                <dt><input type=\"text\" name=\"name\" value=\"\" placeholder=\"材料\"></dt>
                                <dd><input type=\"text\" name=\"quantity\" value=\"\" placeholder=\"分量\"></dd>
                                <dd><input type=\"button\" name=\"\" value=\"↑\"><input type=\"button\" name=\"\" value=\"↓\"></dd>
                                <dt><input type=\"text\" name=\"name\" value=\"\" placeholder=\"材料\"></dt>
                                <dd><input type=\"text\" name=\"quantity\" value=\"\" placeholder=\"分量\"></dd>
                                <dd><input type=\"button\" name=\"\" value=\"↑\"><input type=\"button\" name=\"\" value=\"↓\"></dd>
                            </dl>
                        </td>
                    </tr>
                    <tr class=\"recipePoint\">
                        <th>コツ</th>
                        <td><input type=\"text\" name=\"point\" value=\"\"></td>
                    </tr>
                    <tr class=\"recipeMistake\">
                        <th>失敗談</th>
                        <td><input type=\"text\" name=\"mistake\" value=\"\"></td>
                    </tr>
                    <tr>
                        <td>
                            <input type=\"submit\" name=\"登録\">
                        </td>
                    </tr>
                </table>
                <div class=\"btmnavi\">
                    <ul>
                        <li><a href=\"\">キャンセル</a></li>
                        <li><a href=\"\">保存</a></li>
                    </ul>
                </div>
            </form>
        </section>
    </article>
</div>
";
    }

    public function getTemplateName()
    {
        return "recipe/input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'master.twig' %}

{% block body %}
<div class=\"contents\">
    <article>
        <section>
            <h2 class=\"ttl02\">レシピ入力画面</h2>
            <form action=\"{{siteUrl('recipe')}}\" method=\"post\" enctype=\"multipart/form-data\">
                <table class=\"tblStyle01\">
                    <tr class=\"recipeTitle\">
                        <th>レシピタイトル</th>
                        <td><input type=\"text\" name=\"title\" value=\"\"></td>
                    </tr>
                    <tr class=\"recipeVideo\">
                        <th>動画</th>
                        <td><input type=\"file\" name=\"clip\" accept=\"video/*\"></td>
                    </tr>
                    <tr class=\"recipeExplain\">
                        <th>簡単な説明</th>
                        <td><textarea name=\"explain\" rows=\"3\"></textarea></td>
                    </tr>
                    <tr class=\"recipeIngredient\">
                        <th>材料</th>
                        <td>
                            <input type=\"text\" name=\"ingredient\" placeholder=\"何人分\">
                            <dl>
                                <dt><input type=\"text\" name=\"name\" value=\"\" placeholder=\"材料\"></dt>
                                <dd><input type=\"text\" name=\"quantity\" value=\"\" placeholder=\"分量\"></dd>
                                <dd><input type=\"button\" name=\"\" value=\"↑\"><input type=\"button\" name=\"\" value=\"↓\"></dd>
                                <dt><input type=\"text\" name=\"name\" value=\"\" placeholder=\"材料\"></dt>
                                <dd><input type=\"text\" name=\"quantity\" value=\"\" placeholder=\"分量\"></dd>
                                <dd><input type=\"button\" name=\"\" value=\"↑\"><input type=\"button\" name=\"\" value=\"↓\"></dd>
                                <dt><input type=\"text\" name=\"name\" value=\"\" placeholder=\"材料\"></dt>
                                <dd><input type=\"text\" name=\"quantity\" value=\"\" placeholder=\"分量\"></dd>
                                <dd><input type=\"button\" name=\"\" value=\"↑\"><input type=\"button\" name=\"\" value=\"↓\"></dd>
                            </dl>
                        </td>
                    </tr>
                    <tr class=\"recipePoint\">
                        <th>コツ</th>
                        <td><input type=\"text\" name=\"point\" value=\"\"></td>
                    </tr>
                    <tr class=\"recipeMistake\">
                        <th>失敗談</th>
                        <td><input type=\"text\" name=\"mistake\" value=\"\"></td>
                    </tr>
                    <tr>
                        <td>
                            <input type=\"submit\" name=\"登録\">
                        </td>
                    </tr>
                </table>
                <div class=\"btmnavi\">
                    <ul>
                        <li><a href=\"\">キャンセル</a></li>
                        <li><a href=\"\">保存</a></li>
                    </ul>
                </div>
            </form>
        </section>
    </article>
</div>
{% endblock %}", "recipe/input.twig", "/Applications/XAMPP/xamppfiles/htdocs/candy/app/views/recipe/input.twig");
    }
}
