<template>
  <div class="col-lg-4">
    <div class="row">
      <div class="col-xs-12 mt-15">
        <div class="profile-balance gradient-blue">
          <div class="profile-bal-head">
            <h3>Market Value</h3>
          </div>
          <div class="profile-bal-body">
            <h2>
              1.002324
              <small>BTC</small>
            </h2>
            <p class="mb-0 g-text">$9,782.84</p>
          </div>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="r1_graph1 db_box db_box_large mt-15 mb-0">
          <div class="coin-box2 flex align-items-center" v-for="crypto in cryptos" :key="crypto.id">
            <div class="coin-icon mr-10">
              <img :src="'/storage'+crypto.image" alt />
            </div>

            <h5 class="coin-name boldy">{{crypto.name}}</h5>
            <h5 class="coin-price boldy">$8.958</h5>
            <p class="mb-0 green-text">
              4.98%
              <i class="complete fa fa-arrow-up ml-10"></i>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["cryptos"]
};
</script>
