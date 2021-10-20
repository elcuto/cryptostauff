import Vue from "vue";
import Vuex from "vuex";
import { SET_SIDEBAR_STATE } from "./mutationTypes/types";

// import {
//     GET_INITIAL_DATA,
//     GET_SELECTED_CATEGORY_PRODUCTS,
//     GET_SHOP_PRODUCTS,
//     GET_SHOP_USERS,
//     GET_SELECTED_PRODUCT,
//     GET_CART_ITEMS
// } from "@/js/stores/actionTypes.js";

Vue.use(Vuex);

Vue.config.devtools = true;

const store = new Vuex.Store({
    state: {
        sidebarState: false
    },
    getters: {
        getSidebarState: state => {
            return state.sidebarState;
        }
    },
    mutations: {
        [SET_SIDEBAR_STATE](state, payload) {
            state.sidebarState = payload.currentState;
        }
    },
    actions: {}
});

export default store;
