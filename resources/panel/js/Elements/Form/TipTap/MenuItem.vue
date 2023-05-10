<template>
  <div
    class="menu-item"
    :class="{ 'is-active': isActive ? isActive() : null, disabled: disabled }"
    @click="action"
    :title="title"
  >
    <Icon :icon="icon" />
  </div>
</template>

<script>
  export default {
    props: {
      icon: {
        type: String,
        required: true,
      },

      title: {
        type: String,
        required: true,
      },

      action: {
        type: Function,
        required: true,
      },

      disabled: {
        type: Boolean,
        default: false,
      },

      isActive: {
        type: Function,
        default: null,
      },
    },

    data() {
      return {}
    },
  }
</script>

<style lang="scss">
  .menu-item {
    margin-left: theme('spacing[0.5]');
    margin-right: theme('spacing[0.5]');
    display: flex;
    height: theme('height.7');
    width: theme('width.7');
    align-items: center;
    justify-content: center;
    border-radius: theme('borderRadius.DEFAULT');
    padding-top: theme('spacing[1.5]');
    padding-bottom: theme('spacing[1.5]');
    color: theme('colors.gray.500');
    transition-property: theme('transitionProperty.DEFAULT');
    transition-timing-function: theme('transitionTimingFunction.DEFAULT');
    transition-duration: theme('transitionDuration.DEFAULT');
    cursor: pointer;

    svg {
      width: 100%;
      height: 100%;
      fill: currentColor;
    }

    &.disabled {
      pointer-events: none;
      opacity: 0.3;
    }

    &.is-active {
      background-color: theme('colors.gray.500');
      color: theme('colors.white');
    }

    &:hover {
      background-color: theme('colors.gray.600');
      color: theme('colors.white');
    }
  }
</style>
