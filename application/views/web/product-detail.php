<!-- CONTENT START -->
<div class="page-content">

        <!-- INNER PAGE BANNER -->
        <!-- <div class="wt-bnr-inr overlay-wraper"> -->
        <!-- <div class="wt-bnr-inr overlay-wraper" style="background-image:url(images/banner/product-banner.jpg);"> -->
            <!-- <div class="overlay-main bg-black opacity-07"></div> -->
            <!-- <div class="container text-center">
                <div class="wt-bnr-inr-entry">
                    <h1 class=""><?= $data[0]['product_name'];?></h1>
                </div>
            </div>
        </div> -->
        <!-- INNER PAGE BANNER END -->

        <!-- BREADCRUMB ROW -->
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                    <li>Product Details</li>
                </ul>
            </div>
        </div>
        <!-- BREADCRUMB ROW END -->

        <!-- SECTION CONTENT START -->
        <div class="section-full p-t80 p-b50">

            <!-- PRODUCT DETAILS -->
            <div class="container woo-entry">

                <div class="row m-b30">

                        <div class="col-md-4 col-sm-4 m-b30">
                            <div class="wt-box wt-product-gallery on-show-slider">
                                <img src="<?= base_url(); ?>assets/products/<?= $data[0]['image1'];?>" alt="">
                            </div>
                        </div>

                        <div class="col-md-8 col-sm-8">
                            <div class="wt-post-title ">
                                <h3 class="post-title"><a href="javascript:void(0);"><?= $data[0]['product_name'];?></a></h3>
                            </div>
                            <!-- <h2 class="m-tb10">$2,140.00 </h2> -->
                            <div class="wt-post-text">
                                <p class="m-b10"><?= $data[0]['lead_desc'];?></p>
                            </div>
                            <table class="table table-bordered" >
                                <tr>
                                    <td>Pricing</td>
                                    <td>Rp <?= number_format($data[0]['price'],2,',','.');?></td>
                                </tr>
                                <tr>
                                    <td>Stock Availability</td>
                                    <td><?= $data[0]['stock'];?></td>
                                </tr>
                                <tr>
                                    <td>Rating</td>
                                    <td>
                                        <span class="rating-bx">
                                        <?php if($data[0]['rating'] == 1) { ?>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        <?php } elseif($data[0]['rating'] == 2) { ?>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        <?php } elseif($data[0]['rating'] == 3) { ?>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        <?php } elseif($data[0]['rating'] == 4) { ?>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        <?php } elseif($data[0]['rating'] == 5) { ?>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        <?php } ?>
                                        </span>
                                    </td>
                                </tr>
                            </table>
                            <button onclick="window.open('<?= $data[0]['store_link'];?>')" class="btn btn-primary site-button pull-left"><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;BUY PRODUCT</button>
                        </div>
                </div>

                <!-- TITLE START -->
                    <div class="p-b10">
                        <h3 class="text-uppercase">Realated products</h3>
                        <div class="wt-separator-outer  m-b30">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                    </div>
                <!-- TITLE END -->

                <div class="row m-b30">
                    <?php
                    $jumlah = count($random);
                    for($i=0;$i<4;$i++) {
                    ?>
                        <!-- COLUMNS 1 -->
                        <div class="col-md-3 col-sm-4 col-xs-6 col-xs-100pc m-b30">
                            <div class="wt-box wt-product-box">
                                <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                    <img src="<?= base_url(); ?>assets/products/<?= $random[$i]['image1'];?>" alt="<?= $random[$i]['product_name'];?>">
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="<?= base_url(); ?>web/details/<?= $random[$i]['id'];?>">
                                                <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="wt-info  text-center">
                                    <div class="p-a10 bg-white">
                                        <h4 class="wt-title">
                                            <a href="javascript:;"><?= $random[$i]['product_name'];?></a>
                                        </h4>
                                        <span class="price">

                                            <ins>
                                                <span><span class="Price-currencySymbol">Rp </span><?= number_format($random[$i]['price'],2,',','.');?></span>
                                            </ins>
                                        </span>
                                        <div class="rating-bx">
                                            <?php if($random[$i]['rating'] == 1) { ?>
                                                <i class="fa fa-star"></i>
                                            <?php } elseif($random[$i]['rating'] == 2) { ?>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            <?php } elseif($random[$i]['rating'] == 3) { ?>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            <?php } elseif($random[$i]['rating'] == 4) { ?>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            <?php } elseif($random[$i]['rating'] == 5) { ?>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="p-t10">
                                        <button onClick="window.location='<?= base_url(); ?>web/productsdetail/<?= $random[$i]['id'];?>';" class="site-button  m-r15" type="button">view product  <i class="fa fa-angle-double-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>

                <!-- TABS CONTENT START -->
                <div class="row">
                    <div class="col-md-12 p-b30">
                        <div class="wt-tabs border border-top bg-tabs">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#web-design-19">Description</a></li>
                                <li><a data-toggle="tab" href="#graphic-design-19">Specification</a></li>
                                <li><a data-toggle="tab" href="#developement-19">Review</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="web-design-19" class="tab-pane active">
                                    <div class=" p-a10">
                                        <?= $data[0]['desc'];?>
                                    </div>
                                </div>
                                <div id="graphic-design-19" class="tab-pane">
                                    <table class="table table-bordered table-striped m-b0" >
                                        <tr>
                                            <td><strong>Contains</strong></td>
                                            <td><?= $data[0]['contains'];?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Packaging</strong></td>
                                            <td><?= $data[0]['packaging'];?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>How to Use</strong></td>
                                            <td><?= $data[0]['howto'];?></td>
                                        </tr>
                                    </table>
                                </div>
                                <div id="developement-19" class="tab-pane">
                                    <div class=" p-a10">
                                        <div id="comments">
                                            <ol class="commentlist">

                                                <li class="comment">
                                                    <div class="comment_container">

                                                      <?php
                                                        $jum = count($comment);
                                                        for($i=0;$i<$jum;$i++){
                                                       ?>

                                                        <div class="comment-text" style="padding-left: 0;">
                                                            <p class="meta">
                                                                <strong class="author"><?= $comment[$i]['email']?></strong>
                                                                <span><i class="fa fa-clock-o"></i> <?= $comment[$i]['tanggal']?> </span>
                                                            </p>
                                                            <div class="description">
                                                                <p><?= $comment[$i]['description']?></p>
                                                            </div>
                                                        </div>
                                                      <?php } ?>
                                                    </div>
                                                </li>

                                            </ol>
                                        </div>
                                        <div id="review_form_wrapper">
                                            <div id="review_form">
                                                    <div id="respond" class="comment-respond">
                                                        <h3 class="comment-reply-title" id="reply-title">Add a review</h3>

                                                        <form class="comment-form" id="commentform" method="post" action="<?= base_url('web/add_comment/'.$this->uri->segment(3));?>">
                                                          <input type="hidden" name="type" value="products">
                                                          <input type="hidden" name="segment" value="<?= $this->uri->segment(3);?>">

                                                            <div class="comment-form-email" style="width:100%;">
                                                                <label>Email <span class="required">*</span></label>
                                                                <input type="text" aria-required="true" size="30" value="" name="email" id="email">
                                                            </div>
                                                            <div class="comment-form-comment">
                                                                <label>Your Review</label>
                                                                <textarea aria-required="true" rows="8" cols="45" name="description" id="comment"></textarea>
                                                            </div>
                                                            <div class="form-submit">
                                                                <button class="site-button  m-r15" type="submit">Submit <i class="fa fa-angle-double-right"></i></button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- TABS CONTENT START -->



            </div>
            <!-- PRODUCT DETAILS -->

        </div>
        <!-- CONTENT CONTENT END -->


    </div>
    <!-- CONTENT END -->
