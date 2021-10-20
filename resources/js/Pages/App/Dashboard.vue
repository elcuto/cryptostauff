<template>
  <div>
    <Header></Header>
    <!-- START CONTAINER -->
    <div class="page-container row-fluid container-fluid">
      <!-- SIDEBAR - START -->

      <Sidebar></Sidebar>
      <!--  SIDEBAR - END -->

      <!-- START CONTENT -->
      <section id="main-content" v-bind:class="{ sidebar_shift: !getSidebarState }">
        <div class="wrapper main-wrapper row" style>
          <BrandName title="Dashboard"></BrandName>
          <div class="clearfix"></div>
          <!-- MAIN CONTENT AREA STARTS -->

          <MarketValue :cryptos="cryptos"></MarketValue>

          <div class="col-lg-8">
            <section class="box">
              <header class="panel_header">
                <h2 class="title pull-left">Market Volume Chart</h2>
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
                        <div class="row">
                          <div class="col-md-6">
                            <Link
                              class="btn btn-success btn-block"
                              href="/buy-sell"
                            >Buy / Sell Crypto</Link>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>

          <div class="clearfix"></div>

          <div class="col-lg-12">
            <section class="box">
              <header class="panel_header">
                <h2 class="title pull-left">Activities History</h2>
                <div class="actions panel_actions pull-right">
                  <a class="box_toggle fa fa-chevron-down"></a>
                  <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                  <a class="box_close fa fa-times"></a>
                </div>
              </header>
              <div class="content-body">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="table-responsive" data-pattern="priority-columns">
                      <table
                        id="tech-companies-1"
                        class="table vm trans table-small-font no-mb table-bordered table-striped"
                      >
                        <thead>
                          <tr>
                            <th>Crypto orders</th>
                            <th>Sender ID</th>
                            <th>Transaction ID</th>
                            <th>Time</th>
                            <th>Status</th>
                            <th>Amount</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="round img2">
                                <img src="data/crypto-dash/p1.png" alt />
                              </div>
                              <div class="designer-info">
                                <h6>Buy Order</h6>
                              </div>
                            </td>
                            <td>
                              <small class="text-muted">gdh-34um3bbj</small>
                            </td>
                            <td>
                              <small class="text-muted">HJD9R034JNN3N43</small>
                            </td>
                            <td>
                              <small class="text-muted">10:23:45</small>
                            </td>
                            <td>
                              <span class="badge w-70 round-success">completed</span>
                            </td>
                            <td class="green-text boldy">+0,041BTC</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="round img2">
                                <img src="data/crypto-dash/p2.png" alt />
                              </div>
                              <div class="designer-info">
                                <h6>Sell Order</h6>
                              </div>
                            </td>
                            <td>
                              <small class="text-muted">gdh-34um3bbj</small>
                            </td>
                            <td>
                              <small class="text-muted">HJD9R034JNN3N43</small>
                            </td>
                            <td>
                              <small class="text-muted">12:53:25</small>
                            </td>
                            <td>
                              <span class="badge w-70 round-warning">Pending</span>
                            </td>
                            <td class="red-text boldy">-1,176LTC</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="round img2">
                                <img src="data/crypto-dash/p3.png" alt />
                              </div>
                              <div class="designer-info">
                                <h6>
                                  Exchange
                                  Order
                                </h6>
                              </div>
                            </td>
                            <td>
                              <small class="text-muted">gdh-34um3bbj</small>
                            </td>
                            <td>
                              <small class="text-muted">HJD9R034JNN3N43</small>
                            </td>
                            <td>
                              <small class="text-muted">04:03:25</small>
                            </td>
                            <td>
                              <span class="badge w-70 round-primary">exchanged</span>
                            </td>
                            <td class="blue-text boldy">0.023ETH</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="round img2">
                                <img src="data/crypto-dash/p1.png" alt />
                              </div>
                              <div class="designer-info">
                                <h6>Buy Order</h6>
                              </div>
                            </td>
                            <td>
                              <small class="text-muted">gdh-34um3bbj</small>
                            </td>
                            <td>
                              <small class="text-muted">HJD9R034JNN3N43</small>
                            </td>
                            <td>
                              <small class="text-muted">09:33:02</small>
                            </td>
                            <td>
                              <span class="badge w-70 round-danger">Canceled</span>
                            </td>
                            <td class="green-text boldy">+107,0XRP</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="round img2">
                                <img src="data/crypto-dash/p1.png" alt />
                              </div>
                              <div class="designer-info">
                                <h6>Buy Order</h6>
                              </div>
                            </td>
                            <td>
                              <small class="text-muted">gdh-34um3bbj</small>
                            </td>
                            <td>
                              <small class="text-muted">HJD9R034JNN3N43</small>
                            </td>
                            <td>
                              <small class="text-muted">10:23:45</small>
                            </td>
                            <td>
                              <span class="badge w-70 round-warning">pending</span>
                            </td>
                            <td class="green-text boldy">-0,098BTC</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="round img2">
                                <img src="data/crypto-dash/p2.png" alt />
                              </div>
                              <div class="designer-info">
                                <h6>Sell Order</h6>
                              </div>
                            </td>
                            <td>
                              <small class="text-muted">gdh-34um3bbj</small>
                            </td>
                            <td>
                              <small class="text-muted">HJD9R034JNN3N43</small>
                            </td>
                            <td>
                              <small class="text-muted">09:33:02</small>
                            </td>
                            <td>
                              <span class="badge w-70 round-success">Completed</span>
                            </td>
                            <td class="red-text boldy">-2,76DAH</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="round img2">
                                <img src="data/crypto-dash/p1.png" alt />
                              </div>
                              <div class="designer-info">
                                <h6>Buy Order</h6>
                              </div>
                            </td>
                            <td>
                              <small class="text-muted">gdh-34um3bbj</small>
                            </td>
                            <td>
                              <small class="text-muted">HJD9R034JNN3N43</small>
                            </td>
                            <td>
                              <small class="text-muted">09:33:02</small>
                            </td>
                            <td>
                              <span class="badge w-70 round-success">Completed</span>
                            </td>
                            <td class="green-text boldy">+1,429DAH</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>

          <!-- MAIN CONTENT AREA ENDS -->
        </div>
      </section>
      <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
  </div>
</template>

<script>
import Sidebar from "./Includes/Sidebar";
import Header from "./Includes/Header";
import BrandName from "./Includes/BrandName";
import MarketValue from "./Includes/MarketValue";
import { mapState, mapGetters, mapMutations } from "vuex";
// import {SET_SIDEBAR_STATE} from '../stores/mutationTypes/types';
export default {
  props: ["cryptos"],
  data() {
    return {};
  },
  components: {
    Header,
    Sidebar,
    BrandName,
    MarketValue
  },
  computed: mapGetters(["getSidebarState"]),
  methods: {
    // setSideBarState(state) {
    //   this.sidebarState = state;
    //    this.$store.commit(SET_SIDEBAR_STATE,this.)
    // }
  }
};
</script>
