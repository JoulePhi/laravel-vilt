<template>
    <div class="bg-white shadow rounded overflow-hidden group dark:bg-slate-800">
        <div class="relative">
            <div class="h-52 ">
                <img :src="'storage/' + product.image" alt="product 1" class="object-fill h-52 w-96">
            </div>
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                <a href="#"
                    class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition dark:bg-slate-800 dark:hover:bg-slate-600"
                    title="view product">
                    <font-awesome-icon icon="fa-solid fa-magnifying-glass" />
                </a>
                <a href="#"
                    class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition dark:bg-slate-800 dark:hover:bg-slate-600"
                    title="add to wishlist">
                    <font-awesome-icon icon="fa-solid fa-heart" />
                </a>
            </div>
        </div>
        <div class="pt-4 pb-3 px-4 ">
            <a :href="'/product/' + product.id">
                <h4
                    class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition dark:text-white truncate">
                    {{ product.name }}</h4>
            </a>
            <div class="flex items-baseline mb-1 space-x-2">
                <p class="text-xl text-primary font-semibold">{{ USDollar.format(product.price) }}</p>
                <p class="text-sm text-gray-400 line-through">{{ USDollar.format(product.price) }}</p>
            </div>
            <div class="flex items-center">
                <div class="flex gap-1 text-sm text-yellow-400">
                    <span><font-awesome-icon icon="fa-solid fa-star" /></span>
                    <span><font-awesome-icon icon="fa-solid fa-star" /></span>
                    <span><font-awesome-icon icon="fa-solid fa-star" /></span>
                    <span><font-awesome-icon icon="fa-solid fa-star" /></span>
                    <span><font-awesome-icon icon="fa-solid fa-star" /></span>
                </div>
                <div class="text-xs text-gray-500 ml-3">(150)</div>
            </div>
        </div>
        <a class="block w-full py-1 text-center text-white bg-red-500 border border-primary rounded-b hover:bg-transparent hover:text-primary transition dark:border-slate-600 dark:hover:bg-red-400 hover:cursor-pointer"
            @mouseover="changeIcon" @mouseleave="changeText" @click="addToCart">
            <span v-if="!isHover">Add to cart</span>
            <font-awesome-icon icon="fa-solid fa-shopping-bag" v-else />
        </a>


      

    </div>
</template>

<script setup>
import { ref, inject } from 'vue'
import { router, usePage } from '@inertiajs/vue3'
import Modal from '@/Components/Modal.vue';
const isHover = ref(0)
let isVisible = ref(false);
const page = usePage()
const props = defineProps({
    product: Object
})
let USDollar = new Intl.NumberFormat('en-US', {
    style: 'currency',
    currency: 'USD',
});
function changeIcon() {
    isHover.value = 1
}
function changeText() {
    isHover.value = 0
}

function addToCart() {
    if (user) {
        router.visit('/product/' + props.product.id)
    }
    else {
        router.visit('/login')
    }
}

const user = page.props.auth.user;


</script>

<style></style>