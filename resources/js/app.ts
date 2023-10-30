import { DefineComponent, createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import { createPinia } from 'pinia'
import PrimeVue from 'primevue/config';
// import Button from "primevue/button";
import 'ant-design-vue/dist/reset.css';
import 'primevue/resources/themes/lara-light-teal/theme.css'
import { DatePicker, Button } from 'ant-design-vue';


createInertiaApp({
    resolve: (name) => {
        const pages = import.meta.glob<DefineComponent>("./pages/**/*.vue", { eager: true });
        return pages[`./pages/${name}.vue`];
    },
    setup({ el, App, props, plugin }) {
        const pinia = createPinia();

        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(pinia)
            .use(PrimeVue, )
            // .component('Button', Button)
            .use(DatePicker)
            .use(Button)
            .mount(el);
    },
});
