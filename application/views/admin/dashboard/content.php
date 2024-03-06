<div class="content-body">
  <div class="container pd-x-0">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
      <div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-style1 mg-b-10">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          </ol>
        </nav>
        <h4 class="mg-b-0 tx-spacing--1">Hi, <?php echo $info; ?></h4>
      </div>
    </div>

    <!-- panel iklan -->
    <div class="row">
      <div class="col-md-12">
        <h5>Iklan / Ads</h5>
      </div>
    </div>
    <div class="row row-xs">
      <div class="col-sm-6 col-lg-3">
        <div class="card card-body">
          <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Total Iklan / Ads</h6>
          <div class="d-flex d-lg-block d-xl-flex align-items-end">
            <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">5</h3>
          </div>
          <div class="chart-three">
            <div id="flotChart3" class="flot-chart ht-30"></div>
          </div><!-- chart-three -->
        </div>
      </div><!-- col -->
      <div class="col-sm-6 col-lg-3 mg-t-10 mg-sm-t-0">
        <div class="card card-body">
          <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Total Impresi</h6>
          <div class="d-flex d-lg-block d-xl-flex align-items-end">
            <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">859.832</h3>
          </div>
          <div class="chart-three">
            <div id="flotChart4" class="flot-chart ht-30"></div>
          </div><!-- chart-three -->
        </div>
      </div><!-- col -->
      <div class="col-sm-6 col-lg-3 mg-t-10 mg-lg-t-0">
        <div class="card card-body">
          <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Total Jangkauan</h6>
          <div class="d-flex d-lg-block d-xl-flex align-items-end">
            <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">582.341</h3>
          </div>
          <div class="chart-three">
            <div id="flotChart5" class="flot-chart ht-30"></div>
          </div><!-- chart-three -->
        </div>
      </div><!-- col -->
      <div class="col-sm-6 col-lg-3 mg-t-10 mg-lg-t-0">
        <div class="card card-body">
          <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Total Biaya Iklan</h6>
          <div class="d-flex d-lg-block d-xl-flex align-items-end">
            <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">Rp 2.164.072</h3>
          </div>
          <div class="chart-three">
            <div id="flotChart6" class="flot-chart ht-30"></div>
          </div><!-- chart-three -->
        </div>
      </div><!-- col -->
      <!-- panel iklan end -->

    </div><!-- row -->
    <!-- panel kol -->
    <br>
    <div class="row">
      <div class="col-md-12">
        <h5>KOL</h5>
      </div>
    </div>
    <div class="row row-xs">
      <div class="col-sm-6 col-lg-3">
        <div class="card card-body">
          <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Total KOL</h6>
          <div class="d-flex d-lg-block d-xl-flex align-items-end">
            <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">5</h3>
          </div>
          <div class="chart-three" style="font-size: 7pt; font-style: italic;">
            <span>*Jumlah semua KOL yang sudah tercatat dalam sistem</span>
          </div><!-- chart-three -->
        </div>
      </div><!-- col -->
      <div class="col-sm-6 col-lg-3 mg-t-10 mg-sm-t-0">
        <div class="card card-body">
          <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Total Followers</h6>
          <div class="d-flex d-lg-block d-xl-flex align-items-end">
            <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">859.832</h3>
          </div>
          <div class="chart-three" style="font-size: 7pt; font-style: italic;">
            <span>*Jumlah semua total followers dari KOL yang terdaftar</span>
          </div><!-- chart-three -->
        </div>
      </div><!-- col -->
    </div><!-- container -->
    <br>
    <div class="row row-xs">
      <div class="col-md-6">
        <div class="card card-body">
          <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Platform</h6>
          <p class="tx-12 tx-color-03 mg-b-0">Jumlah followers berdasarkan platform sosial media.</p>
          <br>
          <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
        </div>
      </div><!-- col -->
     
    </div><!-- container -->
    <!-- panel kol ends -->

  </div>
</div>