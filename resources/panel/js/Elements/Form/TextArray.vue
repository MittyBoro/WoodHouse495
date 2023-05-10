<template>
  <!-- characteristics -->
  <div class="flex flex-col">
    <Draggable class="grid gap-2" v-model="values" item-key="index" handle=".drag-handle">
      <template #item="{ element, index }">
        <div class="flex items-center">
          <Icon icon="arrows-up-down-left-right" class="drag-handle" />
          <div class="mx-3 w-full">
            <FTextarea rows="1" class="text-xs" v-model="element.value" required />
          </div>
          <Icon
            @click="removeAt(index)"
            icon="trash-can"
            class="text-gray-500 hover:text-primary-500 transition cursor-pointer block"
          />
        </div>
      </template>
    </Draggable>
    <div
      @click="add"
      class="btn-secondary mt-3 mr-auto"
      :class="values.length ? 'btn-mini' : 'w-full'"
    >
      <span>Добавить</span>
      <Icon icon="plus" class="ml-1" />
    </div>
  </div>
</template>

<script>
  import Draggable from 'vuedraggable'

  export default {
    components: {
      Draggable,
    },

    props: {
      modelValue: [Array],
    },

    emits: ['update:modelValue', 'change'],

    data() {
      return {
        group: Math.random(),
        values: (this.modelValue || []).map((el) => ({ value: el })),
      }
    },

    watch: {
      values: {
        deep: true,
        handler(val) {
          this.$emit(
            'update:modelValue',
            val.map((el) => el.value)
          )
        },
      },
    },

    methods: {
      add() {
        this.values.push({
          value: '',
        })
      },
      removeAt(idx) {
        this.values.splice(idx, 1)
      },
    },
  }
</script>

<style lang="scss" scoped>
  .variations-row {
    padding-left: theme('spacing.1');
    padding-top: theme('spacing.2');
    padding-bottom: theme('spacing.2');
    margin-left: -theme('spacing.1');
    margin-top: -theme('spacing.1');
    margin-bottom: -theme('spacing.2');
    border-radius: theme('borderRadius.DEFAULT');
    transition-property: all;
    display: grid;
    grid-template-columns: max-content auto max-content;
    grid-template-columns: max-content auto max-content;
    &:hover {
      background-color: theme('colors.white');
      border-width: theme('borderWidth.DEFAULT');
      border-style: solid;
      border-color: transparent;
      box-shadow: 0 0 0 0 calc(theme('ringWidth.1') + theme('ringOffsetWidth.0'))
        theme('colors.primary.200');
    }
  }
</style>
