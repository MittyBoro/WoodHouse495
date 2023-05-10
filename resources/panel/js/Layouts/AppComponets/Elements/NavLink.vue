<template>
  <div class="mb-1" v-if="canShow(link.role_except)">
    <div
      v-if="link.sublinks"
      @click="opened = !opened"
      class="flex cursor-pointer items-center rounded-full px-5 py-4 font-bold transition lg:rounded-r-none"
      :class="activeClass"
    >
      <Icon :icon="link.icon || 'circle-dot'" class="mr-2 w-6 text-center" />
      <slot></slot>
    </div>
    <Link
      v-else
      :href="route(link.route, link.query)"
      class="flex cursor-pointer items-center rounded-full px-5 py-4 font-bold transition lg:rounded-r-none"
      :class="activeClass"
    >
      <Icon :icon="link.icon || 'circle-dot'" class="mr-2 w-6 text-center" />
      <slot></slot>
    </Link>

    <div class="sub-list mb-3 ml-9 mt-2" v-if="link.sublinks" v-show="opened">
      <Link
        v-for="slink in link.sublinks"
        :key="slink.route"
        :href="route(slink.route, slink.query)"
        class="mb-0.5 block rounded-full px-5 py-2 lg:rounded-r-none"
        :class="activeSubClass(slink)"
        v-show="canShow(slink.role_except)"
      >
        {{ slink.name }}
      </Link>
    </div>
  </div>
</template>

<script>
  export default {
    props: ['link'],

    data() {
      let urlParams = new URLSearchParams(window.location.search)

      return {
        activeRoute: route().current().split('.')[1],
        activeSubRoute: false,
        opened: false,
        urlParams: urlParams,
      }
    },

    computed: {
      activeClass() {
        if (this.isActive(this.link) || this.activeSubRoute) {
          return 'active'
        }
        return 'hover:bg-opacity-20 hover:bg-white text-white'
      },
    },

    mounted() {
      // this.opened = this.activeSubRoute;
      this.opened = true
    },

    methods: {
      isActive(link) {
        let isActive = true

        Object.entries(link.query || {}).forEach(([key, val]) => {
          if (this.urlParams.get(key) !== val) isActive = false
        })

        return link.route.split('.')[1] == this.activeRoute && isActive
      },

      activeSubClass(link) {
        if (this.isActive(link)) {
          this.activeSubRoute = true
          return 'bg-opacity-30 bg-white'
        }
        return 'hover:bg-opacity-10 hover:bg-white transition'
      },

      canShow(role_except) {
        if (!role_except) return true

        let role = this.$page.props.auth.user.role
        let exceptsList = typeof role_except === 'string' ? role_except.split(',') : role_except

        return !exceptsList.includes(role)
      },
    },
  }
</script>

<style lang="scss" scoped>
  .active {
    position: relative;
    background-image: linear-gradient(to right, theme('colors.white'), theme('colors.gray.200'));
    color: theme('colors.gray.600');

    @media (min-width: theme('screens.lg')) {
      &::before,
      &::after {
        content: '';
        position: absolute;
        display: block;
        right: 0;
        height: theme('width.6');
        width: theme('height.6');
        background-color: theme('colors.gray.200');
        clip-path: url(#nav-clip);
      }

      &::before {
        top: 0;
        margin-top: calc(-1 * theme('spacing.6'));
        transform: rotate(90deg);
      }

      &::after {
        bottom: 0;
        margin-bottom: calc(-1 * theme('spacing.6'));
      }
    }
  }
</style>
