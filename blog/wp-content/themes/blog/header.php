<!doctype html>
<html lang="ja">
<title><?php bloginfo('name'); ?> |
    <?php bloginfo('description'); ?></title>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jpn.css">
        <link rel="shortcut icon" href="http://teco-llc.net/web/aorld/favicon.ico">
        <?php wp_head(); ?>
    </head>

    <body>
        <header id="header" class="d-none d-md-block">
            <div class="container">
                <div class="row">
                    <div class="col-12"><a href="/web/aorld/blog/"><img src="<?php bloginfo('template_directory'); ?>/img/title.png" alt="ロゴ"></a></div>
                </div>
            </div>
        </header>
        <!-- /header -->
        <header id="header" class="d-block d-md-none">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="http://aorld.jp/sp/"><img src="<?php bloginfo('template_directory'); ?>/img/header_logo.png" alt=""></a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="ナビゲーションの切替">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </header>

                    <div class="bg-gray d-block d-md-none">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="http://aorld.jp/sp">トップ <span class="sr-only">(現位置)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="http://aorld.jp/sp/philosophy.html">aorldフィロソフィー</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="http://aorld.jp/sp/welfare.html">福祉サービス</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="http://aorld.jp/sp/original.html">aorldオリジナル</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="http://aorld.jp/sp/create.html">aorldクリエイト</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="http://aorld.jp/sp/careaorld.html">求職者・学生の皆様へ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="http://aorld.jp/sp/participants.html">関係者の皆様へ</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- /header -->

        <div class="container">
            <div class="nav-scroller py-1 mb-3 mt-3 d-none d-md-block">
                <nav class="nav d-flex justify-content-between">
                    <div class="dropdown">
                        <a class="p-2 text-gray" href="http://aorld.jp/top.php">トップ</a>
                    </div>
                    <div class="dropdown">
                        <a class="p-2 text-gray dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">aorldフィロソフィー</a>
                        <!-- ドロップメニューの設定 -->
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="http://aorld.jp/message.php">代表挨拶</a>
                            <a class="dropdown-item" href="http://aorld.jp/aorlddesign.php">あーるどデザイン</a>
                            <a class="dropdown-item" href="http://aorld.jp/philosophy.php">理念</a>
                            <a class="dropdown-item" href="http://aorld.jp/koudousyougai.php">強度行動障がい</a>
                        </div>
                        <!-- /.dropdown-menu -->
                    </div>
                    <!-- /.dropdown -->
                    <div class="dropdown">
                        <a class="p-2 text-gray dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">福祉サービス</a>
                        <!-- ドロップメニューの設定 -->
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="http://aorld.jp/wakaba.php">青森県発達障害者支援センター「わかば」（津軽地域）</a>
                            <a class="dropdown-item" href="http://aorld.jp/shien.php">びーた支援センター</a>
                            <a class="dropdown-item" href="/web/aorld/work.php">はたらびーた</a>
                            <a class="dropdown-item" href="http://aorld.jp/april.php">えいぷりる</a>
                            <a class="dropdown-item" href="http://aorld.jp/skillup.php">スキルアップセンター</a>
                            <a class="dropdown-item" href="http://aorld.jp/inami.php">グループホーム稲実</a>
                        </div>
                        <!-- /.dropdown-menu -->
                    </div>
                    <div class="dropdown">
                        <a class="p-2 text-gray dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">aorldオリジナル</a>
                        <!-- ドロップメニューの設定 -->
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="http://aorld.jp/otonokatachi.php">オトノカタチ</a>
                            <a class="dropdown-item" href="http://aorld.jp/project.php">未来あーるどプロジェクト</a>
                            <a class="dropdown-item" href="https://www.aasc.jp/">あおもりアール・ブリュットサポートセンター「AASC」</a>
                        </div>
                        <!-- /.dropdown-menu -->
                    </div>
                    <div class="dropdown">
                        <a class="p-2 text-gray dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">aorldクリエイト</a>
                        <!-- ドロップメニューの設定 -->
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="http://aorld.jp/shop.php">ネットショップ</a>
                        </div>
                        <!-- /.dropdown-menu -->
                    </div>
                    <div class="dropdown">
                        <a class="p-2 text-gray dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">求職者・学生の皆様へ</a>
                        <!-- ドロップメニューの設定 -->
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="http://aorld.jp/careaorld.php">キャリあーるど</a>
                            <a class="dropdown-item" href="http://aorld.jp/stufffocus.php">スタッフフォーカス！</a>
                        </div>
                        <!-- /.dropdown-menu -->
                    </div>
                    <div class="dropdown">
                        <a class="p-2 text-gray dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">関係者の皆さまへ</a>
                        <!-- ドロップメニューの設定 -->
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="index.php">代表ブログ</a>
                            <a class="dropdown-item" href="http://aorld.jp/information_disclosure.php">情報公開</a>
                            <a class="dropdown-item" href="http://aorld.jp/contact.php">お問い合わせ</a>
                        </div>
                        <!-- /.dropdown-menu -->
                    </div>
                </nav>
            </div>
            <!-- /nav -->
