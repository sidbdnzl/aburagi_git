<footer class="footer">
    <div class="footer__inner">
        <div class="footer__unit">
            <div class="footer__logo">
                <a href="<?php echo home_url('/'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/main_logo.webp" loading="lazy" alt="油木米精米所" width="93" height="259" decoding="async" fetchpriority="high">
                </a>
            </div>

            <div class="footer__nav">
                <ul class="footer__list">
                    <li class="footer__item <?php if(is_front_page()) echo 'is-active'; ?>">
                        <a href="<?php echo home_url('/'); ?>">HOME</a>
                    </li>
                    <li class="footer__item <?php if((is_home() || is_single() || is_archive()) && !is_front_page()) echo 'is-active'; ?>">
                        <a href="<?php echo home_url('/news'); ?>">お知らせ</a>
                    </li>
                    <li class="footer__item <?php if(is_page('seimai')) echo 'is-active'; ?>">
                        <a href="<?php echo home_url('/seimai'); ?>">こだわりの精米</a>
                    </li>
                </ul>
                <ul class="footer__list">
                    <li class="footer__item <?php if(is_page('kome')) echo 'is-active'; ?>">
                        <a href="<?php echo home_url('/kome'); ?>">取り扱い銘柄</a>
                    </li>
                    <li class="footer__item">
                        <a href="<?php echo home_url('/'); ?>#store">店舗情報</a>
                    </li>
                </ul>
            </div>

            <div class="footer__text">
                <h2 class="footer__title">米搗き工房　油木米販売所</h2>
                <p class="footer__address">
                    〒448-0037<br>愛知県刈谷市高倉町4-612<br>
                    <div class="footer__item">
                        <a  href="https://maps.app.goo.gl/BFqNzaKjLcJmHPXw9">(Google Maps)</a>
                    </div>
                </p>
            </div>
        </div>
        <small class="footer__copy">© 2026 aburagi</small>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>