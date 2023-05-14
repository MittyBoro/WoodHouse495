window.portfolioPopup = (json) => {
  console.log('stringData', json)

  document.querySelectorAll('.popup-project').forEach((el) => {
    let topGalleryHTML = ''
    let thumbsGalleryHTML = ''

    el.querySelector('.pr-title').innerText = json.title
    el.querySelector('.pr-place').innerText = json.location
    el.querySelector('.pr-description').innerHTML = json.description

    json.gallery.forEach((image) => {
      topGalleryHTML += `
        <div class="swiper-slide">
          <div class="prf-image zoom-image"
            style="background-image: url(${image.big})">
            <img loading="lazy" src="${image.medium}" alt="">
          </div>
        </div>`
      thumbsGalleryHTML += `
        <div class="swiper-slide">
          <div class="prt-image">
            <img loading="lazy" src="${image.thumb}" alt="">
          </div>
        </div>`
    })

    el.querySelector('.pl-top-gallery').innerHTML = topGalleryHTML
    el.querySelector('.pl-thumbs-gallery').innerHTML = thumbsGalleryHTML

    popupThumbsGallery.update()
    popupTopGallery.update()

    el.classList.add('loading')

    setTimeout(() => {
      popupThumbsGallery.slideTo()
      popupTopGallery.slideTo(0)
      el.classList.remove('loading')
    }, 400)
  })

  openPopup('.popup-project')
}
