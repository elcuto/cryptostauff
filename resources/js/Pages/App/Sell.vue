<template>
  <span>
    <Header></Header>
    <!-- START CONTAINER -->
    <div class="page-container row-fluid container-fluid">
      <!-- SIDEBAR - START -->

      <Sidebar></Sidebar>
      <!--  SIDEBAR - END -->

      <!-- START CONTENT -->
      <section id="main-content" class v-bind:class="{ sidebar_shift: !getSidebarState }">
        <div class="wrapper main-wrapper row" style>
          <BrandName title="Sell Crypto"></BrandName>
          <div class="clearfix"></div>
          <!-- MAIN CONTENT AREA STARTS -->

          <MarketValue></MarketValue>

          <div class="col-xs-8">
            <section class="box">
              <header class="panel_header">
                <h2 class="title pull-left">Sell Crypto</h2>
                <div class="actions panel_actions pull-right">
                  <a class="box_toggle fa fa-chevron-down"></a>
                  <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                  <a class="box_close fa fa-times"></a>
                </div>
              </header>
              <div class="content-body">
                <div class="row">
                  <div class="col-md-8 col-sm-9 col-xs-10">
                    <div class="input-group transparent">
                      <span class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </span>
                      <input type="text" class="form-control" placeholder="Transparent" />
                    </div>

                    <br />

                    <div class="input-group">
                      <span class="input-group-addon">
                        <span class="arrow"></span>
                        <i class="fa fa-envelope"></i>
                      </span>
                      <input type="text" class="form-control" placeholder="Default" />
                    </div>

                    <br />

                    <div class="input-group primary">
                      <span class="input-group-addon">
                        <span class="arrow"></span>
                        <i class="fa fa-user"></i>
                      </span>
                      <input type="text" class="form-control" placeholder="Primary" />
                    </div>

                    <br />

                    <div class="input-group primary">
                      <input
                        type="text"
                        class="form-control text-right"
                        placeholder="Right Align"
                        aria-describedby="basic-addon1"
                      />
                      <span class="input-group-addon" id="basic-addon1">
                        <span class="arrow"></span>
                        <i class="fa fa-user"></i>
                      </span>
                    </div>
                    <br />

                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Recipient's username"
                        aria-describedby="basic-addon2"
                      />
                      <span class="input-group-addon" id="basic-addon2">@example.com</span>
                    </div>
                    <br />

                    <div class="input-group primary">
                      <span class="input-group-addon">$</span>
                      <input
                        type="text"
                        class="form-control"
                        aria-label="Amount (to the nearest dollar)"
                      />
                      <span class="input-group-addon">.00</span>
                    </div>

                    <br />

                    <div class="input-group">
                      <span class="input-group-addon">$</span>
                      <input type="text" class="form-control" />
                      <span class="input-group-addon">.00</span>
                    </div>

                    <br />

                    <div class="input-group primary">
                      <div class="input-group-btn">
                        <button
                          type="button"
                          class="btn btn-red dropdown-toggle"
                          data-toggle="dropdown"
                        >
                          Action
                          <span class="caret"></span>
                        </button>

                        <ul class="dropdown-menu dropdown-red no-spacing">
                          <li>
                            <a href="#">Action</a>
                          </li>
                          <li>
                            <a href="#">Another action</a>
                          </li>
                          <li>
                            <a href="#">
                              Something else
                              here
                            </a>
                          </li>
                          <li class="divider"></li>
                          <li>
                            <a href="#">Separated link</a>
                          </li>
                        </ul>
                      </div>

                      <input
                        type="text"
                        class="form-control no-left-border form-focus-red"
                        placeholder="Dropdown"
                      />
                    </div>

                    <br />

                    <div class="input-group m-bot15">
                      <span class="input-group-addon">
                        <input type="checkbox" class="iCheck" />
                      </span>
                      <input type="text" class="form-control" placeholder="Input with Checkbox" />
                    </div>
                  </div>
                </div>
              </div>
            </section>
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
import MarketValue from "./Includes/MarketValue";
import { mapState, mapGetters, mapMutations } from "vuex";
export default {
  components: {
    Header,
    Sidebar,
    BrandName,
    MarketValue
  },
  computed: mapGetters(["getSidebarState"]),
  methods: {
    setSideBarState(state) {
      this.sidebarState = state;
    }
  }
};
</script>
