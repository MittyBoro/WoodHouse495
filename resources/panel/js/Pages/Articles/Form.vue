<template>
  <AppLayout :title="editorTitle(isEdit)">
    <FormSection :submit="submit" :form="form" :tabs="['Основное', 'SEO']" middle>
      <template #content="sb">
        <TabMain v-show="sb.activeTab == 'Основное'" :form="form" />
        <MTabSeo v-show="sb.activeTab == 'SEO'" :form="form" />
      </template>
    </FormSection>
  </AppLayout>
</template>

<script>
  import AppLayout from '@/Layouts/AppLayout.vue'
  import FormSection from '@/Layouts/Sections/Form.vue'

  import TabMain from './Form/Main.vue'

  import Form from '@/Mixins/Form/Form.js'

  export default {
    mixins: [Form],

    components: {
      AppLayout,
      FormSection,

      TabMain,
    },

    data() {
      return {
        form: this.setForm({
          title: null,
          slug: null,
          mini_description: null,
          description: null,

          is_published: false,
          published_at: null,

          gallery: [],

          meta_title: null,
          meta_description: null,
          meta_keywords: null,
        }),
      }
    },
  }
</script>
