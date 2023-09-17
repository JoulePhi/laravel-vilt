<template>
    <div class="container py-16">
        <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6 dark:text-slate-400">shop by category</h2>
        <div class="grid grid-cols-3 gap-3">
            <div v-for="category in categories" :key="category.id">
                <CategoryItem :title="category.name" :img="category.image" :id="category.id"/>
            </div>
        </div>
    </div>
</template>

<script setup>
import CategoryItem from '@/Components/CategoryItem.vue'
defineProps({
    categories: Array
})
</script>

<style></style>