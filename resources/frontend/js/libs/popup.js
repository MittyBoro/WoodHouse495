import { setScrollbarWidth } from './methods'

document.addEventListener('DOMContentLoaded', function () {
  // popup окна

  window.openPopup = function (popupClass, popupData = null) {
    let popup = document.querySelector(popupClass)
    if (!popup) return

    document
      .querySelectorAll('.popup-boxes > .active')
      .forEach((el) => el.classList.remove('active'))
    popup.classList.add('active')

    document.documentElement.classList.add('noscroll')

    setScrollbarWidth()

    const event = new CustomEvent('popupOpened', {
      detail: {
        popupClass: popupClass,
        popupData: popupData,
        element: popup,
      },
    })
    document.dispatchEvent(event)

    if (history.state) {
      history.replaceState({ popup: popupClass }, '', '#popup')
    } else {
      history.pushState({ popup: popupClass }, '', '#popup')
    }
  }

  window.closePopups = (goBack = true) => {
    let activePopups = document.querySelectorAll('.popup-boxes > .active')

    if (!activePopups.length) return

    activePopups.forEach((el) => {
      el.classList.remove('active')

      const event = new CustomEvent('popupClosed', {
        detail: {
          element: el,
        },
      })
      document.dispatchEvent(event)
    })

    document.documentElement.classList.remove('noscroll')

    if (goBack) {
      history.back()
    }
  }

  document.querySelectorAll('[data-popup]').forEach((el) => {
    el.addEventListener('click', (e) => {
      e.preventDefault()
      openPopup(el.dataset.popup, el.dataset.popupData)
    })
  })
  document.querySelectorAll('.close-popup').forEach((el) => {
    el.addEventListener('click', (e) => {
      e.preventDefault()
      closePopups()
    })
  })
  document.querySelectorAll('.popup').forEach((el) => {
    el.addEventListener('click', (e) => {
      if (e.target.classList.contains('popup')) closePopups()
    })
  })

  document.onkeydown = function (evt) {
    evt = evt || window.event
    var isEscape = false
    if ('key' in evt) {
      isEscape = evt.key === 'Escape' || evt.key === 'Esc'
    } else {
      isEscape = evt.keyCode === 27
    }
    if (isEscape) {
      closePopups()
    }
  }

  window.addEventListener('popstate', (event) => {
    closePopups(false)

    if (event.state?.popup) {
      openPopup(event.state?.popup)
    }
  })

  document.onkeydown = function (evt) {
    evt = evt || window.event
    let isEscape = false
    if ('key' in evt) {
      isEscape = evt.key === 'Escape' || evt.key === 'Esc'
    } else {
      isEscape = evt.keyCode === 27
    }
    if (isEscape) {
      closePopups()
    }
  }

  // видео с autoplay and lazy
  document.addEventListener('popupOpened', (e) => {
    e.detail.element
      .querySelectorAll('iframe[data-src]')
      .forEach(async (el) => {
        el.src = el.dataset.src
        await new Promise((resolve) => el.addEventListener('load', resolve))
        el.removeAttribute('data-src')
      })

    e.detail.element
      .querySelectorAll('iframe[autoplay]')
      .forEach(async (el) => {
        if (el.hasAttribute('data-src')) {
          await new Promise((resolve) => el.addEventListener('load', resolve))
        }
        el.contentWindow.postMessage(
          '{"event":"command","func":"playVideo","args":""}',
          '*'
        )
      })
  })
  document.addEventListener('popupClosed', (e) => {
    e.detail.element.querySelectorAll('iframe[autoplay]').forEach((el) => {
      el.contentWindow.postMessage(
        '{"event":"command","func":"stopVideo","args":""}',
        '*'
      )
    })
  })
})
