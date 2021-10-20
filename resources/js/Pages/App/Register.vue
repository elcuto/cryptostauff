<template>
    <div class="container">
        <div class="row">
            <div class=" mt-90 col-lg-10 col-lg-offset-1">
                <div class="row">
                    <div class="login-wrapper crypto">
                        <div
                            class="col-lg-6 col-sm-12 over-h hidden-sm no-padding-left  no-padding-right"
                        >
                            <img
                                src="data/crypto-dash/login-img.png"
                                style="width:105%"
                                alt=""
                            />
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div
                                id="login"
                                class="login loginpage mt-0 no-pl no-pr pt30 pb30"
                            >
                                <div
                                    class="login-form-header flex align-items-center"
                                >
                                    <img
                                        src="data/crypto-dash/signup.png"
                                        alt="login-icon"
                                        style="max-width:54px"
                                    />
                                    <div class="login-header">
                                        <h4 class="bold">Signup Now!</h4>
                                        <h4>
                                            <small
                                                >Enter your data to
                                                register.</small
                                            >
                                        </h4>
                                    </div>
                                </div>

                                <div class="box login">
                                    <div
                                        class="content-body"
                                        style="padding-top:25px"
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
                                            @submit.prevent="registerUser"
                                            class="no-mb no-mt"
                                        >
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="form-group">
                                                        <label
                                                            class="form-label"
                                                            >Full Name</label
                                                        >
                                                        <div class="controls">
                                                            <input
                                                                type="text"
                                                                required
                                                                class="form-control"
                                                                v-model="
                                                                    fullname
                                                                "
                                                                name="formfield1"
                                                                placeholder="Enter Full Name"
                                                            />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label
                                                            class="form-label"
                                                            >Email</label
                                                        >
                                                        <div class="controls">
                                                            <input
                                                                type="text"
                                                                v-model="email"
                                                                required
                                                                class="form-control"
                                                                name="formfield1"
                                                                placeholder="Enter Email"
                                                            />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label
                                                            class="form-label"
                                                            >Phone Number</label
                                                        >
                                                        <div class="controls">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                v-model="
                                                                    phoneno
                                                                "
                                                                required
                                                                name="formfield1"
                                                                placeholder="Enter Phone No."
                                                            />
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label
                                                            class="form-label"
                                                            >Password</label
                                                        >
                                                        <div class="controls">
                                                            <input
                                                                type="password"
                                                                v-model="
                                                                    password
                                                                "
                                                                required
                                                                class="form-control"
                                                                name="formfield2"
                                                                placeholder="enter password"
                                                            />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label
                                                            class="form-label"
                                                            >Repeat
                                                            Password</label
                                                        >
                                                        <div class="controls">
                                                            <input
                                                                type="password"
                                                                v-model="
                                                                    repeatpassword
                                                                "
                                                                required
                                                                class="form-control"
                                                                name="formfield1"
                                                                placeholder="Repeat Password"
                                                            />
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                        <button
                                                            :disabled="
                                                                isloading
                                                            "
                                                            type="submit"
                                                            class="btn btn-primary mt-10 btn-corner right-15"
                                                        >
                                                            <i
                                                                class="fa fa-spinner fa-spin"
                                                                v-if="isloading"
                                                            ></i>
                                                            Sign up
                                                        </button>
                                                        <Link
                                                            href="/"
                                                            class="btn mt-10 btn-corner signup"
                                                            >Login</Link
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue";
import axios from "axios";

export default {
    data() {
        return {
            fullname: null,
            email: null,
            phoneno: null,
            password: null,
            repeatpassword: null,

            //
            isloading: false,
            hasError: false,
            errorMessage: ""
        };
    },
    components: {
        Link
    },
    methods: {
        registerUser() {
            this.hasError = false;
            this.isloading = true;
            axios
                .post("/register", {
                    fullname: this.fullname,
                    email: this.email,
                    phoneno: this.phoneno,
                    password: this.password,
                    repeatpassword: this.repeatpassword
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
                    console.log(error);
                    alert("Oops something went wrong. Please try again");
                });
        }
    }
};
</script>
