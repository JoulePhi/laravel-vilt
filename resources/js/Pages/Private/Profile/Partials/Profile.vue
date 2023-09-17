<script setup>
import { useForm, usePage } from '@inertiajs/vue3'

const user = usePage().props.auth.user

const form = useForm({
    first_name: user.name.split()[0],
    last_name: user.name.split()[1],
    email: user.email,
})
</script>

<template>
  <div class="col-span-9 shadow rounded px-6 pt-5 pb-7">
                <h4 class="text-lg font-medium capitalize mb-4">
                    Profile information
                </h4>
                <div class="space-y-4">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="first">First name</label>
                            <input type="text" name="first" id="first" class="w-full border border-slate-600  rounded focus:border-slate-600 dark:bg-slate-800 dark:placeholder-white" v-model="form.first_name">
                        </div>
                        <div>
                            <label for="last">Last name</label>
                            <input type="text" name="last" id="last" class="w-full border border-slate-600  rounded focus:border-slate-600 dark:bg-slate-800 dark:placeholder-white" v-model="form.last_name">
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="birthday">Birthday</label>
                            <input type="date" name="birthday" id="birthday" class="w-full border border-slate-600  rounded focus:border-slate-600 dark:bg-slate-800 dark:placeholder-white">
                        </div>
                        <div>
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" class="w-full border border-slate-600  rounded focus:border-slate-600 dark:bg-slate-800 dark:placeholder-white">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="email">Email Address</label>
                            <input type="email" name="email" id="email" class="w-full border border-slate-600  rounded focus:border-slate-600 dark:bg-slate-800 dark:placeholder-white" v-model="form.email">
                        </div>
                        <div>
                            <label for="phone">Phone number</label>
                            <input type="text" name="phone" id="phone" class="w-full border border-slate-600  rounded focus:border-slate-600 dark:bg-slate-800 dark:placeholder-white">
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit"
                        class="py-3 px-4 text-center text-white bg-red-400 border border-red-400 rounded-md  transition font-medium ">save
                        changes</button>
                </div>
            </div>
</template>



<style>

</style>