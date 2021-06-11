<template>
    <div class="container p-1">
        <button type="submit" class="float-right btn btn-primary text-light" v-on:click="addToOrder(dish.id)">Bestel</button>
        <span class="dish" v-bind:id="dish.id">{{ dish.number }}{{ dish.number_addition }}. {{ dish.name }} €{{ dish.price }}</span>
        <span class="description">{{ dish.description }}</span>
    </div>
</template>

<script>
export default {
    name: "MenuItem",
    props: {
        dish: {
            required: true
        }
    },
    methods: {
        addToOrder: function (dishId) {
            let order = sessionStorage['order']
            if (order === undefined) {
                console.log(1)
                sessionStorage['order'] = 'swag'
            }
            else {
                console.log(2)
                console.log(order)
                sessionStorage['order'] = undefined
            }
        }
    }
}
</script>

<style scoped>
.dish {
    font-size: 35px;
    margin-left: 10px;
    position: relative;
    top: 6px;
}

.btn {
    font-size: 30px;
}

.description {
    float: right;
    font-size: 24px;
    position: relative;
    top: 20px;
}
</style>
