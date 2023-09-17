<script setup>
import PrivateLayout from '@/Layouts/PrivateLayout.vue';
import { Head, usePage } from '@inertiajs/vue3';
import Banner from './Partials/Banner.vue';
import Service from './Partials/Service.vue'
import Category from './Partials/Category.vue'
import NewArrival from './Partials/NewArrival.vue'
import AdsBanner from './Partials/AdsBanner.vue'
import RecommendedProducts from './Partials/RecommendedProduct.vue'

import { onMounted, provide, ref, nextTick } from 'vue'

const props = defineProps({
    categories: Array,
    new_products: Array,
    recommended_products: Array,
})
const page = usePage()
defineOptions({layout: PrivateLayout})





// onMounted(() => console.log(page.props))

</script>

<template>
    <Head :title="__('Dashboard')" />
<!-- 
    <template #header>
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">{{ __('Dashboard') }}</h2>
            </template> -->
            
            <Banner />
            <Service />
            <Category :categories="categories" />
            <NewArrival :new_products="new_products" />
            <AdsBanner />
            <RecommendedProducts :products="recommended_products"/>
</template>
