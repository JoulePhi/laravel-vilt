<script setup>
import PrivateLayout from '@/Layouts/PrivateLayout.vue';
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import { Head } from '@inertiajs/vue3';
import Sidebar from './Partials/Sidebar.vue'
import Info from './Partials/Info.vue'
import Profile from './Partials/Profile.vue'

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
    user: Object
});


defineOptions({
    layout: PrivateLayout
})
</script>

<template>
    <Head :title="__('Profile')" />



    <div class="container grid grid-cols-12 items-start gap-6 pt-4 pb-16">

        <!-- sidebar -->
        <Sidebar />
        <!-- ./sidebar -->

        <!-- info -->
        <!-- <Info /> -->
        <!-- ./info -->
        <Profile />
    </div>
</template>
