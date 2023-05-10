<template>
  <div class="grid gap-4" :class="{ 'md:grid-cols-6': isSingleImage }">
    <Draggable
      class="grid"
      :class="dragClasses"
      v-if="files.length"
      v-model="files"
      :group="rand"
      item-key="id"
      draggable=".drag-preview"
    >
      <template #item="{ element, index }">
        <div class="drag-preview" v-if="!element.del">
          <div :class="[imagesOnly ? 'file-image' : 'file-simple']" :style="getStyle(element)">
            <div
              v-if="element.url"
              @click="openFile(element)"
              class="absolute inset-0 cursor-pointer opacity-10 transition hover:bg-gray-500"
            ></div>
            <div v-if="!imagesOnly" class="text-sm text-gray-600">{{ element.name }}</div>
            <span
              @click.prevent="removeAt(element, index)"
              class="flex h-3 w-3 cursor-pointer items-center justify-center rounded-sm bg-red-500 text-xs text-white shadow-sm"
              :class="[imagesOnly ? 'absolute right-1 top-1' : 'relative']"
            >
              <Icon icon="xmark" />
            </span>
          </div>
        </div>
      </template>
    </Draggable>

    <label :class="{ 'drop-area': drop, 'md:col-span-5': isSingleImage }">
      <div class="form-input flex-wrap">
        <span v-if="multiple">Выберите файлы</span>
        <span v-else>Выберите файл</span>
        <span v-if="drop"> или перетащите сюда</span>
        <Icon icon="cloud-arrow-up" class="ml-1 opacity-60" />
        <input
          type="file"
          @change="addFiles"
          class="hidden"
          :accept="imagesOnly ? 'image/jpeg,image/png' : accept"
          :multiple="multiple"
        />
      </div>
    </label>
  </div>
</template>

<script>
  import Draggable from 'vuedraggable'

  export default {
    components: {
      Draggable,
    },

    props: {
      modelValue: {
        type: [Array, Object],
        default: [],
      },
      imagesOnly: Boolean,
      multiple: Boolean,
      drop: {
        type: Boolean,
        default: true,
      },
      paste: {
        type: Boolean,
        default: true,
      },
      accept: {
        type: String,
        default: '',
      },
    },

    emits: ['update:modelValue'],

    data() {
      return {
        rand: Math.random(),

        base64URLs: {},
      }
    },

    computed: {
      files: {
        get() {
          if (!this.modelValue || !Object.keys(this.modelValue).length) return []
          let files = [...this.modelValue].filter((file) => !file.del)
          return files
        },
        set(val) {
          this.$emit('update:modelValue', val)
        },
      },

      isSingleImage() {
        return !this.multiple && this.files.length == 1 && this.imagesOnly
      },

      dragClasses() {
        return [
          this.imagesOnly ? 'gap-3' : 'gap-1 max-w-xs',
          {
            'grid-cols-3 sm:grid-cols-4 md:grid-cols-6': !this.isSingleImage && this.imagesOnly,
            'w-28 md:w-auto': this.isSingleImage,
          },
        ]
      },
    },

    mounted() {
      if (this.drop) this.addDropEvents()
      if (this.paste) this.addPasteEvents()
    },

    methods: {
      addFiles(e) {
        let formFiles = []

        if (e.target && e.target.files) formFiles = e.target.files
        else if (e.dataTransfer && e.dataTransfer.files) formFiles = e.dataTransfer.files
        else if (e.clipboardData && e.clipboardData.files) formFiles = e.clipboardData.files

        if (!formFiles.length) return

        let files = this.files

        Array.from(formFiles).forEach((el) => {
          files.push({
            file: el,
            name: el.name,
            rand_id: this.setBase64URL(el),
          })
        })

        if (!this.multiple) {
          files = files.slice(-1)
        }

        this.files = files
      },

      removeAt(element, index) {
        if (element.id) {
          element.del = true
        } else {
          let files = this.files
          files.splice(index, 1)
          this.files = files
        }
      },

      addPasteEvents() {
        window.addEventListener(
          'paste',
          (e) => {
            document.querySelectorAll(':hover').forEach((el) => {
              if (el == this.$el) this.addFiles(e)
            })
          },
          false
        )
      },

      addDropEvents() {
        let dropArea = this.$el.querySelector('.drop-area')

        if (!dropArea) return
        ;['dragenter', 'dragover', 'dragleave', 'drop'].forEach((eventName) => {
          this.$el.addEventListener(
            eventName,
            (e) => {
              e.preventDefault()
              e.stopPropagation()
            },
            false
          )
        })
        ;['dragenter', 'dragover'].forEach((eventName) => {
          this.$el.addEventListener(
            eventName,
            (e) => {
              dropArea.classList.add('highlight')
            },
            false
          )
        })
        ;['dragleave', 'drop'].forEach((eventName) => {
          this.$el.addEventListener(
            eventName,
            (e) => {
              dropArea.classList.remove('highlight')
            },
            false
          )
        })

        this.$el.addEventListener('drop', this.addFiles, false)
      },

      getStyle(file) {
        if (!this.imagesOnly) return {}

        let bgUrl = file.url || this.base64URLs[file.rand_id]

        if (!bgUrl) return {}

        return {
          backgroundImage: 'url(' + bgUrl + ')',
        }
      },

      setBase64URL(file) {
        let rand_id = Math.random()

        if (this.imagesOnly) {
          let reader = new FileReader()
          reader.readAsDataURL(file)
          reader.onload = (e) => {
            this.base64URLs[rand_id] = e.target.result
          }
        }

        return rand_id
      },

      openFile(file) {
        if (file.url) window.open(file.url)
      },
    },
  }
</script>

<style lang="scss" scoped>
  .form-input {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: theme('colors.gray.50');
    padding-top: theme('spacing.3');
    font-size: theme('fontSize.xs');
    height: auto;
    max-height: none !important;

    &:hover {
      background-color: theme('colors.gray.50');
      border-width: 4px;
      border-color: theme('colors.primary.600' / 20%);
    }
  }

  .drop-area {
    display: flex;
    width: 100%;
    cursor: pointer;
    justify-content: center;
    border-radius: theme('borderRadius.lg');
    border-width: 4px;
    border-style: dashed;
    border-color: theme('colors.gray.300');
    transition-property: background-color;
    padding: theme('spacing.3') theme('spacing.4');

    span {
      display: inline-block;
      text-align: center;
    }

    &:hover {
      background-color: theme('colors.gray.50');
    }

    @media (min-width: theme('screens.sm')) {
      padding: theme('spacing.5') theme('spacing.6');
    }
  }

  .drop-area.highlight {
    border-color: theme('colors.primary.700');
    background-color: theme('colors.primary.500');
  }

  .file-image {
    position: relative;
    display: block;
    border-radius: theme('borderRadius.sm');
    border-width: 1px;
    background-color: theme('colors.gray.50');
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    box-shadow: theme('boxShadow.sm');
    padding-bottom: 100%;
  }

  .file-simple {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-right: theme('spacing.1');
    background-size: 0;
  }
</style>
