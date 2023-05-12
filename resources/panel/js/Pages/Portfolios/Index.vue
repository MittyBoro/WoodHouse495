<template>
  <AppLayout title="Портфолио">
    <IndexSection big>
      <template #buttons>
        <div class="grid gap-6 sm:grid-flow-col">
          <Link :href="currentRoute('create')" class="btn">Добавить</Link>
        </div>
      </template>

      <template #content>
        <ListFilter v-if="table.items.length" class="border-t bg-gray-50" />

        <TTable :table="table">
          <template #pagination />

          <template #row="sp">
            <TData v-model="sp.element.title" @update:modelValue="update(sp.element)" />
            <TData>
              <template v-if="sp.element.page_name">
                <div class="flex">
                  <span>{{ sp.element.page_name }}</span>
                  <Link :href="$panelRoute('pages.edit', sp.element, id)" class="link-hover ml-1">
                    <Icon icon="pen" class="opacity-50 scale-75" />
                  </Link>
                </div>
              </template>
              <span v-else>-</span>
            </TData>
            <TData mini :date="sp.element.created_at" />
            <TData mini>
              <FSwitcher
                v-model="sp.element.is_published"
                @update:modelValue="update(sp.element)"
                mini
              />
            </TData>
          </template>
        </TTable>
      </template>
    </IndexSection>
  </AppLayout>
</template>

<script>
  import AppLayout from '@/Layouts/AppLayout.vue'
  import IndexSection from '@/Layouts/Sections/Index.vue'
  import ListFilter from './Index/ListFilter.vue'

  import Table from '@/Mixins/Form/Table'

  export default {
    components: {
      AppLayout,
      IndexSection,
      ListFilter,
    },

    mixins: [Table],

    data() {
      return {}
    },

    computed: {
      table() {
        return {
          headers: [
            { key: 'title', text: 'Название', sortable: true },
            { key: 'page_name', text: 'Страница' },
            { key: 'created_at', text: 'Создано', sortable: true },
            {
              key: 'is_published',
              text: 'Опубликовано',
              fa: 'badge-check',
              sortable: true,
              class: 'text-center',
            },
          ],
          items: this.$page.props.list.data,
          pagination: this.$page.props.list,
        }
      },
    },
  }
</script>
