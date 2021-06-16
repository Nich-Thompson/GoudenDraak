<template>
    <div class="card-deck col-6 mb-2">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" v-bind:src="drink.strDrinkThumb" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ drink.strDrink }}</h5>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Cocktail",
    props: {
        drink: {
            type: Object,
            required: true
        }
    },
}
</script>

<style scoped>

</style>
