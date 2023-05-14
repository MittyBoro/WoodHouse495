import API from '../libs/api'

document.querySelectorAll('form.form').forEach((form) => {
  console.log('form', form)
  form.addEventListener('submit', (e) => {
    e.preventDefault()

    form.classList.add('loading')

    let formData = new FormData(form)

    API.postFile('callback_order/store', formData)
      .then((res) => {
        openPopup('.popup-success')
        form.classList.add('done')
        form.querySelector('.form-policy').innerText = 'Мы приняли Вашу заявку!'
      })
      .catch((err) => alert(err))
      .then(() => {
        form.classList.remove('loading')
      })
  })
})
