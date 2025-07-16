<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--css-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css?v=250619">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/customize.css?v=250619">
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Manrope:wght@200..800&family=Outfit:wght@500&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <header id="header" class="header">
        <div class="inner">
            <div class="header__wrapper">
                <h1 class="header__logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png?<?php echo date('YmdH'); ?>a" alt="地場建設企業等とスタートアップ企業とのビジネスマッチング支援"></a></h1>
                <nav>
                    <div class="menu-header_menu-container">
                        <ul id="menu-header_menu" class="menu">
                            <li id="menu-item-44" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-44">
                                <a href="<?php echo home_url('/#news'); ?>">
                                    <p class="menu_jp">お知らせ</p>
                                </a>
                            </li>
                            <li id="menu-item-46" class="program-menu menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-46">
                                <a href="<?php echo home_url('/#program'); ?>" class="program-menu">
                                    プログラム
                                </a>
                                <div class="popmenu">
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="<?php echo home_url('/#new-event1'); ?>">第3回 協業マッチングイベント「建設DX」</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo home_url('/#program'); ?>">8月 現場見学会</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo home_url('/#program'); ?>">第4回 協業マッチングイベント「建設DX」</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo home_url('/#program'); ?>">12月 意見交換会</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li id="menu-item-50" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-50">
                                <a href="javascript:void(0);" role="button" class="open-past-event-modal">
                                    <p class="menu_jp">過去のイベント</p>
                                </a>
                            </li>
                            <li id="menu-item-51" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-51">
                                <a href="https://forms.office.com/e/SPYqBPiedx" target="_blank" rel="noopener noreferrer">
                                    <p class="menu_jp">お問い合わせ</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a id="openModal" class="menu-header_hamburger-btn">
                        <span></span><span></span><span></span>
                    </a>
                </nav>
            </div>
        </div>

        <!-- header_modal -->
        <section id="modalArea" class="modalArea">
            <div id="modalBg" class="modalBg">
                <div class="modal__header">
                    <h1 class="header__logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png?<?php echo date('YmdH'); ?>a" alt="地場建設企業等とスタートアップ企業とのビジネスマッチング支援"></a></h1>
                    <div id="closeModal" class="closeModal"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/modal_close.png?<?php echo date('YmdH'); ?>" alt="閉じる"></div>
                </div>
                <!-- <div class="modalContents"> -->
                <ul class="modalContents">
                    <li><a class="menu-btn" href="<?php echo home_url('/news'); ?>">
                            <p class="modal-menu__en">お知らせ</p>
                        </a>
                    </li>
                    <li>
                        <a class="menu-btn" href="<?php echo home_url('/#program'); ?>">
                            <p class="modal-menu__en">プログラム</p>
                        </a>
                        <ul class="modal-submenu">
                            <li>
                                <a href="<?php echo home_url('/#new-event1'); ?>">第3回 協業マッチングイベント「建設DX」</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('/#program-au'); ?>">8月 現場見学会</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('/#program-04'); ?>">第4回 協業マッチングイベント「建設DX」</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('/#program-de'); ?>">12月 意見交換会</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" role="button" class="open-past-event-modal">
                            <p class="modal-menu__en">過去のイベント</p>
                        </a>
                    </li>
                    <li>
                        <a class="menu-btn" href="https://forms.office.com/e/SPYqBPiedx" target="_blank" rel="noopener noreferrer">
                            <p class="modal-menu__en">お問い合わせ</p>
                        </a>
                    </li>
                    <li>
                        <a class="menu-btn" href="<?php echo home_url('/privacy'); ?>">
                            <p class="header__privacy">PRIVACY POLICY</p>
                        </a>
                    </li>
                </ul>
                <p class="copyright">© Copyright 2025 福岡市建設企業×スタートアップ<br>協業マッチング支援プログラム</p>
            </div>
        </section>
        <!-- header_modal ここまで -->
        <!-- ptivacy-modal テンプレート読み込み -->
        <?php get_template_part('template-parts/privacy-modal'); ?>
    </header>