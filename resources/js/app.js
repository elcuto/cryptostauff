// require('./bootstrap');

import Vue from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue";
import vuetify from "./vuetify";
import store from "./Pages/stores/store";

createInertiaApp({
    id: "app",
    resolve: name => require(`./Pages/${name}`),
    setup({ el, App, props }) {
        new Vue({
            store: store,
            vuetify: vuetify,
            render: h => h(App, props)
        }).$mount(el);
    }
});
