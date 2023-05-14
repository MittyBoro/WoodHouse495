import Swiper, {
  Navigation,
  Thumbs,
  Keyboard,
  EffectFade,
  Pagination,
} from 'swiper'

Swiper.use([Navigation, Thumbs, Keyboard, EffectFade, Pagination])

import 'swiper/css'
import 'swiper/css/effect-fade'

// popup-gallery
document.querySelectorAll('.popup-project .left-col').forEach((el) => {
  // слайдер товары
  let thumbContainer = el.querySelector('.thumbs-row .swiper')

  window.popupThumbsGallery = new Swiper(thumbContainer, {
    spaceBetween: 7,
    slidesPerView: 4,
    breakpoints: {
      992: {
        spaceBetween: 11,
      },
    },
  })

  let topContainer = el.querySelector('.full-row .swiper')

  window.popupTopGallery = new Swiper(topContainer, {
    loop: false,
    effect: 'fade',

    navigation: {
      nextEl: el.querySelector('.sw-next'),
      prevEl: el.querySelector('.sw-prev'),
    },
    thumbs: {
      swiper: window.popupThumbsGallery,
    },
  })
})

// about-mobile
document.querySelectorAll('.about-box .swiper').forEach((el) => {
  let swiper = new Swiper(el, {
    slidesPerView: 'auto',
    spaceBetween: 20,
    enabled: true,
    loop: true,

    pagination: {
      el: el.querySelector('.swiper-pagination'),
      clickable: true,
    },

    breakpoints: {
      768: {
        enabled: false,
        loop: false,
        spaceBetween: 0,
      },
    },
  })
})
