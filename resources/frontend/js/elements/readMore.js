document.querySelectorAll('.read-more').forEach((el) => {
  let parent = el.closest(`[class*='-box']`)

  el.addEventListener('click', () => {
    parent.classList.toggle('read-active')
  })
})
