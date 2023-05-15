<template>
  <component :is="as" :class="classes">
    <div v-if="title || subtitle" class="font-semibold text-gray-700 mb-1 text-base">
      <span v-if="title" class="mr-1">{{ title }}</span>
      <span v-if="subtitle" class="text-xs opacity-50">{{ subtitle }}</span>
    </div>
    <slot name="title"></slot>
    <slot></slot>
    <FInputError v-if="error" :message="error" class="mt-2" />
  </component>
</template>

<script>
  export default {
    props: {
      title: String,
      subtitle: String,
      error: String,
      as: {
        type: String,
        default: 'label',
      },
      classes: {
        type: String,
        default: 'flex flex-col',
      },
    },
  }
</script>
