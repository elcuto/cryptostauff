<template>
  <span>
    <Header></Header>
    <!-- START CONTAINER -->
    <div class="page-container row-fluid container-fluid">
      <!-- SIDEBAR - START -->

      <Sidebar></Sidebar>
      <!--  SIDEBAR - END -->

      <!-- START CONTENT -->
      <section id="main-content" v-bind:class="{ sidebar_shift: !getSidebarState }">
        <div class="wrapper main-wrapper row" style>
          <BrandName title="Buy Crypto"></BrandName>
          <div class="clearfix"></div>
          <!-- MAIN CONTENT AREA STARTS -->

          <div class="col-lg-8">
            <section class="box">
              <header class="panel_header">
                <h2 class="title pull-left">Buy / Sell Crypto</h2>
                <div class="actions panel_actions pull-right">
                  <a class="box_toggle fa fa-chevron-down"></a>
                  <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                  <a class="box_close fa fa-times"></a>
                </div>
              </header>
              <div class="content-body">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="relative">
                      <div id="example-8">
                        <form>
                          <div class="row">
                            <div class="col-md-6 col-xs-12">
                              <div class="row">
                                <div class="col-md-3 col-xs-3" v-if="sendcurrency!=null">
                                  <img :src="'storage'+sendcurrency.image" class="currency-image" />
                                </div>
                                <div class="col-md-9 col-xs-12">
                                  <label for="yousend">Send</label>
                                  <div class="input-group transparent">
                                    <span class="input-group-addon">
                                      <i class="fa fa-user"></i>
                                    </span>
                                    <select
                                      class="form-control"
                                      v-model="sendcurrency"
                                      @change="sendCurrencyChanged"
                                    >
                                      <option value="null" disabled selected>Select Currency</option>
                                      <option
                                        :value="currency"
                                        v-for="currency in currencies"
                                        :key="currency.id"
                                      >{{currency.name}}</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-6 col-xs-12">
                              <div class="row">
                                <div class="col-md-9 col-xs-12">
                                  <label for="yousend">Receive</label>
                                  <div class="input-group transparent">
                                    <span class="input-group-addon">BTC</span>
                                    <select
                                      class="form-control"
                                      v-model="receivecurrency"
                                      @change="receiveCurrencyChanged"
                                    >
                                      <option value="null" disabled selected>Select Currency</option>
                                      <option
                                        :value="currency"
                                        v-for="currency in currencies"
                                        :key="currency.id"
                                      >{{currency.name}}</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-md-3 col-xs-3" v-if="receivecurrency!=null">
                                  <img
                                    :src="'storage'+ receivecurrency.image"
                                    class="currency-image"
                                  />
                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- <br /> -->
                          <hr />
                          <!-- <br /> -->

                          <div class="row">
                            <div class="col-md-6">
                              <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                  <div class="input-group transparent">
                                    <span class="input-group-addon">
                                      <i class="fa fa-send"></i>
                                    </span>
                                    <input
                                      type="text"
                                      readonly
                                      class="form-control"
                                      placeholder="Transparent"
                                    />
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="row">
                                <div class="col-md-9">
                                  <div class="input-group transparent">
                                    <span class="input-group-addon">
                                      <i class="fa fa-send"></i>
                                    </span>
                                    <input
                                      type="text"
                                      readonly
                                      class="form-control"
                                      placeholder="Transparent"
                                    />
                                  </div>
                                </div>
                                <div class="col-md-3"></div>
                              </div>
                            </div>
                          </div>

                          <hr />
                          <div class="row container">
                            <p>Exchange Rate:</p>
                          </div>
                          <hr />
                          <div class="col-md-6">
                            <button class="btn btn-primary btn-block">
                              <i class="fa fa-reply"></i> Exchange
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>

          <MarketValue :cryptos="cryptos"></MarketValue>

          <!-- MAIN CONTENT AREA ENDS -->
        </div>
      </section>
      <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
  </span>
</template>

<style scoped>
.currency-image {
  height: 60px;
  width: 60px;
  border-radius: 30px;
  border: 5px solid gray;
}
</style>

<script>
import Sidebar from "./Includes/Sidebar";
import Header from "./Includes/Header";
import BrandName from "./Includes/BrandName";
import MarketValue from "./Includes/MarketValue";
import { mapState, mapGetters, mapMutations } from "vuex";
import { Method } from "@inertiajs/inertia";

export default {
  props: ["currencies", "cryptos"],
  data() {
    return {
      sendcurrency: this.currencies[0],
      receivecurrency: this.currencies[4]
    };
  },
  components: {
    Header,
    Sidebar,
    BrandName,
    MarketValue
  },
  computed: mapGetters(["getSidebarState"]),
  methods: {
    sendCurrencyChanged() {
      if (this.sendcurrency != null) {
        // alert(this.sendcurrency.id);
      } else {
        // alert("Not Selected");
      }
    },
    receiveCurrencyChanged() {
      if (this.receivecurrency != null) {
        // alert(this.sendcurrency.id);
      } else {
        // alert("Not Selected");
      }
    }
  }
};
</script>
