<template>
    <table class="main-table">
        <tr class="tr-style-1">
            <td colspan="9"></td>
        </tr>
        <tr class="tr-style-2">
            <td width="7px"></td>
            <td class="yellow-border-1"></td>
            <td class="yellow-border-2"></td>
            <td class="yellow-border-3"></td>
            <td class="yellow-border-4"></td>
            <td class="yellow-border-5"></td>
            <td class="yellow-border-1"></td>
            <td class="yellow-border-2"></td>
            <td width="7px"></td>
        </tr>
        <tr class="tr-style-2">
            <td width="7px"></td>
            <td class="yellow-border-5"></td>
            <td class="yellow-border-6"></td>
            <td class="yellow-border-6"></td>
            <td></td>
            <td class="yellow-border-6"></td>
            <td class="yellow-border-6"></td>
            <td class="yellow-border-3"></td>
            <td width="7px"></td>
        </tr>
        <tr class="tr-style-2">
            <td width="7px"></td>
            <td class="yellow-border-3"></td>
            <td class="yellow-border-6"></td>
            <td class="yellow-border-7"></td>
            <td></td>
            <td class="yellow-border-7"></td>
            <td class="yellow-border-6"></td>
            <td class="yellow-border-8"></td>
            <td width="7px"></td>
        </tr>
        <tr class="tr-style-3">
            <td width="7px"></td>
            <td class="yellow-border-9"></td>
            <td width="25px"></td>
            <td width="25px"></td>
            <td class="text-center">
                <content-header></content-header>
                <slot></slot>
                <br>
                <div class="text-center"><a href="/contact">Naar Contact</a></div>
            </td>
            <td width="25px"></td>
            <td width="25px"></td>
            <td class="yellow-border-9"></td>
            <td width="7px"></td>
        </tr>
        <tr class="tr-style-2">
            <td width="7px"></td>
            <td class="yellow-border-2"></td>
            <td class="yellow-border-6"></td>
            <td class="yellow-border-7"></td>
            <td></td>
            <td class="yellow-border-7"></td>
            <td class="yellow-border-6"></td>
            <td class="yellow-border-10"></td>
            <td width="7px"></td>
        </tr>
        <tr class="tr-style-2">
            <td width="7px"></td>
            <td class="yellow-border-1"></td>
            <td class="yellow-border-6"></td>
            <td class="yellow-border-6"></td>
            <td></td>
            <td class="yellow-border-6"></td>
            <td class="yellow-border-6"></td>
            <td class="yellow-border-2"></td>
            <td width="7px"></td>
        </tr>
        <tr class="tr-style-2">
            <td width="7px"></td>
            <td class="yellow-border-5"></td>
            <td class="yellow-border-3"></td>
            <td class="yellow-border-11"></td>
            <td class="yellow-border-4"></td>
            <td class="yellow-border-12"></td>
            <td class="yellow-border-5"></td>
            <td class="yellow-border-3"></td>
            <td width="7px"></td>
        </tr>
        <tr class="tr-style-1">
            <td colspan="9"></td>
        </tr>
    </table>
</template>

<script>
import Navigation from "../navigation/Navigation";
import ContentHeader from "./ContentHeader";

export default {
    name: "ContentWrapper",
    components: {ContentHeader, Navigation}
}
</script>

<style scoped>
.yellow-border-1 {
    width: 25px;
    border-left: 4px solid yellow;
    border-top: 4px solid yellow;
}

.yellow-border-2 {
    width: 25px;
    border-right: 4px solid yellow;
    border-top: 4px solid yellow;
}

.yellow-border-3 {
    width: 25px;
    border-right: 4px solid yellow;
    border-bottom: 4px solid yellow;
}

.yellow-border-4 {
    border-top: 4px solid yellow;
    border-bottom: 4px solid yellow;
}

.yellow-border-5 {
    width: 25px;
    border-left: 4px solid yellow;
    border-bottom: 4px solid yellow;
}

.yellow-border-6 {
    width: 25px;
    border: 4px solid yellow;
}

.yellow-border-7 {
    width: 25px;
}

.yellow-border-8 {
    width: 25px;
    border-bottom: 4px solid yellow;
}

.yellow-border-9 {
    width: 25px;
    border-right: 4px solid yellow;
    border-left: 4px solid yellow;
}

.yellow-border-10 {
    width: 25px;
    border-top: 4px solid yellow;
}

.yellow-border-11 {
    width: 25px;
    border-right: 4px solid yellow;
}

.yellow-border-12 {
    width: 25px;
    border-left: 4px solid yellow;
}

.text-center {
    text-align: center;
}

.main-table {
    padding: 5px;
    width: 100%;
    border-collapse: collapse;
}

.tr-style-1 {
    height: 7px;
    background-color: red;
}

.tr-style-2 {
    height: 25px;
    background-color: red;
}

.tr-style-3 {
    height: 50px;
    background-color: red;
}

</style>
