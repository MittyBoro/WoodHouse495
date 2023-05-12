<template>
  <div class="form-grid">
    <FLabel title="Имя" :error="form.errors.name">
      <FInput type="text" v-model="form.name" />
    </FLabel>

    <FLabel title="Email" :error="form.errors.email">
      <FInput type="email" v-model="form.email" />
    </FLabel>
    <FLabel
      title="Получать административные email уведомления? "
      :error="form.errors.email_notification"
      classes="flex items-center"
    >
      <FSwitcher v-model="form.email_notification" class="mb-1" />
    </FLabel>

    <FLabel title="Роль" :error="form.errors.role">
      <FSelect :options="userRoles" v-model="form.role" />
    </FLabel>
  </div>
</template>

<script>
  export default {
    props: ['form'],
  }
</script>
