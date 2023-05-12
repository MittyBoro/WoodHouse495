<template>
  <div class="flex flex-wrap px-6 md:px-10 py-3">
    <label class="my-2">
      <FInput placeholder="Поиск…" @update:modelValue="setFilter" v-model.lazy="filter.q" />
    </label>
  </div>
</template>

<script>
  export default {
    data() {
      let urlParams = new URLSearchParams(location.search)
      let filter = {
        q: urlParams.get('q'),
      }

      return {
        filter: Object.assign(
          {
            q: '',
          },
          filter
        ),
      }
    },

    methods: {
      setFilter() {
        setTimeout(() => {
          let urlParams = new URLSearchParams(location.search)
          let params = Object.fromEntries(urlParams)

          let filter = Object.assign(params, this.filter)

          this.$inertia.visit(route(route().current(), filter), {
            preserveState: true,
            preserveScroll: true,
          })
        }, 40)
      },
    },
  }
</script>

<style lang="scss" scoped>
  :deep(label) {
    .text-sm {
      font-size: theme('fontSize.xs');
    }

    .form-input {
      max-height: theme('spacing.7');
      padding-left: theme('spacing.3');
      font-size: theme('fontSize.xs');
    }
  }
</style>
