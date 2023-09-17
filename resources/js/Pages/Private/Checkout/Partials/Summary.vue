<template>
  <div class="col-span-4 border border-gray-200 p-4 rounded dark:border-slate-600">
                    <h4 class="text-gray-800 text-lg mb-4 font-medium uppercase dark:text-slate-200">order summary</h4>
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <div>
                                <h5 class="text-gray-800 font-medium dark:text-slate-200">Italian shape sofa</h5>
                                <p class="text-sm text-gray-600 dark:text-slate-200">Size: M</p>
                            </div>
                            <p class="text-gray-600 dark:text-slate-200">
                                x3
                            </p>
                            <p class="text-gray-800 font-medium dark:text-slate-200">$320</p>
                        </div>
                    
                    </div>

                    <div class="flex justify-between border-b border-gray-200 mt-1 text-gray-800 font-medium py-3 dark:text-slate-200 ">
                        <p>subtotal</p>
                        <p>$1280</p>
                    </div>

                    <div class="flex justify-between border-b border-gray-200 mt-1 text-gray-800 font-medium py-3 dark:text-slate-200">
                        <p>Shipping</p>
                        <p>Free</p>
                    </div>

                    <div class="flex justify-between text-gray-800 font-medium py-3 dark:text-slate-200">
                        <p class="font-semibold">Total</p>
                        <p>$1280</p>
                    </div>

                    <div class="flex items-center mb-4 mt-2">
                        <input type="checkbox" name="aggrement" id="aggrement"
                            class="text-primary focus:ring-0 rounded-sm cursor-pointer w-3 h-3">
                        <label for="aggrement" class="text-gray-600 dark:text-slate-200 ml-3 cursor-pointer text-sm">I agree to the <a href="#"
                                class="text-primary">terms & conditions</a></label>
                    </div>

                    <a href="#"
                        class="block w-full py-3 px-4 text-center text-white bg-red-500 border border-primary rounded-md hover:bg-transparent hover:text-primary transition font-medium dark:border-slate-600">Place
                        order</a>
                </div>

</template>

<script>
export default {

}
</script>

<style>

</style>