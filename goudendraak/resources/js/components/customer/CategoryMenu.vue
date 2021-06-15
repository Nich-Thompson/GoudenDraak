<template>
    <div class="item-list">
        <div
            v-for="item in items"
        >
            <menu-item :dish="item"></menu-item>
        </div>
    </div>
</template>

<script>
import MenuItem from "./MenuItem";

export default {
    name: "CategoryMenu",
    components: {
        MenuItem
    },
    mounted() {
        Array.from(document.getElementsByClassName('favorite-btn')).forEach(
            function (e) {
                e.addEventListener('click', function () {
                    e.classList.add('favorited')
                    let items = []
                    if (sessionStorage['favorites'] !== undefined) {
                        items = JSON.parse(sessionStorage['favorites'])
                    }
                    items.push(JSON.parse(e.value))
                    sessionStorage['favorites'] = JSON.stringify(items)
                })
            }
        );
    },
    props: {
        items: {
            type: Array,
            required: true
        }
    }
}
</script>

<style scoped>
</style>
