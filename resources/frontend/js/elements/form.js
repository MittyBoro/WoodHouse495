import API from '../libs/api'

let extraFormData = null

document.querySelectorAll('form.form').forEach((form) => {
  form.addEventListener('submit', (e) => {
    e.preventDefault()

    form.classList.add('loading')

    let formData = new FormData(form)

    if (extraFormData) {
      extraFormData.forEach(function (value, key) {
        let k = `extra[${key}]`

        if (formData.get(k)) {
          // чуть костыль
          value = extraFormData.getAll(key)
        }
        formData.append(k, value)
      })
    }

    API.postFile('callback_order/store', formData)
      .then((res) => {
        openPopup('.popup-success')
        form.classList.add('done')
        form.querySelector('.form-policy').innerText = 'Мы приняли Вашу заявку!'
        extraFormData = null
      })
      .catch((err) => alert(err))
      .then(() => {
        form.classList.remove('loading')
      })
  })
})

document.querySelectorAll('form.form-calc').forEach((form) => {
  form.addEventListener('submit', (e) => {
    e.preventDefault()

    extraFormData = new FormData(form)

    // var object = {}
    // extraData = JSON.stringify(object)

    openPopup('.popup-calculation')
  })
})
