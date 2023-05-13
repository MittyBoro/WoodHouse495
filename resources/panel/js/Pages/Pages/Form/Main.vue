<template>
  <div class="form-grid">
    <FTitleSlug :form="form" />

    <FLabel
      title="Контент"
      subtitle="HTML, если нужно: прайс и т.п."
      :error="form.errors.description"
      as="div"
    >
      <FTextareaEditor v-model="form.description" />
      <FNotice class="bg-red-600 text-white">Уточнить как лучше!</FNotice>
      <FTextarea v-model="form.description" />
    </FLabel>

    <FLabel title="Имя шаблона" :error="form.errors.view">
      <FInput type="text" v-model="form.view" />
    </FLabel>
  </div>
</template>

<script>
  export default {
    props: ['form'],
  }
</script>
