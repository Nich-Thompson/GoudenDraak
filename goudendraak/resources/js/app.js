import Cocktails from "./components/customer/Cocktails";

require('./bootstrap');

import {createApp} from 'vue';
import ExampleComponent from './components/ExampleComponent.vue';
import WebsiteHeader from "./components/website/header/WebsiteHeader";
import ContentWrapper from "./components/website/content/ContentWrapper";
import Navbar from "./components/customer/Navbar";
import MenuItem from "./components/customer/MenuItem";
import CategoryMenu from "./components/customer/CategoryMenu";

createApp({
    components: {
        ExampleComponent,
        WebsiteHeader,
        ContentWrapper,
        Navbar,
        MenuItem,
        CategoryMenu,
        Cocktails
    }
}).mount('#app');
