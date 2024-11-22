var swiper = new Swiper(".mySwiper3", {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  speed: 800,
  effect: "slide",
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    640: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 1,
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 1,
      spaceBetween: 40,
    },
  },
});
