<template>
  <div class="form-grid">
    <FTitleSlug :form="form" />

    <FPublishedDate :form="form" />

    <FLabel title="Мини описание" :error="form.errors.mini_description">
      <FTextareaEditor v-model="form.mini_description" mini />
    </FLabel>

    <FLabel title="Контент" :error="form.errors.description">
      <FTextareaEditor v-model="form.description" />
    </FLabel>

    <FLabel
      as="div"
      title="Фото"
      subtitle="(первое - заглавное, остальное - для контента)"
      :error="form.errors.gallery"
    >
      <FFileInput v-model="form.gallery" multiple imagesOnly />
    </FLabel>
  </div>
</template>

<script>
  export default {
    props: ['form'],
  }
</script>
