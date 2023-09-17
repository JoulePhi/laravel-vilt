<script setup>
import PrivateHeader from "@/Layouts/Partials/PrivateHeader.vue";
import Footer from "@/Layouts/Partials/Footer.vue";
import Navbar from "@/Layouts/Partials/PrivateNavbar.vue"
import SlideOut from '@/Components/SlideOut.vue'

</script>

<template>
    <div>
        <div class="flex flex-col min-h-screen bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-200">
            <PrivateHeader />
            <SlideOut />
            <Navbar />

            <!-- Page Content -->
            <main class="flex-grow">
                <slot />
            </main>

            <Footer />
        </div>
    </div>
</template>
