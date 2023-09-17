<template>
    <a :href="href"
        class="text-center text-gray-700 dark:text-slate-200 dark:hover:text-slate-600 hover:text-slate-600  transition relative cursor-pointer" >
        <div class="text-2xl">
            <slot />
        </div>
        <div class="text-xs leading-3">{{ name }}</div>
    </a>
</template>

<script setup>
import shared from '@/Components/SharedState.vue'
import { usePage } from '@inertiajs/vue3'
const page = usePage()
defineProps({
    name: {
        type: String,
        required: true,
    },
    href: String
})


</script>

<style></style>