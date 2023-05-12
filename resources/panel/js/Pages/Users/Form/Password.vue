<template>
  <div class="form-grid">
    <FLabel
      v-if="$page.props.auth.user.id == form.id"
      title="Текущий пароль"
      :error="form.errors.current_password"
    >
      <FInput type="password" v-model="form.current_password" />
    </FLabel>

    <FLabel title="Новый пароль" :error="form.errors.password">
      <FInput type="password" v-model="form.password" />
    </FLabel>

    <FLabel title="Подтверждение пароля" :error="form.errors.password_confirmation">
      <FInput type="password" v-model="form.password_confirmation" />
    </FLabel>
  </div>
</template>

<script>
  export default {
    props: ['form'],
  }
</script>
