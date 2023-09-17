<template>
    <Link :href="href"
        class=" dark:text-slate-200  text-slate-800 hover:text-slate-400 dark:hover:text-slate-600 transition">
    {{ title }}
    </Link>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
defineProps({
    title: {
        type: String,
        required: true,
    },
    href: {
        type: String,
        required: true,
    },
})
</script>

<style></style>