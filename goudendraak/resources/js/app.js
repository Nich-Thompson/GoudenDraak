require('./bootstrap');

import {createApp} from 'vue';
import WebsiteHeader from "./components/website/header/WebsiteHeader";
import ContentWrapper from "./components/website/content/ContentWrapper";

createApp({
    components: {
        WebsiteHeader,
        ContentWrapper,
    }
}).mount('#app');
