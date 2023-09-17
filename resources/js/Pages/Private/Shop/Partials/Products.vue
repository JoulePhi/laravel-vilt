<template>
    <div class="col-span-3">
        <div class="flex items-center mb-4"  >
            <select name="sort" id="sort"  @change="sortProducts" v-model="sortBy"
                class="w-44 text-sm text-gray-600 py-3 px-4 border-gray-300 shadow-sm rounded focus:ring-primary focus:border-primary">
                <option value="">Default sorting</option>
                <option value="price-low-to-high">Price low to high</option>
                <option value="price-high-to-low">Price high to low</option>
                <option value="latest">Latest product</option>
            </select>

            <div class="flex gap-2 ml-auto">
                <div
                    class="border border-primary w-10 h-9 flex items-center justify-center text-gray-600 bg-primary rounded cursor-pointer dark:text-slate-200">
                    <font-awesome-icon icon="fa-solid fa-grip-vertical" />
                </div>
                <div
                    class="border border-gray-300 w-10 h-9 flex items-center justify-center text-gray-600 rounded cursor-pointer dark:text-slate-200">
                    <font-awesome-icon icon="fa-solid fa-list" />
                </div>
            </div>
        </div>
        <div class="grid md:grid-cols-3 grid-cols-2 gap-6">
            <div v-for="product in products.data" :key="product.id">
                <ProductCard :product="product" />
            </div>
        </div>
       

        <div class="flex mt-10 justify-end">
            <!-- Previous Button -->
            <Link :href="products.prev_page_url" v-if="products.prev_page_url"
                class="flex items-center justify-center px-4 h-10 text-base font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                Previous
            </Link>

            <!-- Next Button -->
            <Link :href="products.next_page_url" v-if="products.next_page_url" 
                class="flex items-center justify-center px-4 h-10 ml-3 text-base font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                Next
            </Link>
        </div>
        
        
    </div>
</template>

<script setup>
import ProductCard from '@/Components/ProductCard.vue'
import { Link, router } from '@inertiajs/vue3'
import { inject, ref } from 'vue'
const props = defineProps({
    products: Object
})

const sortBy = ref('')
const emits = defineEmits(['filter'])

function sortProducts(data)
{
    emits('filter',sortBy.value)
}

</script>

<style></style>