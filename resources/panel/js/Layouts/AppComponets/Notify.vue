<script>
  import { useToast } from 'vue-toastification'

  export default {
    data() {
      return {
        toast: useToast(),
        showNotify: false,
      }
    },
    methods: {
      addNotiEvents() {
        if (window.isNotiInit) return
        window.isNotiInit = true

        this.$inertia.on('start', (event) => {
          this.showNotify = event.detail.visit.method != 'get'
        })

        this.$inertia.on('success', (event) => {
          if (!this.showNotify) return

          this.notify('Сохранено', 'success')
        })

        this.$inertia.on('error', (err) => {
          if (!this.showNotify) return

          let errors = Object.values(err.detail.errors)

          this.notifyErrorByResponse(errors)
        })
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
</script>

<style lang="scss">
  #nprogress {
    .bar {
      height: 5px !important;
      background-color: theme('colors.primary.500');
      box-shadow: 0 0 10px theme('colors.primary.500');
    }
  }

  .loading {
    &::before,
    &::after {
      transition-property: theme('transitionProperty.DEFAULT');
      transition-timing-function: theme('transitionTimingFunction.DEFAULT');
      transition-duration: theme('transitionDuration.DEFAULT');
      pointer-events: none;
      opacity: 0;
    }

    &::before {
      content: '';
      position: absolute;
      top: -5px;
      left: 0;
      right: 0;
      bottom: -5px;
      background-color: theme('colors.white' / 90%);
      z-index: 30;
      border-radius: theme('borderRadius.DEFAULT');
      backdrop-filter: blur(4px);
    }

    &::after {
      content: '';
      position: absolute;
      width: 30px;
      height: 30px;
      margin-top: -15px;
      margin-left: -15px;
      border: 4px solid theme('colors.primary.500');
      border-left-color: transparent;
      border-right-color: transparent;
      border-radius: 50%;
      z-index: 40;
      top: 50%;
      left: 50%;
    }
  }

  .Vue-Toastification__toast-body {
    align-self: center;
    font-size: 14px;
    line-height: 1.35;
  }
  .Vue-Toastification__toast {
    padding: 15px 20px;
    max-width: 360px;
    min-height: auto;
  }
  .Vue-Toastification__icon {
    margin-right: 15px;
  }
  .Vue-Toastification__progress-bar {
    bottom: -3px;
  }
</style>
