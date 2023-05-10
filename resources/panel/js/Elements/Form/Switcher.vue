<template>
  <label class="flex cursor-pointer items-center" :class="{ secondary: secondary !== false }">
    <div class="relative">
      <input
        type="checkbox"
        class="hidden"
        @input="(event) => $emit('update:modelValue', !!event.target.checked)"
        :checked="modelValue"
      />
      <div
        :class="[mini ? 'h-4 w-7' : 'h-7 w-12']"
        class="toggle__line inner rounded-full bg-gray-300 transition"
      ></div>
      <div
        :class="[mini ? 'left-0.5 h-3 w-3' : 'left-1 h-5 w-5']"
        class="toggle__dot pointer-events-none absolute inset-y-0 my-auto rounded-full bg-white shadow transition"
      ></div>
    </div>
  </label>
</template>

<script>
  export default {
    props: {
      modelValue: {
        default: false,
      },
      secondary: Boolean,
      mini: Boolean,
    },
    emits: ['update:modelValue'],
  }
</script>

<style lang="scss" scoped>
  input:checked ~ .toggle__line {
    background-color: theme('colors.primary.500');
    transition-property: theme('transitionProperty.DEFAULT');
    transition-timing-function: theme('transitionTimingFunction.DEFAULT');
    transition-duration: theme('transitionDuration.DEFAULT');

    &:hover {
      background-color: theme('colors.primary.600');
    }
  }

  input:checked ~ .toggle__dot {
    transform: translateX(100%);
  }

  .secondary {
    input:checked ~ .toggle__line {
      background-color: theme('colors.secondary.600');

      &:hover {
        background-color: theme('colors.secondary.700');
      }
    }
  }
</style>
