<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/img/favicon.ico">

    <title>Follow Me | Social Media Panel - Login</title>

    <!-- vendor css -->
    <link href="<?= base_url(); ?>lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/dashforge.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/dashforge.auth.css">
  </head>
  <body>

    <div class="content content-fixed content-auth">
      <div class="container">
        <div class="media align-items-stretch justify-content-center ht-100p pos-relative">
          <div class="media-body align-items-center d-none d-lg-flex">
            <div class="mx-wd-600">
              <img src="<?= base_url(); ?>assets/bg-login.png" class="img-fluid" alt="">
            </div>
          </div><!-- media-body -->
          <div class="sign-wrapper mg-lg-l-50 mg-xl-l-60">
            <div class="wd-100p">
              <h3 class="tx-color-01 mg-b-5">Sign In</h3>
              <p class="tx-color-03 tx-16 mg-b-40">Welcome back! Please sign in to continue.</p>
              
              <!-- alert jika gagal login -->
              <?php if ($this->session->flashdata('login_error')): ?>
                  <div class="alert alert-danger" role="alert">
                      <?= $this->session->flashdata('login_error') ?>
                  </div>
              <?php endif; ?>
              
              <form action="<?= base_url();?>admin/proses_login" method="post">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control" placeholder="Enter your username">
                </div>
                <div class="form-group">
                  <div class="d-flex justify-content-between mg-b-5">
                    <label class="mg-b-0-f">Password</label>
                  </div>
                  <input type="password" name="password" class="form-control" placeholder="Enter your password">
                </div>
                <button class="btn btn-brand-02 btn-block">Sign In</button>
              </form>
            </div>
          </div><!-- sign-wrapper -->
        </div><!-- media -->
      </div><!-- container -->
    </div><!-- content -->

    <footer class="footer">
      <div>
        <span>&copy;2024 Followme | Social Media Management Panel</span>
      </div>
    </footer>

    <script src="<?= base_url(); ?>lib/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>lib/feather-icons/feather.min.js"></script>
    <script src="<?= base_url(); ?>lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <script src="<?= base_url(); ?>assets/js/dashforge.js"></script>

    <!-- append theme customizer -->
    <script src="<?= base_url(); ?>lib/js-cookie/js.cookie.js"></script>
    <script src="<?= base_url(); ?>assets/js/dashforge.settings.js"></script>

  </body>
</html>
