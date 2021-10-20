<template>
    <v-app>
        <Drawer></Drawer>

        <Toolbar></Toolbar>
        <v-main>
            <!-- Provides the application the proper gutter -->
            <v-container fluid>
                <!-- If using vue-router -->
                <v-row>
                    <v-col>
                        <ReceivePayment></ReceivePayment>
                    </v-col>
                </v-row>

                <v-row>
                    <v-col col md="4">
                        <v-card elevation="1" border>
                            <div
                                class="d-flex flex-no-wrap justify-space-between"
                            >
                                <div>
                                    <v-card-title class="text-h5"
                                        >BITCOIN</v-card-title
                                    >

                                    <v-card-subtitle>WALLET</v-card-subtitle>

                                    <v-card-actions>
                                        <v-btn
                                            class="ml-2 mt-5"
                                            outlined
                                            rounded
                                            small
                                        >
                                            START RADIO
                                        </v-btn>
                                    </v-card-actions>
                                </div>

                                <v-avatar class="ma-3" size="125" tile>
                                    <v-img
                                        src="/storage/currencies/bitcoin.png"
                                    ></v-img>
                                </v-avatar>
                            </div>
                        </v-card>
                    </v-col>
                </v-row>
            </v-container>
        </v-main>
    </v-app>
</template>

<script>
import Drawer from "./includes/Drawer";
import Toolbar from "./includes/Toolbar";
import ReceivePayment from "./includes/ReceivePayment";
export default {
    data() {
        return {
            drawer: false
        };
    },
    components: {
        Drawer,
        Toolbar,
        ReceivePayment
    }
};
</script>
