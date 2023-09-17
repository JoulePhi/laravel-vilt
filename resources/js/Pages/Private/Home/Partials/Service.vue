<template>
    <div class="container py-16">
        <div class="w-10/12 grid grid-cols-1 md:grid-cols-3 gap-6 mx-auto justify-center">

            <ServiceItem img="assets/images/icons/delivery-van.svg" title="Free Shipping" subtitle="Order over $200" />
            <ServiceItem img="assets/images/icons/money-back.svg" title="Money Returns" subtitle="30 days money returns" />
            <ServiceItem img="assets/images/icons/service-hours.svg" title="24/7 Support" subtitle="Customer support" />

        </div>
    </div>
</template>

<script setup>
import ServiceItem from '@/Components/ServiceItem.vue'
</script>

<style></style>