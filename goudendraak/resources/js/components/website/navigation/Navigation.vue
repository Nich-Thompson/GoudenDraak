<template>
    <div class="row">
        <div class="col">
            <a href="/menu" class="gradient-button">Menukaart</a>
            <a href="/nieuws" class="gradient-button">Nieuws</a>
            <a href="/contact" class="gradient-button">Contact</a>
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
    border: 1px solid #000000;
    background-image: linear-gradient(to top, #0a54ff 0%, #7dcbff 100%)
}
</style>
