import { slideToggle } from '../libs/slideToggle'

document
  .querySelectorAll('.popup-menu .menu-dropdown .mid-name')
  .forEach((el) => {
    let parent = el.closest('.menu-dropdown')
    let list = parent.querySelector('.mid-list')

    el.addEventListener('click', () => {
      slideToggle(list)
      parent.classList.toggle('active')
    })
  })

document.querySelectorAll('.popup-menu .menu-row a').forEach((a) => {
  a.addEventListener('click', () => {
    closePopups()
  })
})
