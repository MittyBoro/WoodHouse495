<template>
  <AuthLayout>
    <FValidationErrors class="mb-4" />

    <div v-if="status" class="mb-4 font-semibold text-sm text-green-600">
      {{ status }}
    </div>

    <form @submit.prevent="submit">
      <FLabel title="Email" classes="block">
        <FInput
          type="text"
          class="mt-1"
          v-model="form.email"
          required
          autofocus
        />
      </FLabel>

      <FLabel title="Пароль" classes="mt-4 block">
        <FInput type="password" class="mt-1" v-model="form.password" required />
      </FLabel>

      <div class="flex items-center mt-4">
        <FLabel classes="flex items-center cursor-pointer mr-auto">
          <FCheckbox name="remember" v-model="form.remember" />
          <span class="ml-2 text-sm text-gray-600">Запомнить меня</span>
        </FLabel>
      </div>

      <FButton class="w-full mt-4" :disabled="form.processing">Вход</FButton>

      <!-- <a :href="route('oauth.vk')" class="btn-vk w-full mt-4">Вход через ВК</a> -->

      <div class="flex items-center mt-4">
        <!-- <Link :href="$panelRoute('register')" class="link-hover mr-4 text-sm">Регистрация</Link> -->
        <Link
          :href="$panelRoute('password.request')"
          class="link-hover ml-auto text-sm"
        >
          Забыли пароль?
        </Link>
      </div>
    </form>
  </AuthLayout>
</template>

<script>
  import AuthLayout from '@/Layouts/AuthLayout.vue'
  export default {
    components: {
      AuthLayout,
    },

    props: {
      canResetPassword: Boolean,
      status: String,
    },

    data() {
      return {
        form: this.$inertia.form({
          email: '',
          password: '',
          remember: true,
        }),
      }
    },

    methods: {
      submit() {
        this.form
          .transform((data) => ({
            ...data,
            remember: this.form.remember ? 'on' : '',
          }))
          .post(this.$panelRoute('login'))
      },
    },
  }
</script>
