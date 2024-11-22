$(document).ready(function () {
  $(".design-carousel").owlCarousel({
    items: 1,
    margin: 10,
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    smartSpeed: 1000,
    nav: true,
    dots: false,
    animateOut: "fadeOut",
    animateIn: "fadeIn",
    mouseDrag: false,
    touchDrag: false,
    responsive: {
      0: {
        items: 1,
      },
      425: {
        items: 1,
      },
      480: {
        items: 1,
      },
      768: {
        items: 1,
      },
      1024: {
        items: 1,
      },
      1440: {
        items: 1,
      },
    },
  });
});
