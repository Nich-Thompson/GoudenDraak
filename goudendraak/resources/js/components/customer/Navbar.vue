<template>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container-fluid">
            <!--Scrollable Navbar-->
            <div class="scrolling-wrapper flex-row flex-nowrap">
                <a
                    class="navbar-brand navbar-block"
                    v-for="category in categories"
                    :key="category.id"
                    v-bind:href="'/categorie/' + category.id"
                >
                    {{ category.name }}
                </a>
            </div>
            <!--Order button-->
            <a class="navbar-brand order-button" href="{{ route('klant.index') }}">
                Bestel
            </a>
        </div>
    </nav>
</template>

<script>
export default {
    name: "Navbar",
    props: {
        categories: {
            type: Array,
            required: true
        }
    }
}
</script>

<style scoped>
.scrolling-wrapper {
    overflow-x: auto;
    padding-bottom: 1rem;
    padding-top: 1rem;
}

.navbar-block {
    background-color: #cbd5e0;
    padding: 1rem 1.5rem;
    border-radius: 10px;
    font-size: 30px;
}

::-webkit-scrollbar {
    display: none;
}

.order-button {
    margin-left: 2rem;
    background-color: #7dcbff;
    padding: 1rem 1.5rem;
    border-radius: 10px;
    font-size: 30px;
}
</style>
