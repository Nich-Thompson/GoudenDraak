require('./bootstrap');

import {createApp} from 'vue';
import ExampleComponent from './components/ExampleComponent.vue';
import WebsiteHeader from "./components/website/header/WebsiteHeader";
import ContentWrapper from "./components/website/content/ContentWrapper";
import Navbar from "./components/customer/Navbar";

createApp({
    components: {
        ExampleComponent,
        WebsiteHeader,
        ContentWrapper,
        Navbar,
    }
}).mount('#app');
