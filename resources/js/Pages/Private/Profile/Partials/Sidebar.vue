<template>
    <div class="col-span-3">
        

        <div class="mt-6 bg-white shadow rounded p-4 divide-y divide-gray-200 space-y-4 text-gray-600 dark:bg-slate-800 dark:text-slate-200 dark:divide-slate-600 ">
            <div class="px-4 py-3  flex items-center gap-4">
                <div class="flex-shrink-0">
                    <img src="http://127.0.0.1:8000/assets/images/avatar.png" alt="profile"
                        class="rounded-full w-14 h-14 border border-gray-200 p-1 object-cover">
                </div>
                <div class="flex-grow ">
                    <p class="text-gray-600 dark:text-slate-200">Hello,</p>
                    <h4 class="text-gray-800 font-medium dark:text-slate-200">{{ page.props.auth.user.name }}</h4>
                </div>
            </div>
            <div class="space-y-1 pl-8 pt-4">
                <a href="#" class="relative text-primary block font-medium capitalize transition dark:hover:text-slate-700">
                    <span class="absolute -left-8 top-0 text-base">
                        <font-awesome-icon icon="fa-address-card"/>
                    </span>
                    Manage account
                </a>
                <a href="#" class="relative hover:text-primary block capitalize transition dark:hover:text-slate-700">
                    Profile information
                </a>
                <a href="#" class="relative hover:text-primary block capitalize transition dark:hover:text-slate-700">
                    Manage addresses
                </a>
                <a href="#" class="relative hover:text-primary block capitalize transition dark:hover:text-slate-700">
                    Change password
                </a>
            </div>

            <div class="space-y-1 pl-8 pt-4">
                <a href="#" class="relative hover:text-primary block font-medium capitalize transition dark:hover:text-slate-700">
                    <span class="absolute -left-8 top-0 text-base">
                        <font-awesome-icon icon="fa-box-archive"></font-awesome-icon>
                    </span>
                    My order history
                </a>
                <a href="#" class="relative hover:text-primary block capitalize transition dark:hover:text-slate-700">
                    My returns
                </a>
                <a href="#" class="relative hover:text-primary block capitalize transition dark:hover:text-slate-700">
                    My Cancellations
                </a>
                <a href="#" class="relative hover:text-primary block capitalize transition dark:hover:text-slate-700">
                    My reviews
                </a>
            </div>

            <div class="space-y-1 pl-8 pt-4">
                <a href="#" class="relative hover:text-primary block font-medium capitalize transition dark:hover:text-slate-700">
                    <span class="absolute -left-8 top-0 text-base">
                        <font-awesome-icon icon="fa-credit-card"></font-awesome-icon>
                    </span>
                    Payment methods
                </a>
                <a href="#" class="relative hover:text-primary block capitalize transition dark:hover:text-slate-700">
                    voucher
                </a>
            </div>

            <div class="space-y-1 pl-8 pt-4">
                <a href="#" class="relative hover:text-primary block font-medium capitalize transition dark:hover:text-slate-700">
                    <span class="absolute -left-8 top-0 text-base">
                        <font-awesome-icon icon="fa-heart"></font-awesome-icon>
                    </span>
                    My wishlist
                </a>
            </div>

            <div class="space-y-1 pl-8 pt-4">
                <a href="#" class="relative hover:text-primary block font-medium capitalize transition dark:hover:text-slate-700">
                    <span class="absolute -left-8 top-0 text-base">
                        <font-awesome-icon  icon="fa-arrow-right-from-bracket"></font-awesome-icon>
                    </span>
                    Logout
                </a>
            </div>

        </div>
    </div>
</template>

<script setup>
import { usePage } from "@inertiajs/vue3";



const page = usePage()
</script>

<style></style>