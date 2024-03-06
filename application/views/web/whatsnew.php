<!-- CONTENT START -->
<div class="page-content">

        <!-- INNER PAGE BANNER -->
        <!-- <div class="wt-bnr-inr overlay-wraper" style="background-image:url(<?= base_url(); ?>assets/web/images/banner/blog-banner.jpg);">
            <div class="overlay-main bg-black opacity-07"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <h1 class="text-white">What's New</h1>
                </div>
            </div>
        </div> -->
        <!-- INNER PAGE BANNER END -->

        <!-- BREADCRUMB ROW -->
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                    <li>What's New</li>
                </ul>
            </div>
        </div>
        <!-- BREADCRUMB  ROW END -->

        <!-- GRID SECTION START -->
        <div class="section-full p-t80 p-b50">
            <div class="container">
                <div class="row">

                    <!-- BLOG GRID START -->
                    <div class="portfolio-wrap wt-blog-grid-2">
                    <?php
                        $jumlah = count($whatsnew);
                        for($i=0;$i<$jumlah;$i++) {
                    ?>
                        <!-- COLUMNS 4 -->
                        <div class="post masonry-item col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-post blog-grid date-style-1">

                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="javascript:void(0);"><img src="<?= base_url(); ?>assets/whatsnew/<?= $whatsnew[$i]['image'];?>" alt="<?= $whatsnew[$i]['title'];?>"></a>
                                </div>

                                <div class="wt-post-info p-tb30 p-m30">

                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a href="javascript:void(0);"><?= $whatsnew[$i]['title'];?></a></h3>
                                    </div>

                                    <div class="wt-post-meta ">
                                      <ul>
                                        <li class="post-date"> <i class="fa fa-calendar"></i><?= $whatsnew[$i]['created_at'];?> </li>
                                        <li class="post-author"><i class="fa fa-user"></i><a href="javascript:void(0);">By <span>Admin</span></a> </li>
                                        <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:void(0);">0 Comments</a> </li>
                                      </ul>
                                    </div>

                                    <div class="wt-post-text">
                                        <p><?= substr($whatsnew[$i]['content'], 0, 150);?></p>
                                    </div>

                                    <div class="clearfix">
                                        <div class="wt-post-readmore pull-left">
                                             <a href="<?= base_url(); ?>web/whatsnewdetail/<?= $whatsnew[$i]['id'];?>" title="READ MORE" rel="bookmark" class="site-button-link">Read More</a>
                                        </div>

                                    </div>

                              </div>

                            </div>
                        </div>
                    <?php } ?>

                    </div>
                    <!-- BLOG GRID END -->

                    <!-- PAGINATION START -->
                    <?php echo $this->pagination->create_links(); ?>
                    <!-- PAGINATION END -->

                </div>
            </div>
        </div>
        <!-- GRID SECTION END -->

    </div>
    <!-- CONTENT END -->
