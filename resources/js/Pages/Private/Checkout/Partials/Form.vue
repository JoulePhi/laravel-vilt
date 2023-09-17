<template>
  <div class="col-span-8 border border-gray-200 p-4 rounded dark:border-slate-600">
                    <h3 class="text-lg font-medium capitalize mb-4">Checkout</h3>
                    <div class="space-y-4">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="first-name" class="text-gray-600 dark:text-slate-200">First Name <span
                                        class="text-primary">*</span></label>
                                <input type="text" name="first-name" id="first-name" class="w-full mt-3 border border-primary rounded focus:border-slate-600 dark:bg-slate-800 dark:placeholder-white">
                            </div>
                            <div>
                                <label for="last-name" class="text-gray-600 dark:text-slate-200">Last Name <span
                                        class="text-primary">*</span></label>
                                <input type="text" name="last-name" id="last-name" class="w-full mt-3 border border-primary rounded focus:border-slate-600 dark:bg-slate-800 dark:placeholder-white">
                            </div>
                        </div>
                   
                        <div>
                            <label for="region" class="text-gray-600 dark:text-slate-200">Country/Region</label>
                            <input type="text" name="region" id="region" class="w-full mt-3 border border-primary rounded focus:border-slate-600 dark:bg-slate-800 dark:placeholder-white">
                        </div>
                        <div>
                            <label for="address" class="text-gray-600 dark:text-slate-200">Street address</label>
                            <input type="text" name="address" id="address" class="w-full mt-3 border border-primary rounded focus:border-slate-600 dark:bg-slate-800 dark:placeholder-white">
                        </div>
                        <div>
                            <label for="city" class="text-gray-600 dark:text-slate-200">City</label>
                            <input type="text" name="city" id="city" class="w-full mt-3 border border-primary rounded focus:border-slate-600 dark:bg-slate-800 dark:placeholder-white">
                        </div>
                        <div>
                            <label for="phone" class="text-gray-600 dark:text-slate-200">Phone number</label>
                            <input type="text" name="phone" id="phone" class="w-full mt-3 border border-primary rounded focus:border-slate-600 dark:bg-slate-800 dark:placeholder-white">
                        </div>
                        <div>
                            <label for="email" class="text-gray-600 dark:text-slate-200">Email address</label>
                            <input type="email" name="email" id="email" class="w-full mt-3 border border-primary rounded focus:border-slate-600 dark:bg-slate-800 dark:placeholder-white">
                        </div>
                   
                    </div>

                </div>
</template>

<script>
export default {

}
</script>

<style>

</style>