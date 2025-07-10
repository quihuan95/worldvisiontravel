import axios from "axios";
import Swiper from "swiper/bundle";
import "swiper/css/bundle";

window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

document.addEventListener("DOMContentLoaded", function () {
    // Partners Swiper
    new Swiper(".swiper-container", {
        slidesPerView: 5, // Số logo hiển thị cùng lúc
        spaceBetween: 30, // Khoảng cách giữa các logo
        loop: true, // Trượt vô hạn
        autoplay: {
            delay: 2000, // Thời gian giữa các lần trượt
            disableOnInteraction: false, // Không dừng khi người dùng tương tác
        },
        breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            640: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 30,
            },
        },
    });

    // News Swiper
    new Swiper(".news-swiper-container", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".news-swiper-button-next",
            prevEl: ".news-swiper-button-prev",
        },
        pagination: {
            el: ".news-swiper-pagination",
            clickable: true,
        },
        autoHeight: true,
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            1280: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
        },
    });
});
