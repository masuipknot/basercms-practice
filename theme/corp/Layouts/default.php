<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <title>baserCMSサンプル</title>
    <meta name="description" content="baserCMS（ベーサーシーエムエス）とは、直感的な操作と高いメンテナンス性を実現し、Webサイトを自由にカスタマイズできる国産CMS（コンテンツ・マネージメント・システム）です。日本人が日本人の為に、みんなで作っているオープンソース・ソフトウェアです。無料で利用でき、様々なサーバーで動作可能で、インストールも簡単です。"/>
    <meta name="keywords" content="baser,CMS,コンテンツマネジメントシステム,開発支援"/>
    <?php $this->BcBaser->css('style') ?>
    <?php $this->BcBaser->css('editor') ?>
    <?php $this->BcBaser->js('jquery-1.11.3.min.js') ?>
    <?php $this->BcBaser->js('jquery.bxslider-4.12.min.js') ?>
    <?php $this->BcBaser->js('jquery-accessibleMegaMenu.js') ?>
    <?php $this->BcBaser->js('startup.js') ?>
    <meta name="generator" content="basercms"/>
    <link href="http://localhost/" rel="canonical"/>
</head>
<body id="Home">

<div class="bs-container">

    <!-- /Elements/header.php -->
    <header class="bs-header">
        <div class="bs-header__inner">
            <a href="./" title="baserCMS"><?php $this->BcBaser->img('logo.png', ['alt' => 'baserCMS', 'class'=> 'bs-header__logo']); ?></a>
        </div>

        <div class="bs-header__menu-button" id="BsMenuBtn">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <nav class="bs-header__nav use-mega-menu" id="BsMenuContent">

            <!-- /Elements/global_menu.php -->
            <ul class="ul-level-1 bs-global-menu">
                <li class="bs-global-menu-item li-level-1 current">
                    <a href="./" class="bs-global-menu-item--link">トップページ</a></li>
                <li class="bs-global-menu-item li-level-1">
                    <a href="./news/" class="bs-global-menu-item--link">NEWS</a></li>
                <li class="bs-global-menu-item li-level-1">
                    <a href="./about" class="bs-global-menu-item--link">会社案内</a></li>
                <li class="bs-global-menu-item li-level-1">
                    <a href="./service/" class="bs-global-menu-item--link">サービス</a>
                    <div class="bs-global-menu-sub">
                        <ul class="menu ul-level-2">
                            <li class="menu-content li-level-2">
                                <a href="./service/service1">サービス１</a></li>
                            <li class="menu-content li-level-2">
                                <a href="./service/service2">サービス２</a></li>
                            <li class="menu-content li-level-2">
                                <a href="./service/service3">サービス３</a></li>
                        </ul>
                    </div>
                </li>
                <li class="bs-global-menu-item li-level-1">
                    <a href="./contact/" class="bs-global-menu-item--link">お問い合わせ</a></li>
                <li class="bs-global-menu-item li-level-1">
                    <a href="./sample" class="bs-global-menu-item--link">サンプル</a></li>
            </ul>

        </nav>

    </header>

    <ul id="MainImage" class="bs-main-image">
        <li>
            <a href="./" title="コーポレートサイトにちょうどいい国産CMS"><?php $this->BcBaser->img('main_image_1.jpg', ['alt' => 'コーポレートサイトにちょうどいい国産CMS', 'width'=> '100%']); ?></a>
        </li>
        <li>
            <a href="./" title="全て日本語の国産CMSだから、設置も更新も簡単、わかりやすい。"><?php $this->BcBaser->img('main_image_2.jpg', ['alt' => '全て日本語の国産CMSだから、設置も更新も簡単、わかりやすい。', 'width'=> '100%']); ?></a>
        </li>
        <li>
            <a href="./" title="標準的なWebサイトに必要な基本機能を全て装備"><?php $this->BcBaser->img('main_image_3.jpg', ['alt' => '標準的なWebサイトに必要な基本機能を全て装備', 'width'=> '100%']); ?></a>
        </li>
        <li>
            <a href="./" title="デザインも自由自在にカスタマイズ可能！"><?php $this->BcBaser->img('main_image_4.jpg', ['alt' => 'デザインも自由自在にカスタマイズ可能！', 'width'=> '100%']); ?></a>
        </li>
        <li>
            <a href="./" title="質問・ご相談はユーザーズフォーラムへ"><?php $this->BcBaser->img('main_image_5.jpg', ['alt' => '質問・ご相談はユーザーズフォーラムへ', 'width'=> '100%']); ?></a>
        </li>
    </ul>

    <div class="bs-wrap clearfix">

        <main class="bs-main-contents">

            <!-- /Elements/top_info.php -->


            <!-- Main Contents -->

            <?php $this->BcBaser->content() ?>

            <!-- /Main Contents -->

        </main>

        <section class="bs-sub-contents">

            <!-- /Elements/widget_area.php -->
            <div class="bs-widget-area bs-widget-area-1">

                <div class="bs-widget bs-widget-text bs-widget-text-1">
                    <h2 class="bs-widget-head">リンク</h2>
                    <p style="margin-bottom:20px;text-align: center">
                        <a href="http://basercms.net" target="_blank"><?php $this->BcBaser->img('http://basercms.net/img/bnr_basercms.jpg', ['alt' => 'コーポレートサイトにちょうどいいCMS、baserCMS']); ?></a>
                    </p>
                </div>

            </div>

        </section>

    </div>

    <!-- /Elements/footer.php -->
    <footer class="bs-footer">
        <p class="bs-footer__copyright"> Copyright(C)
            2008 - 2021 baserCMS Users Community All rights Reserved.
            <span class="bs-footer__banner">
                <a href="https://basercms.net/" target="_blank" class="bs-footer__banner-link"><?php $this->BcBaser->img('/theme/admin-third/img/baser.power.gif', ['alt' => 'baserCMS : Based Website Development Project']); ?></a>&nbsp;
                <a href="https://cakephp.org/" target="_blank" class="bs-footer__banner-link"><?php $this->BcBaser->img('/theme/admin-third/img/cake.power.gif', ['alt' => 'CakePHP(tm) : Rapid Development Framework']); ?></a>
            </span>
        </p>
    </footer>

</div>

</body>
</html>
