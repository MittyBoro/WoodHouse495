import { useToast } from 'vue-toastification'

export default {
  data() {
    return {
      toast: useToast(),
      noticesForForm: {
        onSuccess: () => this.noticeSuccess(),
        onError: (errors) => this.noticeError(errors),
      },
    }
  },
  methods: {
    noticeSuccess(text = 'Сохранено') {
      this.notify(text, 'success')
    },
    noticeError(errors) {
      let text = Object.values(errors)
      this.notifyErrorByResponse(text)
    },

    notify(text, type = 'info') {
      this.toast[type](text, {
        position: 'top-right',
        timeout: 4500,
        closeOnClick: true,
        pauseOnFocusLoss: true,
        pauseOnHover: true,
        draggable: true,
        draggablePercent: 0.3,
        showCloseButtonOnHover: true,
        hideProgressBar: false,
        closeButton: 'button',
        icon: true,
        maxToasts: 20,
        newestOnTop: true,
      })
    },

    notifyErrorByResponse(errors) {
      if (typeof errors === 'object') {
        Object.values(errors).forEach((el) => {
          this.notify(el, 'error')
        })
      } else if (typeof errors === 'string') {
        this.notify(errors, 'error')
      }
    },
  },
}
