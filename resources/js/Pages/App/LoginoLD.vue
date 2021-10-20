<template>
    <span>
        <div class="container">
            <div class="row">
                <div class="mt-90 col-lg-8 col-lg-offset-2">
                    <div class="row">
                        <div class="login-wrapper crypto">
                            <div
                                class="col-lg-5 col-sm-12 hidden-sm no-padding-left no-padding-right"
                            >
                                <img
                                    src="data/crypto-dash/login-img.png"
                                    alt=""
                                />
                            </div>
                            <div class="col-lg-7 col-sm-12">
                                <div
                                    id="login"
                                    class="login loginpage mt-0 no-pl no-pr pt30 pb30"
                                >
                                    <div
                                        class="login-form-header flex align-items-center"
                                    >
                                        <img
                                            src="data/crypto-dash/padlock.png"
                                            alt="login-icon"
                                            style="max-width: 54px"
                                        />
                                        <div class="login-header">
                                            <h4 class="bold">Login Now!</h4>
                                            <h4>
                                                <small
                                                    >Enter your credentials to
                                                    login.</small
                                                >
                                            </h4>
                                        </div>
                                    </div>

                                    <div class="box login">
                                        <div
                                            class="content-body"
                                            style="padding-top: 30px"
                                        >
                                            <div class="error">
                                                <p
                                                    v-if="hasError"
                                                    class="alert alert-danger"
                                                >
                                                    {{ errorMessage }}
                                                </p>
                                            </div>
                                            <form
                                                id="msg_validate"
                                                action="#"
                                                @submit.prevent="loginUser"
                                                class="no-mb no-mt"
                                            >
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="form-group">
                                                            <label
                                                                class="form-label"
                                                                >Email</label
                                                            >
                                                            <div
                                                                class="controls"
                                                            >
                                                                <input
                                                                    type="text"
                                                                    v-model="
                                                                        email
                                                                    "
                                                                    class="form-control"
                                                                    name="formfield2"
                                                                    placeholder="email"
                                                                />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label
                                                                class="form-label"
                                                                >Password</label
                                                            >
                                                            <div
                                                                class="controls"
                                                            >
                                                                <input
                                                                    type="password"
                                                                    v-model="
                                                                        password
                                                                    "
                                                                    class="form-control"
                                                                    name="formfield1"
                                                                    placeholder="password"
                                                                />
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="text-center"
                                                        >
                                                            <button
                                                                type="submit"
                                                                :disabled="
                                                                    isloading
                                                                "
                                                                class="btn btn-primary mt-10 btn-corner right-15"
                                                            >
                                                                <i
                                                                    v-if="
                                                                        isloading
                                                                    "
                                                                    class="fa fa-spinner fa-spin"
                                                                ></i>
                                                                Log in
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <p id="nav" class="over-h">
                                        <Link
                                            class="pull-left blue-text"
                                            href="/forgot-password"
                                            title="Password Lost and Found"
                                            >Forgot password?</Link
                                        >
                                        <Link
                                            class="pull-right blue-text"
                                            href="/register"
                                            title="Sign Up"
                                            >Sign Up</Link
                                        >
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </span>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue";
import axios from "axios";

export default {
    data() {
        return {
            email: null,
            password: null,
            //
            isloading: false,
            hasError: false,
            errorMessage: ""
        };
    },
    components: {
        Link
    },
    mounted() {
        let sitebody = document.body;
        sitebody.classList.add("login-bg");
    },
    methods: {
        loginUser() {
            this.isloading = true;
            axios
                .post("/login", {
                    email: this.email,
                    password: this.password
                })
                .then(res => {
                    this.isloading = false;

                    if (res.data.status == "success") {
                        window.location.href = res.data.url;
                    } else {
                        this.hasError = true;
                        this.errorMessage = res.data.message;
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
