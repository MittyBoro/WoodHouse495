<template>
  <div
    class="relative flex flex-col min-h-screen lg:flex-row w-full bg-gradient-to-br to-secondary-600 from-primary-600 px-2 py-5 md:px-8 md:pt-6 md:pb-10"
  >
    <!-- Sidebar -->
    <Sidebar />

    <div
      class="content-lay rounded-3xl shadow-2xl px-3 md:px-8 bg-gray-200 min-h-screen w-full min-w-0"
    >
      <!-- Primary Navigation Menu -->
      <HeaderNav :title="title" />

      <!-- Page Content -->
      <main class="page-content w-full max-w-7xl mx-auto py-8 md:py-10">
        <slot></slot>
      </main>
    </div>
  </div>
</template>

<script>
  import Sidebar from './AppComponets/Sidebar.vue'
  import HeaderNav from './AppComponets/HeaderNav.vue'

  export default {
    components: {
      Sidebar,
      HeaderNav,
    },

    props: {
      title: String,
    },

    created() {
      document.title = `${this.title} | ThePanel`

      this.$panel.title = this.title
    },

    methods: {},
  }
</script>
