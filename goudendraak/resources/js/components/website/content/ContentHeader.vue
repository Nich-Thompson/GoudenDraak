<template>
    <div>
        <div id="header" class="row">
            <div class="col"><img src="/img/dragon-small.png" class="dragon-1" alt="Golden Dragon"></div>
            <div class="col-sm-12 col-md-6">
                <span class="title-1">Chinees Indische Specialiteiten</span>
                <br>
                <span class="title-2">De Gouden Draak</span>
                <br>

                <navigation></navigation>
            </div>
            <div class="col"><img src="/img/dragon-small-flipped.png" class="dragon-2" alt="Golden Dragon"></div>
        </div>
    </div>

</template>

<script>
import Navigation from "../navigation/Navigation";

export default {
    name: "ContentHeader",
    components: {Navigation}
}
</script>

<style scoped>
.dragon-1 {
    height: 200px;
    float: left;
}

.dragon-2 {
    height: 200px;
    float: right;
}

.title-1 {
    font-size: 40px;
    font-weight: bold;
    color: yellow;
}

.title-2 {
    font-size: 50px;
    font-weight: bold;
    color: yellow;
}

#header {
    margin-bottom: 2rem;
}

</style>
