/**
 * подключать в конкретных случаях
 */
export default {
  methods: {
    update(item) {
      item.index_edit = true

      let form = this.$inertia.form(item)

      form.put(this.currentRoute('update', item.id), {
        preserveScroll: true,
      })
    },
  },
}
