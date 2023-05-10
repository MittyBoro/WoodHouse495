<template>
  <AppLayout :title="editorTitle(isEdit)">
    <FormSection
      :submit="submit"
      :form="form"
      :tabs="['Основное', 'SEO', ...(isEdit ? ['Дополнительно'] : [])]"
      mini
    >
      <template #content="sb">
        <TabMain v-show="sb.activeTab == 'Основное'" :form="form" />
        <MTabSeo v-show="sb.activeTab == 'SEO'" :form="form" />
        <TabProps v-show="sb.activeTab == 'Дополнительно'" :form="form" />
      </template>
    </FormSection>
  </AppLayout>
</template>

<script>
  import AppLayout from '@/Layouts/AppLayout.vue'
  import FormSection from '@/Layouts/Sections/Form.vue'

  import TabMain from './Form/Main.vue'
  import TabProps from './Form/Props.vue'

  import Form from '@/Mixins/Form/Form.js'

  export default {
    mixins: [Form],

    components: {
      AppLayout,
      FormSection,

      TabMain,
      TabProps,
    },

    data() {
      return {
        form: this.setForm({
          title: null,
          slug: null,
          is_hidden: false,
          view: null,
          lang: null,

          description: null,

          meta_title: null,
          meta_keywords: null,
          meta_description: null,
        }),
      }
    },
  }
</script>
