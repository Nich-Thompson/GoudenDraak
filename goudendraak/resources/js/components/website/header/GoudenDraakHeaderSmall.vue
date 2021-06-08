<template>
    <div class="col d-none d-lg-block">
        <img class="goudendraak-image" src="/img/dragon-small.png" alt="Golden Dragon">
        <span class="goudendraak-font">De Gouden Draak</span>
        <img class="goudendraak-image" src="/img/dragon-small-flipped.png" alt="Golden Dragon">
    </div>
</template>

<script>
export default {
    name: "GoudenDraakHeaderSmall"
}
</script>

<style scoped>
.goudendraak-image {
    height: 50px;
    vertical-align: middle;
}

.goudendraak-font {
    font-family: 'chinese_takeawayregular';
    color: yellow;
    font-size: 30px;
    vertical-align: middle;
    margin-left: 5px;
    margin-right: 5px;
}
</style>
