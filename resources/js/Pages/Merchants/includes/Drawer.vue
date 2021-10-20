<template>
    <v-navigation-drawer app permanent expand-on-hover>
        <v-list>
            <v-list-item class="px-2">
                <v-list-item-avatar>
                    <v-img
                        src="https://randomuser.me/api/portraits/women/85.jpg"
                    ></v-img>
                </v-list-item-avatar>
            </v-list-item>

            <v-list-item link>
                <v-list-item-content>
                    <v-list-item-title class="text-h6">
                        Sandra Adams
                    </v-list-item-title>
                    <v-list-item-subtitle
                        >sandra_a88@gmail.com</v-list-item-subtitle
                    >
                </v-list-item-content>
            </v-list-item>
        </v-list>

        <v-divider></v-divider>

        <v-list nav dense>
            <v-list-item link href="/merchants/dashboard">
                <v-list-item-icon>
                    <v-icon>mdi-folder</v-icon>
                </v-list-item-icon>
                <v-list-item-title>Dashboard</v-list-item-title>
            </v-list-item>
            <v-list-item link href="/merchants/transactions">
                <v-list-item-icon>
                    <v-icon>mdi-account-multiple</v-icon>
                </v-list-item-icon>
                <v-list-item-title>Transactions</v-list-item-title>
            </v-list-item>
            <v-list-item link>
                <v-list-item-icon>
                    <v-icon>mdi-paid</v-icon>
                </v-list-item-icon>
                <v-list-item-title>Transactions</v-list-item-title>
            </v-list-item>

            <v-divider></v-divider>
            <v-list-item link>
                <v-list-item-icon>
                    <v-icon>mdi-account-box</v-icon>
                </v-list-item-icon>
                <v-list-item-title>My Account</v-list-item-title>
            </v-list-item>
            <v-list-item href="/merchants/sign-out">
                <v-list-item-icon>
                    <v-icon>mdi-star</v-icon>
                </v-list-item-icon>
                <v-list-item-title>Sign Out</v-list-item-title>
            </v-list-item>
        </v-list>
    </v-navigation-drawer>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue";
export default {
    components: {
        Link
    },
    methods: {
        logout() {
            console.log(this.$router);
        }
    }
};
</script>
