<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/img/favicon.png">

    <title>Erha Acne</title>

    <!-- vendor css -->
    <link href="<?= base_url(); ?>lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>lib/jqvmap/jqvmap.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?= base_url(); ?>lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>lib/prismjs/themes/prism-vs.css" rel="stylesheet">
    <link href="<?= base_url(); ?>lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>lib/quill/quill.core.css" rel="stylesheet">
    <link href="<?= base_url(); ?>lib/quill/quill.snow.css" rel="stylesheet">
    <link href="<?= base_url(); ?>lib/quill/quill.bubble.css" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/dashforge.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/dashforge.dashboard.css">
  </head>
  <body>

    <aside class="aside aside-fixed">
      <div class="aside-header">
        <a href="#" class="aside-logo">
          <img src="<?= base_url(); ?>assets/logo.PNG" alt="" width="150">
        </a>
        <a href="" class="aside-menu-link">
          <i data-feather="menu"></i>
          <i data-feather="x"></i>
        </a>
      </div>
      <div class="aside-body">
        <div class="aside-loggedin">
          <div class="d-flex align-items-center justify-content-start">
            <a href="" class="avatar"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></a>
          </div>
          <div class="aside-loggedin-user">
            <a href="#loggedinMenu" class="d-flex align-items-center justify-content-between mg-b-2" data-toggle="collapse">
              <h6 class="tx-semibold mg-b-0">John Doe</h6>
              <i data-feather="chevron-down"></i>
            </a>
            <p class="tx-color-03 tx-12 mg-b-0">Administrator</p>
          </div>
          <div class="collapse" id="loggedinMenu">
            <ul class="nav nav-aside mg-b-0">
              <li class="nav-item"><a href="<?= base_url('admin/logout');?>" class="nav-link"><i data-feather="log-out"></i> <span>Sign Out</span></a></li>
            </ul>
          </div>
        </div><!-- aside-loggedin -->
        <?php $uri = $this->uri->segment(2); ?>
        <ul class="nav nav-aside">
          <li class="nav-label">Contents</li>
          <li class="nav-item <?= ($uri=='dashboard')? 'active':''; ?>"><a href="<?= base_url(); ?>admin/dashboard/" class="nav-link"><i data-feather="home"></i> <span>Dashboard</span></a></li>
          <li class="nav-item <?= ($uri=='sliders')? 'active':''; ?>"><a href="<?= base_url(); ?>admin/sliders/" class="nav-link"><i data-feather="fast-forward"></i> <span>Sliders</span></a></li>
          <li class="nav-item <?= ($uri=='edit_about')? 'active':''; ?>"><a href="<?= base_url(); ?>admin/edit_about/1" class="nav-link"><i data-feather="info"></i> <span>About</span></a></li>
          <li class="nav-item <?= ($uri=='products')? 'active':''; ?>"><a href="<?= base_url(); ?>admin/products/" class="nav-link"><i data-feather="shopping-bag"></i> <span>Products</span></a></li>
          <li class="nav-item <?= ($uri=='whatsnew')? 'active':''; ?>"><a href="<?= base_url(); ?>admin/whatsnew/" class="nav-link"><i data-feather="send"></i> <span>What's New</span></a></li>
          <li class="nav-item <?= ($uri=='videos')? 'active':''; ?>"><a href="<?= base_url(); ?>admin/videos/" class="nav-link"><i data-feather="video"></i> <span>Videos</span></a></li>
          <li class="nav-item <?= ($uri=='acnefacts')? 'active':''; ?>"><a href="<?= base_url(); ?>admin/acnefacts/" class="nav-link"><i data-feather="layout"></i> <span>Acnefacts</span></a></li>
          <li class="nav-item <?= ($uri=='customers')? 'active':''; ?>"><a href="<?= base_url(); ?>admin/customers/" class="nav-link"><i data-feather="users"></i> <span>Customers</span></a></li>
          <li class="nav-item <?= ($uri=='sliders')? 'active':''; ?>"><a href="<?= base_url(); ?>admin/messages/" class="nav-link"><i data-feather="inbox"></i> <span>Messages</span></a></li>
          <!-- <li class="nav-label mg-t-25">Web Apps</li>
          <li class="nav-item"><a href="app-mail.html" class="nav-link"><i data-feather="settings"></i> <span>Site Settings</span></a></li> -->
        </ul>
      </div>
    </aside>

    <div class="content ht-100v pd-0">
      <!-- <div class="content-header">
        <div class="content-search">
          <i data-feather="search"></i>
          <input type="search" class="form-control" placeholder="Search...">
        </div>
      </div>content-header -->
