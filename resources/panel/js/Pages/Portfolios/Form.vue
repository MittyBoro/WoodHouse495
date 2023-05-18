<template>
  <AppLayout :title="editorTitle(isEdit)">
    <FormSection :submit="submit" :form="form" middle>
      <template #content>
        <div class="form-grid">
          <FLabel title="Название" :error="form.errors.title">
            <FInput v-model="form.title" />
          </FLabel>
          <FLabel title="Расположение" :error="form.errors.location">
            <FInput v-model="form.location" />
          </FLabel>
          <FLabel title="Закрепить на главной" :error="form.errors.on_home">
            <FSwitcher v-model="form.on_home" />
          </FLabel>

          <FPublishedDate :form="form" />

          <FLabel
            title="Мини описание"
            :error="form.errors.mini_description"
            as="div"
          >
            <FTextareaEditor v-model="form.mini_description" mini />
          </FLabel>
          <FLabel
            title="Полное описание"
            :error="form.errors.description"
            as="div"
          >
            <FTextareaEditor v-model="form.description" mini />
          </FLabel>
          <FLabel title="Фотографии" :error="form.errors.gallery" as="div">
            <FFileInput v-model="form.gallery" multiple imagesOnly />
          </FLabel>
          <FLabel title="Страница" :error="form.errors.page_id" as="div">
            <FCheckboxList
              v-model="form.page_id"
              :list="pages"
              single
              notArray
            />
          </FLabel>
        </div>
      </template>
    </FormSection>
  </AppLayout>
</template>

<script>
  import AppLayout from '@/Layouts/AppLayout.vue'
  import FormSection from '@/Layouts/Sections/Form.vue'

  import Form from '@/Mixins/Form/Form.js'

  export default {
    mixins: [Form],

    components: {
      AppLayout,
      FormSection,
    },

    data() {
      return {
        pages: this.$page.props.pages,
        form: this.setForm({
          title: '',
          mini_description: '',
          description: '',
          location: '',
          on_home: false,
          is_published: false,
          published_at: '',
          page_id: null,
          gallery: [],
        }),
      }
    },
  }
</script>
