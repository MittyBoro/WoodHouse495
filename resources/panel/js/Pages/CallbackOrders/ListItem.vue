<template>
  <div class="col-span-6 rounded-xl shadow-lg bg-white overflow-hidden py-8">
    <div class="flex font-bold text-xl mb-1 px-3 md:px-8">
      <div>Заявка #{{ element.id }}</div>
      <Link
        class="ml-auto text-sm"
        :href="currentRoute('destroy', element.id)"
        method="delete"
        as="button"
      >
        <Icon
          @click="confirm"
          icon="trash-can"
          class="text-gray-300 hover:text-primary-500 transition cursor-pointer block"
        />
      </Link>
    </div>
    <div class="text-sm text-gray-500 mb-5 px-3 md:px-8">
      {{ formatDateTime(element.created_at) }}
    </div>

    <div class="customer-info gap-y-2 max-w-2xl px-3 md:px-8">
      <div class="ci-title">Форма:</div>
      <div>{{ element.form_name }}</div>
      <template v-if="element.name">
        <div class="ci-title">Имя:</div>
        <div>{{ element.name }}</div>
      </template>
      <div class="ci-title">Телефон:</div>
      <div>{{ element.phone }}</div>
      <div class="ci-title">IP:</div>
      <div>{{ element.ip }}</div>
      <template v-if="element.description">
        <div class="ci-title">Коммантарий:</div>
        <div class="whitespace-pre-line">{{ element.description }}</div>
      </template>
      <template v-if="element.extra">
        <div class="ci-title">Дополнительно:</div>
        <div class="text-sm">
          <div v-for="(val, key) in element.extra" :key="key">
            <span class="text-gray-500">{{ key }}</span>
            :
            <span class="font-semibold">{{ val }}</span>
          </div>
        </div>
      </template>
      <template v-if="element.files.length">
        <div class="ci-title">Файлы:</div>
        <div class="grid">
          <a
            class="link"
            target="_blank"
            v-for="file in element.files"
            :href="file"
          >
            {{ basename(file) }}
          </a>
        </div>
      </template>
    </div>
  </div>
</template>

<script>
  export default {
    props: ['element', 'single', 'user'],

    data: {
      // path: require('path'),
    },

    methods: {
      basename(path) {
        return path.match(/\/([^/]+)$/)[1]
      },
    },
  }
</script>

<style lang="scss" scoped>
  .customer-info {
    grid-template-columns: auto auto;
  }
</style>
