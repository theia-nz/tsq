require("./bootstrap");

import "@fortawesome/fontawesome-free/js/all";

// import anime from "animejs/lib/anime.es";

// import Swiper from "swiper/bundle";
// import "swiper/css/bundle";

import Swiper, { Autoplay, Navigation, Pagination, EffectFade } from "swiper";
import "swiper/css";
import "swiper/css/effect-fade";
import "swiper/css/navigation";
import "swiper/css/pagination";

const pageHome = new Swiper(".swiper-pagehome", {
    init: false,
    modules: [Autoplay, Navigation, Pagination, EffectFade],
    loop: true,
    speed: 600,
    autoplay: {
        delay: 3000,
    },
    effect: "fade",
    fadeEffect: {
        crossFade: true,
    },
    navigation: {
        nextEl: ".swiper-button-next-pagehome",
        prevEl: ".swiper-button-prev-pagehome",
        clickable: true,
    },
    pagination: {
        el: ".swiper-pagination-pagehome",
        clickable: true,
    },
});

pageHome.on("init", () => {
    document.getElementById("swiper-index-pagehome").innerHTML = (
        pageHome.realIndex + 1
    )
        .toString()
        .padStart(2, "0");
});

pageHome.init();

pageHome.on("slideChange", () => {
    document.getElementById("swiper-index-pagehome").innerHTML = (
        pageHome.realIndex + 1
    )
        .toString()
        .padStart(2, "0");
});
