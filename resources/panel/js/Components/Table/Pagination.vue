<template>
  <div>
    <div
      class="pagination flex flex-1 flex-col items-center justify-between px-6 py-5 md:px-10 xl:flex-row"
    >
      <div v-if="pages" class="mb-3 text-center text-sm text-gray-700 xl:mb-0 xl:text-left">
        Показано с
        <span class="font-semibold">{{ pages.from }}</span>
        по
        <span class="font-semibold">{{ pages.to }}</span>
        из
        <span class="mr-8 font-semibold">{{ pages.total }}</span>

        <span class="perpage">
          <span>На странице:</span>
          <FInput
            type="number"
            @update:modelValue="setPerPage"
            v-model.lazy="pages.per_page"
            min="1"
          />
        </span>
      </div>

      <slot></slot>

      <nav
        v-if="pages && pages.per_page < pages.total"
        class="relative ml-5 flex flex-wrap justify-center -space-x-px"
      >
        <Link
          :href="link.url || '#'"
          v-for="(link, key) in pages.links"
          :key="key"
          class="pagination-item"
          :class="{ active: link.label == pages.current_page }"
        >
          <span class="font-semibold" v-if="key == 0">«</span>
          <span class="font-semibold" v-else-if="key == pages.links.length - 1">»</span>
          <span v-else>{{ link.label }}</span>
        </Link>
      </nav>
    </div>
  </div>
</template>

<script>
  export default {
    props: ['pages'],

    methods: {
      setPerPage(val) {
        this.pages.per_page = val

        let url = new URL(location.href),
          currPerPage = url.searchParams.get('perPage')

        if (currPerPage != this.pages.per_page) {
          currPerPage
            ? url.searchParams.set('perPage', this.pages.per_page)
            : url.searchParams.append('perPage', this.pages.per_page)

          this.$inertia.visit(url.href, {
            preserveState: true,
            preserveScroll: true,
          })
        }
      },
      showAll() {
        if (this.pages.last_page < 2) return

        let url = new URL(location.href)

        url.searchParams.set('perPage', this.pages.total)
        url.searchParams.delete('page')

        this.$inertia.visit(url.href, {
          preserveState: true,
          preserveScroll: true,
        })
      },
      showDefault() {
        let url = new URL(location.href)

        url.searchParams.delete('perPage')
        url.searchParams.delete('page')

        this.$inertia.visit(url.href, {
          preserveState: true,
          preserveScroll: true,
        })
      },
    },
  }
</script>

<style lang="scss" scoped>
  .perpage {
    display: inline-flex;
    align-items: center;
  }

  nav {
    border-radius: theme('borderRadius.DEFAULT');
    a:first-child {
      border-top-left-radius: theme('borderRadius.lg');
      border-bottom-left-radius: theme('borderRadius.lg');
    }
    a:last-child {
      border-top-right-radius: theme('borderRadius.lg');
      border-bottom-right-radius: theme('borderRadius.lg');
    }
    a.active,
    a.active:hover {
      background-color: theme('colors.primary.500');
      color: theme('colors.white');
    }
  }

  .pagination-item {
    position: relative;
    display: flex;
    cursor: pointer;
    align-items: center;
    border: 1px solid theme('colors.gray.200');
    background-color: theme('colors.white');
    padding-left: theme('spacing.3');
    padding-right: theme('spacing.3');
    padding-top: theme('spacing.1');
    padding-bottom: theme('spacing.1');
    font-size: theme('fontSize.sm');
    font-weight: theme('fontWeight.semibold');
    color: theme('colors.gray.700');
    transition-property: theme('transitionProperty.DEFAULT');
    transition-timing-function: theme('transitionTimingFunction.DEFAULT');
    transition-duration: theme('transitionDuration.DEFAULT');

    &:hover {
      background-color: theme('colors.gray.100');
    }
  }
</style>
