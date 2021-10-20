<template>
    <!-- START TOPBAR -->
    <div
        class="page-topbar gradient-blue1"
        v-bind:class="{ sidebar_shift: !getSidebarState }"
    >
        <div class="logo-area crypto"></div>
        <div class="quick-area">
            <div class="pull-left">
                <ul class="info-menu left-links list-inline list-unstyled">
                    <li class="sidebar-toggle-wrap">
                        <a
                            href="#"
                            class="sidebar_toggle"
                            @click="toggleSidebar"
                        >
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <li class="topnav-item item1">
                        <a href="#" class="new-link w-text">
                            Schedule
                            <span class="badge badge-primary ml-5">New</span>
                        </a>
                    </li>

                    <li class="hidden-sm hidden-xs searchform">
                        <form action="#" method="post">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-search"></i>
                                </span>
                                <input
                                    type="text"
                                    class="form-control animated fadeIn"
                                    placeholder="Search & Enter"
                                />
                            </div>
                            <input type="submit" value />
                        </form>
                    </li>
                </ul>
            </div>
            <div class="pull-right">
                <ul class="info-menu right-links list-inline list-unstyled">
                    <li class="notify-toggle-wrapper spec showopacity">
                        <a href="#" data-toggle="dropdown" class="toggle">
                            <i class="fa fa-bell"></i>
                            <span class="badge badge-accent">3</span>
                        </a>
                        <ul class="dropdown-menu notifications animated fadeIn">
                            <li class="total">
                                <span class="small">
                                    You have
                                    <strong>3</strong> new notifications.
                                    <a href="javascript:;" class="pull-right"
                                        >Mark all as Read</a
                                    >
                                </span>
                            </li>
                            <li class="list">
                                <ul
                                    class="dropdown-menu-list list-unstyled ps-scrollbar"
                                >
                                    <li class="unread available">
                                        <!-- available: success, warning, info, error -->
                                        <a href="javascript:;">
                                            <div class="notice-icon">
                                                <i class="fa fa-check"></i>
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>
                                                        Successful transaction
                                                        of 0.01 BTC
                                                    </strong>
                                                    <span class="time small"
                                                        >15 mins ago</span
                                                    >
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="unread away">
                                        <!-- available: success, warning, info, error -->
                                        <a href="javascript:;">
                                            <div class="notice-icon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>
                                                        4 of Pending
                                                        Transactions!
                                                    </strong>
                                                    <span class="time small"
                                                        >45 mins ago</span
                                                    >
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="busy">
                                        <!-- available: success, warning, info, error -->
                                        <a href="javascript:;">
                                            <div class="notice-icon">
                                                <i class="fa fa-times"></i>
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>
                                                        Cancelled Order of 200
                                                        ICO
                                                    </strong>
                                                    <span class="time small"
                                                        >1 hour ago</span
                                                    >
                                                </span>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="available">
                                        <!-- available: success, warning, info, error -->
                                        <a href="javascript:;">
                                            <div class="notice-icon">
                                                <i class="fa fa-check"></i>
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>
                                                        Great Speed Notify of
                                                        1.34 LTC
                                                    </strong>
                                                    <span class="time small"
                                                        >14th Mar</span
                                                    >
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="external">
                                <a href="javascript:;">
                                    <span>Read All Notifications</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="message-toggle-wrapper spec showopacity">
                        <a href="#" data-toggle="dropdown" class="toggle mr-15">
                            <i class="fa fa-envelope"></i>
                            <span class="badge badge-accent">7</span>
                        </a>
                        <ul class="dropdown-menu messages animated fadeIn">
                            <li class="list">
                                <ul
                                    class="dropdown-menu-list list-unstyled ps-scrollbar"
                                >
                                    <li class="unread status-available">
                                        <a href="javascript:;">
                                            <div class="user-img">
                                                <img
                                                    src="data/profile/avatar-1.png"
                                                    alt="user-image"
                                                    class="img-circle img-inline"
                                                />
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong
                                                        >Clarine Vassar</strong
                                                    >
                                                    <span class="time small"
                                                        >- 15 mins ago</span
                                                    >
                                                    <span
                                                        class="profile-status available pull-right"
                                                    ></span>
                                                </span>
                                                <span class="desc small">
                                                    Lorem ipsum dolor sit elit
                                                    fugiat molest.
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="status-away">
                                        <a href="javascript:;">
                                            <div class="user-img">
                                                <img
                                                    src="data/profile/avatar-2.png"
                                                    alt="user-image"
                                                    class="img-circle img-inline"
                                                />
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong
                                                        >Brooks Latshaw</strong
                                                    >
                                                    <span class="time small"
                                                        >- 45 mins ago</span
                                                    >
                                                    <span
                                                        class="profile-status away pull-right"
                                                    ></span>
                                                </span>
                                                <span class="desc small">
                                                    Lorem ipsum dolor sit elit
                                                    fugiat molest.
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="status-busy">
                                        <a href="javascript:;">
                                            <div class="user-img">
                                                <img
                                                    src="data/profile/avatar-3.png"
                                                    alt="user-image"
                                                    class="img-circle img-inline"
                                                />
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>
                                                        Clementina Brodeur
                                                    </strong>
                                                    <span class="time small"
                                                        >- 1 hour ago</span
                                                    >
                                                    <span
                                                        class="profile-status busy pull-right"
                                                    ></span>
                                                </span>
                                                <span class="desc small">
                                                    Lorem ipsum dolor sit elit
                                                    fugiat molest.
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="status-offline">
                                        <a href="javascript:;">
                                            <div class="user-img">
                                                <img
                                                    src="data/profile/avatar-4.png"
                                                    alt="user-image"
                                                    class="img-circle img-inline"
                                                />
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Carri Busey</strong>
                                                    <span class="time small"
                                                        >- 5 hours ago</span
                                                    >
                                                    <span
                                                        class="profile-status offline pull-right"
                                                    ></span>
                                                </span>
                                                <span class="desc small">
                                                    Lorem ipsum dolor sit elit
                                                    fugiat molest.
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="status-offline">
                                        <a href="javascript:;">
                                            <div class="user-img">
                                                <img
                                                    src="data/profile/avatar-5.png"
                                                    alt="user-image"
                                                    class="img-circle img-inline"
                                                />
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong
                                                        >Melissa Dock</strong
                                                    >
                                                    <span class="time small"
                                                        >- Yesterday</span
                                                    >
                                                    <span
                                                        class="profile-status offline pull-right"
                                                    ></span>
                                                </span>
                                                <span class="desc small">
                                                    Lorem ipsum dolor sit elit
                                                    fugiat molest.
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="status-available">
                                        <a href="javascript:;">
                                            <div class="user-img">
                                                <img
                                                    src="data/profile/avatar-1.png"
                                                    alt="user-image"
                                                    class="img-circle img-inline"
                                                />
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Verdell Rea</strong>
                                                    <span class="time small"
                                                        >- 14th Mar</span
                                                    >
                                                    <span
                                                        class="profile-status available pull-right"
                                                    ></span>
                                                </span>
                                                <span class="desc small">
                                                    Lorem ipsum dolor sit elit
                                                    fugiat molest.
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="status-busy">
                                        <a href="javascript:;">
                                            <div class="user-img">
                                                <img
                                                    src="data/profile/avatar-2.png"
                                                    alt="user-image"
                                                    class="img-circle img-inline"
                                                />
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>
                                                        Linette Lheureux
                                                    </strong>
                                                    <span class="time small"
                                                        >- 16th Mar</span
                                                    >
                                                    <span
                                                        class="profile-status busy pull-right"
                                                    ></span>
                                                </span>
                                                <span class="desc small">
                                                    Lorem ipsum dolor sit elit
                                                    fugiat molest.
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="status-away">
                                        <a href="javascript:;">
                                            <div class="user-img">
                                                <img
                                                    src="data/profile/avatar-3.png"
                                                    alt="user-image"
                                                    class="img-circle img-inline"
                                                />
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>
                                                        Araceli Boatright
                                                    </strong>
                                                    <span class="time small"
                                                        >- 16th Mar</span
                                                    >
                                                    <span
                                                        class="profile-status away pull-right"
                                                    ></span>
                                                </span>
                                                <span class="desc small">
                                                    Lorem ipsum dolor sit elit
                                                    fugiat molest.
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="external">
                                <a href="javascript:;">
                                    <span>Read All Messages</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="profile showopacity">
                        <a href="#" data-toggle="dropdown" class="toggle">
                            <img
                                src="data/profile/profile.jpg"
                                alt="user-image"
                                class="img-circle img-inline"
                            />
                            <span>
                                {{ user != null ? user.fullname : "" }}
                                <i class="fa fa-angle-down"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu profile animated fadeIn">
                            <li>
                                <a href="crypto-account-setting.html">
                                    <i class="fa fa-wrench"></i> Settings
                                </a>
                            </li>
                            <li>
                                <a href="crypto-profile.html">
                                    <i class="fa fa-user"></i> Profile
                                </a>
                            </li>
                            <li>
                                <a href="crypto-faq.html">
                                    <i class="fa fa-info"></i> Help
                                </a>
                            </li>
                            <li class="last">
                                <Link href="/log-out">
                                    <i class="fa fa-lock"></i> Logout
                                </Link>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
import { SET_SIDEBAR_STATE } from "../../stores/mutationTypes/types";
import { mapState, mapGetters, mapMutations } from "vuex";
import { Inertia } from "@inertiajs/inertia";
import { Link } from "@inertiajs/inertia-vue";

export default {
    data() {
        return {
            openSidebar: false,
            user: null
        };
    },
    components: {
        Link
    },
    mounted() {
        this.$store.commit(SET_SIDEBAR_STATE, {
            currentState: this.openSidebar
        });
        this.user = Inertia.page.props.auth.user;
    },
    created() {},
    computed: mapGetters(["getSidebarState"]),
    methods: {
        toggleSidebar() {
            this.openSidebar = !this.openSidebar;
            //   this.$emit("side-bar-state", this.openSidebar);
            this.$store.commit(SET_SIDEBAR_STATE, {
                currentState: this.openSidebar
            });
        }
    }
};
</script>
