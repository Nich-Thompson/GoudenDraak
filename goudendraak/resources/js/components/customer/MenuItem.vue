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
.btn {
    font-size: 30px;
}

.dish-name {
    font-size: 40px;
    margin-bottom: 0.5rem;
}

.dish-price {
    font-size: 35px;
    font-weight: bold;
    vertical-align: middle;
    margin-right: 2rem
}

.description {
    font-size: 32px;
    display: block;
    margin-bottom: 0.5rem;
}

.description:first-letter {
    text-transform: capitalize
}

.order-btn {
    position: relative;
    border: none;
    border-radius: 15px;
    padding: 20px;
    width: 200px;
    text-align: center;
    -webkit-transition-duration: 3s; /* Safari */
    transition-duration: 3s;
    text-decoration: none;
    overflow: hidden;
    cursor: pointer;
}

.order-btn:after {
    content: "";
    background: #28A745;
    display: block;
    position: absolute;
    padding-top: 300%;
    padding-left: 350%;
    margin-left: -20px !important;
    margin-top: -120%;
    opacity: 0;
    transition: all 2s
}

.order-btn:active:after {
    padding: 0;
    margin: 0;
    opacity: 1;
    transition: 0s
}

</style>
