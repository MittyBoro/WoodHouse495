<template>
  <AppLayout title="Пользователи">
    <IndexSection class="max-w-5xl">
      <template #subtitle>
        <div>
          <Icon
            icon="envelope-open"
            class="relative top-0.5 text-xl opacity-70 inline-block mr-2"
          />
          <span>Присылать уведомления по почте (заявки с форм, техническая ифнормация n т.д.)</span>
        </div>
      </template>
      <template #buttons>
        <div class="grid gap-6 sm:grid-flow-col">
          <Link :href="currentRoute('create')" class="btn">Добавить</Link>
        </div>
      </template>
      <template #content>
        <!-- <ListFilter v-if="table.items.length" class="border-t bg-gray-50" /> -->

        <TTable :table="table">
          <template #row="sp">
            <TData :title="sp.element.id" mini>
              <div class="min-w-max">
                <img
                  :src="sp.element.avatar"
                  class="h-7 w-7 border rounded-full object-cover"
                  alt=""
                />
              </div>
            </TData>
            <TData v-model="sp.element.name" @update:modelValue="update(sp.element)" />
            <TData v-model="sp.element.email" @update:modelValue="update(sp.element)" />
            <TData v-text="getUserRole(sp.element.role)" />
            <TData :date="sp.element.created_at">
              <div
                v-if="!sp.element.email_verified_at"
                class="btn btn-mini mt-1"
                @click="verify(sp.element.id)"
              >
                Подтв.email
              </div>
            </TData>
            <TData mini>
              <FSwitcher
                v-model="sp.element.email_notification"
                @update:modelValue="update(sp.element)"
                mini
              />
            </TData>
          </template>
        </TTable>
      </template>
    </IndexSection>
  </AppLayout>
</template>

<script>
  import AppLayout from '@/Layouts/AppLayout.vue'
  import IndexSection from '@/Layouts/Sections/Index.vue'

  import Table from '@/Mixins/Form/Table'

  export default {
    components: {
      AppLayout,
      IndexSection,
    },

    mixins: [Table],

    computed: {
      table() {
        return {
          headers: [
            {},
            { key: 'name', text: 'Имя', sortable: true },
            { key: 'email', text: 'Email', sortable: true },
            { key: 'role', text: 'Роль', sortable: true },
            { key: 'created_at', text: 'Регистрация', sortable: true },
            {
              key: 'email_notification',
              fa: 'envelope-open',
              text: 'Уведомлять по почте',
              sortable: true,
              class: 'text-center',
            },
          ],
          items: this.$page.props.list.data,
          pagination: this.$page.props.list,
        }
      },
    },

    methods: {
      verify(id) {
        this.$inertia.form({}).post(this.currentRoute('verify', id), {
          preserveScroll: true,
        })
      },
    },
  }
</script>
