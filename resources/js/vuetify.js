import Vue from "vue";
import Vuetify from "vuetify";
import "vuetify/dist/vuetify.min.css";
import "@mdi/font/css/materialdesignicons.css";
Vue.use(Vuetify);

export default new Vuetify({
    theme: {
        themes: {
            light: {
                primary: "#DC7633",
                secondary: "#171b34",
                accent: "#3D87E4",
                danger: "#b71c1c",
                mainprimary: "#FFFFFF",

                // primary: "#DC7633",
                // secondary: "#696969",
                // accent: "#8c9eff",
                error: "#b71c1c",
                success: "#48C9B0"
            }
        }
    },
    icons: {
        iconfont: "mdi"
    }
});
