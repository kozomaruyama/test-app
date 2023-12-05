<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
</script>

<template>
    <AuthenticatedLayout>
        <v-data-iterator :items="items" :page="page" items-per-page="10" show-expand show-select>
  <template v-slot:default="{ items }">
    <template
      v-for="(item, i) in items"
      :key="i"
    >
      <v-card v-bind="item.raw"></v-card>

      <br>
    </template>
  </template>
</v-data-iterator>
    </AuthenticatedLayout>
</template>
<script>
export default {
  data: () => ({
    items:
    [
        { title:"aaa",text:"bbbb" },
        { title:"aaa",text:"bbbb" },
        { title:"aaa",text:"bbbb" },
        { title:"aaa",text:"bbbb" },
        { title:"aaa",text:"bbbb" },
        { title:"aaa",text:"bbbb" },
        { title:"aaa",text:"bbbb" },
        { title:"aaa",text:"bbbb" },
        { title:"aaa",text:"bbbb" },
        { title:"aaa",text:"bbbb" },
        { title:"aaa",text:"bbbb" },
        { title:"aaa",text:"bbbb" },
        { title:"aaa",text:"bbbb" },
        { title:"aaa",text:"bbbb" },
        { title:"aaa",text:"bbbb" },
        { title:"aaa",text:"bbbb" },
        { title:"aaa",text:"bbbb" },
        { title:"aaa",text:"bbbb" },
        { title:"aaa",text:"bbbb" },
        { title:"aaa",text:"bbbb" },
        { title:"aaa",text:"bbbb" },
        { title:"aaa",text:"bbbb" },
        { title:"aaa",text:"bbbb" },
        { title:"aaa",text:"bbbb" },
        { title:"aaa",text:"bbbb" },
        { title:"aaa",text:"bbbb" },
        { title:"aaa",text:"bbbb" }
    ],
    page: 2

  }),
}
</script>