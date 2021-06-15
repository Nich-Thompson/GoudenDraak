require('./bootstrap');

import {createApp} from 'vue';
import WebsiteHeader from "./components/website/header/WebsiteHeader";
import ContentWrapper from "./components/website/content/ContentWrapper";
import WebsiteContent from "./components/website/content/WebsiteContent";
import Navbar from "./components/customer/Navbar";
import MenuItem from "./components/customer/MenuItem";
import CategoryMenu from "./components/customer/CategoryMenu";

createApp({
    components: {
        WebsiteHeader,
        ContentWrapper,
        WebsiteContent,
        Navbar,
        MenuItem,
        CategoryMenu,
    }
}).mount('#app');
