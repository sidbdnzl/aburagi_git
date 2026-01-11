// window.addEventListener('DOMContentLoaded', () => {
//     const hamburger = document.getElementById("hamburger");
//     const menu = document.getElementById("menu");
//     const body = document.body;

//     hamburger.addEventListener("click", () => {
//         hamburger.classList.toggle("is-active");
//         menu.classList.toggle("is-active");
//         // overlay.classList.toggle("is-active");
//         body.classList.toggle("no-scroll");
//     });

window.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.getElementById("hamburger");
    const menu = document.getElementById("gnav"); // ← ここ重要
    const body = document.body;

    if (!hamburger || !menu) return;

    hamburger.addEventListener("click", () => {
        const expanded = hamburger.getAttribute("aria-expanded") === "true";

        hamburger.classList.toggle("is-active");
        menu.classList.toggle("is-active");
        body.classList.toggle("no-scroll");

        // ★ aria制御（検証対策）
        hamburger.setAttribute("aria-expanded", String(!expanded));
        hamburger.setAttribute(
            "aria-label",
            expanded ? "メニューを開く" : "メニューを閉じる"
        );
    });

    const swiper = new Swiper(".mySwiper", {
        slidesPerView: 2,
        spaceBetween: 30,
        autoplay: true,
        loop: true,
    });

    const fadeInElements = document.querySelectorAll('.fadein');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, { threshold: 0.2 });

    fadeInElements.forEach(el => observer.observe(el));
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

window.addEventListener("DOMContentLoaded", () => {
    // aタグ自体にクラスがつくようにJSが書かれているため、それを前提に調整します
    const gnavLinks = document.querySelectorAll(".gnav__list2 a, .gnav__list a");
    const aburagi = document.querySelector(".aburagi");
    const inquiry = document.querySelector(".inquiry");
    const koubouImg = document.querySelector(".header__koubouimg");
    const hamburger = document.querySelector("#hamburger");

    let ticking = false;

    const isInSection = (section) => {
        if (!section) return false;
        const rect = section.getBoundingClientRect();
        const triggerPoint = window.innerHeight * 0.1; // 画面上部10%の位置で判定

        // getBoundingClientRectは画面内での位置を返すので計算がシンプルになります
        return rect.top < triggerPoint && rect.bottom > triggerPoint;
    };

    const onScroll = () => {
        const inWhiteZone = isInSection(aburagi) || isInSection(inquiry);

        // ナビリンク（aタグ）に is-white をつけ外し
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

    // 初期状態チェック
    onScroll();
});