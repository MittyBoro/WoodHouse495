// import {setScrollbarWidth} from './libs/methods';
import imgToSvg from '../libs/imgToSvg'

document.addEventListener('DOMContentLoaded', function () {
  // анимация перед загрузкой страницы выкл.
  let timerStart = Date.now()
  window.addEventListener('load', function () {
    window.timeEnd = Date.now() - timerStart
    let rem = 500 - window.timeEnd
    if (rem < 0) rem = 10
    setTimeout(() => {
      if (!window.manualPreloader) document.body.classList.remove('preload')
    }, rem)
  })

  document.addEventListener(
    'invalid',
    function (e) {
      e.target.classList.add('invalid')
    },
    true
  )
  document.addEventListener(
    'focus',
    function (e) {
      e.target.classList.remove('invalid')
      e.target.classList.remove('valid')
    },
    true
  )
  document.addEventListener(
    'change',
    function (e) {
      if (e.target?.checkValidity()) {
        e.target.classList.remove('invalid')
        e.target.classList.add('valid')
      } else {
        e.target.classList.add('invalid')
        e.target.classList.remove('valid')
      }
    },
    true
  )

  // document.addEventListener('scroll', e => {
  //   // переменная ширины кастомного скролла
  //   setScrollbarWidth('--scrollbar-width', 'custom-scroll');
  //   setScrollbarWidth();
  // });
  // setScrollbarWidth();
  // setScrollbarWidth('--scrollbar-width', 'custom-scroll');

  // image to svg, after other init
  document.addEventListener('readystatechange', function () {
    imgToSvg(document)
  })

  // prevet click inside link
  document.querySelectorAll('.prevent').forEach((el) => {
    el.addEventListener('click', (e) => {
      e.preventDefault()
    })
  })

  // form-input select
  document.querySelectorAll('.form-input .options-value').forEach((el) => {
    let parent = el.closest('.form-input')
    let input = parent.querySelector('input')

    el.addEventListener('click', (e) => {
      input.value = el.innerHTML
      parent
        .querySelectorAll('.options-value')
        .forEach((val) => val.classList.remove('active'))
      el.classList.add('active')
    })
  })
  document
    .querySelectorAll('.form-input .options-value:first-child')
    .forEach((el) => el.click())

  // переход по якорю
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener('click', (e) => {
      e.preventDefault()

      let selector = anchor.getAttribute('href')

      if (selector == '#') {
        selector = 'body'
      }

      const target = document.querySelector(selector)

      setTimeout(() => {
        scrollTo(target)
      }, 300)
      scrollTo(target)
    })
  })
  function scrollTo(target) {
    const offset = target.offsetTop - 30

    // Анимируем плавный скролл до элемента
    window.scrollTo({
      top: offset,
      behavior: 'smooth',
    })
  }
})
