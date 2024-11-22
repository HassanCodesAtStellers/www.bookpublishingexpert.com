jQuery.noConflict();
$(document).ready(function () {
  const heroCarousel = $(".hero-carousel");

  heroCarousel.owlCarousel({
    items: 1,
    margin: 10,
    loop: true,
    autoplay: true,
    autoplayTimeout: 10000,
    autoplayHoverPause: true,
    // smartSpeed: 1000,
    nav: false,
    dots: false,
    // animateOut: 'fadeOut',
    // animateIn: "fadeIn",
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

  $("#customPrev").click(function () {
    heroCarousel.trigger("prev.owl.carousel");
  });

  $("#customNext").click(function () {
    heroCarousel.trigger("next.owl.carousel");
  });

  function hideSlideElements() {
    const items = $(".hero-carousel .item");
    items.each(function () {
      const overlay = $(this).find(".overlay");
      const image = $(this).find("img");
      const text6 = $(this).find("#text6");
      const text7 = $(this).find("#text7");

      gsap.set([overlay, image, text6, text7], {
        opacity: 0,
      });
    });
  }

  function animateCurrentSlide() {
    const activeSlide = $(".hero-carousel .owl-item.active .item");
    const activeImage = activeSlide.find("img");
    const activeOverlay = activeSlide.find(".overlay");
    const activeText6 = activeSlide.find("#text6");
    const activeText7 = activeSlide.find("#text7");

    gsap.fromTo(
      activeOverlay,
      {
        x: 0,
        opacity: 1,
      },
      {
        x: 525,
        opacity: 1,
        duration: 2,
        ease: "power4.out",
      }
    );

    gsap.fromTo(
      activeImage,
      {
        x: 100,
        opacity: 0,
      },
      {
        x: 0,
        opacity: 1,
        duration: 1.5,
        ease: "power4.out",
      }
    );

    gsap.fromTo(
      activeText6,
      {
        y: 30,
        opacity: 0,
      },
      {
        y: 0,
        opacity: 1,
        duration: 1.25,
        delay: 0.25,
        ease: "power4.out",
      }
    );
    gsap.fromTo(
      activeText7,
      {
        y: 30,
        opacity: 0,
      },
      {
        y: 0,
        opacity: 1,
        duration: 1.25,
        delay: 0.25,
        ease: "power4.out",
      }
    );
  }

  hideSlideElements();
  animateCurrentSlide();

  heroCarousel.on("translate.owl.carousel", function () {
    hideSlideElements();
  });

  heroCarousel.on("translated.owl.carousel", function () {
    animateCurrentSlide();
  });
});

gsap.from("#text1", {
  x: 50,
  duration: 2,
  delay: 1.2,
  opacity: 0,
  ease: "power4.out",
});

gsap.from("#text2", {
  x: 50,
  duration: 2,
  delay: 1.3,
  opacity: 0,
  ease: "power4.out",
});

gsap.from("#text3", {
  x: 50,
  duration: 2,
  delay: 1.4,
  opacity: 0,
  ease: "power4.out",
});

gsap.from("#text4", {
  x: 50,
  duration: 2,
  delay: 1.5,
  opacity: 0,
  ease: "power4.out",
});
