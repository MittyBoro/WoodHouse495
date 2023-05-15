/**
 * подключать в конкретных случаях
 */

import { router } from '@inertiajs/vue3'
import Notify from './Notify'

export default {
  data() {
    return {
      form: {},
      removeStartEventListener: null,
      beforeUnloadListener: (event) => {
        event.preventDefault()
        return (event.returnValue = '')
      },
    }
  },

  mixins: [Notify],

  computed: {
    isEdit() {
      return !!this.$page.props.item
    },
  },

  watch: {
    'form.isDirty'(val) {
      // закрытие страницы
      if (val) {
        addEventListener('beforeunload', this.beforeUnloadListener, {
          once: true,
        })
      } else {
        removeEventListener('beforeunload', this.beforeUnloadListener, {
          once: true,
        })
      }
    },
  },

  created() {
    this.$inertia.on('finish', () => {
      this.form.errorsObj = this.errorKeysToObject(this.form.errors)
    })
  },

  mounted() {
    // переход внутри проложения
    this.removeStartEventListener = router.on('before', (event) => {
      if (event.detail.visit.method != 'get') {
        return true
      }
      if (!this.form.isDirty) {
        return true
      }
      return confirm(
        'Вы действительно хотите уйти? Внесённые изменения не сохранятся.'
      )
    })
  },
  beforeUnmount() {
    this.removeStartEventListener()
    removeEventListener('beforeunload', this.beforeUnloadListener, {
      once: true,
    })
  },

  methods: {
    errorKeysToObject(errors) {
      let object = {}

      Object.entries(errors).forEach((element) => {
        let path = element[0].split('.'),
          last = path.pop()
        path.reduce((o, k) => (o[k] = o[k] || {}), object)[last] = element[1]
      })

      return object
    },

    setForm(defaultForm) {
      let newForm = JSON.parse(
        JSON.stringify(this.$page.props.item || defaultForm)
      )

      if (this.$page.props.item) {
        for (const key in defaultForm) {
          if (!newForm.hasOwnProperty(key)) {
            newForm[key] = defaultForm[key]
          }
        }
      }

      return this.$inertia.form(newForm)
    },

    submit() {
      this.isEdit ? this.update() : this.store()
    },

    store() {
      this.form.post(this.currentRoute('store'), {
        preserveState: (page) => Object.keys(page.props.errors).length,
        preserveScroll: true,
        ...this.noticesForForm,
      })
    },

    update() {
      this.form
        .transform((data) => ({
          ...data,
          _method: 'PUT',
        }))
        .post(this.currentRoute('update', this.form.id), {
          preserveState: (page) => Object.keys(page.props.errors).length,
          preserveScroll: true,
          ...this.noticesForForm,
        })
    },
  },
}
