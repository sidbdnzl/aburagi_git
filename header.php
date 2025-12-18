<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?php wp_title('|', true, 'right'); ?>
        <?php bloginfo('name'); ?>
    </title>

    <!-- Reset + Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/the-new-css-reset/css/reset.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />

    <!-- Theme Style -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
    <div class="header__inner">
        <a href="<?php echo home_url('/'); ?>">
            <div class="header__logos">
                <img src="<?php echo get_template_directory_uri(); ?>/image/aburagi_logo.webp" alt="米搗き工房のイラストロゴ" width="50" height="50" decoding="async" fetchpriority="high">
                <img class="header__koubouimg" src="<?php echo get_template_directory_uri(); ?>/image/aburagi_logo_name.webp" alt="米搗き工房のロゴ" width="170" height="120" decoding="async" fetchpriority="high">
            </div>
        </a>

        <div class="header__menu">
            <nav class="gnav2">
                <ul class="gnav__list2">
                    <li class="gnav__item2"><a href="<?php echo home_url('/'); ?>">HOME</a></li>
                    <li class="gnav__item2"><a href="<?php echo home_url('/news'); ?>">お知らせ</a></li>
                    <li class="gnav__item2"><a href="<?php echo home_url('/seimai'); ?>">こだわりの精米</a></li>
                    <li class="gnav__item2"><a href="<?php echo home_url('/kome'); ?>">取り扱い銘柄</a></li>
                    <li class="gnav__item2"><a href="<?php echo home_url('/'); ?>#store">店舗情報</a></li>
                </ul>
            </nav>

            <button type="button" class="header__hamburger" id="hamburger" aria-label="メニューを開閉">
                <span class="bar"></span>
                <span class="bar"></span>
            </button>

            <nav class="gnav" id="menu">
                <ul class="gnav__list">
                    <li class="gnav__item"><a href="<?php echo home_url('/'); ?>">HOME</a></li>
                    <li class="gnav__item"><a href="<?php echo home_url('/news'); ?>">お知らせ</a></li>
                    <li class="gnav__item"><a href="<?php echo home_url('/seimai'); ?>">こだわりの精米</a></li>
                    <li class="gnav__item"><a href="<?php echo home_url('/kome'); ?>">取り扱い銘柄</a></li>
                    <li class="gnav__item"><a href="<?php echo home_url('/store'); ?>">店舗情報</a></li>
                </ul>

                <ul class="gnav__shop">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/main_logo.webp" alt="お店のロゴ" class="gnav__logo" width="99" height="416" decoding="async">
                    <div class="gnav__shoptext">
                        <p class="gnav__name">米搗き工房　油木米販売所</p>
                        <p class="gnav__address">〒448-0037　愛知県刈谷市高倉町4-612</p>
                    </div>
                </ul>
            </nav>
        </div>
    </div>
</header>