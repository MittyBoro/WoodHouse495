<template>
  <nav
    class="flex justify-between px-3 md:px-0 pt-0 md:pt-1 items-center h-16 md:h-20 border-b border-gray-300"
  >
    <div class="flex flex-wrap items-center font-bold pr-7 pt-0 text-gray-700 leading-tight">
      <Link :href="$panelRoute('dashboard')" class="link"><Icon icon="house" /></Link>
      <div class="text-sm opacity-50 mx-2">/</div>
      <div
        class="flex items-center"
        v-for="item in breadCrumbs"
        v-show="item.name != title"
        :key="item.route"
      >
        <Link :href="route(item.route)" class="link">{{ item.name }}</Link>
        <div class="text-sm opacity-30 mx-2">/</div>
      </div>
      <span class="opacity-70">{{ title }}</span>
    </div>

    <a
      :href="frontUrl()"
      target="_blank"
      class="whitespace-nowrap ml-auto pl-4 text-xs md:text-base bold font-semibold link-hover"
    >
      На сайт
    </a>

    <!-- Settings Dropdown -->
    <div class="flex items-center md:pl-2">
      <div class="ml-3 relative">
        <dropdown align="right" width="48">
          <template #trigger>
            <button
              class="flex items-center text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition -mr-2 pr-2"
            >
              <div class="ml-4 font-semibold hidden md:block">{{ $page.props.auth.user.name }}</div>

              <img
                v-if="$page.props.auth.user.avatar"
                class="h-10 w-10 ml-3 border-2 rounded-full object-cover"
                :src="$page.props.auth.user.avatar"
                :alt="$page.props.auth.user.name"
              />
              <div class="ml-1">
                <svg
                  class="fill-current h-4 w-4"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  />
                </svg>
              </div>
            </button>
          </template>

          <template #content>
            <DropdownLink :href="$panelRoute('users.edit', $page.props.auth.user.id)">
              Редактировать
            </DropdownLink>
            <div class="border-t border-gray-100"></div>
            <DropdownLink @click="logout">Выход</DropdownLink>
          </template>
        </dropdown>
      </div>
    </div>
  </nav>
</template>

<script>
  import Dropdown from './Elements/Dropdown.vue'
  import DropdownLink from './Elements/DropdownLink.vue'

  export default {
    components: {
      Dropdown,
      DropdownLink,
    },
    props: {
      title: String,
    },

    computed: {
      breadCrumbs() {
        let currentRoute = route().current()
        let routeStart = currentRoute.split('.').slice(0, 2).join('.')

        let menu = this.$page.props.config.menu

        let breadCrumbsArray = this.findItemInMenu(menu, routeStart)

        return breadCrumbsArray
      },
    },

    mounted() {},

    methods: {
      logout() {
        axios.post(this.$panelRoute('logout')).then(() => (location.href = this.$panelRoute('login')))
      },

      findItemInMenu(menu, routeStart) {
        let breadCrembs = []

        menu.forEach((el) => {
          if (el.route.startsWith(routeStart)) {
            breadCrembs.push(el)
          }
          if (el.sublinks) {
            breadCrembs = [...this.findItemInMenu(el.sublinks, routeStart), ...breadCrembs]
          }
        })

        return breadCrembs.reverse()
      },
    },
  }
</script>
