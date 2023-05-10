export default {
  data() {
    return {}
  },

  computed: {
    isAdmin() {
      return this.$page.props.auth.user.role == 'admin'
    },
  },

  methods: {
    editorTitle(isEdit) {
      return isEdit ? 'Редактировать' : 'Добавить'
    },
    confirm(e) {
      if (!confirm('Вы уверены?')) e.preventDefault()
    },

    truncateString(str, num) {
      return str.length > num ? str.substr(0, num) + '...' : str
    },
  },
}
