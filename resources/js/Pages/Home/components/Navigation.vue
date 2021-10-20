<template>
    <div>
        <v-navigation-drawer
            v-model="drawer"
            app
            temporary
            dark
            src="/front/assets/img/bgDrawer.jpg"
        >
            <v-list>
                <v-list-item>
                    <v-list-item-avatar>
                        <img src="/front/assets/img/logo.png" alt="Logo" />
                    </v-list-item-avatar>
                    <v-list-item-content>
                        <v-list-item-title class="title"
                            >Calango</v-list-item-title
                        >
                        <v-list-item-subtitle>WEB</v-list-item-subtitle>
                    </v-list-item-content>
                </v-list-item>
            </v-list>

            <v-divider />

            <v-list dense>
                <v-list-item
                    v-for="([icon, text, link], i) in items"
                    :key="i"
                    link
                    @click="$vuetify.goTo(link)"
                >
                    <v-list-item-icon class="justify-center">
                        <v-icon>{{ icon }}</v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                        <v-list-item-title class="subtitile-1">{{
                            text
                        }}</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
            </v-list>
        </v-navigation-drawer>

        <v-app-bar
            app
            :color="color"
            :flat="flat"
            dark
            class="px-15"
            :class="{ expand: flat }"
        >
            <v-toolbar-title>
                <v-img src="/storage/currencies/bitcoin.png" max-width="50px" />
            </v-toolbar-title>
            <v-spacer />
            <v-app-bar-nav-icon
                @click.stop="drawer = !drawer"
                class="mr-4"
                v-if="isXs"
            />
            <div v-else>
                <v-btn text @click="$vuetify.goTo('#hero')">
                    <span class="mr-2">Home</span>
                </v-btn>
                <v-btn text @click="$vuetify.goTo('#features')">
                    <span class="mr-2">SERVICES</span>
                </v-btn>
                <v-btn text @click="$vuetify.goTo('#download')">
                    <span class="mr-2">Download</span>
                </v-btn>
                <v-btn text @click="$vuetify.goTo('#pricing')">
                    <span class="mr-2">MARKET DATA</span>
                </v-btn>
                <v-btn text @click="$vuetify.goTo('#contact')">
                    <span class="mr-2">Contact Us</span>
                </v-btn>
                <v-btn rounded color="primary" link href="/sign-in">
                    <span class="mr-2">SIGN IN</span>
                </v-btn>
                <v-menu
                    open-on-hover
                    bottom
                    offset-y
                    rounded
                    transparent
                    outlined
                    rounded-pill
                    text
                    elevation="0"
                >
                    <template v-slot:activator="{ on, attrs }">
                        <v-btn
                            outlined
                            color="mainprimary"
                            v-bind="attrs"
                            light
                            v-on="on"
                        >
                            MERCHANT ACCOUNT
                        </v-btn>
                    </template>

                    <v-list>
                        <v-list-item link href="/merchants/sign-in">
                            <v-list-item-title>Sign In</v-list-item-title>
                        </v-list-item>
                        <v-list-item link href="/merchants/sign-up">
                            <v-list-item-title>Sign Up</v-list-item-title>
                        </v-list-item>
                    </v-list>
                </v-menu>
            </div>
        </v-app-bar>
    </div>
</template>

<style scoped>
.v-toolbar {
    transition: 0.6s;
}

.expand {
    height: 80px !important;
    padding-top: 10px;
}
</style>

<script>
export default {
    data: () => ({
        drawer: null,
        isXs: false,
        items: [
            ["mdi-home-outline", "Home", "#hero"],
            ["mdi-information-outline", "Sobre", "#features"],
            ["mdi-download-box-outline", "Download", "#download"],
            ["mdi-currency-usd", "Preços", "#pricing"],
            ["mdi-email-outline", "Contatos", "#contact"]
        ]
    }),
    props: {
        color: String,
        flat: Boolean
    },
    methods: {
        onResize() {
            this.isXs = window.innerWidth < 850;
        }
    },

    watch: {
        isXs(value) {
            if (!value) {
                if (this.drawer) {
                    this.drawer = false;
                }
            }
        }
    },
    mounted() {
        this.onResize();
        window.addEventListener("resize", this.onResize, { passive: true });
    }
};
</script>
