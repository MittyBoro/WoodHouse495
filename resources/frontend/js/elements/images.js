import Rellax from 'rellax'

let rellax = new Rellax('.rellax', {
  center: true,
})

// для фикса lazy load, который не грузит боковые картинки
document.querySelectorAll('img[loading="lazy"]:not(.to-svg)').forEach((img) => {
  if (!img.width) {
    img.classList.add('lazy-width')
  }

  img.addEventListener('load', (e) => {
    if (img.classList.contains('lazy-width')) {
      img.classList.remove('lazy-width')
      rellax.refresh()
    }
  })
})
