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
            <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1"><?= $iklans[0]['cn']; ?></h3>
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
            <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1"><?= number_format($iklans[0]['imp']); ?></h3>
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
            <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1"><?= number_format($iklans[0]['jw']); ?></h3>
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
            <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">Rp <?= number_format($iklans[0]['bya']); ?></h3>
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
            <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1"><?= $kol1[0]['total_kol'];?></h3>
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
            <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1"><?= number_format($kol1[0]['total_follower']);?></h3>
          </div>
          <div class="chart-three" style="font-size: 7pt; font-style: italic;">
            <span>*Jumlah semua total followers dari KOL yang terdaftar</span>
          </div><!-- chart-three -->
        </div>
      </div><!-- col -->
      <div class="col-sm-6 col-lg-3 mg-t-10 mg-sm-t-0">
        <div class="card card-body">
          <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Produk Paling Dipromosikan</h6>
          <div class="d-flex d-lg-block d-xl-flex align-items-end">
            <h4 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1"><?= $kol2[0]['product'];?></h4>
          </div>
          <div class="chart-three" style="font-size: 7pt; font-style: italic;">
            <span>*Produk yang paling banyak dipromosikan oleh KOL</span>
          </div><!-- chart-three -->
        </div>
      </div><!-- col -->
      <div class="col-sm-6 col-lg-3 mg-t-10 mg-sm-t-0">
        <div class="card card-body">
          <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Produk Kurang Dipromosikan</h6>
          <div class="d-flex d-lg-block d-xl-flex align-items-end">
            <h4 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1"><?= $kol2[1]['product'];?></h4>
          </div>
          <div class="chart-three" style="font-size: 7pt; font-style: italic;">
            <span>*Produk yang kurang dipromosikan melalui KOL</span>
          </div><!-- chart-three -->
        </div>
      </div><!-- col -->
    </div><!-- container -->
    <br>
    <div class="row row-xs">
      <div class="col-md-6">
        <div class="card card-body">
          <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Platform</h6>
          <p class="tx-12 tx-color-03 mg-b-0">Jumlah total KOL berdasarkan platform sosial media.</p>
          <br>
          <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
        </div>
      </div><!-- col -->
      <div class="col-md-6">
        <div class="card card-body">
          <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Produk</h6>
          <p class="tx-12 tx-color-03 mg-b-0">Jumlah total produk yang dipromosikan KOL di sosial media.</p>
          <br>
          <canvas id="myChart1" style="width:100%;max-width:600px"></canvas>
        </div>
      </div><!-- col -->
    </div><!-- container -->

    <!-- Live panel -->
    <br>
    <div class="row">
      <div class="col-md-12">
        <h5>LIVE</h5>
      </div>
    </div>
    <div class="row row-xs">
      <div class="col-md-6">
        <div class="card card-body">
          <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Shift</h6>
          <p class="tx-12 tx-color-03 mg-b-0">Jumlah shift live TikTok</p>
          <br>
          <canvas id="myChart2" style="width:100%;max-width:600px"></canvas>
        </div>
      </div><!-- col -->
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-6 mg-t-10 mg-sm-t-0">
            <div class="card card-body">
              <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Penonton</h6>
              <div class="d-flex d-lg-block d-xl-flex align-items-end">
                <h4 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">7.167</h4>
              </div>
              <div class="chart-three" style="font-size: 7pt; font-style: italic;">
                <span>*Jumlah total penonton Live</span>
              </div><!-- chart-three -->
            </div>
          </div><!-- col -->
          <div class="col-md-6">
            <div class="card card-body">
              <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Share</h6>
              <div class="d-flex d-lg-block d-xl-flex align-items-end">
                <h4 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">216</h4>
              </div>
              <div class="chart-three" style="font-size: 7pt; font-style: italic;">
                <span>*Jumlah total Share</span>
              </div><!-- chart-three -->
            </div>
          </div><!-- col -->
        </div>
        <br>
        <div class="row">
          <div class="col-md-6 mg-t-10 mg-sm-t-0">
            <div class="card card-body">
              <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Like</h6>
              <div class="d-flex d-lg-block d-xl-flex align-items-end">
                <h4 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">253.867</h4>
              </div>
              <div class="chart-three" style="font-size: 7pt; font-style: italic;">
                <span>*Jumlah total Like</span>
              </div><!-- chart-three -->
            </div>
          </div><!-- col -->
          <div class="col-md-6">
            <div class="card card-body">
              <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Berlian</h6>
              <div class="d-flex d-lg-block d-xl-flex align-items-end">
                <h4 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">44</h4>
              </div>
              <div class="chart-three" style="font-size: 7pt; font-style: italic;">
                <span>*Jumlah total Berlian</span>
              </div><!-- chart-three -->
            </div>
          </div><!-- col -->
        </div>
      </div><!-- col -->
    </div><!-- container -->
    <!-- panel live ends -->

    <!-- panel order fiktif -->
    <br>
    <div class="row">
      <div class="col-md-12">
        <h5>Panel Order Fiktif</h5>
      </div>
    </div>
    <div class="row row-xs">
      <div class="col-md-4">
        <div class="card card-body">
          <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Marketplace</h6>
          <p class="tx-12 tx-color-03 mg-b-0">Total order fiktif di masing - masing marketplace</p>
          <br>
          <canvas id="myChart3" style="width:100%;max-width:600px"></canvas>
        </div>
      </div><!-- col -->
      <div class="col-md-4 mg-t-10 mg-sm-t-0">
        <div class="card">
          <div class="card-header">
            <h6 class="mg-b-0">Products</h6>
          </div><!-- card-header -->
          <div class="card-body">
            <p class="tx-12 tx-color-03 mg-b-0">Total order fiktif di masing - masing produk</p>
            <br>
            <canvas id="myChart4" style="width:100%;max-width:600px"></canvas>
          </div>
        </div>
      </div><!-- col -->
      <div class="col-md-4 col-lg-3 mg-t-10 mg-lg-t-0">
        <div class="card">
          <div class="card-header">
            <h6 class="mg-b-0">User Reviews</h6>
          </div><!-- card-header -->
          <div class="card-body tx-center">
            <h4 class="tx-normal tx-rubik tx-40 tx-spacing--1 mg-b-0">12</h4>
            <p class="tx-12 tx-uppercase tx-semibold tx-spacing-1 tx-color-02">Good Review</p>
            <p class="tx-12 tx-color-03 mg-b-0">Jumlah ulasan yang diberikan kepada produk</p>
          </div><!-- card-body -->
        </div>
      </div><!-- col -->
    </div>
    <!-- ends panel order fiktif -->

    <br>
    <div class="row">
      <div class="col-md-12">
        <h5>Afiliasi dan Penjualan</h5>
      </div>
    </div>
    <div class="row row-xs">
      <div class="col-sm-6 col-lg-3">
        <div class="card card-body">
          <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Total Komisi Affiliate</h6>
          <div class="d-flex d-lg-block d-xl-flex align-items-end">
            <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">Rp 500.000</h3>
          </div>
          <div class="chart-three">
            <div id="flotChart3" class="flot-chart ht-30"></div>
          </div><!-- chart-three -->
        </div>
      </div><!-- col -->
      <div class="col-sm-6 col-lg-3 mg-t-10 mg-sm-t-0">
        <div class="card card-body">
          <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Jumlah Afiliator</h6>
          <div class="d-flex d-lg-block d-xl-flex align-items-end">
            <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">4</h3>
          </div>
          <div class="chart-three">
            <div id="flotChart4" class="flot-chart ht-30"></div>
          </div><!-- chart-three -->
        </div>
      </div><!-- col -->
      <div class="col-sm-6 col-lg-3 mg-t-10 mg-lg-t-0">
        <div class="card card-body">
          <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Total Order Shopee</h6>
          <div class="d-flex d-lg-block d-xl-flex align-items-end">
            <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">180</h3>
          </div>
          <div class="chart-three">
            <div id="flotChart5" class="flot-chart ht-30"></div>
          </div><!-- chart-three -->
        </div>
      </div><!-- col -->
      <div class="col-sm-6 col-lg-3 mg-t-10 mg-lg-t-0">
        <div class="card card-body">
          <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Total Order TikTok Shop</h6>
          <div class="d-flex d-lg-block d-xl-flex align-items-end">
            <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">27</h3>
          </div>
          <div class="chart-three">
            <div id="flotChart6" class="flot-chart ht-30"></div>
          </div><!-- chart-three -->
        </div>
      </div><!-- col -->
      <!-- panel iklan end -->

    </div><!-- row -->