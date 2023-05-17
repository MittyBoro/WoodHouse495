<template>
  <div class="shadow-sm h-full rounded-md py-3 border max-h-96">
    <div class="grid px-4 h-full overflow-auto">
      <label
        class="flex px-1 py-1 items-center cursor-pointer transition-colors rounded select-none hover:bg-gray-50"
        :style="{ marginLeft: 0.9 * item.depth + 'em' }"
        v-for="item in list"
        :key="item.id"
      >
        <input
          type="checkbox"
          class="text-pink-500"
          :class="single ? 'form-radio' : 'form-checkbox'"
          v-model="values"
          :value="item.id"
        />
        <span class="pl-2 text" v-html="item.title"></span>
      </label>
    </div>
  </div>
</template>

<script>
  export default {
    emits: ['update:modelValue'],
    props: {
      modelValue: [Array, Number, String],
      list: Array,
      single: Boolean,
      notArray: Boolean,
      type: {
        type: String,
        default: 'submit',
      },
    },
    data() {
      return {}
    },
    computed: {
      values: {
        get() {
          let value = []

          console.log('this.modelValue', this.modelValue)
          if (this.modelValue) {
            if (Array.isArray(this.modelValue)) value = this.modelValue
            else value = [this.modelValue]
          }

          return value.map((el) => {
            if (typeof el == 'object') {
              el = el.id
            }
            return el
          })
        },
        set(value) {
          let array = this.single ? value.slice(-1) : value
          let newValue = this.notArray ? array[0] || null : array
          console.log('newValue', newValue)
          this.$emit('update:modelValue', newValue)
        },
      },
    },

    created() {
      this.values = this.values
    },
  }
</script>
