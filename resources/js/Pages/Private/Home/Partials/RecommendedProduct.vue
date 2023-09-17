<template>
    <div class="container pb-16">
        <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6 dark:text-slate-200">recomended for you</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div v-for="product in products" :key="product.id">
                 <ProductCard :product="product"/>
            </div>
            
        </div>
    </div>
</template>

<script setup>
import ProductCard from '@/Components/ProductCard.vue'
defineProps({
    products: Array
})
</script>

<style></style>