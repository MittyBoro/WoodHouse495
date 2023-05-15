<template>
  <div class="form-grid">
    <FNotice>
      Поле «Название» обычно отображается только в панели управления
    </FNotice>

    <FTitleSlug :form="form" />

    <FLabel
      title="Контент"
      subtitle="если нужно: прайс и т.п."
      :error="form.errors.description"
      as="div"
    >
      <FTextareaEditor v-model="form.description" />
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
