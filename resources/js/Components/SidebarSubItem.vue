<template>
    <div class="flex items-center">
        <input type="checkbox" :name="name" :id="name" class="text-primary focus:ring-0 rounded-sm cursor-pointer"
            :value="id" v-model="selectedFilter" @change="selectedCategories">
        <label :for="name" class="text-gray-600 ml-3 cusror-pointer dark:text-slate-200">{{ name }}</label>
        <div class="ml-auto text-gray-600 text-sm dark:text-slate-200">({{ total }})</div>
    </div>
</template>

<script setup>

import { ref } from 'vue'

const selectedFilter = ref([])

defineProps({
    name: {
        type: String,
        required: true,
    },
    total: {
        type: Number,
        required: true,
    },
    id: Number

})
const emits = defineEmits(['selected-filter']);

function selectedCategories($event) {
    emits('selected-filter', $event.target.value, $event.target.checked)
}
</script>

<style></style>