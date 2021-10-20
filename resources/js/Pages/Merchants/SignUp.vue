<template>
    <v-app style="margin: 0px;">
        <v-main>
            <v-row>
                <v-col cols="12" sm="6" id="identity">
                    <v-container>
                        <v-col id="greet">
                            <h1 class="welcomeback">Hey There!!!</h1>
                            <p>
                                Welcome!!! Create a merchant account to receive
                                payment via bitcoin
                            </p>
                            <v-btn rounded color="white" outlined link href="/">
                                <span class="mr-2">GO HOME</span>
                            </v-btn>
                        </v-col>
                    </v-container>
                </v-col>
                <v-col cols="12" md="6">
                    <v-container class="pa-2" outlined tile align="center">
                        <v-col>
                            <h2>Register</h2>

                            <v-row>
                                <v-col md="7">
                                    <p>
                                        Already have an account?
                                        <Link href="/merchants/sign-in"
                                            >Sign In</Link
                                        >
                                    </p>
                                </v-col>
                            </v-row>

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
                                    ref="form"
                                    id="form-signin"
                                    lazy-validation
                                    v-model="valid"
                                >
                                    <v-row>
                                        <v-col md="6">
                                            <v-text-field
                                                label="First Name"
                                                type="text"
                                                v-model="firstname"
                                                :rules="firstnameRules"
                                                required
                                                outlined
                                            ></v-text-field>
                                        </v-col>
                                        <v-col md="6">
                                            <v-text-field
                                                label="Last Name"
                                                type="text"
                                                v-model="lastname"
                                                :rules="lastnameRules"
                                                required
                                                outlined
                                            ></v-text-field>
                                        </v-col>
                                    </v-row>
                                    <v-text-field
                                        outlined
                                        label="Shop Name"
                                        v-model="shopname"
                                        :rules="shopnameRules"
                                        required
                                    ></v-text-field>

                                    <v-text-field
                                        outlined
                                        label="E-mail"
                                        v-model="email"
                                        :rules="emailRules"
                                        required
                                    ></v-text-field>

                                    <v-text-field
                                        outlined
                                        label="Phone Number"
                                        v-model="phoneno"
                                        :rules="phonenoRules"
                                        required
                                    ></v-text-field>

                                    <v-row>
                                        <v-col md="6">
                                            <v-text-field
                                                label="Password"
                                                type="password"
                                                v-model="password"
                                                :rules="passwordRules"
                                                required
                                                outlined
                                            ></v-text-field>
                                        </v-col>
                                        <v-col md="6">
                                            <v-text-field
                                                label="Confirm Password"
                                                type="password"
                                                required
                                                :rules="confirmpasswordRules"
                                                v-model="confirmpassword"
                                                outlined
                                            ></v-text-field>
                                        </v-col>
                                    </v-row>

                                    <v-btn
                                        color="primary"
                                        elevation="0"
                                        block
                                        @click="signupMerchant"
                                    >
                                        <v-progress-circular
                                            indeterminate
                                            color="white"
                                            v-if="isloading"
                                            :size="20"
                                        ></v-progress-circular>
                                        SIGN UP
                                    </v-btn>
                                </v-form>
                            </v-card>
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
    height: 110vh;

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
            isloading: false,
            valid: true,
            firstname: "",
            lastname: "",
            shopname: "",
            email: "",
            phoneno: "",
            password: "",
            confirmpassword: "",
            error: {
                hasError: false,
                message: ""
            },
            firstnameRules: [v => !!v || "First name is required"],
            lastnameRules: [v => !!v || "Last name is required"],
            shopnameRules: [v => !!v || "Shop name is required"],
            phonenoRules: [v => !!v || "Phone Number is required"],

            emailRules: [
                v => !!v || "Email is required",
                v => /.+@.+\..+/.test(v) || "Enter a valid email address"
            ],
            passwordRules: [
                v => !!v || "Password is required",
                v =>
                    (v && v.length >= 5) ||
                    "Password must more than 5 character"
            ],
            confirmpasswordRules: [
                v =>
                    (v && v.length >= 5) ||
                    "Password must more than 5 character",
                v => v === this.password || "Password does not match"
            ]
        };
    },
    components: {
        Link
    },
    methods: {
        signupMerchant() {
            this.error = {
                hasError: false,
                message: ""
            };
            let valid = this.$refs.form.validate();

            if (!valid) {
                return;
            }

            this.isloading = true;
            axios
                .post("/merchants/sign-up", {
                    firstname: this.firstname,
                    lastname: this.lastname,
                    shopname: this.shopname,
                    phoneno: this.phoneno,
                    email: this.email,
                    password: this.password,
                    confirmpassword: this.confirmpassword
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
