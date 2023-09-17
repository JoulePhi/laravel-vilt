<template>
    <Head title="Product" />

    <Breadcrumb> Product </Breadcrumb>
    <ProductDetails :product="product" />
    <Description />
</template>

<script setup>
import PrivateLayout from '@/Layouts/PrivateLayout.vue'
import ProductDetails from './Partials/Details.vue'
import Description from './Partials/Description.vue'
import Breadcrumb from '@/Components/BreadCrumb.vue'
import { Head, usePage } from '@inertiajs/vue3';
import { defineOptions, provide, ref, nextTick } from 'vue';

const props = defineProps({
    product: Object
})
const page = usePage()
defineOptions({ layout: PrivateLayout })



</script>

<style></style>