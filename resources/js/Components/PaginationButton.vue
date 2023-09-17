<!-- PaginationComponent.vue -->
<template>
    <div>
        <!-- Display the data -->
        <ul>
            <li v-for="item in items.data" :key="item.id">{{ item.name }}</li>
        </ul>

        <!-- Render pagination links -->
        <ul class="flex list-none mt-2">
            <li v-html="paginationLinks"></li>
        </ul>
    </div>
</template>

<script>
export default {
    props: {
        paginationLinks: String, // Prop to receive the pagination links as a string
    },
    computed: {
        items() {
            // You can parse the JSON data here if needed
            // For example, if you receive the data as JSON, you can do:
            // return JSON.parse(this.paginationLinks);
            // Or, if you receive HTML links directly, you can use them as is.
        },
    },
};
</script>
