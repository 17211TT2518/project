var swiper = new Swiper('#swiper-container2', {

  watchSlidesProgress: true,
  watchSlidesVisibility: true,
  slidesPerView: 2,
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});