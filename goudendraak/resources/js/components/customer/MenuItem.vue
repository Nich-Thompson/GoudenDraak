<template>
    <div class="container p-1">
        <div class="row mb-3">
            <div class="dish-name" v-bind:id="dish.id">
                {{ dish.number }}{{ dish.number_addition }}<span
                v-if="!(dish.number===null && dish.number_addition===null)">.</span>
                {{ dish.name }}
            </div>
            <div class="col">
                <span class="description col-12">{{ dish.description }}</span>
                <div class="col-12">
                    <span class="dish-price">€ {{ dish.price }}</span>
                    <button class="btn btn-primary text-light order-btn" v-on:click="addToOrder(dish)">Bestel</button>
                    <button class="favorite-btn" v-bind:value="JSON.stringify(dish)"></button>
                </div>
            </div>
        </div>
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
        addToOrder: function (dish) {
            let order = sessionStorage['order']
            let totalOrder = []
            if (order !== undefined) {
                totalOrder = JSON.parse(sessionStorage['order'])
            }
            totalOrder.push(dish)
            sessionStorage['order'] = JSON.stringify(totalOrder)
        }
    }
}
</script>

<style scoped>
</style>
