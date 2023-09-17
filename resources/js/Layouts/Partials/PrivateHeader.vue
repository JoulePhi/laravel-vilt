<script setup>
import { ref, inject, computed } from "vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import DarkmodeSwitcher from "@/Components/DarkmodeSwitcher.vue";
import { Link, usePage } from "@inertiajs/vue3";
import HeaderItem from '@/Components/HeaderItem.vue';
import SearchBar from '@/Components/SearchBar.vue';
const page = usePage()
const user = computed(() => page.props.auth.user)

const showingNavigationDropdown = ref(false);
</script>
<template>
	<nav class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
		<!-- Primary Navigation Menu -->
		<div class="max-w-full  px-4 sm:px-6 lg:px-8">
			<div class="flex justify-between h-16">
				<div class="container flex items-center justify-between">
					<!-- Logo -->
					<div class="shrink-0 flex items-center">
						<Link :href="route('home')">
						<ApplicationLogo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
						</Link>
					</div>
					<SearchBar />
					<div class="flex items-center space-x-4 mr-5" v-if="user">
						<HeaderItem name="Wishlist">
							<font-awesome-icon icon="fa-solid fa-heart" />
						</HeaderItem>
						<HeaderItem name="Cart" @click="page.props.dialog = true;" v-if="page.url != '/checkout'">
							<font-awesome-icon icon="fa-solid fa-bag-shopping" href="/admin" />
							<div class="absolute -right-3 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-red-500 text-white text-xs"
								v-show="user.carts.length > 0 ">
								{{ user.carts.length }}</div>
						</HeaderItem>
						<HeaderItem name="Account" :href="route('profile.edit')">
							<font-awesome-icon icon="fa-solid fa-user" />
						</HeaderItem>
						<HeaderItem name="Admin" v-if="user.is_administrator" href="/admin">
							<font-awesome-icon icon="fa-solid fa-gear" />
						</HeaderItem>
					</div>

					<DarkmodeSwitcher />
				</div>

			</div>
		</div>


	</nav>
</template>

