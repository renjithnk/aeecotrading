import swiperlibrary from '../vendors/swiper.js';

var heroSlider = new Swiper('.hero-slider', {
    loop: true,
    speed: 900,
    effect: 'fade',
  fadeEffect: {
    crossFade: true
  },
  autoplay: {
    delay: 3100,
    disableOnInteraction: false,
  },
  navigation: {
  nextEl: '.swiper-button-next1',
  prevEl: '.swiper-button-prev1',
  },
  pagination: {
    el: '.hero-slider-pagination',
    type: 'bullets',
  clickable: true,
  }
  });

export default heroSlider;  