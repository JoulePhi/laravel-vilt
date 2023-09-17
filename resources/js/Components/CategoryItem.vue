<template>
    <div class="relative rounded-sm overflow-hidden group hover:cursor-pointer" @click="goto(id)">
        <img :src="'storage/' + img" alt="category 1" class="w-full">
        <p 
            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">{{
                title }}</p>
    </div>
</template>

<script setup>
import { router } from "@inertiajs/vue3"

defineProps({
    img: {
        type: String,
        required: true,
    },
    title: {
        type: String,
        required: true,
    },
    id: Number
})

function goto(id)
{
    console.log(id)
    router.visit('/shop',{
        data: {
            categories: [id]
        }
    })
}
</script>

<style></style>