var swiper = new Swiper(".mySwiper2", {
  slidesPerView: 4,
  spaceBetween: 20,
  loop: true,
  speed: 800,
  effect: "slide",
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  breakpoints: {
    1440: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    430: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    0: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
  },
});
