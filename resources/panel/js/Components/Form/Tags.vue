<template>
  <div class="form-input">
    <div
      @click.prevent
      class="h my-1 ml-1 flex items-center justify-between rounded bg-gray-100 py-1 pl-3 text-sm text-gray-600"
      v-for="(word, i) in modelValue"
      :key="i"
    >
      {{ word }}
      <span
        @click="removeAt(i)"
        class="flex-s mx-2 flex h-4 w-4 cursor-pointer items-center justify-center rounded bg-gray-300"
      >
        ×
      </span>
    </div>

    <input
      class="my-1 ml-1 w-auto border-0 px-3 py-1 text-sm outline-none"
      @focus="focused = true"
      @blur="focused = false"
      @keydown.enter.prevent="setValue(currentWord)"
      @keydown.delete="removeByDel"
      v-model="currentWord"
      ref="input"
      onkeydown="this.style.width = ((this.value.length + 1) * 8) + 'px';"
    />

    <div
      :class="{ invisible: !focused }"
      v-if="options && options.length"
      class="options absolute left-0 top-full z-50 max-h-40 w-full overflow-auto rounded-md border bg-white text-gray-700 shadow-lg transition"
    >
      <div
        class="block cursor-pointer px-4 py-1 text-sm leading-5 transition hover:bg-gray-100"
        v-for="(option, i) in filterOptions"
        @click="setValue(option)"
        :key="i"
      >
        {{ option }}
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    props: {
      modelValue: {
        type: Array,
        default: [],
      },
      options: Array,
      classes: String,
      type: {
        type: String,
        default: 'text',
      },
      showAll: Boolean,
    },
    emits: ['update:modelValue'],

    data() {
      return {
        focused: false,
        currentWord: '',
        lastWord: '',
      }
    },

    watch: {
      focused() {
        if (this.focused) return
        let beforeWord = this.currentWord
        setTimeout(() => {
          if (beforeWord == this.currentWord) this.setValue(this.currentWord)
        }, 200)
      },
    },

    computed: {
      filterOptions() {
        if (!this.options) return

        let options = new Array(...this.options)

        if (this.showAll) return options

        let reg = new RegExp(this.currentWord, 'i')

        return options.filter((str) => {
          if (this.modelValue.indexOf(str) >= 0) return false
          return reg.test(str)
        })
      },
    },
    methods: {
      setValue(value) {
        if (!value) return

        let newMW = this.modelValue
        newMW.push(value)

        this.$emit('update:modelValue', newMW)

        this.currentWord = ''

        setTimeout(() => {
          this.$refs.input.focus()
        }, 150)
      },

      removeAt(index) {
        let newMW = this.modelValue
        newMW.splice(index, 1)

        this.$emit('update:modelValue', newMW)
      },

      removeByDel() {
        if (this.currentWord.length) return
        let newMW = this.modelValue
        newMW.pop()

        this.$emit('update:modelValue', newMW)
      },
    },
  }
</script>

<style lang="scss" scoped>
  .options {
    transition-property: theme('transitionProperty.DEFAULT');
    transition-timing-function: theme('transitionTimingFunction.DEFAULT');
    transition-duration: theme('transitionDuration.DEFAULT');
  }
  .options:empty {
    display: none;
  }
  .form-input {
    position: relative;
    display: flex;
    height: auto;
    width: 100%;
    flex-wrap: wrap;
    align-items: center;
    padding-left: theme('spacing.2');
    padding-right: theme('spacing.2');
  }
  input {
    width: auto;
    min-width: 180px;
  }
</style>
