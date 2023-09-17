<script setup>
import PrivateLayout from '@/Layouts/PrivateLayout.vue';
import { Head, router, usePage } from '@inertiajs/vue3';
import BreadCrumb from '@/Components/BreadCrumb.vue'
import SideBar from './Partials/Sidebar.vue'
import Products from './Partials/Products.vue'
import { defineOptions, provide, ref, nextTick, onMounted } from 'vue'

const props = defineProps({
    categories: Array,
    brands: Array,
    products: Object,
})
const page = usePage()

const params = {}

onMounted(() => console.log(page.props.auth.user))

defineOptions({ layout: PrivateLayout })

function handleSortby(data) {
    if(data != '')
    {
        params.sortBy = data;
    }else{
        delete params.sortBy
    }
    console.log(params)
    handleAll()
}

function handleBrands(data)
{   
    if(data.length > 0)
    {
        params.brands = []
        params.brands = data
    }else{
        delete params.brands
    }
        
    console.log(params)
    handleAll()
}

function handleCategories(data)
{
    if(data.length > 0)
    {
        params.categories = []
        params.categories = data
    }else{
        delete params.categories
    }
    console.log(params)
    handleAll()
}

function handleAll()
{
    router.visit('/shop',{
        data: params,
        preserveState: true
    })
}

</script>

<template>
    <Head :title="__('Shop')" />

    <BreadCrumb>Shop</BreadCrumb>
    <div class="container grid md:grid-cols-4 grid-cols-2 gap-6 pt-4 pb-16 items-start">
        <SideBar :categories="categories" :brands="brands" @filter-brands="handleBrands" @filter-categories="handleCategories"/>
        <Products :products="products" @filter="handleSortby" />
    </div>
</template>
