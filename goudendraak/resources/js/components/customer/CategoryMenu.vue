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
                    if (!e.classList.contains('favorited')) {
                        e.classList.add('favorited')
                        let items = []
                        if (getCookie('favorites') !== undefined) {
                            items = JSON.parse(getCookie('favorites'))
                        }
                        items.push(JSON.parse(e.value))
                        createCookie('favorites', JSON.stringify(items), 10)

                        function createCookie(name, value, days) {
                            let expires;
                            if (days) {
                                var date = new Date();
                                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                                expires = "; expires=" + date.toGMTString();
                            } else {
                                expires = "";
                            }
                            document.cookie = name + "=" + value + expires + "; path=/";
                        }

                        function getCookie(c_name) {
                            if (document.cookie.length > 0) {
                                let c_start = document.cookie.indexOf(c_name + "=");
                                if (c_start != -1) {
                                    c_start = c_start + c_name.length + 1;
                                    let c_end = document.cookie.indexOf(";", c_start);
                                    if (c_end == -1) {
                                        c_end = document.cookie.length;
                                    }
                                    return unescape(document.cookie.substring(c_start, c_end));
                                }
                            }
                            return "";
                        }
                    }
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
