<template>
    <div class="container grid grid-cols-2 gap-6">
        <div>
            <img :src="'../storage/' + product.image" alt="product" class="w-full h-4/5 object-cover">
            <div class="grid grid-cols-5 gap-4 mt-4">
                <img src="/assets/images/products/product2.jpg" alt="product2"
                    class="w-full cursor-pointer border border-primary">
                <img src="/assets/images/products/product3.jpg" alt="product2" class="w-full cursor-pointer border">
                <img src="/assets/images/products/product4.jpg" alt="product2" class="w-full cursor-pointer border">
                <img src="/assets/images/products/product5.jpg" alt="product2" class="w-full cursor-pointer border">
                <img src="/assets/images/products/product6.jpg" alt="product2" class="w-full cursor-pointer border">
            </div>
        </div>

        <div>
            <h2 class="text-3xl font-medium uppercase mb-2">{{ product.name }}</h2>
            <div class="flex items-center mb-4">
                <div class="flex gap-1 text-sm text-yellow-400">
                    <span><font-awesome-icon icon="fa-star" /></span>
                    <span><font-awesome-icon icon="fa-star" /></span>
                    <span><font-awesome-icon icon="fa-star" /></span>
                    <span><font-awesome-icon icon="fa-star" /></span>
                    <span><font-awesome-icon icon="fa-star" /></span>
                </div>
                <div class="text-xs text-gray-500 ml-3">(150 Reviews)</div>
            </div>
            <div class="space-y-2">
                <p class="text-gray-800 font-semibold space-x-2 dark:text-slate-200">
                    <span>Availability: </span>
                    <span class="text-green-600">{{ product.quantity }} STOCK</span>
                </p>
                <p class="space-x-2">
                    <span class="text-gray-800 font-semibold dark:text-slate-200">Brand: </span>
                    <span class="text-gray-600 dark:text-slate-300">{{ product.brand.name }}</span>
                </p>
                <p class="space-x-2">
                    <span class="text-gray-800 font-semibold dark:text-slate-200">Category: </span>
                    <span class="text-gray-600 dark:text-slate-300">{{ product.category.name }}</span>
                </p>
            </div>
            <div class="flex items-baseline mb-1 space-x-2 font-roboto mt-4">
                <p class="text-xl text-primary font-semibold">{{ USDollar.format(product.price) }}</p>
                <p class="text-base text-gray-400 line-through">{{ USDollar.format(product.price) }}</p>
            </div>

            <p class="mt-4 text-gray-600 dark:text-slate-200 line-clamp-3">{{ product.description }}</p>
            <div class="pt-4">
                <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium dark:text-slate-200">Color</h3>
                <div class="flex items-center gap-2">
                    <div class="color-selector">
                        <input type="radio" name="color" id="red" class="hidden">
                        <label for="red" class="border border-gray-200 rounded-sm h-6 w-6  cursor-pointer shadow-sm block"
                            style="background-color: #fc3d57;"></label>
                    </div>
                    <div class="color-selector">
                        <input type="radio" name="color" id="black" class="hidden">
                        <label for="black" class="border border-gray-200 rounded-sm h-6 w-6  cursor-pointer shadow-sm block"
                            style="background-color: #000;"></label>
                    </div>
                    <div class="color-selector">
                        <input type="radio" name="color" id="white" class="hidden">
                        <label for="white" class="border border-gray-200 rounded-sm h-6 w-6  cursor-pointer shadow-sm block"
                            style="background-color: #fff;"></label>
                    </div>

                </div>
            </div>

            <div class="mt-4">
                <h3 class="text-sm text-gray-800 uppercase mb-1 dark:text-slate-200">Quantity</h3>
                <div class="flex border border-gray-300 text-gray-600 divide-x divide-gray-300 w-max">
                    <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none dark:text-slate-200 dark:active:text-red-500"
                        @click="decrement">
                        -</div>
                    <div class="h-8 w-8 text-base flex items-center justify-center dark:text-slate-200">{{ quantity }}</div>
                    <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none dark:text-slate-200 dark:active:text-red-500"
                        @click="increment">
                        +</div>
                </div>
            </div>

            <div class="mt-6 flex gap-3 border-gray-200 pb-5 pt-5">
                <button
                    class="bg-red-500 border border-primary text-white px-8 py-2 font-medium rounded uppercase flex items-center gap-2 hover:bg-transparent hover:text-primary transition "
                    @click="addToCart">
                    <div v-if="!load">
                        <font-awesome-icon icon="fa-shopping-bag" /> Add to cart
                    </div>
                    <div v-else>
                        <svg aria-hidden="true" role="status" class="inline w-4 h-4 mr-3 text-white animate-spin"
                            viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                fill="#E5E7EB" />
                            <path
                                d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                fill="currentColor" />
                        </svg>
                    </div>
                </button>

                <a href="#"
                    class="border border-gray-300 text-gray-600 px-8 py-2 font-medium rounded uppercase flex items-center gap-2 hover:text-red-500 transition dark:text-slate-300 dark:hover:text-red-500">
                    <font-awesome-icon icon="fa-heart" /> Wishlist
                </a>
            </div>

        </div>
    </div>
</template>

<script setup>

import axios from 'axios';
import { router, usePage } from '@inertiajs/vue3'
import { ref, inject, nextTick } from 'vue'
import { useToast } from 'vue-toast-notification';
import 'vue-toast-notification/dist/theme-sugar.css';
const quantity = ref(1)
const page = usePage()
const $toast = useToast();

const props = defineProps({
    product: Object
})
const load = ref(false)

function decrement() {
    if (quantity.value > 1) {
        quantity.value--;
    }
}
let USDollar = new Intl.NumberFormat('en-US', {
    style: 'currency',
    currency: 'USD',
});
function increment() {
    if (quantity.value < props.product.quantity) {
        quantity.value++;
    }
}

async function addToCart() {
    
    load.value = true
    axios.post('/cart/add', {
        params: {
            user_id: page.props.auth.user.id,
            product_id: props.product.id,
            quantity: quantity.value,
        }
    }).then(async function (data) {
        const isExist = page.props.auth.user.carts.find(product => product.id === data.data.id)
        console.log(isExist)
        console.log(data.data)
        if (isExist) {
            isExist.quantity = data.data.quantity;
        } else {
            page.props.auth.user.carts.push(data.data)
        }
        $toast.success('Product Added To Cart');
        load.value = false
        await nextTick()

    });
}

</script>

<style></style>