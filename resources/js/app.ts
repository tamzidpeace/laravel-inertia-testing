import { DefineComponent, createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import { createPinia } from 'pinia'
import PrimeVue from 'primevue/config';
// import Button from "primevue/button";
import 'primevue/resources/themes/lara-light-teal/theme.css'
import 'flowbite';
import BaseLayoutVue from "./layouts/BaseLayout.vue";


createInertiaApp({
    resolve: (name) => {
        const pages = import.meta.glob<DefineComponent>("./pages/**/*.vue", { eager: true });
        let page = pages[`./pages/${name}.vue`];
        page.default.layout = BaseLayoutVue;
        return page;
    },
    setup({ el, App, props, plugin }) {
        const pinia = createPinia();

        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(pinia)
            .use(PrimeVue, { unstyled: false })
            .mount(el);
    },
});
