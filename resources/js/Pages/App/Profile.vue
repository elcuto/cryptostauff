<template>
    <span>
        <Header></Header>
        <!-- START CONTAINER -->
        <div class="page-container row-fluid container-fluid">
            <!-- SIDEBAR - START -->

            <Sidebar></Sidebar>
            <!--  SIDEBAR - END -->

            <!-- START CONTENT -->
            <section
                id="main-content"
                v-bind:class="{ sidebar_shift: !getSidebarState }"
            >
                <div class="wrapper main-wrapper row" style="">
                    <div class="col-xs-12">
                        <div class="page-title">
                            <div class="pull-left">
                                <!-- PAGE HEADING TAG - START -->
                                <h1 class="title">Personal Profile</h1>
                                <!-- PAGE HEADING TAG - END -->
                            </div>

                            <div class="pull-right hidden-xs">
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-home"></i>Home</a
                                        >
                                    </li>
                                    <li class="active">
                                        <strong>Personal Settings</strong>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!-- MAIN CONTENT AREA STARTS -->
                    <div class="col-lg-5">
                        <div class="row">
                            <div class="col-md-12">
                                <section class="box has-border-left-3">
                                    <div class="content-body">
                                        <div class="uprofile-image mt-30">
                                            <div class="prof-contain relative">
                                                <img
                                                    alt=""
                                                    src="data/profile/user.png"
                                                    class="img-responsive"
                                                />
                                                <span
                                                    class="prof-check fa fa-check"
                                                ></span>
                                            </div>
                                        </div>
                                        <div class="uprofile-name">
                                            <h3>
                                                <a href="#">{{
                                                    user != null
                                                        ? user.fullname
                                                        : ""
                                                }}</a>
                                                <!-- Available statuses: online, idle, busy, away and offline -->
                                                <span
                                                    class="uprofile-status online"
                                                ></span>
                                            </h3>
                                            <p class="uprofile-title">
                                                Crypto Trader
                                            </p>
                                        </div>
                                        <div class="uprofile-info v2">
                                            <ul class="list-unstyled mb-0">
                                                <li class="pt0">
                                                    <h5 class="mt-0 mb-0">
                                                        <i
                                                            class="fa fa-envelope"
                                                        ></i>
                                                        Email
                                                    </h5>
                                                    <span>{{
                                                        user != null
                                                            ? user.email
                                                            : ""
                                                    }}</span>
                                                </li>
                                                <li>
                                                    <h5 class="mt-0 mb-0">
                                                        <i
                                                            class="fa fa-home"
                                                        ></i>
                                                        Address
                                                    </h5>
                                                    <span>N/A</span>
                                                </li>
                                                <li>
                                                    <h5 class="mt-0 mb-0">
                                                        <i
                                                            class="fa fa-phone"
                                                        ></i>
                                                        Phone
                                                    </h5>
                                                    <span>{{
                                                        user != null
                                                            ? user.phoneno
                                                            : ""
                                                    }}</span>
                                                </li>

                                                <li>
                                                    <h5 class="mt-0 mb-0">
                                                        <i
                                                            class="fa fa-crosshairs"
                                                        ></i>
                                                        Country
                                                    </h5>
                                                    <span>Ghana</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="uprofile-buttons">
                                            <a class="btn btn-md btn-primary"
                                                >Send Message</a
                                            >
                                            <a class="btn btn-md btn-primary"
                                                >Add as Friend</a
                                            >
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-12">
                                <section class="box has-border-left-3">
                                    <header class="panel_header gradient-blue">
                                        <h2 class="title pull-left w-text">
                                            Personal Information
                                        </h2>
                                    </header>
                                    <div class="content-body">
                                        <div class="row">
                                            <div
                                                class="form-container mt-20 no-padding-right no-padding-left over-h"
                                            >
                                                <form
                                                    id="icon_validate"
                                                    action="#"
                                                    novalidate="novalidate"
                                                >
                                                    <div class=" col-xs-12">
                                                        <div class="row">
                                                            <div
                                                                class="col-lg-12"
                                                            >
                                                                <div
                                                                    class="form-group"
                                                                >
                                                                    <label
                                                                        class="form-label"
                                                                        >Name</label
                                                                    >
                                                                    <span
                                                                        class="desc"
                                                                        >e.g.
                                                                        "If it
                                                                        is not
                                                                        you,
                                                                        Please
                                                                        let us
                                                                        know"</span
                                                                    >
                                                                    <div
                                                                        class="controls"
                                                                    >
                                                                        <i
                                                                            class=""
                                                                        ></i>
                                                                        <input
                                                                            type="text"
                                                                            class="form-control"
                                                                            name="formfield1"
                                                                            value="Smith Wright"
                                                                        />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-lg-12"
                                                            >
                                                                <div
                                                                    class="form-group"
                                                                >
                                                                    <label
                                                                        class="form-label"
                                                                        >Email</label
                                                                    >
                                                                    <span
                                                                        class="desc"
                                                                        >e.g.
                                                                        "info@example.com"</span
                                                                    >
                                                                    <div
                                                                        class="controls"
                                                                    >
                                                                        <i
                                                                            class=""
                                                                        ></i>
                                                                        <input
                                                                            type="text"
                                                                            class="form-control"
                                                                            value="info@domain.com"
                                                                            name="formfield2"
                                                                        />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-lg-6"
                                                            >
                                                                <div
                                                                    class="form-group"
                                                                >
                                                                    <label
                                                                        class="form-label"
                                                                        >Phone
                                                                        Number</label
                                                                    >
                                                                    <span
                                                                        class="desc"
                                                                        >e.g.
                                                                        "5643
                                                                        34839"</span
                                                                    >
                                                                    <div
                                                                        class="controls"
                                                                    >
                                                                        <i
                                                                            class=""
                                                                        ></i>
                                                                        <input
                                                                            type="text"
                                                                            class="form-control"
                                                                            value="(+3638) 734-3949"
                                                                            name="formfield1"
                                                                        />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-lg-6"
                                                            >
                                                                <div
                                                                    class="form-group"
                                                                >
                                                                    <label
                                                                        class="form-label"
                                                                        >Birthday</label
                                                                    >
                                                                    <span
                                                                        class="desc"
                                                                        >e.g.
                                                                        "13 jan
                                                                        1980"</span
                                                                    >
                                                                    <div
                                                                        class="controls"
                                                                    >
                                                                        <i
                                                                            class=""
                                                                        ></i>
                                                                        <input
                                                                            type="text"
                                                                            class="form-control"
                                                                            value="17 September 1989"
                                                                            name="formfield2"
                                                                        />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-lg-12"
                                                            >
                                                                <div
                                                                    class="form-group"
                                                                >
                                                                    <label
                                                                        class="form-label"
                                                                        >Zip
                                                                        Code</label
                                                                    >
                                                                    <span
                                                                        class="desc"
                                                                        >e.g.
                                                                        "xxxxx"</span
                                                                    >
                                                                    <div
                                                                        class="controls"
                                                                    >
                                                                        <i
                                                                            class=""
                                                                        ></i>
                                                                        <input
                                                                            type="text"
                                                                            class="form-control"
                                                                            value="17256"
                                                                            name="formfield1"
                                                                        />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-lg-6"
                                                            >
                                                                <div
                                                                    class="form-group"
                                                                >
                                                                    <label
                                                                        class="form-label"
                                                                        >City</label
                                                                    >
                                                                    <div
                                                                        class="controls"
                                                                    >
                                                                        <i
                                                                            class=""
                                                                        ></i>
                                                                        <input
                                                                            type="text"
                                                                            class="form-control"
                                                                            value="New York"
                                                                            name="formfield2"
                                                                        />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-lg-6"
                                                            >
                                                                <div
                                                                    class="form-group"
                                                                >
                                                                    <label
                                                                        class="form-label"
                                                                        >Country</label
                                                                    >
                                                                    <span
                                                                        class="desc"
                                                                        >e.g.
                                                                        "France"</span
                                                                    >
                                                                    <div
                                                                        class="controls"
                                                                    >
                                                                        <i
                                                                            class=""
                                                                        ></i>
                                                                        <input
                                                                            type="text"
                                                                            class="form-control"
                                                                            value="United States"
                                                                            name="formfield2"
                                                                        />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="col-lg-12"
                                                            >
                                                                <header
                                                                    class="prof-avtar gradient-blue"
                                                                >
                                                                    <div
                                                                        class="avatar-img-wrapper"
                                                                    >
                                                                        <img
                                                                            src="data/crypto-dash/profile.png"
                                                                            style="max-width:100px"
                                                                            alt=""
                                                                        />
                                                                    </div>
                                                                    <div
                                                                        class="form-group mb-0"
                                                                    >
                                                                        <p
                                                                            class="form-label w-text mb-5"
                                                                        >
                                                                            Edit
                                                                            Personal
                                                                            image
                                                                        </p>
                                                                        <label
                                                                            class="form-label w-text"
                                                                            >Upload
                                                                            File</label
                                                                        >
                                                                        <span
                                                                            class="desc g-text"
                                                                            >"JPG,
                                                                            GIF
                                                                            or
                                                                            PNG
                                                                            Max
                                                                            size
                                                                            of
                                                                            800K"</span
                                                                        >
                                                                        <div
                                                                            class="controls"
                                                                        >
                                                                            <input
                                                                                type="file"
                                                                                class=""
                                                                                id="formfield10"
                                                                                name="formfield10"
                                                                            />
                                                                        </div>
                                                                    </div>
                                                                </header>
                                                            </div>
                                                            <div
                                                                class="pull-right mt-30 mr-10"
                                                            >
                                                                <button
                                                                    type="submit"
                                                                    class="btn btn-primary btn-corner right15"
                                                                >
                                                                    <i
                                                                        class="fa fa-check"
                                                                    ></i>
                                                                    Update
                                                                </button>
                                                                <button
                                                                    type="button"
                                                                    class="btn btn-default btn-corner"
                                                                >
                                                                    <i
                                                                        class="fa fa-times"
                                                                    ></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <!-- MAIN CONTENT AREA ENDS -->
                </div>
            </section>
        </div>
        <!-- END CONTAINER -->
    </span>
</template>

<script>
import Sidebar from "./Includes/Sidebar";
import Header from "./Includes/Header";
import BrandName from "./Includes/BrandName";
import { mapState, mapGetters, mapMutations } from "vuex";
import { Inertia } from "@inertiajs/inertia";
export default {
    data() {
        return {
            user: null
        };
    },
    components: {
        Header,
        Sidebar,
        BrandName
    },
    mounted() {
        this.user = Inertia.page.props.auth.user;
    },
    computed: mapGetters(["getSidebarState"]),
    methods: {
        setSideBarState(state) {
            this.sidebarState = state;
        }
    }
};
</script>
