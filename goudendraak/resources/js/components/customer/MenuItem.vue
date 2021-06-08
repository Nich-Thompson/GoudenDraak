<template>
    <div class="container p-1">
        <button type="submit" class="float-right btn btn-primary text-light">Bestel</button>
        <span class="dish">{{ dish.number }}{{ dish.number_addition }}. {{ dish.name }} €{{ dish.price }}</span>
        <span class="description">{{ dish.description}}</span>
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
    .dish {
        font-size: 30px;
        margin-left: 10px;
    }

    .btn {
        font-size: 20px;
    }

    .description {
        float: right;
        font-size: 24px;
    }
</style>
