import { slideDown, slideUp } from '../libs/slideToggle'

// вкладки
document.querySelectorAll('[tabs-here]').forEach((parent) => {
  let tabNames = parent.querySelectorAll('[data-tab-name]')

  if (!tabNames.length) return

  tabNames.forEach((el) => {
    el.addEventListener('click', () => {
      parent
        .querySelectorAll('[data-tab-name], [data-tab-content]')
        .forEach((tn) => tn.classList.remove('tab-active'))

      el.classList.add('tab-active')

      parent
        .querySelectorAll('[data-tab-content="' + el.dataset.tabName + '"]')
        .forEach((tc) => tc.classList.add('tab-active'))
    })
  })

  parent.querySelectorAll('[tab-next], [tab-prev]').forEach((el) => {
    el.addEventListener('click', () => {
      let localTabNames = [...tabNames]

      if (el.hasAttribute('tab-prev'))
        localTabNames = [...localTabNames].slice().reverse()

      let element
      let willBeNext = false

      localTabNames.some((tItem) => {
        if (willBeNext) {
          element = tItem
          return true
        }
        if (tItem.classList.contains('tab-active')) willBeNext = true
      })

      if (!element) element = localTabNames[0]

      if (element) element.click()
    })
  })
})

// slidetoggle
document.querySelectorAll('[toggling] [toggle-click]').forEach((element) => {
  let toggling = element.closest('[toggling]'),
    toggleEl = toggling.querySelector('[toggle-el]')

  toggling.classList.add('initialized')
  if (!toggling.classList.contains('active') && toggleEl) {
    toggleEl.style.display = 'none'
  }

  element.addEventListener('click', (e) => {
    if (
      e.target.classList.contains('prevent') ||
      e.target.closest('.prevent')
    ) {
      return
    }

    if (toggling.classList.contains('active')) {
      toggling.classList.remove('active')
      if (toggleEl) slideUp(toggleEl, 300)
    } else {
      toggling.classList.add('active')
      if (toggleEl) slideDown(toggleEl, 300)
    }
  })
})
