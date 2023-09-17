<template>
    <Head title="Checkout" />
    <div class="container grid grid-cols-12 items-start pb-16 pt-4 gap-6">

        <Form />
        <Summary />
    </div>
</template>

<script setup>
import PrivateLayout from '@/Layouts/PrivateLayout.vue'
import Form from './Partials/Form.vue'
import Summary from './Partials/Summary.vue'
import { Head, usePage } from '@inertiajs/vue3';
defineOptions({
    layout: PrivateLayout
})
</script>
