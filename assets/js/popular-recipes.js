var swiper = new Swiper('.swiper-container-popular-recipes', {
    // autoplay: {
    //     delay: 5000,
    //   },
      fadeEffect: {
        crossFade: true
      },
      slidesPerView: 3,
      spaceBetween: 30,
      navigation: {
        nextEl: '.swiper-button-next-popular-recipes',
        prevEl: '.swiper-button-prev-popular-recipes',
      },
      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1,
          spaceBetween: 20
        },
         // when window width is >= 480px
         480: {
          slidesPerView: 2,
          spaceBetween: 30
        },
        // when window width is >= 480px
        992: {
          slidesPerView: 3,
          spaceBetween: 30
        },
      }
});