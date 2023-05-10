<template>
  <div class="form-grid">
    <!-- <FNotice>
      Укажите <code class="monfont-mono font-semibold">%replace%</code>, для замены на значение из дочернего элемента
    </FNotice> -->
    <FTitleSlug :form="form" />

    <FLabel title="Мини описание" :error="form.errors.description" as="div">
      <FTextareaEditor v-model="form.mini_description" mini />
    </FLabel>

    <FLabel title="Контент(если нужно: прайс и т.п.)" :error="form.errors.description" as="div">
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
