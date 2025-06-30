import axios from "axios";
import Swiper from "swiper/bundle";
import "swiper/css/bundle";

window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".swiper-container", {
        slidesPerView: 5, // Số logo hiển thị cùng lúc
        spaceBetween: 30, // Khoảng cách giữa các logo
        loop: true, // Trượt vô hạn
        // autoplay: {
        //     delay: 2000, // Thời gian giữa các lần trượt
        //     disableOnInteraction: false, // Không dừng khi người dùng tương tác
        // },
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
});
