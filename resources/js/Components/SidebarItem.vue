<template>
    <div class="pt-4">
        <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium dark:text-slate-200">{{ title }}</h3>
        <div class="space-y-2">
            <slot />
        </div>
    </div>
</template>

<script setup>
defineProps({
    title: {
        type: String,
        required: true,
    }
})
</script>

<style></style>