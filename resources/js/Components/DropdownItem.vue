<template>
    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-200  dark:hover:bg-slate-600 transition">
        <img :src="src" :alt="name" class="w-5 h-5 object-contain">
        <span class="ml-6 text-gray-600 dark:text-slate-200 text-sm ">{{ name }}</span>
    </a>
</template>

<script setup>
defineProps({
    src: {
        type: String,
        required: true,
    },
    name: {
        type: String,
        required: true,
    },
});
</script>

<style></style>