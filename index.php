<?php get_header(); ?>

<main class="main">

    <section class="mainvisual ">
        <div class="mainvisual__inner fadein">
            <div class="mainvisual__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/image/main_logo.webp" alt="油木米精米所のロゴ" width="153" height="309" decoding="async" fetchpriority="high">
            </div>
        </div>
    </section>

    <section class="aburagi " data-midnight="white">
        <div class="aburagi__inner fadein">
            <div class="aburagi__explanation">
                <h2 class="aburagi__title">油木米販売所</h2>
                <p class="aburagi__text">
                    米搗き工房は、お米の精米所です。<br>厳選した産地銘柄の玄米を、<br>循環式精米機という<br>昔ながらの精米法で丁寧に搗きあげ、<br>店頭にて販売しています。<br>店頭精米で使用する玄米は、<br>特別栽培米を選び、<br>人に優しいお米を<br>安心してお召し上がりいただけるように<br>販売しています。<br>毎日の食卓に、<br>精米したての新鮮なお米を、<br>お届けします。
                </p>
            </div>
        </div>
    </section>

    <section class="news ">
    <div class="news__inner fadein">
        <div class="news__unit">
            <div class="news__title">
                <h2>お知らせ</h2>
                <p>News</p>
            </div>

            <div class="news__list">

                <?php
                // お知らせ投稿を最新3件取得
                $args = array(
                    'post_type'      => 'post',     // ← カスタム投稿名（変更可）
                    'posts_per_page' => 3
                );
                $news_query = new WP_Query($args);
                ?>

                <?php if ( $news_query->have_posts() ) : ?>
                    <?php while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
                        <article class="news__post">
                            <div class="news__date">
                                <?php echo get_the_date('Y.m.d'); ?>
                             </div>
                            <div class="news__text">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>まだ投稿されていません。</p>
                <?php endif; ?>

                <?php wp_reset_postdata(); ?>
            </div>
        </div>

            <a href="<?php echo home_url('/news'); ?>" class="news__btn btn">
                お知らせ一覧
            </a>
    </div>
