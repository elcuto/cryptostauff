<template>
  <div
    class="page-sidebar fixedscroll"
    v-bind:class="[
            getSidebarState == true ? expanditClass : '',
            getSidebarState == false ? collapseitClass : ''
        ]"
  >
    <!-- MAIN MENU - START -->
    <div class="page-sidebar-wrapper crypto" id="main-menu-wrapper">
      <ul class="wraplist">
        <li class="menusection">Main</li>
        <li v-bind:class="currentRoute == '/dashboard' ? 'open' : ''" @click="closeSidebar">
          <Link href="/dashboard">
            <i class="img relative crypto-ic">
              <img src="data/crypto-dash/icons/16.png" alt class="ic1 width-20" />
            </i>
            <span class="title">Dashboard</span>
          </Link>
        </li>

        <li v-bind:class="currentRoute == '/buy-sell' ? 'open' : ''">
          <Link href="/buy-sell">
            <i class="img relative crypto-ic">
              <img src="data/crypto-dash/icons/18.png" alt class="ic1 width-20" />
            </i>
            <span class="title">Buy / Sell</span>
          </Link>
        </li>

        <!-- <li v-bind:class="currentRoute == '/buy' ? 'open' : ''">
          <Link href="buy">
            <i class="img relative crypto-ic">
              <img src="data/crypto-dash/icons/17.png" alt class="ic1 width-20" />
            </i>
            <span class="title">Buy</span>
          </Link>
        </li>-->

        <li v-bind:class="currentRoute == '/support' ? 'open' : ''">
          <Link href="/support">
            <i class="img">
              <img src="data/crypto-dash/icons/12.png" alt class="width-20" />
            </i>
            <span class="title">Support</span>
          </Link>
        </li>

        <li class="menusection">ACCOUNT</li>
        <li v-bind:class="currentRoute == '/profile' ? 'open' : ''">
          <Link href="/profile">
            <i class="img">
              <img src="data/crypto-dash/icons/10.png" alt class="width-20" />
            </i>
            <span class="title">Profile</span>
          </Link>
        </li>
      </ul>
    </div>
    <!-- MAIN MENU - END -->
  </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue";
import { Inertia } from "@inertiajs/inertia";
import { mapState, mapGetters, mapMutations } from "vuex";
import { SET_SIDEBAR_STATE } from "../../stores/mutationTypes/types";
export default {
  data() {
    return {
      currentRoute: Inertia.page.url,
      expanditClass: "expandit",
      collapseitClass: "collapseit"
    };
  },

  computed: mapGetters(["getSidebarState"]),
  components: {
    Link
  },
  methods: {
    closeSidebar() {
      this.$store.commit(SET_SIDEBAR_STATE, {
        currentState: false
      });
    }
  }
};
</script>
