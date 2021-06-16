<template>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Een cocktail zoeken op naam..."
               v-on:input="event => checkExist(event)">
        <div class="input-group-append">
            <button class="btn btn-primary" type="button" v-on:click="fetchCocktails()">Zoeken</button>
        </div>
    </div>
    <cocktail v-for="drink in results" :key="drink.idDrink" v-bind:drink="drink">
    </cocktail>
    <p v-if="!results.length">Geen cocktails gevonden, wil je misschien een
        <a class="color-blue link"
           v-on:click="fetchRandomCocktail()">willekeurige
            cocktail</a> bekijken?</p>
</template>

<script>
import Cocktail from "./Cocktail";

export default {
    name: "Cocktails",
    components: {Cocktail},
    data() {
        return {
            cocktailName: "",
            results: [],
        }
    },
    methods: {
        checkExist: function (event) {
            this.cocktailName = event.target.value;
        },
        fetchCocktails: function () {
            this.results = []

            fetch("https://www.thecocktaildb.com/api/json/v1/1/search.php?s=" + this.cocktailName, {
                method: "GET",
                headers: {
                    "Accept": "application/json"
                },
            }).then(response => {
                if (response.ok) {
                    response.json().then(json => {
                        this.results = json.drinks;
                        console.log(this.results)
                    });
                }
            });
        },
        fetchRandomCocktail: function () {
            this.results = []

            fetch("https://www.thecocktaildb.com/api/json/v1/1/random.php", {
                method: "GET",
                headers: {
                    "Accept": "application/json"
                },
            }).then(response => {
                if (response.ok) {
                    response.json().then(json => {
                        this.results = json.drinks;
                    });
                }
            });
        }
    }
}
</script>

<style scoped>

</style>
