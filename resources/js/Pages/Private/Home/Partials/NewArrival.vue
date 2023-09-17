<template>
    <div class="container pb-16">
        <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6 dark:text-slate-200">top new arrival</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div v-for="product in new_products" :key="product.id">
                <ProductCard :product="product" />
            </div>

        </div>
    </div>
</template>

<script setup>
import ProductCard from '@/Components/ProductCard.vue'
defineProps({
    new_products: Array
})
</script>

<style></style>