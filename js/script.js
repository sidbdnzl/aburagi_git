window.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.getElementById("hamburger");
    const menu = document.getElementById("menu");
    const body = document.body;

    hamburger.addEventListener("click", () => {
        hamburger.classList.toggle("is-active");
        menu.classList.toggle("is-active");
        // overlay.classList.toggle("is-active");
        body.classList.toggle("no-scroll");
    });

    const swiper = new Swiper(".mySwiper", {
        slidesPerView: 2,
        spaceBetween: 30,
        autoplay: true,
        loop: true,
    })



    const fadeInElements = document.querySelectorAll('.fadein');

    const options = {
        threshold: 0.2
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, options);

    fadeInElements.forEach(el => observer.observe(el));
});

window.addEventListener("DOMContentLoaded", () => {
    const gnavLinks = document.querySelectorAll(".gnav__list2 a");
    const aburagi = document.querySelector(".aburagi");
    const inquiry = document.querySelector(".inquiry"); // 追加！
    const koubouImg = document.querySelector(".header__koubouimg");
    const hamburger = document.querySelector("#hamburger");

    let ticking = false;

    // セクション内かどうか判定する関数
    const isInSection = (section) => {
        if (!section) return false;
        const rect = section.getBoundingClientRect();
        const scrollY = window.scrollY;

        const top = scrollY + rect.top;
        const bottom = scrollY + rect.bottom;
        const triggerPoint = scrollY + window.innerHeight * 0.1;

        return triggerPoint > top && triggerPoint < bottom;
    };

    const onScroll = () => {
        // aburagi か inquiry のどちらかに入っていたら白にする
        const inWhiteZone = isInSection(aburagi) || isInSection(inquiry);

        // ナビリンク
        gnavLinks.forEach(link => link.classList.toggle("is-white", inWhiteZone));

        // ロゴ画像
        if (koubouImg) koubouImg.classList.toggle("is-white", inWhiteZone);

        // ハンバーガー
        if (hamburger) hamburger.classList.toggle("is-white", inWhiteZone);

        ticking = false;
    };

    window.addEventListener("scroll", () => {
        if (!ticking) {
            requestAnimationFrame(onScroll);
            ticking = true;
        }
    });
});