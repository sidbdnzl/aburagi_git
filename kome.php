<?php
/*
Template Name: 取り扱い銘柄
*/
get_header();
?>

<main class="main">
    <section class="komepage">
        <div class="komepage__list">
            <div class="komepage__inner">
                <div class="komepage__map fadein">
                    <div class="komepage__title">
                        <h2>お米の味わいマップ</h2>
                        <p>Our Rice Selection Map</p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/image/map.png" alt="お米の味わいマップ" >
                </div>

                <div class="komepage__listtitle fadein">
                    <h2>取り扱い銘柄一覧</h2>
                    <p>Our Rice Brands</p>
                    </div>
                    <p class="komepage__text">※取り扱い品目は、季節や時期により<br class="mb">内容が変わる場合がございます。<br>
                        詳しい情報は、お電話・メール、<br class="mb">または店頭スタッフまでお気軽にお尋ねください。</p>


                <div class="komepage__units">

                                    <?php
                    $items = SCF::get('kome-list');
                    foreach ($items as $item):
                    $image = wp_get_attachment_image_src($item['kome-list-img'], 'full');
                    ?>
                    <div class="komepage__unit fadein">
                        <img
                        src="<?php echo esc_url($image[0]); ?>"
                        alt="<?php echo esc_attr($item['kome-list-name']); ?>"
                        width="300"
                        height="472"
                        >
                        <p><?php echo esc_html($item['kome-list-name']); ?></p>
                    </div>
                    <?php endforeach; ?>


                </div>

            </div>
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

<?php
get_footer();
?>