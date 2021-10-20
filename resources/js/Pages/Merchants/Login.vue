<template>
    <v-app style="margin: 0px;">
        <v-main>
            <v-row>
                <v-col cols="12" sm="7" id="identity">
                    <v-container>
                        <v-col id="greet">
                            <h1 class="welcomeback">Welcome Back!!!</h1>
                            <p>Sign in to your merchant account to continue</p>
                            <v-btn rounded color="white" outlined link href="/">
                                <span class="mr-2">GO HOME</span>
                            </v-btn>
                        </v-col>
                    </v-container>
                </v-col>
                <v-col cols="12" md="5">
                    <v-container
                        class="pa-2"
                        outlined
                        tile
                        align="center"
                        style="margin-top: 5rem;"
                    >
                        <v-col>
                            <h2 style="margin-bottom: 10px; margin: 0 auto;">
                                Sign In
                            </h2>

                            <v-card
                                class="mx-auto"
                                elevation="1"
                                align-self="center"
                            >
                                <v-alert
                                    dense
                                    outlined
                                    v-if="error.hasError"
                                    type="error"
                                >
                                    {{ error.message }}
                                </v-alert>
                                <v-form
                                    v-model="valid"
                                    ref="form"
                                    id="form-signin"
                                    lazy-validation
                                >
                                    <v-text-field
                                        outlined
                                        label="E-mail"
                                        v-model="email"
                                        :rules="emailRules"
                                        required
                                    ></v-text-field>

                                    <v-text-field
                                        class="password"
                                        label="Password"
                                        type="password"
                                        required
                                        v-model="password"
                                        :rules="passwordRules"
                                        outlined
                                    ></v-text-field>

                                    <v-btn
                                        :disabled="!valid && isloading"
                                        color="primary"
                                        elevation="0"
                                        block
                                        class="mr-4 submitbtn"
                                        @click="loginMerchant"
                                    >
                                        <v-progress-circular
                                            indeterminate
                                            color="white"
                                            v-if="isloading"
                                            :size="20"
                                        ></v-progress-circular>
                                        SIGN IN
                                    </v-btn>
                                </v-form>
                            </v-card>

                            <v-row style="margin-top: 10px;">
                                <v-col md="7">
                                    <p>
                                        Don't have an account?
                                        <Link href="/merchants/sign-up"
                                            >Sign Up</Link
                                        >
                                    </p>
                                </v-col>
                            </v-row>
                        </v-col>
                    </v-container>
                </v-col>
            </v-row>
        </v-main>
    </v-app>
</template>

<style scoped>
#app {
    margin: 0;
    padding: 0;
}

.welcomeback {
    font-size: 3.5rem;
}

.password {
    margin-top: 0.8rem;
}

.submitbtn {
    margin-top: 0.5rem;
}

#greet {
    margin: 0;
    position: absolute;
    top: 50%;
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    color: #fff;
    display: block;
}

#form-signin {
    /* margin-top: 5rem; */
    padding: 2rem;
}
#identity {
    display: block;
    background-image: linear-gradient(to right, #171b349c, rgba(0, 0, 0.5)),
        url("../../../../public/front/assets/img/bgauth.jpg");
    height: 102vh;
    object-fit: cover;
    background-size: cover;
    margin: 0px;
    clip-path: polygon(0 0, 100% 0, 85vh 100%, 0 100%);
    /* width: 100%; */
}
</style>

<script>
import { Link } from "@inertiajs/inertia-vue";
import axios from "axios";
export default {
    data() {
        return {
            valid: true,
            isloading: false,
            error: {
                hasError: false,
                message: ""
            },
            email: "",
            emailRules: [
                v => !!v || "Email is required",
                v => /.+@.+\..+/.test(v) || "Enter a valid email address"
            ],

            password: "",
            passwordRules: [
                v => !!v || "Password is required",
                v =>
                    (v && v.length >= 5) ||
                    "Password must more than 5 character"
            ]
        };
    },
    components: {
        Link
    },

    methods: {
        loginMerchant() {
            // alert("jiii");
            this.error = {
                hasError: false,
                message: ""
            };
            this.$refs.form.validate();

            this.isloading = true;
            axios
                .post("/merchants/sign-in", {
                    email: this.email,
                    password: this.password
                })
                .then(res => {
                    this.isloading = false;

                    if (res.data.status == "success") {
                        window.location.href = res.data.url;
                    } else {
                        this.error.hasError = true;
                        this.error.message = res.data.message;
                    }
                })
                .catch(error => {
                    this.isloading = false;
                    alert("Oops something went wrong. Please try again later");
                });
        }
    }
};
</script>
