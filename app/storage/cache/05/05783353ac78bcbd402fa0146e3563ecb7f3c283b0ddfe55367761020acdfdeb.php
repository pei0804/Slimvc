<?php

/* index.twig */
class __TwigTemplate_e4751abc38f058eb310f81e822e972d8d3ba4681162e445dac3d8e484b2f3699 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.twig", "index.twig", 1);
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
        echo "    <div id=\"wrapper\">
        <div class=\"contents\">
            <div class=\"mainVisual\">
                <div class=\"searchBox\">
                    <h2>作りたいものは・・・</h2>
                    <!-- <div>
                        <a href=\"#page1\">お菓子の種類</a>
                        <div data-role=\"page\" id=\"page1\"></div>
                        <span class=\"cross\">×</span>
                        <a href=\"#page2\">お菓子の種類</a>
                        <div data-role=\"page\" id=\"page2\"></div>
                        <span class=\"cross\">×</span>
                        <a href=\"#page3\">お菓子の種類</a>
                        <div data-role=\"page\" id=\"page3\"></div>
                        <span class=\"cross\">×</span>
                        <a href=\"#page4\">お菓子の種類</a>
                        <div data-role=\"page\" id=\"page4\"></div>
                        <span class=\"cross\">×</span>
                    </div> -->
                    <div id=\"tabs\" data-role=\"tabs\">
                        <!--2タブリストを準備-->
                        <div data-role=\"navbar\">
                            <ul>
                                <li><a href=\"#candy\" class=\"ui-btn-active\">お菓子の種類で探す</a></li>
                                <li><a href=\"#candyIgd\">材料で探す</a></li>
                                <li><a href=\"#candyCategory\">カテゴリから探す</a></li>
                                <li><a href=\"#candyScene\">シーンで探す</a></li>
                            </ul>
                        </div>
                        <!--1パネル（コンテンツ領域）を準備-->
                        <div id=\"candy\" class=\"ui-field-contain\">
                            <!--ラジオボタンで単一選択ボタンを作成-->
                            <div class=\"ui-field-contain\">
                                <fieldset data-role=\"controlgroup\">
                                    <input id=\"1\" name=\"ctgr1\" type=\"radio\" value=\"\">
                                    <label for=\"1\">ケーキ</label>
                                    <input id=\"2\" name=\"ctgr1\" type=\"radio\" value=\"\">
                                    <label for=\"2\">クッキー</label>
                                    <input id=\"3\" name=\"ctgr1\" type=\"radio\" value=\"\">
                                    <label for=\"3\">ゼリー</label>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <article>
                <section class=\"hotClip\">
                    <h2 class=\"ttl02\">最近人気のクリップ</h2>
                    <div class=\"videoBox\">
                        <video autoplay>
                            <source src=\"video/sample.mp4\" preload>
                            <p>動画を再生するには、videoタグをサポートしたブラウザが必要です。</p>
                        </video>
                        <div class=\"clipInfo\">
                            <div class=\"clipTitle\">お菓子の作り方</div>
                            <div class=\"clipName\">
                                <a href=\"mypage.php\">
                                    <p class=\"userIcon\"><img src=\"assets/img/icon.png\" alt=\"\"></p>
                                    <span class=\"userName\">あいうえお</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=\"newClip clipList\">
                    <h2 class=\"ttl02\">新着クリップ</h2>
                    <ul>
                        <li>
                            <a href=\"recipe.php\">
                                <div class=\"videoBox\">
                                    <video>
                                        <source src=\"video/sample.mp4\">
                                        <p>動画を再生するには、videoタグをサポートしたブラウザが必要です。</p>
                                    </video>
                                    <div class=\"favoCount\">
                                        <span>♡99,999</span>
                                    </div>
                                    <div class=\"time\">
                                        <span>2:10</span>
                                    </div>
                                </div>
                                <div class=\"clipInfo\">
                                    <div class=\"clipTitle\">お菓子の作り方お菓子の作り方お菓子の・・・</div>
                                    <div class=\"clipName\">
                                        <p class=\"userIcon\"><img src=\"assets/img/icon.png\" alt=\"\"></p>
                                        <span class=\"userName\">あいうえお</span>
                                    </div>
                                    <div class=\"play\">
                                        <span class=\"count\">99,999</span>
                                        <span>views</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"recipe.php\">
                                <div class=\"videoBox\">
                                    <video>
                                        <source src=\"video/sample.mp4\">
                                        <p>動画を再生するには、videoタグをサポートしたブラウザが必要です。</p>
                                    </video>
                                    <div class=\"favoCount\">
                                        <span>♡99,999</span>
                                    </div>
                                    <div class=\"time\">
                                        <span>2:10</span>
                                    </div>
                                </div>
                                <div class=\"clipInfo\">
                                    <div class=\"clipTitle\">お菓子の作り方</div>
                                    <div class=\"clipName\">
                                        <p class=\"userIcon\"><img src=\"assets/img/icon.png\" alt=\"\"></p>
                                        <span class=\"userName\">あいうえお</span>
                                    </div>
                                    <div class=\"play\">
                                        <span class=\"count\">99,999</span>
                                        <span>views</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"recipe.php\">
                                <div class=\"videoBox\">
                                    <video>
                                        <source src=\"video/sample.mp4\">
                                        <p>動画を再生するには、videoタグをサポートしたブラウザが必要です。</p>
                                    </video>
                                    <div class=\"favoCount\">
                                        <span>♡99,999</span>
                                    </div>
                                    <div class=\"time\">
                                        <span>2:10</span>
                                    </div>
                                </div>
                                <div class=\"clipInfo\">
                                    <div class=\"clipTitle\">お菓子の作り方</div>
                                    <div class=\"clipName\">
                                        <p class=\"userIcon\"><img src=\"assets/img/icon.png\" alt=\"\"></p>
                                        <span class=\"userName\">あいうえお</span>
                                    </div>
                                    <div class=\"play\">
                                        <span class=\"count\">99,999</span>
                                        <span>views</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"recipe.php\">
                                <div class=\"videoBox\">
                                    <video>
                                        <source src=\"video/sample.mp4\">
                                        <p>動画を再生するには、videoタグをサポートしたブラウザが必要です。</p>
                                    </video>
                                    <div class=\"favoCount\">
                                        <span>♡99,999</span>
                                    </div>
                                    <div class=\"time\">
                                        <span>2:10</span>
                                    </div>
                                </div>
                                <div class=\"clipInfo\">
                                    <div class=\"clipTitle\">お菓子の作り方</div>
                                    <div class=\"clipName\">
                                        <p class=\"userIcon\"><img src=\"assets/img/icon.png\" alt=\"\"></p>
                                        <span class=\"userName\">あいうえお</span>
                                    </div>
                                    <div class=\"play\">
                                        <span class=\"count\">99,999</span>
                                        <span>views</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"recipe.php\">
                                <div class=\"videoBox\">
                                    <video>
                                        <source src=\"video/sample.mp4\">
                                        <p>動画を再生するには、videoタグをサポートしたブラウザが必要です。</p>
                                    </video>
                                    <div class=\"favoCount\">
                                        <span>♡99,999</span>
                                    </div>
                                    <div class=\"time\">
                                        <span>2:10</span>
                                    </div>
                                </div>
                                <div class=\"clipInfo\">
                                    <div class=\"clipTitle\">お菓子の作り方</div>
                                    <div class=\"clipName\">
                                        <p class=\"userIcon\"><img src=\"assets/img/icon.png\" alt=\"\"></p>
                                        <span class=\"userName\">あいうえお</span>
                                    </div>
                                    <div class=\"play\">
                                        <span class=\"count\">99,999</span>
                                        <span>views</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </section>
            </article>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
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
    <div id=\"wrapper\">
        <div class=\"contents\">
            <div class=\"mainVisual\">
                <div class=\"searchBox\">
                    <h2>作りたいものは・・・</h2>
                    <!-- <div>
                        <a href=\"#page1\">お菓子の種類</a>
                        <div data-role=\"page\" id=\"page1\"></div>
                        <span class=\"cross\">×</span>
                        <a href=\"#page2\">お菓子の種類</a>
                        <div data-role=\"page\" id=\"page2\"></div>
                        <span class=\"cross\">×</span>
                        <a href=\"#page3\">お菓子の種類</a>
                        <div data-role=\"page\" id=\"page3\"></div>
                        <span class=\"cross\">×</span>
                        <a href=\"#page4\">お菓子の種類</a>
                        <div data-role=\"page\" id=\"page4\"></div>
                        <span class=\"cross\">×</span>
                    </div> -->
                    <div id=\"tabs\" data-role=\"tabs\">
                        <!--2タブリストを準備-->
                        <div data-role=\"navbar\">
                            <ul>
                                <li><a href=\"#candy\" class=\"ui-btn-active\">お菓子の種類で探す</a></li>
                                <li><a href=\"#candyIgd\">材料で探す</a></li>
                                <li><a href=\"#candyCategory\">カテゴリから探す</a></li>
                                <li><a href=\"#candyScene\">シーンで探す</a></li>
                            </ul>
                        </div>
                        <!--1パネル（コンテンツ領域）を準備-->
                        <div id=\"candy\" class=\"ui-field-contain\">
                            <!--ラジオボタンで単一選択ボタンを作成-->
                            <div class=\"ui-field-contain\">
                                <fieldset data-role=\"controlgroup\">
                                    <input id=\"1\" name=\"ctgr1\" type=\"radio\" value=\"\">
                                    <label for=\"1\">ケーキ</label>
                                    <input id=\"2\" name=\"ctgr1\" type=\"radio\" value=\"\">
                                    <label for=\"2\">クッキー</label>
                                    <input id=\"3\" name=\"ctgr1\" type=\"radio\" value=\"\">
                                    <label for=\"3\">ゼリー</label>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <article>
                <section class=\"hotClip\">
                    <h2 class=\"ttl02\">最近人気のクリップ</h2>
                    <div class=\"videoBox\">
                        <video autoplay>
                            <source src=\"video/sample.mp4\" preload>
                            <p>動画を再生するには、videoタグをサポートしたブラウザが必要です。</p>
                        </video>
                        <div class=\"clipInfo\">
                            <div class=\"clipTitle\">お菓子の作り方</div>
                            <div class=\"clipName\">
                                <a href=\"mypage.php\">
                                    <p class=\"userIcon\"><img src=\"assets/img/icon.png\" alt=\"\"></p>
                                    <span class=\"userName\">あいうえお</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=\"newClip clipList\">
                    <h2 class=\"ttl02\">新着クリップ</h2>
                    <ul>
                        <li>
                            <a href=\"recipe.php\">
                                <div class=\"videoBox\">
                                    <video>
                                        <source src=\"video/sample.mp4\">
                                        <p>動画を再生するには、videoタグをサポートしたブラウザが必要です。</p>
                                    </video>
                                    <div class=\"favoCount\">
                                        <span>♡99,999</span>
                                    </div>
                                    <div class=\"time\">
                                        <span>2:10</span>
                                    </div>
                                </div>
                                <div class=\"clipInfo\">
                                    <div class=\"clipTitle\">お菓子の作り方お菓子の作り方お菓子の・・・</div>
                                    <div class=\"clipName\">
                                        <p class=\"userIcon\"><img src=\"assets/img/icon.png\" alt=\"\"></p>
                                        <span class=\"userName\">あいうえお</span>
                                    </div>
                                    <div class=\"play\">
                                        <span class=\"count\">99,999</span>
                                        <span>views</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"recipe.php\">
                                <div class=\"videoBox\">
                                    <video>
                                        <source src=\"video/sample.mp4\">
                                        <p>動画を再生するには、videoタグをサポートしたブラウザが必要です。</p>
                                    </video>
                                    <div class=\"favoCount\">
                                        <span>♡99,999</span>
                                    </div>
                                    <div class=\"time\">
                                        <span>2:10</span>
                                    </div>
                                </div>
                                <div class=\"clipInfo\">
                                    <div class=\"clipTitle\">お菓子の作り方</div>
                                    <div class=\"clipName\">
                                        <p class=\"userIcon\"><img src=\"assets/img/icon.png\" alt=\"\"></p>
                                        <span class=\"userName\">あいうえお</span>
                                    </div>
                                    <div class=\"play\">
                                        <span class=\"count\">99,999</span>
                                        <span>views</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"recipe.php\">
                                <div class=\"videoBox\">
                                    <video>
                                        <source src=\"video/sample.mp4\">
                                        <p>動画を再生するには、videoタグをサポートしたブラウザが必要です。</p>
                                    </video>
                                    <div class=\"favoCount\">
                                        <span>♡99,999</span>
                                    </div>
                                    <div class=\"time\">
                                        <span>2:10</span>
                                    </div>
                                </div>
                                <div class=\"clipInfo\">
                                    <div class=\"clipTitle\">お菓子の作り方</div>
                                    <div class=\"clipName\">
                                        <p class=\"userIcon\"><img src=\"assets/img/icon.png\" alt=\"\"></p>
                                        <span class=\"userName\">あいうえお</span>
                                    </div>
                                    <div class=\"play\">
                                        <span class=\"count\">99,999</span>
                                        <span>views</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"recipe.php\">
                                <div class=\"videoBox\">
                                    <video>
                                        <source src=\"video/sample.mp4\">
                                        <p>動画を再生するには、videoタグをサポートしたブラウザが必要です。</p>
                                    </video>
                                    <div class=\"favoCount\">
                                        <span>♡99,999</span>
                                    </div>
                                    <div class=\"time\">
                                        <span>2:10</span>
                                    </div>
                                </div>
                                <div class=\"clipInfo\">
                                    <div class=\"clipTitle\">お菓子の作り方</div>
                                    <div class=\"clipName\">
                                        <p class=\"userIcon\"><img src=\"assets/img/icon.png\" alt=\"\"></p>
                                        <span class=\"userName\">あいうえお</span>
                                    </div>
                                    <div class=\"play\">
                                        <span class=\"count\">99,999</span>
                                        <span>views</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"recipe.php\">
                                <div class=\"videoBox\">
                                    <video>
                                        <source src=\"video/sample.mp4\">
                                        <p>動画を再生するには、videoタグをサポートしたブラウザが必要です。</p>
                                    </video>
                                    <div class=\"favoCount\">
                                        <span>♡99,999</span>
                                    </div>
                                    <div class=\"time\">
                                        <span>2:10</span>
                                    </div>
                                </div>
                                <div class=\"clipInfo\">
                                    <div class=\"clipTitle\">お菓子の作り方</div>
                                    <div class=\"clipName\">
                                        <p class=\"userIcon\"><img src=\"assets/img/icon.png\" alt=\"\"></p>
                                        <span class=\"userName\">あいうえお</span>
                                    </div>
                                    <div class=\"play\">
                                        <span class=\"count\">99,999</span>
                                        <span>views</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </section>
            </article>
        </div>
    </div>
{% endblock %}
", "index.twig", "/Applications/XAMPP/xamppfiles/htdocs/candy/app/views/index.twig");
    }
}
