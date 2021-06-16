<template>
    <div id="website-header" class="container-fluid">
        <div class="row">
            <gouden-draak-header-small></gouden-draak-header-small>
            <div class="col-md-12 col-lg-5">
                <marquee behavior="scroll" direction="left">
                    Welkom bij De Gouden Draak.
                </marquee>
            </div>
            <gouden-draak-header-small></gouden-draak-header-small>
        </div>
    </div>
</template>

<script>
import GoudenDraakHeaderSmall from "./GoudenDraakHeaderSmall";

export default {
    name: "WebsiteHeader",
    components: {GoudenDraakHeaderSmall},
}
</script>

<style scoped>
div {
    background-color: red;
    text-align: center;
}

marquee {
    color: yellow;
    font-weight: bold;
    text-decoration: none;
    vertical-align: middle;
    margin: 1rem;
}
</style>
