<template>
  <div class="flex flex-wrap gap-3">
    <FLabel title="Опубликовано?" :error="form.errors.is_published" class="mr-6">
      <FSwitcher v-model="form.is_published" />
    </FLabel>
    <FLabel title="Дата публикации" :error="form.errors.published_at" class="w-full">
      <FInput type="datetime-local" v-model="published_at" />
    </FLabel>
  </div>
</template>

<script>
  export default {
    props: {
      form: Object,
    },

    computed: {
      published_at: {
        get() {
          return this.dateTimeToInput(this.form.published_at)
        },
        set(val) {
          this.form.published_at = this.inputDateToUTC(val) || ''
        },
      },
    },

    methods: {},
  }
</script>
