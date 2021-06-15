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
                <button class="favorite-btn"></button>
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
    mounted() {
        Array.from(document.getElementsByClassName('favorite-btn')).forEach(
            function (e) {
                e.addEventListener('click', function () {
                    e.classList.toggle('liked')
                    console.log(0)
                })
                console.log(1)
            }
        );
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
.favorite-btn {
    display: inline-block;
    position: relative;
    font-size: 32px;
    cursor: pointer;
}

.favorite-btn:before {
    font-size: 3em;
    color: #000;
    content: '★';
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}

.favorite-btn:after {
    font-size: 3em;
    color: gold;
    content: '★';
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%) scale(0);
    transition: transform 0.2s;
}

.favorite-btn.liked:after {
    transform: translate(-50%, -50%) scale(1.1);
}
</style>
