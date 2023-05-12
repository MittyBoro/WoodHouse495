export default {
  data() {
    return {
      userRoles: {
        admin: 'Администратор',
        editor: 'Редактор',
        user: 'Пользователь',
        blocked: 'Заблокирован',
      },
    }
  },

  computed: {
    isAdmin() {
      return this.$page.props.auth.user.role == 'admin'
    },
  },

  methods: {
    getUserRole(role) {
      return this.userRoles[role] || role
    },
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
