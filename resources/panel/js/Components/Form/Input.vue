<template>
  <div class="relative w-full">
    <input
      class="form-input"
      :class="{ 'f-mini': mini }"
      v-bind="attrs"
      :autocomplete="autocomplete"
      :placeholder="placeholder"
      :value="modelValue"
      @input="onInput"
      @change="onInput($event, 'change')"
      @focus="onFocus"
      @blur="onBlur"
      ref="input"
    />

    <div
      :class="{ invisible: !open }"
      v-if="options && options.length"
      class="options absolute z-50 max-h-40 w-full overflow-auto rounded-md border bg-white text-gray-700 shadow-lg transition"
    >
      <div
        class="block cursor-pointer px-4 py-1 text-sm leading-5 transition hover:bg-gray-100"
        v-for="option in filterOptions"
        @click="setValue(option)"
        :key="option"
      >
        {{ option }}
      </div>
    </div>

    <div
      v-if="type == 'password'"
      class="pass-eyes absolute inset-y-0 right-0 flex cursor-pointer items-center pr-3 text-base text-gray-400 transition hover:text-gray-500"
      onclick="this.previousElementSibling.type = this.previousElementSibling.type == 'password' ? 'text' : 'password' "
    >
      <Icon icon="eye" />
      <Icon icon="eye-slash" />
    </div>
  </div>
</template>

<script>
  export default {
    props: {
      modelModifiers: {
        type: Object,
        default: {},
      },
      modelValue: [String, Number],
      options: [Array, Object],
      classes: String,
      placeholder: String,
      autocomplete: String,
      type: {
        type: String,
        default: 'text',
      },
      id: String,
      showAll: Boolean,
      mini: Boolean,
    },
    emits: ['update:modelValue'],

    data() {
      return {
        open: false,
      }
    },

    computed: {
      attrs() {
        return Object.assign(
          {
            id: this.id,
            type: this.type,
            class: this.classes,
          },
          this.$attrs
        )
      },
      filterOptions() {
        if (!this.options) return

        if (this.showAll) return this.options

        let reg = new RegExp(this.modelValue || '', 'i')

        return this.options.filter((str) => {
          if (str == this.modelValue) return false
          return reg.test(str)
        })
      },
    },
    methods: {
      onFocus() {
        this.open = true
      },
      onBlur() {
        setTimeout(() => {
          this.open = false
        }, 100)
      },

      onInput(event, type = 'input') {
        let value = event.target.value

        if (this.modelModifiers.lazy) {
          if (type == 'change') {
            this.setValue(value)
          }
        } else {
          this.setValue(value)
        }
      },

      setValue(value) {
        this.$emit('update:modelValue', value)
      },
    },
  }
</script>

<style lang="scss" scoped>
  .options {
    transition: 0.15s;
  }
  .options:empty {
    display: none;
  }
  input {
    &[type='password'] ~ .pass-eyes {
      svg:last-child {
        display: none;
      }
    }
    &[type='text'] ~ .pass-eyes {
      svg:first-child {
        display: none;
      }
    }
  }
</style>
