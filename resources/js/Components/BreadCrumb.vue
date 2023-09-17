<template>
    <div class="container py-4 flex items-center gap-3">
        <a :href="route('home')" class="text-red-500 text-base">
            <font-awesome-icon icon="fa-solid fa-house" />
        </a>
        <span class="text-sm text-gray-400 dark:text-slate-200">
            <font-awesome-icon icon="fa-solid fa-chevron-right" />
        </span>
        <p class="text-gray-600 font-medium dark:text-slate-200">
            <slot />
        </p>
    </div>
</template>

<script setup>
</script>

<style></style>