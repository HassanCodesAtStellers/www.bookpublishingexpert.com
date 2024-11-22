$(document).ready(function () {
  $(".badge-carousel").owlCarousel({
    items: 5,
    loop: true,
    autoplay: true,
    autoplayTimeout: 2500,
    autoplayHoverPause: true,
    nav: true,
    dots: true,
    smartSpeed: 1000,
    responsive: {
      0: {
        items: 2,
      },
      425: {
        items: 3,
      },
      768: {
        items: 4,
      },
      1024: {
        items: 5,
      },
    },
  });
});
