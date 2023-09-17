<template>
    <div class="border border-primary rounded-sm px-3 py-6 flex justify-center items-center gap-5">
        <img :src="img" :alt="title" class="w-12 h-12 object-contain">
        <div>
            <h4 class="font-medium capitalize text-lg">{{ title }}</h4>
            <p class="text-gray-500 text-sm">{{ subtitle }}</p>
        </div>
    </div>
</template>

<script setup>
defineProps({
    img: {
        type: String,
        required: true,
    },
    title: {
        type: String,
        required: true,
    },
    subtitle: {
        type: String,
        required: true,
    }
})
</script>

<style></style>