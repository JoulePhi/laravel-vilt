<script setup>
import Checkbox from "@/Components/Checkbox.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

defineProps({
    canResetPassword: {
        type: Boolean,
    },
});

const form = useForm({
    email: "",
    password: "",
    remember: false,
});

const submit = () => {
    form.post(route("login"), {
        onFinish: () => form.reset("password"),
    });
};
</script>

<template>
    <form @submit.prevent="submit">
        <div>
            <InputLabel for="email" :value="__('Email')" />

            <TextInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus
                autocomplete="username" />

            <InputError class="mt-2" :message="form.errors.email" />
        </div>

        <div class="mt-4">
            <InputLabel for="password" :value="__('Password')" />

            <TextInput id="password" type="password" class="mt-1 block w-full" v-model="form.password" required
                autocomplete="current-password" />

            <InputError class="mt-2" :message="form.errors.password" />
        </div>

        <div class="flex items-center justify-between mt-6">
            <div class="flex items-center">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>
            <Link v-if="canResetPassword" :href="route('password.request')"
                class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
            {{ __('Forgot your password?') }}
            </Link>
        </div>

        <div class="flex items-center justify-end mt-4">
            <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing"> {{
                __('Login') }} </PrimaryButton>
        </div>
    </form>
</template>
