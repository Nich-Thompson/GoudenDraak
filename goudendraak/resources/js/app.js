require('./bootstrap');

import {createApp} from 'vue';
import ExampleComponent from './components/ExampleComponent.vue';
import WebsiteHeader from "./components/website/WebsiteHeader";

createApp({
    components: {
        ExampleComponent,
        WebsiteHeader,
    }
}).mount('#app');
