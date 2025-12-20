<?php get_header(); ?>

<main class="main">

<main class="main">
    <section class="single">
        <div class="single__inner">
            <h1><?php the_title(); ?></h1>

            <?php
            $sub = SCF::get('sub_title');
            if ($sub) :
            ?>
                <p class="news__subtitle"><?php echo esc_html($sub); ?></p>
            <?php endif; ?>

            <div class="single__content">
                <?php the_content(); ?>
            </div>

            <?php if (SCF::get('external_url')): ?>
                <p><a href="<?php echo esc_url(SCF::get('external_url')); ?>" target="_blank">関連リンク</a></p>
            <?php endif; ?>

            <a href="<?php echo home_url('/news'); ?>" class="single__btn btn">
                記事一覧に戻る
            </a>
        </div>
    </section>

            <section class="inquiry fadein">
                    <div class="inquiry__inner">
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
                            <a href="tel:+810566-21-1280"  class="inquiry__tel">TEL:0566-21-1280</a>
                            <a href="mailto:ktaka802@katch.ne.jp" class="inquiry__mail">ktaka802@katch.ne.jp</a>
                        </div>
                    </div>
            </section>
</main>

<?php get_footer(); ?>