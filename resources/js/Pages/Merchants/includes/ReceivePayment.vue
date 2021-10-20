<template>
    <v-alert
        align="center"
        dark
        outlined
        border="left"
        color="secondary"
        icon="mdi-clock-fast"
    >
        <v-row align="center">
            <v-col md="10" align="center">
                Hello Edwin, Welcome to your merchant dashboard. Start receiving
                payment via bitcoin. Click the button to enable feature.</v-col
            >
            <v-col md="2" align="center"
                ><v-btn
                    elevation="0"
                    link
                    rounded
                    color="primary"
                    href="/merchants/receive-payment"
                >
                    RECEIVE PAYMENT
                </v-btn></v-col
            >
        </v-row>
    </v-alert>
</template>
