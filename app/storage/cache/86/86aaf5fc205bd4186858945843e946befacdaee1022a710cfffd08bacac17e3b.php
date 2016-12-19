<?php

/* recipe/show.twig */
class __TwigTemplate_958ccff6a56186401eb30635d3c7210f353bb51723f419fa6a5fbf747a7c3399 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.twig", "recipe/show.twig", 1);
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
        echo "<div class=\"breadcrumb\">
    <ul>
        <li><a href=\"index.php\">TOP</a></li>
        <li><a href=\"search_result.php\">チョコレート</a></li>
        <li><a href=\"\">チョコレートクッキー</a></li>
    </ul>
</div>
<div class=\"tagList\">
    <h2>この動画につけられているタグ：</h2>
    <ul>
        <li><a href=\"\">チョコレート</a></li>
        <li><a href=\"\">簡単</a></li>
        <li><a href=\"\">安い</a></li>
    </ul>
</div>
<div class=\"contents\">
    <article>
        <section>
            <video controls autoplay>
                <source src=\"video/<?= \$clip ?>\">
                <p>動画を再生するには、videoタグをサポートしたブラウザが必要です。</p>
            </video>
            <div class=\"clipInfo\">
                <a href=\"\">
                    <div class=\"userIcon\"><img src=\"img/icon.png\" alt=\"\"></div>
                    <span class=\"userName\"><?= \$name ?></span>
                </a>
                <div class=\"play\">
                    <span class=\"count\"><?= \$views ?></span>
                    <span>views</span>
                </div>
                <div class=\"dlBtn\">
                    <a href=\"\">
                        <span>レシピを保存</span>
                    </a>
                </div>
                <div class=\"favoBtn\">
                    <a href=\"\">
                        <span>お気に入りに保存</span>
                    </a>
                </div>
                <div class=\"favoCount\">
                    <span>0</span>
                    <span>loves!</span>
                </div>
            </div>
        </section>
        <section class=\"recipeInfo\">
            <h2 class=\"ttl01\"><?= \$title ?></h2>
            <div class=\"description\">
                <?= \$desc ?>
            </div>
        </section>
        <section class=\"ingredient\">
            <h2 class=\"ttl02\">材料<span>（２人分）</span></h2>
            <dl>
                <dt>小麦粉</dt>
                <dd>110g</dd>
                <dt>バター</dt>
                <dd>80g</dd>
                <dt>砂糖</dt>
                <dd>90g</dd>
                <dt>卵</dt>
                <dd>1個</dd>
                <dt>アーモンドプードル</dt>
                <dd>30g(1袋)</dd>
                <dt>チョコチップ</dt>
                <dd>50g(1袋)</dd>
                <!-- \$i_name \$quantity -->
            </dl>
        </section>
        <section class=\"recipeStep\">
            <h2 class=\"ttl02\">作り方</h2>
            <ol>
                <li><span class=\"recipeTxt\">バターを室温で柔らかくしておく。(必ず室温です。レンジで溶かすと生地の固さや風味が変わってしまいます)</span><span class=\"recipeImg\"><img src=\"img/dummy.jpg\" alt=\"\"></span></li>
                <li><span class=\"recipeTxt\">室温で柔らかくしておいたバターと砂糖をよく混ぜる。</span><span class=\"recipeImg\"><img src=\"img/dummy.jpg\" alt=\"\"></span></li>
                <li><span class=\"recipeTxt\">10分くらいひたすら混ぜると白くフワフワのホイップのようになり、クッキーが美味しく仕上がります！</span><span class=\"recipeImg\"><img src=\"img/dummy.jpg\" alt=\"\"></span></li>
                <li><span class=\"recipeTxt\">卵を数回にわけて少しずつ加え 混ぜる。</span><span class=\"recipeImg\"><img src=\"img/dummy.jpg\" alt=\"\"></span></li>
                <li><span class=\"recipeTxt\">小麦粉、アーモンドプードルをふるい入れる。</span><span class=\"recipeImg\"><img src=\"img/dummy.jpg\" alt=\"\"></span></li>
                <li><span class=\"recipeTxt\">生地が混ざったらチョコチップを入れる。(違うトッピングでもok)</span><span class=\"recipeImg\"><img src=\"img/dummy.jpg\" alt=\"\"></span></li>
                <li><span class=\"recipeTxt\">焼くと倍くらいに広がるので、間隔をあけてスプーンで天板に落とす。（今回は5cmくらいにしました。）</span><span class=\"recipeImg\"><img src=\"img/dummy.jpg\" alt=\"\"></span></li>
                <li><span class=\"recipeTxt\">180度で15分焼く。(直径8cmくらいの仕上がりです。) 焼き色がついたら完成！</span><span class=\"recipeImg\"><img src=\"img/dummy.jpg\" alt=\"\"></span></li>
            </ol>
        </section>
        <section class=\"point\">
            <h2 class=\"ttl02\">コツ・ポイント</h2>
            <p><?= \$point ?></p>
        </section>
        <section class=\"mistake\">
            <h2 class=\"ttl02\">あいうえおさんの失敗談</h2>
            <p><?= \$mistake ?></p>
        </section>
        <section class=\"comment\">
            <h2 class=\"ttl02\">感想や質問(5件)</h2>
            <div class=\"commentList\">
                <ul>
                    <li>
                        <a href=\"mypage.php\">
                            <div class=\"userIcon\"><img src=\"img/icon.png\" alt=\"\"></div>
                            <span class=\"userName\">kakiku</span>
                        </a>
                        <a href=\"\" class=\"reply\">返信</a>
                        <p class=\"comment\">
                            <?= \$comment ?>
                        </p>
                    </li>
                    <li class=\"reply\">
                        <span class=\"replyTo\">＞＞kakikuさん</span>
                        <a href=\"mypage.php\">
                            <div class=\"userIcon\"><img src=\"img/icon.png\" alt=\"\"></div>
                            <span class=\"userName\">あいうえお</span>
                        </a>
                        <a href=\"\" class=\"reply\">返信</a>
                        <p class=\"comment\">
                            <?= \$comment ?>
                        </p>
                    </li><!--
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"mypage.php\">
\t\t\t\t\t\t\t\t<div class=\"userIcon\"><img src=\"img/icon.png\" alt=\"\"></div>
\t\t\t\t\t\t\t\t<span class=\"userName\">sashisu</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"reply\">返信</a>
\t\t\t\t\t\t\t<p class=\"comment\">
\t\t\t\t\t\t\t\tおいしかったでーーーー～～～～～～～～～～
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"mypage.php\">
\t\t\t\t\t\t\t\t<div class=\"userIcon\"><img src=\"img/icon.png\" alt=\"\"></div>
\t\t\t\t\t\t\t\t<span class=\"userName\">tachitsu</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"reply\">返信</a>
\t\t\t\t\t\t\t<p class=\"comment\">
\t\t\t\t\t\t\t\tおいしかったでーーーー～～～～～～～～～～
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"mypage.php\">
\t\t\t\t\t\t\t\t<div class=\"userIcon\"><img src=\"img/icon.png\" alt=\"\"></div>
\t\t\t\t\t\t\t\t<span class=\"userName\">naninu</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"reply\">返信</a>
\t\t\t\t\t\t\t<p class=\"comment\">
\t\t\t\t\t\t\t\tおいしかったでーーーー～～～～～～～～～～
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"mypage.php\">
\t\t\t\t\t\t\t\t<div class=\"userIcon\"><img src=\"img/icon.png\" alt=\"\"></div>
\t\t\t\t\t\t\t\t<span class=\"userName\">あいうえお</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"reply\">返信</a>
\t\t\t\t\t\t\t<p class=\"comment\">
\t\t\t\t\t\t\t\tおいしかったでーーーー～～～～～～～～～～
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</li>-->
                </ul>
            </div>
        </section>

        <!--\t\t\t<div class=\"tagList\">
                        <h2>この動画につけられているタグ：</h2>
                        <ul>
                            <li><a href=\"\">チョコレート</a></li>
                            <li><a href=\"\">簡単</a></li>
                            <li><a href=\"\">安い</a></li>
                        </ul>
                    </div>
                    <section class=\"clipList\">
                        <h2 class=\"ttl02\">あいうえおさんの他のクリップ</h2>
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
                                        <div class=\"clipTitle\">お菓子の作り方</div>
                                        <div class=\"clipName\">
                                            <p class=\"userIcon\"><img src=\"img/icon.png\" alt=\"\"></p>
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
                                            <p class=\"userIcon\"><img src=\"img/icon.png\" alt=\"\"></p>
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
                                            <p class=\"userIcon\"><img src=\"img/icon.png\" alt=\"\"></p>
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
                    </section>-->
    </article>
