/**
 * подключать в конкретных случаях
 */
import Notify from './Notify'

export default {
  mixins: [Notify],

  methods: {
    update(item) {
      item.index_edit = true

      let form = this.$inertia.form(item)

      form.put(this.currentRoute('update', item.id), {
        preserveScroll: true,
        ...this.noticesForForm,
      })
    },
  },
}
