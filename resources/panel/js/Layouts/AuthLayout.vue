<template>
  <div
    class="font-sans text-gray-900 antialiased bg-gradient-to-br from-secondary-600 to-primary-600"
  >
    <div class="min-h-screen flex flex-col justify-center items-center px-3 sm:pt-0">
      <div
        class="w-full sm:max-w-md my-6 px-8 pt-6 pb-8 bg-white shadow-2xl overflow-hidden rounded-3xl"
      >
        <div class="mt-3 mb-6 text-center text-gray-600">
          <a
            :href="panelRoute('login')"
            class="mb-1 text-5xl font-bold leading-none hover:text-gray-800 transition flex justify-center"
          >
            The Panel
            <span class="text-gray-400">ка</span>
          </a>
          <div class="tracking-wide text-gray-400 font-mono" v-text="'<панель управления>'"></div>
        </div>
        <slot></slot>
      </div>
    </div>
  </div>
</template>
