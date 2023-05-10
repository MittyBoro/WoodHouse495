<template>
  <div class="save-row fixed z-40 bg-primary-300 bg-opacity-60 p-2 shadow-lg" :style="style">
    <FButton class="btn" :disabled="disabled">
      <Icon icon="floppy-disk" class="text-lg" />
    </FButton>
  </div>
</template>

<script>
  export default {
    props: ['disabled'],

    data() {
      return {
        style: {},
      }
    },

    mounted() {
      this.setStyle()

      document.addEventListener('scroll', this.setStyle)

      new ResizeObserver((entries) => {
        this.setStyle()
      }).observe(document.body)
    },

    methods: {
      setStyle() {
        let contentLay = document.querySelector('.content-lay')

        if (!contentLay) return (this.style = {})

        let layStyle = contentLay.getBoundingClientRect()

        let offset = window.pageYOffset || document.documentElement.scrollTop,
          windowHeight =
            document.documentElement.scrollHeight - document.documentElement.clientHeight

        this.style = {
          left: layStyle.left + layStyle.width + 'px',
          // left:  + 'px',
        }

        if (windowHeight - offset > 140) this.style.marginBottom = 0
      },
    },
  }
</script>

<style lang="scss" scoped>
  .save-row {
    border-radius: theme('borderRadius.full');
    transition-property: theme('transitionProperty.DEFAULT');
    transition-timing-function: theme('transitionTimingFunction.DEFAULT');
    transition-duration: theme('transitionDuration.DEFAULT');

    bottom: 10px;
    margin-bottom: -80px;
    transform: translateX(-100%);
  }
  .btn {
    height: theme('height.10');
    width: theme('width.10');
    border-radius: theme('borderRadius.full');
    padding: 0;
  }
</style>
