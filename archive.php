<?php
get_header();
?>
<main class="main">
    <section class="newspage fadein">
        <div class="newspage__inner">

            <div class="newspage__title">
                <h2>お知らせ</h2>
                <p>News</p>
            </div>

            <div class="newspage__list">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="newspage__post">
                <dl class="newspage__date"><?php echo get_the_date('Y.m.d'); ?></dl>

                <dt class="newspage__text">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </dt>
            </div>
                <?php endwhile; endif; ?>
            </div>

            <div class="pagination">
                <?php the_posts_pagination(); ?>
            </div>
            <a href="<?php echo home_url('/'); ?>" class="newspage__btn btn">HOMEへ戻る</a>
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