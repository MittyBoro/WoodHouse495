<template>
  <AppLayout title="Страницы">
    <IndexSection mini>
      <template #buttons>
        <div class="grid gap-6 sm:grid-flow-col">
          <Link :href="currentRoute('create')" class="btn">Добавить</Link>
        </div>
      </template>

      <template #content>
        <TTable :table="table">
          <template #pagination />

          <template #row="sp">
            <TData v-model="sp.element.title" @update:modelValue="update(sp.element)" />
            <TData v-model="sp.element.slug" @update:modelValue="update(sp.element)" />
          </template>
        </TTable>
      </template>
    </IndexSection>
  </AppLayout>
</template>

<script>
  import AppLayout from '@/Layouts/AppLayout.vue'
  import IndexSection from '@/Layouts/Sections/Index.vue'

  export default {
    components: {
      AppLayout,
      IndexSection,
    },

    data() {
      return {}
    },

    computed: {
      table() {
        return {
          headers: [
            { key: 'title', text: 'Заголовок', sortable: true },
            { key: 'slug', text: 'Ярлык', sortable: true },
          ],
          items: this.$page.props.list.data,
          pagination: this.$page.props.list,
        }
      },
    },

    methods: {
      update(item) {
        item.index_edit = true

        let form = this.$inertia.form(item)

        form.put(this.currentRoute('update', item.id), {
          preserveScroll: true,
        })
      },
    },
  }
</script>
