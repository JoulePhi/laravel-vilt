<script setup>
import PublicLayout from "@/Layouts/PublicLayout.vue";
import LoginForm from "@/Pages/Auth/Partials/LoginForm.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head :title="__('Login')" />

    <PublicLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">{{ __("Login") }}</h2>
        </template>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-12">
                <LoginForm />
            </div>
        </div>
    </PublicLayout>
</template>
