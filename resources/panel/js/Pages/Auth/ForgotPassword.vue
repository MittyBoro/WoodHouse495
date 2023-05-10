<template>
  <AuthLayout>
    <div class="mb-4 text-sm text-gray-600">
      Забыли пароль? Нет проблем. Просто сообщите Ваш email-адрес и мы пришлём Вам ссылку для сброса
      пароля.
    </div>

    <div v-if="status" class="mb-4 font-semibold text-sm text-green-600">
      {{ status }}
    </div>

    <FValidationErrors class="mb-4" />

    <form @submit.prevent="submit">
      <FLabel title="Email" classes="block">
        <FInput type="email" class="mt-1 block w-full" v-model="form.email" required autofocus />
      </FLabel>

      <div class="flex items-center justify-between mt-4">
        <Link :href="$panelRoute('login')" class="hover-link text-sm">Вход</Link>

        <FButton class="ml-4" :disabled="form.processing">Cброс пароля</FButton>
      </div>
    </form>
  </AuthLayout>
</template>

<script>
  import AuthLayout from '../../Layouts/AuthLayout.vue'

  export default {
    components: {
      AuthLayout,
    },

    props: {
      status: String,
    },

    data() {
      return {
        form: this.$inertia.form({
          email: '',
        }),
      }
    },

    methods: {
      submit() {
        this.form.post(this.$panelRoute('password.email'))
      },
    },
  }
</script>
