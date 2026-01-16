<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <?php
        if ( is_singular() ) {
            // 投稿・固定ページ
            if ( has_excerpt() ) {
                $ogp_description = get_the_excerpt();
            } else {
                $ogp_description = wp_trim_words(
                    wp_strip_all_tags(
                        get_post_field( 'post_content', get_queried_object_id() )
                    ),
                    80,
                    '…'
                );
            }
        } else {
            // トップ・一覧ページ（必ず文字を入れる）
            $ogp_description = get_bloginfo('description');

            if ( empty($ogp_description) ) {
                $ogp_description = '米搗き工房 油木米販売所｜おいしいお米を食卓へ';
            }
        }
    ?>

<meta property="og:title" content="<?php echo esc_attr( wp_get_document_title() ); ?>">
<meta property="og:description" content="<?php echo esc_attr( $ogp_description ); ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo esc_url( get_permalink() ); ?>">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/image/ogp.webp">

    <title><?php echo esc_html( wp_get_document_title() ); ?></title>
    <!-- <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title> -->

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
                <img src="<?php echo get_template_directory_uri(); ?>/image/aburagi_logo.webp" loading="lazy" alt="米搗き工房のイラストロゴ" width="50" height="50" decoding="async" fetchpriority="high">
                <img class="header__koubouimg" src="<?php echo get_template_directory_uri(); ?>/image/aburagi_logo_name.webp" loading="lazy" alt="米搗き工房のロゴ" width="170" height="120" decoding="async" fetchpriority="high">
            </div>
        </a>

        <div class="header__menu">

            <button type="button"
                class="header__hamburger"
                id="hamburger"
                aria-expanded="false"
                aria-controls="gnav"
                aria-label="メニューを開閉">
                <span class="bar"></span>
                <span class="bar"></span>
            </button>

            <nav class="gnav" id="gnav">
                <ul class="gnav__list">
                    <li class="gnav__item <?php if(is_front_page()) echo 'is-active'; ?>">
                        <a href="<?php echo home_url('/'); ?>">HOME</a>
                    </li>
                    <li class="gnav__item <?php if((is_home() || is_single() || is_archive()) && !is_front_page()) echo 'is-active'; ?>">
                        <a href="<?php echo home_url('/news'); ?>">お知らせ</a>
                    </li>
                    <li class="gnav__item <?php if(is_page('seimai')) echo 'is-active'; ?>">
                        <a href="<?php echo home_url('/seimai'); ?>">こだわりの精米</a>
                    </li>
                    <li class="gnav__item <?php if(is_page('kome')) echo 'is-active'; ?>">
                        <a href="<?php echo home_url('/kome'); ?>">取り扱い銘柄</a>
                    </li>
                    <li class="gnav__item">
                        <a href="<?php echo home_url('/'); ?>#store">店舗情報</a>
                    </li>
                </ul>

                <!-- SPだけで表示したい情報 -->
                <div class="gnav__shop">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/main_logo.webp"
                        alt="お店のロゴ" class="gnav__logo">
                    <div class="gnav__shoptext">
                        <p class="gnav__name">米搗き工房　油木米販売所</p>
                        <p class="gnav__address">〒448-0037 愛知県刈谷市高倉町4-612</p>
                    </div>
                </div>
            </nav>
        </div>

        <!-- <div class="header__menu">
            <nav class="gnav2">
                <ul class="gnav__list2">
                    <li class="gnav__item2 <?php if(is_front_page()) echo 'is-active'; ?>">
                        <a href="<?php echo home_url('/'); ?>">HOME</a>
                    </li>

                    <li class="gnav__item2 <?php if((is_home() || is_single() || is_archive()) && !is_front_page()) echo 'is-active'; ?>">
                        <a href="<?php echo home_url('/news'); ?>">お知らせ</a>
                    </li>

                    <li class="gnav__item2 <?php if(is_page('seimai')) echo 'is-active'; ?>">
                        <a href="<?php echo home_url('/seimai'); ?>">こだわりの精米</a>
                    </li>

                    <li class="gnav__item2 <?php if(is_page('kome')) echo 'is-active'; ?>">
                        <a href="<?php echo home_url('/kome'); ?>">取り扱い銘柄</a>
                    </li>

                    <li class="gnav__item2">
                        <a href="<?php echo home_url('/'); ?>#store">店舗情報</a>
                    </li>
                </ul>
            </nav>

            <button type="button" class="header__hamburger" id="hamburger" aria-expanded="false"
            aria-controls="gnav" aria-label="メニューを開閉">
                <span class="bar"></span>
                <span class="bar"></span>
            </button>

            <nav class="gnav" id="gnav">
                <ul class="gnav__list">
                    <li class="gnav__item"><a href="<?php echo home_url('/'); ?>">HOME</a></li>
                    <li class="gnav__item"><a href="<?php echo home_url('/news'); ?>">お知らせ</a></li>
                    <li class="gnav__item"><a href="<?php echo home_url('/seimai'); ?>">こだわりの精米</a></li>
                    <li class="gnav__item"><a href="<?php echo home_url('/kome'); ?>">取り扱い銘柄</a></li>
                    <li class="gnav__item"><a href="<?php echo home_url('/'); ?>#store">店舗情報</a></li>
                </ul>

                <div class="gnav__shop">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/main_logo.webp" loading="lazy" alt="お店のロゴ" class="gnav__logo" width="99" height="416" decoding="async">
                    <div class="gnav__shoptext">
                        <p class="gnav__name">米搗き工房　油木米販売所</p>
                        <p class="gnav__address">〒448-0037　愛知県刈谷市高倉町4-612</p>
                    </div>
                </div>
            </nav>
        </div> -->
    </div>
</header>