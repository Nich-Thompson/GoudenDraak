<template>
    <div class="container p-1">
        swag
        <button type="submit" class="float-right btn btn-primary text-light">Bestel</button>
        <span class="m-1 display-6 ">{{ dish.name }}</span>
    </div>
</template>

<script>
export default {
    name: "MenuItem",
    props: {
        dish: {
            required: true
        }
    }
}
</script>

<style scoped>

</style>
