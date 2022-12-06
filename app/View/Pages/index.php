<!-- BaserPageTagBegin -->
<?php $this->BcBaser->setTitle('トップページ') ?>
<?php $this->BcBaser->setDescription('') ?>
<?php $this->BcBaser->setPageEditLink(1) ?>
<!-- BaserPageTagEnd -->

<h2>baserCMSテーマ制作チュートリアル 管理画面で入れたやーつ</h2>

<p>これは、 baserCMSテーマ制作チュートリアルのお題となるHTMLです。<br />
このチュートリアルを最後まで学習すると、静的HTMLのWebサイトを baserCMS 上で動作させるためのポイントを学習することができます。みなさんのWeb制作にお役立てください。</p>

<p>添付のPDFファイルを読み進めながら、実際に手を動かしていきますが、実際にテンプレートに記述するタグ（関数）は、下記に記載しているものからコピーすると便利です。</p>

<h3>CSSタグの書き換え</h3>

<pre>
<code>&lt;!-- /app/theme/webroot/theme/corp/Layouts/default.php --&gt;
&lt;?php $this-&gt;BcBaser-&gt;css(&#39;スタイルシート名&#39;) ?&gt;</code></pre>

<h4>css部分の書き換え例</h4>

<pre>
<code>&lt;!-- /app/theme/webroot/theme/corp/Layouts/default.php --&gt;
&lt;?php $this-&gt;BcBaser-&gt;css(&#39;style&#39;) ?&gt;
&lt;?php $this-&gt;BcBaser-&gt;css(&#39;editor&#39;) ?&gt;</code></pre>

<h4>複数ファイルを１行で指定する例</h4>

<pre>
<code>&lt;?php $this-&gt;BcBaser-&gt;css([&#39;style&#39;, &#39;editor&#39;]) ?&gt;</code></pre>

<p>※ CSS直下の場合は、ファイル名のみで可、拡張子は省略可能<br />
※ テーマとして配布しない場合は、関数への書き換え不要ですが、スラッシュから始まる絶対パスの記述に変える必要があります。</p>

<h4>themeUrl 関数を利用する場合</h4>

<pre>
<code>&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;&lt;?php $this-&gt;BcBaser-&gt;themeUrl() ?&gt;css/style.css&quot; /&gt;</code></pre>

<h3>script タグの書き換え</h3>

<h4>javascript 部分の書き換え例</h4>

<pre>
<code>&lt;!-- /app/theme/webroot/theme/corp/Layouts/default.php --&gt;
&lt;?php $this-&gt;BcBaser-&gt;js(&#39;jquery-1.11.3.min&#39;) ?&gt;
&lt;?php $this-&gt;BcBaser-&gt;js(&#39;jquery.bxslider-4.12.min&#39;) ?&gt;
&lt;?php $this-&gt;BcBaser-&gt;js(&#39;jquery-accessibleMegaMenu&#39;) ?&gt;
&lt;?php $this-&gt;BcBaser-&gt;js(&#39;startup&#39;) ?&gt;</code>
</pre>

<h4>複数ファイルを１行で指定する例</h4>

<pre>
<code>&lt;?php $this-&gt;BcBaser-&gt;js([&#39;jquery-1.11.3.min&#39;, &#39;jquery.bxslider-4.12.min&#39;, &#39;jquery-accessibleMegaMenu&#39;, &#39;startup&#39;]) ?&gt;</code></pre>

<h4>themeUrl 関数を利用する場合</h4>

<pre>
<code>&lt;script type=&quot;text/javascript&quot; src=&quot;&lt;?php $this-&gt;BcBaser-&gt;themeUrl() ?&gt;js/startup.js&quot;&gt;&lt;/script&gt;</code></pre>

<h3>IMGタグの書き換え</h3>

<pre>
<code>&lt;?php $this-&gt;BcBaser-&gt;img(&#39;画像URL&#39;, [&#39;alt&#39;=&gt;&#39;ALT属性値&#39;,&#39;id&#39;=&gt;&#39;ID属性値&#39;]) ?&gt;</code></pre>

<h4>ロゴ部分の書き換え例</h4>

<pre>
<code>&lt;?php $this-&gt;BcBaser-&gt;img(&#39;./&#39;, [&#39;alt&#39; =&gt; &#39;baserCMSサンプル&#39;]) ?&gt;</code></pre>

<p>※ ALT は任意<br />
※ URLは Baser設置場所のスラッシュから始まるルートパスで記述<br />
※ テーマとして配布しない場合は書き換え不要ですが、<br />
&nbsp; &nbsp;スラッシュから始まる絶対パスの記述に変える必要があります。<br />
【絶対パスに置き換える例】　<code>src=&quot;./&quot; &rarr; src=&quot;/theme/theme-name/&quot;</code></p>

<h3>Aタグの書き換え</h3>

<pre>
<code>&lt;?php $this-&gt;BcBaser-&gt;link(&#39;リンクテキスト&#39;,&#39;URL&#39;) ?&gt;</code></pre>

<h4>VIEW ALL 部分の書き換え例</h4>

<pre>
<code>&lt;!-- /app/theme/webroot/theme/corp/Layouts/default.php --&gt;
&lt;?php $this-&gt;BcBaser-&gt;link(&#39;VIEW ALL&#39;, &#39;/news/&#39;) ?&gt;</code></pre>

<p>※ URLは Baser設置場所のスラッシュから始まるルートパスで記述<br />
※ テーマとして配布しない場合は書き換え不要ですが、、スラッシュから始まる絶対パスの記述に変える必要があります。<br />
【絶対パスに置き換える例】　<code>href=&quot;./&quot; &rarr; href=&quot;/&quot;</code></p>

<h4>baseUrl関数を利用する場合</h4>

<pre>
<code>&lt;a href=&quot;&lt;?php $this-&gt;BcBaser-&gt;baseUrl() ?&gt;/news/&quot;&gt;VIEW ALL&lt;/a&gt;</code></pre>

<h3>IMGタグを Aタグで挟む場合</h3>

<pre>
<code>&lt;?php $this-&gt;BcBaser-&gt;img(&#39;画像URL&#39;, [&#39;url&#39;=&gt;&#39;リンク先URL&#39;]) ?&gt;</code></pre>

<h4>ロゴ部分の書き換え例</h4>

<pre>
<code>&lt;!-- /app/theme/webroot/theme/corp/Layouts/default.php --&gt;
&lt;?php $this-&gt;BcBaser-&gt;img(&#39;logo.gif&#39;, [&#39;url&#39; =&gt; &#39;/&#39;, &#39;alt&#39; =&gt; &#39;baserCMSサンプル&#39;, &#39;id&#39; =&gt; &#39;Logo&#39;]); ?&gt;</code></pre>

<h4>baserCMSバナー部分の書き換え例</h4>

<pre>
<code>&lt;!-- /app/theme/webroot/theme/corp/Layouts/default.php --&gt;
&lt;?php $this-&gt;BcBaser-&gt;img(&#39;https://basercms.net/img/bnr_basercms.jpg&#39;,　[&#39;url&#39;=&gt;&#39;https://basercms.net/&#39;, &#39;alt&#39; =&gt; &#39;コーポレートサイトにちょうどいいCMS、baserCMS&#39;]) ?&gt;</code></pre>

<p>※ テーマとして配布しない場合は書き換え不要ですが、<br />
&nbsp; &nbsp;IMG タグ、Aタグの両方を スラッシュから始まる絶対パスの記述に変える必要があります。</p>

<h4>baseUrl関数とthemeUrl関数を利用する場合</h4>

<pre>
<code>&lt;a href=&quot;&lt;?php $this-&gt;BcBaser-&gt;baseUrl() ?&gt;test&quot;&gt;
&nbsp;&nbsp; &nbsp;&lt;img src=&quot;&lt;?php $this-&gt;BcBaser-&gt;themeUrl() ?&gt;test.gif&quot; /&gt;
&lt;/a&gt;</code></pre>

<h3>タイトル・メタタグの埋込</h3>

<pre>
<code>&lt;!-- /app/theme/webroot/theme/corp/Layouts/default.php --&gt;
&lt;?php $this-&gt;BcBaser-&gt;title() ?&gt;
&lt;?php $this-&gt;BcBaser-&gt;metaDescription() ?&gt;
&lt;?php $this-&gt;BcBaser-&gt;metaKeywords() ?&gt;</code></pre>

<h3>baserCMS標準タグの埋込</h3>

<pre>
<code>&lt;!-- /app/theme/webroot/theme/corp/Layouts/default.php --&gt;
&lt;?php $this-&gt;BcBaser-&gt;scripts() ?&gt;
&lt;?php $this-&gt;BcBaser-&gt;func() ?&gt;</code></pre>

<h3>グロバールメニュー出力タグ</h3>

<pre>
<code>&lt;!-- /app/theme/webroot/theme/corp/Layouts/default.php --&gt;
&lt;?php $this-&gt;BcBaser-&gt;globalMenu(2) ?&gt;</code>
</pre>

<h3>コンテンツ出力タグ</h3>

<pre>
<code>&lt;!-- /app/theme/webroot/theme/corp/Layouts/default.php --&gt;
&lt;?php $this-&gt;BcBaser-&gt;content() ?&gt;</code></pre>

<p>※今回テーマであれば、<code>bs-info</code> クラスが付与されている DIVタグの次にコンテンツ本体部分を出力します。</p>

<h3>メイン画像表示切り替え</h3>

<pre>
<code>&lt;!-- /app/theme/webroot/theme/corp/Layouts/default.php --&gt;
&lt;?php if ($this-&gt;BcBaser-&gt;isHome()): ?&gt;
&nbsp; &nbsp; &lt;ul id=&quot;MainImage&quot; class=&quot;bs-main-image&quot;&gt;
&nbsp; &nbsp; :
&nbsp; &nbsp; &lt;/ul&gt;
&lt;?php endif ?&gt;</code></pre>

<h3>NEWSのエレメント化と表示切り替え</h3>

<pre>
<code>&lt;!-- /app/theme/webroot/theme/corp/Layouts/default.php --&gt;
&lt;?php if($this-&gt;BcBaser-&gt;isHome()): ?&gt;
&nbsp; &nbsp; &lt;?php $this-&gt;BcBaser-&gt;element(&#39;top_info&#39;) ?&gt;
&lt;?php endif ?&gt;
</code></pre>

<h3>ブログ記事読み込み実装</h3>

<pre>
<code>&lt;!-- /app/theme/webroot/theme/corp/Elements/top_info.php --&gt;
&lt;?php $this-&gt;BcBaser-&gt;blogPosts(&#39;news&#39;, 5) ?&gt;
</code></pre>

<h3>ウィジェット実装</h3>

<pre>
<code>&lt;!-- /app/theme/webroot/theme/corp/Layouts/default.php --&gt;
&lt;?php $this-&gt;BcBaser-&gt;widgetArea() ?&gt;</code></pre>

<h3>コンテンツ名出力タグの埋込</h3>

<pre>
<code>&lt;!-- /app/theme/webroot/theme/corp/Layouts/default.php --&gt;
&lt;body id=&quot;&lt;?php $this-&gt;BcBaser-&gt;contentsName() ?&gt;&quot;&gt;</code></pre>

<h3>ロゴ出力</h3>

<pre>
<code>&lt;!-- /app/theme/webroot/theme/corp/Layouts/default.php --&gt;
&lt;?php $this-&gt;BcBaser-&gt;logo([&#39;class&#39; =&gt; &#39;bs-header__logo&#39;]) ?&gt;</code></pre>

<h3>メインイメージ出力</h3>

<pre>
<code>&lt;!-- /app/theme/webroot/theme/corp/Layouts/default.php --&gt;
&lt;?php $this-&gt;BcBaser-&gt;mainImage([
&nbsp;&nbsp; &nbsp;&#39;all&#39; =&gt; true,
&nbsp;&nbsp; &nbsp;&#39;num&#39; =&gt; 5,
&nbsp;&nbsp; &nbsp;&#39;width&#39; =&gt; &#39;100%&#39;,
&nbsp;&nbsp; &nbsp;&#39;class&#39; =&gt; &#39;bs-main-image&#39;
]) ?&gt;</code></pre>

<h3>テーマカラー設定CSS</h3>

<pre>
<code>// /app/theme/webroot/theme/corp/css/config.css
.bs-header__nav,
.bs-footer{
&nbsp;&nbsp; &nbsp;background-color:MAIN!important;
}
.bs-pagination a,
.bs-top-post-to-list a,
.bs-widget-local-navi h2{
&nbsp;&nbsp; &nbsp;background-color:SUB;
}
.bs-main-contents a:link,
.bs-main-contents a:visited,
.bge-contents a:link,
.bge-contents a:visited,
.cke_editable a:link,
.cke_editable a:visited {
&nbsp;&nbsp; &nbsp;color:LINK;
}
.bs-main-contents a:hover,
.bge-contents a:hover,
.cke_editable a:hover {
&nbsp;&nbsp; &nbsp;color:HOVER;
}
</code></pre>
