<template>
    <div class="row">
        <div class="col">
            <button class="gradient-button">Menukaart</button>
            <button class="gradient-button">Nieuws</button>
            <button class="gradient-button">Contact</button>
        </div>
    </div>
</template>

<script>
export default {
    name: "Navigation"
}
</script>

<style scoped>
.gradient-button {
    font-family: "Times New Roman", Gadget, sans-serif;
    text-align: center;
    padding: 0px 35px;
    font-size: 20px;
    color: #FFF;
    cursor: pointer;
    display: inline-block;
    background-image: linear-gradient(to top, #0482d6 0%, #7dcbff 51%, #7dcbff 100%)
}
</style>
