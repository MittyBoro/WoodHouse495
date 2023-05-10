<template>
  <AppLayout title="Главная">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 justify-center gap-8">
      <Link
        v-for="item in $page.props.config.menu"
        key="route"
        :href="$route(item.route)"
        class="aspect-[5/3] md:col-span-1 flex flex-col items-center justify-center bg-white shadow-lg rounded-xl px-8 py-6 text-gray-600 hover:bg-gray-500 hover:text-white transition-colors"
      >
        <Icon :icon="item.icon || 'circle-dot'" class="text-5xl" />
        <div class="text-xl font-bold mt-5">{{ item.name }}</div>
      </Link>
    </div>
  </AppLayout>
</template>

<script>
  import AppLayout from '@/Layouts/AppLayout.vue'

  export default {
    components: {
      AppLayout,
    },

    data() {
      return {
        data: this.$page.props.data,
      }
    },
  }
</script>

<style lang="scss" scoped>
  .text-grid {
    display: grid;
    padding-top: theme('spacing.3');
    padding-bottom: theme('spacing.5');
    gap: theme('spacing.1');
    grid-template-columns: 1fr;

    .text-row {
      display: grid;
      grid-template-columns: auto max-content;
    }

    .text-title {
      display: flex;
      align-items: baseline;
      color: theme('colors.gray.400');
      white-space: nowrap;

      &::after {
        content: '';
        min-width: theme('spacing.10');
        width: 100%;
        margin: 0 theme('spacing.3');
        border-bottom: 1px dotted #aaa;
      }
    }

    .text-value {
      color: theme('colors.gray.500');
      font-weight: theme('fontWeight.semibold');
      text-align: right;
    }
  }
</style>
