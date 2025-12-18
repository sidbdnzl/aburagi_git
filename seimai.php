<?php
/*
Template Name: こだわりの精米
*/
get_header();
?>

<main class="main">

    <section class="seimaitop fadein">
        <div class="seimaitop__inner">

            <div class="seimaitop__title">
                <h2>こだわりの精米</h2>
                <p>The Art of Polishing Rice</p>
            </div>

            <div class="seimaitop__text">
                <p>毎日のご飯が、少しだけ楽しみになるように。<br>
                    私たちは、暮らしに寄り添う<br class="mb">お米づくりと精米を大切にしています。<br>
                    季節や天気、その日の湿度によって、<br class="mb">玄米の表情は少しずつ違います。<br>
                    そのわずかな違いを見極めながら、<br>
                    香りや甘み、粒のやわらかさを<br class="mb">いちばん美味しく感じられるように<br class="mb">仕上げています。<br>
                    ひと粒ひと粒に込めた手間と想いが、<br>
                    いつもの食卓を、<br class="mb">やさしく満たしてくれるように。</p>
            </div>
        </div>
    </section>

    <section class="workshop">
        <div class="workshop__inner">

            <article class="workshop__unit fadein">
                <img src="<?php echo get_template_directory_uri(); ?>/image/workshop/kome_souko.webp" alt="低温倉庫">
                <p>玄米は、室温15℃・湿度65〜70%に保たれた<br>
                    低温倉庫で管理しています。<br>
                    一年を通して温度と湿度を安定させることで、<br>
                    鮮度や風味を損なうことなく<br class="mb">保つことができます。<br>
                    お米がいちばんおいしい状態で<br class="mb">精米できるよう、<br>
                    環境づくりから丁寧に整えています。</p>
            </article>

            <article class="workshop__unit fadein">
                <img src="<?php echo get_template_directory_uri(); ?>/image/workshop/ishinukiki.webp" alt="石抜機">
                <p>石抜機にお米を張り込み、<br class="mb">
                    異物や小さな石を丁寧に取り除きます。<br>
                    ここでお米をまっさらな状態に整えることで、<br>
                    次の工程の仕上がりにも差が出ます。<br>
                    ひと粒ひと粒を大切に扱う、<br class="mb">
                    おいしさづくりの第一歩です。</p>
            </article>

            <article class="workshop__unit fadein">
                <img src="<?php echo get_template_directory_uri(); ?>/image/workshop/jyunkan_seimaiki.webp" alt="循環式精米機">
                <p>当店では、昔ながらの循環式精米機を使い、<br>
                    7回にわたってゆっくりと磨き上げます。<br>
                    お米に余計な熱を与えず、<br class="mb">
                    粒の中心までやさしく精米することで、<br>
                    ふっくらとした食感と<br class="mb">
                    自然な甘みを引き出します。<br>
                    毎日の食卓に、<br class="mb">
                    やわらかく香るおいしさをお届けします。</p>
            </article>

            <article class="workshop__unit fadein">
                <img src="<?php echo get_template_directory_uri(); ?>/image/workshop/shikisai_senbeki.webp" alt="色彩選別機">
                <p>精米後は、色彩選別機で着色米や虫食いなどを<br>
                    ひと粒ずつ丁寧に見分けて弾きます。<br>
                    まるで職人の目で選ぶように、<br>
                    おいしさにふさわしいお米だけを選び抜きます。<br>
                    こうして、炊き上がりの美しさと<br class="mb">
                    透明感のある味わいが生まれます。</p>
            </article>

            <article class="workshop__unit fadein">
                <img src="<?php echo get_template_directory_uri(); ?>/image/workshop/saimai_shoriki.webp" alt="細米処理機">
                <p>精米の際にどうしても生まれる、<br>
                    割れや欠けのあるお米（細米）を<br class="mb">
                    やさしく分けます。<br>
                    粒の大きさをそろえることで、<br class="mb">
                    炊きあがりが均一になり、<br>
                    ふっくらとした食感が際立ちます。</p>
            </article>

            <article class="workshop__unit fadein">
                <img src="<?php echo get_template_directory_uri(); ?>/image/workshop/hakari.webp" alt="量り機">
                <p>仕上げは量り機による袋詰め。<br>
                    機械で正確に30kgずつ袋に詰め、<br class="mb">
                    お客様のもとへ。<br>
                    新鮮な香りを逃さず、<br class="mb">
                    暮らしのリズムに寄り添う形でお届けします。</p>
            </article>

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

            <dl class="inquiry__data">
                <dt class="inquiry__tel">TEL:0566-21-1280</dt>
                <dt class="inquiry__mail">ktaka802@katch.ne.jp</dt>
            </dl>
        </div>
    </section>

</main>

<?php get_footer(); ?>