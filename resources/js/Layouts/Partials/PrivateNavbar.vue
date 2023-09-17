<template>
    <nav class="bg-white dark:bg-gray-800 shadow">
        <div class=" container flex">
            <div class="px-8 py-4 bg-red-500 dark:bg-slate-700 md:flex items-center cursor-pointer relative group hidden">
                <div class="text-white dark:text-slate-200">
                    <font-awesome-icon icon="fa-solid fa-bars" />
                </div>
                <span class="capitalize ml-2 text-white hidden">All Categories</span>
                <!-- dropdown -->
                <div
                    class="absolute w-52 left-0 top-full bg-white dark:bg-slate-800 shadow-md py-3 divide-y divide-gray-300 dark:divide-slate-600 divide-dashed opacity-0 group-hover:opacity-100 transition duration-300 invisible group-hover:visible">
                    <DropdownItem name="Sofa" src="http://127.0.0.1:8000/assets/images/icons/sofa.svg" />
                    <DropdownItem name="Terrace" src="http://127.0.0.1:8000/assets/images/icons/terrace.svg" />
                    <DropdownItem name="Bed" src="http://127.0.0.1:8000/assets/images/icons/bed.svg" />
                    <DropdownItem name="Office" src="http://127.0.0.1:8000/assets/images/icons/office.svg" />
                    <DropdownItem name="Outdoor" src="http://127.0.0.1:8000/assets/images/icons/outdoor-cafe.svg" />
                    <DropdownItem name="Mattress" src="http://127.0.0.1:8000/assets/images/icons/bed-2.svg" />
                </div>
            </div>

            <div class="flex items-center justify-between flex-grow md:pl-12 py-5">
                <div class="flex items-center space-x-6 capitalize">
                    <MenuItem title="Home" :href="route('home')" />
                    <MenuItem title="Shop" :href="route('shop.index')" />
                    <MenuItem title="About us" :href="route('home')" />
                    <MenuItem title="Contact us" :href="route('home')" />
                </div>
                <MenuItem title="Logout" :href="route('logout')" v-if="page.props.auth.user" />
                <MenuItem title="Login" :href="route('login')" v-else />
            </div>
        </div>
    </nav>
</template>

<script setup>
import { inject } from 'vue'
import DropdownItem from '@/Components/DropdownItem.vue'
import MenuItem from '@/Components/MenuItem.vue'
import { usePage } from '@inertiajs/vue3'

const page = usePage()
</script>