</div>
";
    }

    public function getTemplateName()
    {
        return "recipe/show.twig";
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
<div class=\"breadcrumb\">
    <ul>
        <li><a href=\"index.php\">TOP</a></li>
        <li><a href=\"search_result.php\">チョコレート</a></li>
        <li><a href=\"\">チョコレートクッキー</a></li>
    </ul>
</div>
<div class=\"tagList\">
    <h2>この動画につけられているタグ：</h2>
    <ul>
        <li><a href=\"\">チョコレート</a></li>
        <li><a href=\"\">簡単</a></li>
        <li><a href=\"\">安い</a></li>
    </ul>
</div>
<div class=\"contents\">
    <article>
        <section>
            <video controls autoplay>
                <source src=\"video/<?= \$clip ?>\">
                <p>動画を再生するには、videoタグをサポートしたブラウザが必要です。</p>
            </video>
            <div class=\"clipInfo\">
                <a href=\"\">
                    <div class=\"userIcon\"><img src=\"img/icon.png\" alt=\"\"></div>
                    <span class=\"userName\"><?= \$name ?></span>
                </a>
                <div class=\"play\">
                    <span class=\"count\"><?= \$views ?></span>
                    <span>views</span>
                </div>
                <div class=\"dlBtn\">
                    <a href=\"\">
                        <span>レシピを保存</span>
                    </a>
                </div>
                <div class=\"favoBtn\">
                    <a href=\"\">
                        <span>お気に入りに保存</span>
                    </a>
                </div>
                <div class=\"favoCount\">
                    <span>0</span>
                    <span>loves!</span>
                </div>
            </div>
        </section>
        <section class=\"recipeInfo\">
            <h2 class=\"ttl01\"><?= \$title ?></h2>
            <div class=\"description\">
                <?= \$desc ?>
            </div>
        </section>
        <section class=\"ingredient\">
            <h2 class=\"ttl02\">材料<span>（２人分）</span></h2>
            <dl>
                <dt>小麦粉</dt>
                <dd>110g</dd>
                <dt>バター</dt>
                <dd>80g</dd>
                <dt>砂糖</dt>
                <dd>90g</dd>
                <dt>卵</dt>
                <dd>1個</dd>
                <dt>アーモンドプードル</dt>
                <dd>30g(1袋)</dd>
                <dt>チョコチップ</dt>
                <dd>50g(1袋)</dd>
                <!-- \$i_name \$quantity -->
            </dl>
        </section>
        <section class=\"recipeStep\">
            <h2 class=\"ttl02\">作り方</h2>
            <ol>
                <li><span class=\"recipeTxt\">バターを室温で柔らかくしておく。(必ず室温です。レンジで溶かすと生地の固さや風味が変わってしまいます)</span><span class=\"recipeImg\"><img src=\"img/dummy.jpg\" alt=\"\"></span></li>
                <li><span class=\"recipeTxt\">室温で柔らかくしておいたバターと砂糖をよく混ぜる。</span><span class=\"recipeImg\"><img src=\"img/dummy.jpg\" alt=\"\"></span></li>
                <li><span class=\"recipeTxt\">10分くらいひたすら混ぜると白くフワフワのホイップのようになり、クッキーが美味しく仕上がります！</span><span class=\"recipeImg\"><img src=\"img/dummy.jpg\" alt=\"\"></span></li>
                <li><span class=\"recipeTxt\">卵を数回にわけて少しずつ加え 混ぜる。</span><span class=\"recipeImg\"><img src=\"img/dummy.jpg\" alt=\"\"></span></li>
                <li><span class=\"recipeTxt\">小麦粉、アーモンドプードルをふるい入れる。</span><span class=\"recipeImg\"><img src=\"img/dummy.jpg\" alt=\"\"></span></li>
                <li><span class=\"recipeTxt\">生地が混ざったらチョコチップを入れる。(違うトッピングでもok)</span><span class=\"recipeImg\"><img src=\"img/dummy.jpg\" alt=\"\"></span></li>
                <li><span class=\"recipeTxt\">焼くと倍くらいに広がるので、間隔をあけてスプーンで天板に落とす。（今回は5cmくらいにしました。）</span><span class=\"recipeImg\"><img src=\"img/dummy.jpg\" alt=\"\"></span></li>
                <li><span class=\"recipeTxt\">180度で15分焼く。(直径8cmくらいの仕上がりです。) 焼き色がついたら完成！</span><span class=\"recipeImg\"><img src=\"img/dummy.jpg\" alt=\"\"></span></li>
            </ol>
        </section>
        <section class=\"point\">
            <h2 class=\"ttl02\">コツ・ポイント</h2>
            <p><?= \$point ?></p>
        </section>
        <section class=\"mistake\">
            <h2 class=\"ttl02\">あいうえおさんの失敗談</h2>
            <p><?= \$mistake ?></p>
        </section>
        <section class=\"comment\">
            <h2 class=\"ttl02\">感想や質問(5件)</h2>
            <div class=\"commentList\">
                <ul>
                    <li>
                        <a href=\"mypage.php\">
                            <div class=\"userIcon\"><img src=\"img/icon.png\" alt=\"\"></div>
                            <span class=\"userName\">kakiku</span>
                        </a>
                        <a href=\"\" class=\"reply\">返信</a>
                        <p class=\"comment\">
                            <?= \$comment ?>
                        </p>
                    </li>
                    <li class=\"reply\">
                        <span class=\"replyTo\">＞＞kakikuさん</span>
                        <a href=\"mypage.php\">
                            <div class=\"userIcon\"><img src=\"img/icon.png\" alt=\"\"></div>
                            <span class=\"userName\">あいうえお</span>
                        </a>
                        <a href=\"\" class=\"reply\">返信</a>
                        <p class=\"comment\">
                            <?= \$comment ?>
                        </p>
                    </li><!--
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"mypage.php\">
\t\t\t\t\t\t\t\t<div class=\"userIcon\"><img src=\"img/icon.png\" alt=\"\"></div>
\t\t\t\t\t\t\t\t<span class=\"userName\">sashisu</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"reply\">返信</a>
\t\t\t\t\t\t\t<p class=\"comment\">
\t\t\t\t\t\t\t\tおいしかったでーーーー～～～～～～～～～～
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"mypage.php\">
\t\t\t\t\t\t\t\t<div class=\"userIcon\"><img src=\"img/icon.png\" alt=\"\"></div>
\t\t\t\t\t\t\t\t<span class=\"userName\">tachitsu</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"reply\">返信</a>
\t\t\t\t\t\t\t<p class=\"comment\">
\t\t\t\t\t\t\t\tおいしかったでーーーー～～～～～～～～～～
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"mypage.php\">
\t\t\t\t\t\t\t\t<div class=\"userIcon\"><img src=\"img/icon.png\" alt=\"\"></div>
\t\t\t\t\t\t\t\t<span class=\"userName\">naninu</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"reply\">返信</a>
\t\t\t\t\t\t\t<p class=\"comment\">
\t\t\t\t\t\t\t\tおいしかったでーーーー～～～～～～～～～～
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"mypage.php\">
\t\t\t\t\t\t\t\t<div class=\"userIcon\"><img src=\"img/icon.png\" alt=\"\"></div>
\t\t\t\t\t\t\t\t<span class=\"userName\">あいうえお</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"reply\">返信</a>
\t\t\t\t\t\t\t<p class=\"comment\">
\t\t\t\t\t\t\t\tおいしかったでーーーー～～～～～～～～～～
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</li>-->
                </ul>
            </div>
        </section>

        <!--\t\t\t<div class=\"tagList\">
                        <h2>この動画につけられているタグ：</h2>
                        <ul>
                            <li><a href=\"\">チョコレート</a></li>
                            <li><a href=\"\">簡単</a></li>
                            <li><a href=\"\">安い</a></li>
                        </ul>
                    </div>
                    <section class=\"clipList\">
                        <h2 class=\"ttl02\">あいうえおさんの他のクリップ</h2>
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
                                        <div class=\"clipTitle\">お菓子の作り方</div>
                                        <div class=\"clipName\">
                                            <p class=\"userIcon\"><img src=\"img/icon.png\" alt=\"\"></p>
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
                                            <p class=\"userIcon\"><img src=\"img/icon.png\" alt=\"\"></p>
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
                                            <p class=\"userIcon\"><img src=\"img/icon.png\" alt=\"\"></p>
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
                    </section>-->
    </article>
</div>
{% endblock %}", "recipe/show.twig", "/Applications/XAMPP/xamppfiles/htdocs/candy/app/views/recipe/show.twig");
    }
}
