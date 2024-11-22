$(document).ready(function () {
  $(".slider-carousel").owlCarousel({
    items: 6,
    margin: 15,
    loop: true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    smartSpeed: 1000,
    nav: true,
    dots: true,
    responsive: {
      0: {
        items: 2,
      },
      425: {
        items: 2,
      },
      480: {
        items: 3,
      },
      768: {
        items: 4,
      },
      1024: {
        items: 5,
      },
      1440: {
        items: 6,
      },
    },
  });
});
