require('./bootstrap');

import {createApp} from 'vue';
import WebsiteHeader from "./components/website/header/WebsiteHeader";
import ContentWrapper from "./components/website/content/ContentWrapper";
import WebsiteContent from "./components/website/content/WebsiteContent";

createApp({
    components: {
        WebsiteHeader,
        ContentWrapper,
        WebsiteContent,
    }
}).mount('#app');
