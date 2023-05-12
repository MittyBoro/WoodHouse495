<template>
  <td :class="{ 'w-min': mini }">
    <div v-if="modelValue !== undefined">
      <div class="invisible max-h-0 overflow-hidden" v-html="modelValue"></div>
      <div class="-mx-2">
        <FTextarea
          rows="1"
          class="max-h-16 focus:max-h-max"
          @update:modelValue="$emit('update:modelValue', $event)"
          v-model.lazy="value"
          :disabled="disabled"
        />
      </div>
    </div>
    <div v-else-if="date" :title="date" class="whitespace-nowrap">
      {{ moment(date).calendar() }}
    </div>
    <template v-else>
      <slot></slot>
    </template>
  </td>
</template>

<script>
  export default {
    props: {
      modelValue: [String, Number],
      mini: Boolean,
      disabled: Boolean,
      date: String,
    },

    emits: ['update:modelValue'],

    computed: {
      value: {
        get() {
          return this.modelValue
        },
        set(value) {
          this.$emit('update:modelValue', value)
        },
      },
    },
  }
</script>

<style lang="scss" scoped>
  textarea {
    display: block;
    width: 100%;
    border-radius: theme('borderRadius.sm');
    border-width: 0;
    background-color: transparent;
    padding-left: theme('spacing.2');
    padding-right: theme('spacing.2');
    padding-top: theme('spacing.1');
    padding-bottom: theme('spacing.1');
    align-items: middle;
    box-shadow: none;
    font-size: inherit;
    transition-property: theme('transitionProperty.DEFAULT');
    transition-timing-function: theme('transitionTimingFunction.DEFAULT');
    transition-duration: theme('transitionDuration.DEFAULT');

    &:not(:focus):hover {
      background-color: theme('colors.white' / 40%);
      box-shadow: 0 0 0 0 calc(theme('ringWidth.DEFAULT') + theme('ringOffsetWidth.0'))
        theme('ringColor.primary.500' / 20%);
    }

    &:disabled {
      pointer-events: none;
      background-color: transparent;
      opacity: theme('opacity.50');
    }
  }
</style>
