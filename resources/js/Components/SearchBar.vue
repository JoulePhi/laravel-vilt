<template>
    <div class="w-full max-w-xl relative flex">
        <span class="absolute left-4 top-3 text-lg text-gray-400">
            <font-awesome-icon icon="fa-solid fa-magnifying-glass" />
        </span>
        <input type="text" name="search" id="search"
            class="w-full border border-primary border-r-0 pl-12 py-3 pr-3 rounded-l-md focus:border-slate-600 dark:bg-slate-800 dark:placeholder-white"
            placeholder="search">
        <button
            class="bg-red-500 border hover:border-red-500 hover:bg-transparent hover:text-red-500 text-white px-8 rounded-r-md hover:text-primary transition dark:bg-slate-800 dark:hover:bg-slate-400 dark:hover:text-slate-800 dark:hover:border-slate-800 focus:border-slate-600">Search</button>
    </div>
</template>

