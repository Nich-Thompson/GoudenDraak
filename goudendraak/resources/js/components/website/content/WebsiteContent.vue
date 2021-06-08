<template>
    <div class="content">
        <slot></slot>
    </div>
</template>

<script>
export default {
    name: "WebsiteContent"
}
</script>

<style scoped>

.content {
    border: 1px solid black;
    background: floralwhite;
}

</style>
