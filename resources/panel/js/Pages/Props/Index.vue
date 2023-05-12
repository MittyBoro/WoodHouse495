<template>
  <AppLayout title="Параметры">
    <FormSection
      class="max-w-3xl load-opacity"
      :tabs="tabs"
      :submit="updateList"
      :form="form"
      :hideButtons="!form.props.lengh"
    >
      <template #content="sp">
        <MPropsList
          v-if="form.props.lengh"
          :activeTab="sp.activeTab"
          :errors="form.errorsObj?.props"
          :list="form.props"
          @update="form.props = $event"
        />
        <div class="py-8 text-lg text-center text-gray-700" v-else>Параметров ещё нет</div>
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
        // tabs: Object.values(this.$page.props.tabs),
        form: this.setForm({}),
      }
    },

    computed: {
      tabs() {
        let tabs = []
        this.form.props.forEach((el) => tabs.push(el.tab))

        return [...new Set(tabs)]
      },
    },

    methods: {
      updateList() {
        this.form.post(this.currentRoute('update_list'), {
          forceFormData: true,
          preserveState: (page) => Object.keys(page.props.errors).length,
          preserveScroll: true,
        })
      },
    },
  }
</script>
