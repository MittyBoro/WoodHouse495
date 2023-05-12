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
          <FLabel title="Мини описание" :error="form.errors.mini_description" as="div">
            <FTextareaEditor v-model="form.mini_description" mini />
          </FLabel>
          <FLabel title="Полное описание" :error="form.errors.description" as="div">
            <FTextareaEditor v-model="form.description" mini />
          </FLabel>
          <FLabel title="Фотографии" :error="form.errors.gallery" as="div">
            <FFileInput v-model="form.gallery" multiple imagesOnly />
          </FLabel>
          <FLabel title="Страница" :error="form.errors.page_id" as="div">
            <FCheckboxList v-model="form.page_id" :list="pages" single />
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
          is_published: false,
          published_at: '',
          page_id: null,
          gallery: [],
        }),
      }
    },

    computed: {
      options() {
        let attrs = [
          {
            id: 1,
            title: 1,
          },
          {
            id: 2,
            title: 1,
          },
          {
            id: 3,
            title: 1,
          },
        ]

        return attrs

        this.$page.props.options.forEach((el) => {
          let value = {
            id: el.id,
            title: el.value,
          }
          let typeIndex = attrs.findIndex((attr) => attr.type == el.type)

          if (typeIndex === -1) {
            attrs.push({
              type: el.type,
              values: [value],
            })
          } else {
            attrs[typeIndex].values.push(value)
          }
        })

        return attrs
      },
    },
  }
</script>
