<!-- CONTENT START -->
<div class="page-content">

        <!-- BREADCRUMB ROW -->
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                    <li>Videos</li>
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
                            $jumlah = count($videos);
                            for($i=0;$i<$jumlah;$i++) {
                        ?>
                        <!-- COLUMNS 1 -->
                        <div class="post masonry-item col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-post blog-grid date-style-1">

                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $videos[$i]['link'];?>"></iframe>
                                </div>

                                <div class="wt-post-info p-tb30 p-m30">

                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a href="javascript:void(0);"><?= $videos[$i]['title'];?></a></h3>
                                    </div>

                                    <div class="wt-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="fa fa-calendar"></i><?= $videos[$i]['created_at'];?> </li>
                                            <li class="post-author"><i class="fa fa-user"></i><a href="javascript:void(0);">By <span>Admin</span></a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:void(0);">0 Comments</a> </li>
                                        </ul>
                                    </div>

                                    <div class="wt-post-text">
                                    <?= substr($videos[$i]['content'], 0, 150);?>
                                    </div>

                                    <div class="clearfix">
                                        <div class="wt-post-readmore pull-left">
                                             <a href="<?= base_url(); ?>web/videosdetail/<?= $videos[$i]['id'];?>" title="READ MORE" rel="bookmark" class="site-button-link">Read More</a>
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
