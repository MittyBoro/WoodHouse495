<template>
  <div
    v-if="editor"
    class="editor form-text notranslate"
    :class="{ focus: focus }"
    @click="focus || editor.view.dom.focus()"
  >
    <MenuBar
      class="editor__header"
      :editor="editor"
      :mini="mini"
      :isSource="isSource"
      :toggleSource="toggleSource"
    />

    <EditorContent v-if="!isSource" class="editor__content" :editor="editor" />
    <textarea v-else class="editor__raw_content" v-model="content"></textarea>

    <div class="editor__footer">
      <span class="mr-3">Слов: {{ editor.storage.characterCount.words() }}</span>
      <span>Символов: {{ editor.storage.characterCount.characters() }}</span>
    </div>
  </div>
</template>

<script>
  import StarterKit from '@tiptap/starter-kit'
  import CharacterCount from '@tiptap/extension-character-count'
  import Highlight from '@tiptap/extension-highlight'
  import Image from '@tiptap/extension-image'
  import { Editor, EditorContent } from '@tiptap/vue-3'

  import MenuBar from './TipTap/MenuBar.vue'

  export default {
    components: {
      EditorContent,
      MenuBar,
    },

    props: {
      modelValue: null,
      mini: Boolean,
    },
    emits: ['update:modelValue', 'change'],

    data() {
      return {
        editor: null,
        focus: false,
        isSource: false,
      }
    },

    watch: {
      modelValue(val) {
        if (this.isSource) {
          this.editor.commands.setContent(val)
        }
      },
    },

    computed: {
      content: {
        get() {
          return this.modelValue
        },
        set(val) {
          this.$emit('update:modelValue', val)
        },
      },
    },

    mounted() {
      this.editor = new Editor({
        content: this.content,
        extensions: [StarterKit.configure(), CharacterCount.configure(), Highlight, Image],
        onUpdate: ({ editor }) => {
          this.content = editor.getHTML()
        },
        onFocus: ({ editor, event }) => {
          this.focus = true
        },
        onBlur: ({ editor, event }) => {
          this.focus = false
        },
      })
    },

    methods: {
      toggleSource() {
        this.isSource = !this.isSource
      },
    },

    beforeUnmount() {
      this.editor.destroy()
    },
  }
</script>

<style lang="scss">
  .editor.form-text {
    background-color: theme('colors.white');
    display: flex;
    flex-direction: column;
    padding: 0;
    max-height: 36rem;

    &__header {
      border-bottom: theme('borderWidth.DEFAULT') solid;
      padding-left: theme('spacing.2');
      padding-right: theme('spacing.2');
      display: flex;
      align-items: center;
      flex: 0 0 auto;
      flex-wrap: wrap;
    }

    &__content,
    &__raw_content {
      min-height: 10rem;
    }

    &__content {
      padding-left: theme('spacing.4');
      padding-right: theme('spacing.4');
      flex: 1 1 auto;
      overflow-x: hidden;
      overflow-y: auto;
      -webkit-overflow-scrolling: touch;

      &::-webkit-scrollbar-thumb {
        border-radius: theme('borderRadius.DEFAULT');
        background-color: theme('colors.primary.400');
        border-width: theme('borderWidth.4');
        border-color: theme('colors.white');
        border-style: solid;
      }

      &::-webkit-scrollbar-track {
        background-color: theme('colors.white');
      }

      &::-webkit-scrollbar {
        width: theme('spacing.4');
        height: theme('spacing.4');
      }
    }

    &__raw_content {
      background-color: theme('colors.gray.50' / 30%);
      font-family: theme('fontFamily.mono');
      outline: 0;
      border: 0;

      &:focus {
        box-shadow: 0;
      }
    }

    &__footer {
      display: flex;
      border-top: theme('borderWidth.DEFAULT') solid theme('borderColor.DEFAULT');
      padding-left: theme('spacing.4');
      padding-right: theme('spacing.4');
      padding-top: theme('spacing.2');
      padding-bottom: theme('spacing.2');
      background-color: theme('colors.gray.50');
      font-size: theme('fontSize.xs');
      flex: 0 0 auto;
    }
  }

  .editor__content {
    overflow: hidden;
  }

  .ProseMirror {
    min-height: 100%;
    &:focus {
      outline: 0;
    }
    > * {
      & + * {
        margin-top: 0.75rem;
      }
      & + h1 {
        margin-top: 1.25rem;
      }
      & + h2,
      & + h3 {
        margin-top: 1rem;
      }
    }
    ul,
    ol {
      padding: 0 1rem;
    }
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      line-height: 1.1;
      font-weight: 700;
      &:first-child {
        margin-top: 0;
      }
    }
    h1 {
      font-size: 2rem;
    }
    h2 {
      font-size: 1.5rem;
    }
    h3 {
      font-size: 1.25rem;
    }
    h4 {
      font-size: 1rem;
    }
    h5 {
      font-size: 0.85rem;
    }
    h6 {
      font-size: 0.75rem;
    }
    code {
      background-color: rgba(#616161, 0.1);
      color: #616161;
    }
    pre {
      background-color: theme('colors.gray.700');
      font-family: theme('fontFamily.mono');
      padding-left: theme('spacing.2');
      padding-right: theme('spacing.2');
      padding-top: theme('spacing.1');
      padding-bottom: theme('spacing.1');
      border-radius: theme('borderRadius.DEFAULT');
      color: theme('colors.white');
      code {
        color: inherit;
        padding: 0;
        background: none;
        font-size: 0.8rem;
      }
    }
    mark {
      background-color: #faf594;
    }
    img {
      max-width: 100%;
      height: auto;
    }
    hr {
      margin: 1rem 0;
    }
    blockquote {
      padding-left: 1rem;
      border-left: 2px solid rgba(#0d0d0d, 0.1);
    }
    hr {
      border: none;
      border-top: 2px solid rgba(#0d0d0d, 0.1);
      margin: 2rem 0;
    }

    a {
      text-decoration: underline;
    }
    ul li {
      list-style: disc;
    }
    ol li {
      list-style: decimal;
    }
    ul[data-type='taskList'] {
      list-style: none;
      padding: 0;
      li {
        display: flex;
        align-items: center;

        > label {
          flex: 0 0 auto;
          margin-right: 0.5rem;
          user-select: none;
        }
        > div {
          flex: 1 1 auto;
        }
      }
    }
  }
</style>
