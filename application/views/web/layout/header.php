<!DOCTYPE html>

<html lang="en">

<head>

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <!-- FAVICONS ICON -->
    <!-- <link rel="icon" href="images/favicon.ico" type="image/x-icon" /> -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" /> -->
    
    <!-- PAGE TITLE HERE -->
    <title>Erha Acne</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- [if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
	<![endif] -->
    
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/web/css/bootstrap.min.css">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/web/css/fontawesome/css/font-awesome.min.css" />
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/web/css/flaticon.min.css">
    <!-- ANIMATE STYLE SHEET --> 
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/web/css/animate.min.css">
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/web/css/owl.carousel.min.css">
    <!-- BOOTSTRAP SELECT BOX STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/web/css/bootstrap-select.min.css">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/web/css/magnific-popup.min.css">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/web/css/loader.min.css">    
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/web/css/style.css">
    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="<?= base_url(); ?>assets/web/css/skin/skin-1.css">
    <!-- CUSTOM  STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/web/css/custom.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/social-share.css">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css' rel='stylesheet' type='text/css'>
   

    
    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/web/plugins/revolution/revolution/css/settings.css">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/web/plugins/revolution/revolution/css/navigation.css">
    
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <style>
        .modal-backdrop {
            display: none;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1040;
            background-color: #000;
        }

        .about-spa p {
            margin: 0;
        }
        
        @font-face {
            font-family: Majesti;
            src: url("<?= base_url(); ?>assets/web/fonts/majesti/Majesti-Banner-Medium.otf") format("opentype");
        }

        @font-face {
            font-family: Nexa;
            src: url("<?= base_url(); ?>assets/web/fonts/Nexa-regular.otf") format("opentype");
        }
        

       
    </style>
</head>

<body style="font-family: 'Nexa', sans-serif;">
<ul class="ct-socials">
   <li>
      <a href="https://facebook.com/ERHA-Acne-101380701432106" target="_blank"><i class="fa fa-facebook"></i></a>
   </li>
   <li>
      <a href="https://instagram.com/erha_acneact?igshid=1mdtz2281k0ez" target="_blank"><i class="fa fa-instagram"></i></a>
   </li>
   <li>
      <a href="https://youtube.com/user/dearrtha" target="_blank"><i class="fa fa-youtube"></i></a>
   </li>
</ul>
	<div class="page-wraper"> 
       	
        <!-- HEADER START -->
        <header class="site-header header-style-1 ">
        
            <!-- <div class="top-bar" style="background-color: #424242;"> -->
            <div class="top-bar" style="background-color: transparent;">
                <div class="container" style="color: #424242;">
                    <div class="row">
                    	<div class="wt-topbar-left clearfix">
                        	<ul class="list-unstyled e-p-bx pull-right" style="font-family: 'Nexa', sans-serif;">
                                <li><i class="fa fa-envelope"></i>mail@erhaacne.com</li>
                                <li><i class="fa fa-phone"></i>(888) 123-4567</li>
                            </ul>
                        </div>
                        <div class="wt-topbar-right clearfix">
                            <ul class="list-unstyled e-p-bx pull-right" style="font-family: 'Nexa', sans-serif;">
                                <?php if($this->session->userdata('id')){ ?>
                                    <li><i class="fa fa-user"></i><a style="color: #424242;" href="<?= base_url(); ?>web/login">Hi, <?= $this->session->userdata('name'); ?></a></li>
                                    <li><i class="fa fa-power-off"></i><a style="color: #424242;" href="<?= base_url(); ?>web/logout">Logout</a></li>
                                <?php } else { ?>
                                    <li><i class="fa fa-user"></i><a style="color: #424242;" href="<?= base_url(); ?>web/login">Login</a></li>
                                    <li><i class="fa fa-user-plus"></i><a style="color: #424242;" href="<?= base_url(); ?>web/register">Register</a></li>
                                <?php } ?>
                                <!-- TRIGGER THE MODAL WITH A BUTTON -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Search Link -->

<!-- Search Form -->

            <div class="sticky-header main-bar-wraper">
                <div class="main-bar bg-white">
                    <div class="container">
                        <div class="logo-header">
                            <a href="<?= base_url(); ?>">
                                <img src="<?= base_url(); ?>assets/web/images/acneact.png" width="216" height="37" alt="" />
                            </a>
                        </div>
                        <!-- NAV Toggle Button -->
                        <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- ETRA Nav -->
                        <div class="extra-nav" style="margin-top: 11px;">
                            <div class="extra-cell">
                                <a href="#search" class="site-search-btn"><i class="fa fa-search"></i></a>
                            </div>
                            
                         </div>
                        <!-- SITE Search -->
                        <div id="search" style="font-family: 'Nexa', sans-serif;"> 
                            <span class="close"></span>
                            <form role="search" id="searchform" action="/search" method="get" class="radius-xl">
                                <div class="input-group">
                                    <input value="" name="q" type="search" placeholder="Type to search"/>
                                    <span class="input-group-btn"><button type="button" class="search-btn"><i class="fa fa-search"></i></button></span>
                                </div>   
                            </form>
                        </div>
                        
                        <!-- MAIN Vav -->
                        <?php $uri = $this->uri->segment(2); ?>
                        <div class="header-nav navbar-collapse collapse ">
                            <ul class=" nav navbar-nav" style="font-family: 'Nexa', sans-serif;">
                                <li class="<?= ($uri=='')? 'active':''; ?>"><a href="<?= base_url(); ?>">Home</a></li>
                                <li class="<?= ($uri=='products')? 'active':''; ?>"><a href="<?= base_url(); ?>web/products">Products</a></li>
                                <li class="<?= ($uri=='whatsnew')? 'active':''; ?>"><a href="<?= base_url(); ?>web/whatsnew">What's New</a></li>
                                <li class="<?= ($uri=='acnefacts')? 'active':''; ?>"><a href="<?= base_url(); ?>web/acnefacts">Acnefacts</a></li>
                                <li class="<?= ($uri=='videos')? 'active':''; ?>"><a href="<?= base_url(); ?>web/videos">Videos</a></li>
                                <li class="<?= ($uri=='contact')? 'active':''; ?>"><a href="<?= base_url(); ?>web/contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
        </header>

        <!-- MODAL -->
    <!-- <div id="Login-Modal" class="modal fade" role="dialog">
            <div class="modal-dialog">
            
            <div class="modal-content">
                <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-white">Login</h4>
                </div>
                <div class="modal-body">
                    <br>
                    Log in using your registered email and password
                    <br>
                    <br>
                    <form class="cons-contact-form" method="post" action="form-handler.php">
                        
                            <div class="row">
                            
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input name="email" type="email" class="form-control" required="" placeholder="Enter email">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                            <input name="password" type="password" class="form-control" required="" placeholder="password">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-12 text-right">
                                    <button name="submit" type="submit" value="Submit" class="site-button  m-r15">Submit  <i class="fa fa-angle-double-right"></i></button>
                                </div>

                            </div>

                        </form>
                </div>
                
            </div>
            </div>
        </div> -->

        <!-- <div id="Register-Modal" class="modal fade" role="dialog">
            <div class="modal-dialog">
            
            <div class="modal-content">
                <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-white">Register</h4>
                </div>
                <div class="modal-body">
                <br>
                    Register to our site, to get promotional offers and updated info
                    <br>
                    <br>
                    <form class="cons-contact-form" id="register_form" action="<?= base_url();?>web/proses_register" method="post">
                        
                            <div class="row">
                            
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input name="name" type="text" class="form-control" required="" placeholder="Enter your name">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            <input name="phone" type="text" class="form-control" required="" placeholder="Enter your phone number">
                                        </div>
                                    </div>

                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group" data-date-format="dd.mm.yyyy">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input name="dob" type='text' class="form-control" id='datepicker' placeholder="Your birthday" style='width: 300px;' >
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input name="email" type="email" class="form-control" required="" placeholder="Enter email">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                            <input name="password" type="password" class="form-control" required="" placeholder="password">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-12 text-right">
                                    <button onclick="form_submit()" name="submit" value="Submit" class="site-button m-r15">Submit  <i class="fa fa-angle-double-right"></i></button>
                                </div>

                            </div>

                        </form>
                </div>
            </div>
            </div>
        </div> -->
        <!-- HEADER END -->