<script setup>
import PrivateLayout from "@/Layouts/PrivateLayout.vue";
import LoginForm from "@/Pages/Auth/Partials/LoginForm.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

defineProps({
    canResetPassword: {
        type: Boolean,
    },
});

defineOptions({
    layout: PrivateLayout
})
</script>

<template>
    <Head title="Log in" />

    <div class="contain py-16">
        <div class="max-w-lg mx-auto shadow px-6 py-7 rounded overflow-hidden dark:bg-slate-800">
            <h2 class="text-2xl uppercase font-bold mb-1">Login</h2>
            <p class="text-gray-600 mb-6 text-sm uppercase dark:text-slate-400">
                welcome back customer
            </p>
            <LoginForm :can-reset-password="canResetPassword" />

            <!-- login with -->
            <div class="mt-6 flex justify-center relative">
                <div class="text-gray-600 uppercase px-3 bg-white z-10 relative dark:bg-slate-700 dark:text-slate-200">
                    Or login with</div>
                <div class="absolute left-0 top-3 w-full border-b-2 border-gray-200 dark:border-slate-700"></div>
            </div>
            <div class="mt-4 flex gap-4">
                <a href="#"
                    class="w-1/2 py-2 text-center text-white bg-blue-800 rounded uppercase font-roboto font-medium text-sm hover:bg-blue-700">facebook</a>
                <a href="#"
                    class="w-1/2 py-2 text-center text-white bg-red-600 rounded uppercase font-roboto font-medium text-sm hover:bg-red-500">google</a>
            </div>
            <!-- ./login with -->

            <p class="mt-4 text-center text-gray-600">Don't have account? <a :href="route('register')"
                    class="text-red-500 hover:underline">Register
                    now</a></p>
        </div>
    </div>
</template>
