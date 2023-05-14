<template>
  <AppLayout title="Заявки на обратный звонок">
    <IndexSection middle>
      <template #content>
        <TPagination
          v-if="$page.props.list.total"
          :pages="$page.props.list"
          class="border-t border-b"
        />

        <div
          v-if="$page.props.list.data.length"
          class="px-1 lg:px-6 py-10 bg-gray-50 border-t grid grid-cols-6 gap-4 xl:gap-6"
        >
          <ListItem
            v-for="element in $page.props.list.data"
            :key="element.id"
            :element="element"
            :user="user"
          />
        </div>
        <div
          v-else
          class="w-full px-5 py-5 text-lg text-center bg-gray-50 text-gray-700"
        >
          Данных ещё нет
        </div>

        <TPagination
          v-if="$page.props.list.total"
          :pages="$page.props.list"
          class="border-t"
        />
      </template>
    </IndexSection>
  </AppLayout>
</template>

<script>
  import AppLayout from '@/Layouts/AppLayout.vue'
  import IndexSection from '@/Layouts/Sections/Index.vue'

  import ListItem from './ListItem.vue'

  export default {
    components: {
      AppLayout,
      IndexSection,
      ListItem,
    },

    data() {
      return {
        sales: this.$page.props.sales,
        user: this.$page.props.user,
      }
    },
  }
</script>
