<template>
    <div class="col-span-1 bg-white px-4 pb-6 shadow rounded-md overflow-hiddenb hidden md:block dark:bg-slate-800">
        
        <div class="divide-y divide-gray-200 space-y-5 dark:divide-slate-600">
            <SideBarItemC title="Categories">
                <div v-for="category in categories" :key="category.id">
                    <SideBarSubItem :name="category.name" :total="category.products_count" :id="category.id"
                        @selected-filter="filterCategories" v-if="category.products_count > 0" />
                </div>
            </SideBarItemC>
            <SideBarItemC title="Brands">
                <div v-for="brand in brands" :key="brand.id">
                    <SideBarSubItem :name="brand.name" :total="brand.products_count" :id="brand.id"
                        @selected-filter="filterBrands" />
                </div>
            </SideBarItemC>
            <SideBarItemC title="Price">
                <SideBarSubItemInput />
            </SideBarItemC>
            <SideBarItemC title="Size">
                <SideBarSubItemSize />
            </SideBarItemC>

        </div>
    </div>
</template>

<script setup>

import SideBarItemC from '@/Components/SidebarItem.vue'
import SideBarSubItem from '@/Components/SidebarSubItem.vue'
import SideBarSubItemInput from '@/Components/SidebarSubItemInput.vue'
import SideBarSubItemSize from '@/Components/SidebarSubItemSize.vue'
import { router } from '@inertiajs/vue3'
import { onMounted } from 'vue'
let selectedCategories = []
let selectedBrands = []

defineProps({
    categories: Array,
    brands: Array
})
const emits = defineEmits(['filterCategories', 'filterBrands'])



function filterCategories(id, checked) {
    if (checked) {
        selectedCategories.push(id)
    } else {
        selectedCategories.splice(selectedCategories.indexOf(id), 1)
    }
    emits('filterCategories', selectedCategories)
}
function filterBrands(id, checked) {
    
    if (checked) {
        selectedBrands.push(id)
    } else {
        selectedBrands.splice(selectedBrands.indexOf(id), 1)
    }
    emits('filterBrands', selectedBrands)
}


</script>

<style></style>