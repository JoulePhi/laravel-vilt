<template>
    <TransitionRoot as="template" :show="page.props.dialog">
        <Dialog as="div" class="relative z-10" @close="open = false">
            <TransitionChild as="template" enter="ease-in-out duration-500" enter-from="opacity-0" enter-to="opacity-100"
                leave="ease-in-out duration-500" leave-from="opacity-100" leave-to="opacity-0">
                <div class="fixed inset-0 bg-slate-800 bg-opacity-75 transition-opacity" />
            </TransitionChild>

            <div class="fixed inset-0 overflow-hidden ">
                <div class="absolute inset-0 overflow-hidden">
                    <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                        <TransitionChild as="template" enter="transform transition ease-in-out duration-500 sm:duration-700"
                            enter-from="translate-x-full" enter-to="translate-x-0"
                            leave="transform transition ease-in-out duration-500 sm:duration-700" leave-from="translate-x-0"
                            leave-to="translate-x-full">
                            <DialogPanel class="pointer-events-auto w-screen max-w-lg " >
                                <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl dark:bg-slate-800">
                                    <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
                                        <div class="flex items-start justify-between">
                                            <DialogTitle class="text-lg font-medium text-gray-900 dark:text-slate-200">Shopping cart
                                            </DialogTitle>
                                            <div class="ml-3 flex h-7 items-center">
                                                <button type="button"
                                                    class="relative -m-2 p-2 text-gray-400 hover:text-gray-500"
                                                    @click="page.props.dialog = false">
                                                    <span class="absolute -inset-0.5" />
                                                    <span class="sr-only">Close panel</span>
                                                    <XMarkIcon class="h-6 w-6" aria-hidden="true" />
                                                </button>
                                            </div>
                                        </div>

                                        <div class="mt-8">
                                            <div class="flow-root">
                                                <ul role="list" class="-my-6 divide-y divide-gray-200 dark:divide-slate-600">
                                                    <li v-for="product in page.props.auth.user.carts || []" :key="product.id" class="flex py-6" >
                                                        <div 
                                                            class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200 dark:border-slate-400">
                                                            <img :src="'http://127.0.0.1:8000/storage/'+product.products.image" :alt="product.imageAlt"
                                                                class="h-full w-full object-cover object-center" />
                                                        </div>

                                                        <div class="ml-4 flex flex-1 flex-col">
                                                            <div>
                                                                <div 
                                                                    class="flex justify-between text-base font-medium text-gray-900 dark:text-slate-200">
                                                                    <h3>
                                                                        <a :href="product.href">{{ product.products.name }}</a>
                                                                    </h3>
                                                                    <p class="ml-4">{{ USDollar.format(product.products.price) }}</p>
                                                                </div>
                                                                <p class="mt-1 text-sm text-gray-500 dark:text-white line-clamp-1" >{{ product.products.category.name }} 
                                                                </p>
                                                            </div>
                                                            <div class="flex flex-1 items-end justify-between text-sm" >
                                                                <p class="text-gray-500 dark:text-slate-200">Qty {{ product.quantity }}</p>

                                                                <div class="flex" >
                                                                    <button type="button" @click="remove(product.id)"
                                                                        class="font-medium text-red-600 hover:text-red-500">Remove</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border-t border-gray-200 px-4 py-6 sm:px-6 dark:border-slate-600">
                                        <div class="flex justify-between text-base font-medium text-gray-900 dark:text-slate-200">
                                            <p>Subtotal</p>
                                            <p>{{ subtotal }}</p>
                                        </div>
                                        <p class="mt-0.5 text-sm text-gray-500 dark:text-white">Shipping and taxes calculated at checkout.
                                        </p>
                                        <div class="mt-6">
                                            <a :href="route('checkout')"
                                                class="flex items-center justify-center rounded-md border border-transparent bg-red-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-red-700">Checkout</a>
                                        </div>
                                        <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                                            <p>
                                                or
                                                <button type="button"
                                                    class="font-medium text-red-600 hover:text-red-500 focus-visible:ring-blue-500"
                                                    @click="page.props.dialog = false">
                                                    Continue Shopping
                                                    <span aria-hidden="true"> &rarr;</span>
                                                </button>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </DialogPanel>
                        </TransitionChild>
                    </div>
                </div>
            </div>
            <button class="opacity-0 absolute bottom-0"></button>
        </Dialog>
    </TransitionRoot>
</template>

<script setup>
import { ref, computed, inject, onMounted } from 'vue'
import { Dialog, DialogPanel, DialogTitle, TransitionChild, TransitionRoot } from '@headlessui/vue'
import { useToast } from 'vue-toast-notification';
import 'vue-toast-notification/dist/theme-sugar.css';
import { XMarkIcon } from '@heroicons/vue/24/outline'
import axios from 'axios'
import { usePage } from '@inertiajs/vue3'
const $toast = useToast();
const page = usePage()


const subtotal = computed(() => {
    let t = 0
    page.props.auth.user.carts.forEach(element => {
        t += element.products.price * element.quantity
    });
    return USDollar.format(t);
})
let USDollar = new Intl.NumberFormat('en-US', {
    style: 'currency',
    currency: 'USD',
});
function remove(id)
{
    axios.delete('/cart/delete',{
        data: {
            id: id
        }
    }).then(function (data){
        page.props.auth.user.carts.splice(page.props.auth.user.carts.indexOf(data.data))
        console.log(data)
        let instance = $toast.success('Product Removed From Cart');
    })
    console.log(id)
}

</script>