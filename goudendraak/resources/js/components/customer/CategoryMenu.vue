<template>
    <div class="menu-list">
        <div
            v-for="item in items"
        >
            <menu-item :dish="item"></menu-item>
        </div>
    </div>
</template>

<script>
import MenuItem from "./MenuItem";

export default {
    name: "CategoryMenu",
    components: {
        MenuItem
    },
    props: {
        items: {
            type: Array,
            required: true
        }
    }
}
</script>

<style scoped>
.menu-list {
    max-height: 70vh;
    overflow-y: scroll;
}

::-webkit-scrollbar {
    display: none;
}
</style>
