<template>
  <AppLayout :title="editorTitle(isEdit)">
    <FormSection :submit="submit" :form="form" :tabs="['Основное', 'Пароль']" mini>
      <template #content="sb">
        <TabMain v-show="sb.activeTab == 'Основное'" :form="form" />
        <TabPassword v-show="sb.activeTab == 'Пароль'" :form="form" />
      </template>
    </FormSection>
  </AppLayout>
</template>

<script>
  import AppLayout from '@/Layouts/AppLayout.vue'
  import FormSection from '@/Layouts/Sections/Form.vue'

  import TabMain from './Form/Main.vue'
  import TabPassword from './Form/Password.vue'

  import Form from '@/Mixins/Form/Form.js'

  export default {
    mixins: [Form],

    components: {
      AppLayout,
      FormSection,
      TabMain,
      TabPassword,
    },

    data() {
      if (this.$page.props.item) {
        this.$page.props.item = Object.assign(
          {
            current_password: '',
            password: '',
            password_confirmation: '',
          },
          this.$page.props.item
        )
      }
      return {
        form: this.setForm({
          name: '',
          email: '',
          email_notification: false,
          role: '',

          password: '',
          password_confirmation: '',
        }),
      }
    },
  }
</script>