</section>

    <section class="seimai ">
        <div class="seimai__inner fadein">
            <div class="seimai__unit">
                <div class="seimai__title">
                    <h2>精米へのこだわり</h2>
                    <p>The Art of Polishing Rice</p>
                </div>

                <p class="seimai__text">
                    玄米の鮮度を守ることから、<br class="mb">
                    私たちの精米は始まります。<br>
                    低温で大切に保管された玄米を、<br>
                    昔ながらの循環式精米機で丁寧に搗き上げ、<br>
                    人に優しく安心して<br class="mb">お召し上がりいただけるような<br>新鮮なお米を、お届けしています。</p>
            </div>

            <img src="<?php echo get_template_directory_uri(); ?>/image/workshop/jyunkan_seimaiki.webp" loading="lazy" alt="循環式精米機の写真" class="seimai__image">

                <a href="<?php echo home_url('/seimai'); ?>" class="seimai__btn btn">
                    精米について
                </a>
        </div>
    </section>

    <section class="kome ">
        <div class="kome__inner fadein">
            <div class="kome__unit">
                <div class="kome__title">
                    <h2>お米の味わい</h2>
                    <p>Our Rice Selection</p>
                </div>
                <p class="kome__text">
                    育てた人の想いと、土地の風。<br class="mb">
                    そのすべてが、ひと粒に。<br>
                    甘みや食感、香りから、<br class="mb">
                    あなたの一番を見つけてください。
                </p>
            </div>
            <div class="kome__scroller mySwiper">
                <div class="kome__images swiper-wrapper">
                    <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/image/kome/niigata_koshihikari.webp" loading="lazy" alt="新潟産コシヒカリのパッケージ画像">
                    <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/image/kome/aichi_koshihikari.webp" loading="lazy" alt="愛知県産コシヒカリのパッケージ画像">
                    <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/image/kome/toyama_koshihikari.webp" loading="lazy" alt="富山県産コシヒカリのパッケージ画像">
                    <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/image/kome/nagano_koshihikari.webp" loading="lazy" alt="長野県産コシヒカリのパッケージ画像">
                    <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/image/kome/uonuma_koshihikari.webp" loading="lazy" alt="魚沼産コシヒカリのパッケージ画像">
                    <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/image/kome/toyama_fufufu.webp" loading="lazy" alt="富山県産富富富のパッケージ画像">
                    <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/image/kome/aichi_no_kaori.webp" loading="lazy" alt="あいちのかおりのパッケージ画像">
                    <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/image/kome/nikomaru.webp" loading="lazy" alt="にこまるのパッケージ画像">
                    <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/image/kome/hitomebore.webp" loading="lazy" alt="ひとめぼれのパッケージ画像">
                    <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/image/kome/tsuyahime.webp" loading="lazy" alt="つや姫のパッケージ画像">
                </div>
            </div>

                <a href="<?php echo home_url('/kome'); ?>" class="kome__btn btn">
                        好みのお米を見つける
                    </a>
        </div>
    </section>

    <section id="store" class="store ">
        <div class="store__inner fadein">
            <div class="store__title">
                <h2>店舗情報</h2>
                <p>Our Store</p>
            </div>
            <div class="store__unit">
                <div class="store__map">
                    <iframe title="油木米精米所の地図" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3268.2471836849595!2d136.995727!3d35.000517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60049d213808942b%3A0x69a2a167b7cb417f!2z5rK55pyo57Gz6LKp5aOy5omA!5e0!3m2!1sja!2sjp!4v1764826596647!5m2!1sja!2sjp"
                         loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="store__info">
                    <div class="info__list">
                        <dl class="info__row info__row1">
                            <dt class="info__term">所在地</dt>
                            <dd class="info__desc">〒448-0037　<br>愛知県刈谷市高倉町4-612</dd>
                        </dl>
                        <dl class="info__row">
                            <dt class="info__term">TEL</dt>
                            <dd class="info__desc">0566-21-1280</dd>
                        </dl>
                        <dl class="info__row">
                            <dt class="info__term">FAX</dt>
                            <dd class="info__desc">0566-24-0815</dd>
                        </dl>
                        <dl class="info__row">
                            <dt class="info__term">mail</dt>
                            <dd class="info__desc">ktaka802@katch.ne.jp</dd>
                        </dl>
                        <dl class="info__row">
                            <dt class="info__term">営業時間</dt>
                            <dd class="info__desc">火〜金曜日　9:00 - 19:00<br>土曜日　9:00 - 18:30</dd>
                        </dl>
                        <dl class="info__row">
                            <dt class="info__term">定休日</dt>
                            <dd class="info__desc">日曜日、月曜日</dd>
                        </dl>
                        <dl class="info__row">
                            <dt class="info__term">駐車場</dt>
                            <dd class="info__desc">有</dd>
                        </dl>
                        <dl class="info__row">
                            <dt class="info__term">支払い方法</dt>
                            <dd class="info__desc">現金、PayPay</dd>
                        </dl>
                    </div>
                </div>
                <div class="calendar">
                    <div class="calendar__frame">
                        <iframe   title="営業日カレンダー"
                         src="https://calendar.google.com/calendar/embed?src=8fada9074125778093dbd812f36c5fe3f5c921d2b203166f294f7e55065998d9%40group.calendar.google.com&ctz=Asia%2FTokyo"frameborder="0" scrolling="no"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="inquiry ">
                    <div class="inquiry__inner fadein">
                        <p class="inquiry__text">
                            飲食店様には、それぞれの料理に合うように<br class="mb">
                            ブレンドしたお米をご提供しています。<br>
                            冷めても固くならず、<br class="mb">
                            もちもちとした食感が続く<br class="mb">お弁当向けのお米など、<br>
                            用途に合わせたご提案が可能です。<br>
                            詳しくは、下記のメールアドレス、<br class="mb">
                            またはお電話にてお気軽に<br class="mb">お問い合わせください。
                        </p>
                        <div class="inquiry__data">
                            <a href="tel:0566-21-1280"  class="inquiry__tel">TEL:0566-21-1280</a>
                            <a href="mailto:ktaka802@katch.ne.jp" class="inquiry__mail">ktaka802@katch.ne.jp</a>
                        </div>
                    </div>
            </section>

</main>

<?php get_footer(); ?>