/**
 * подключать в конкретных случаях
 */
export default {
  data() {
    return {
      form: {},
    }
  },

  computed: {
    isEdit() {
      return !!this.$page.props.item
    },
  },

  created() {
    this.$inertia.on('finish', (finish) => {
      this.form.errorsObj = this.errorKeysToObject(this.form.errors)
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
      let newForm = JSON.parse(JSON.stringify(this.$page.props.item || defaultForm))

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
      console.log('this.form', this.form)
      this.form.post(this.currentRoute('store'), {
        preserveState: (page) => Object.keys(page.props.errors).length,
        preserveScroll: true,
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
        })
    },
  },
}
