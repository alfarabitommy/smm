<!-- CONTENT START -->
<div class="page-content">

            <!-- BREADCRUMB ROW -->
            <div class="bg-gray-light p-tb20">
                <div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                        <li>Acnefacts</li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB ROW END -->

            

            <!-- SECTION CONTENT START -->
            <div class="section-full p-t80 p-b50">
                <div class="container">

                    <!-- BLOG POST START -->

                    <?php
                        $jumlah = count($acnefacts);
                        for($i=0;$i<$jumlah;$i++) {
                    ?>
                    <!-- COLUMNS 1 -->
                    <div class="blog-post blog-md date-style-1 clearfix">

                        <div class="wt-post-media wt-img-effect zoom-slow">
                            <a href="javascript:void(0);"><img src="<?= base_url(); ?>assets/acnefacts/<?= $acnefacts[$i]['image'];?>" alt="<?= $acnefacts[$i]['title'];?>"></a>
                        </div>
                        <div class="wt-post-info">

                            <div class="wt-post-title ">
                                <h3 class="post-title"><a href="javascript:void(0);"><?= $acnefacts[$i]['title'];?></a></h3>
                            </div>
                            <div class="wt-post-meta ">
                              <ul>
                                <li class="post-date"> <i class="fa fa-calendar"></i><?= $acnefacts[$i]['created_at'];?> </li>
                                <li class="post-author"><i class="fa fa-user"></i><a href="javascript:void(0);">By <span>Admin</span></a> </li>
                                <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:void(0);">0</a> </li>
                              </ul>
                            </div>
                            <div class="wt-post-text">
                            <?= substr($acnefacts[$i]['content'], 0, 150);?>
                            </div>
                            <div class="clearfix">
                                    <div class="wt-post-readmore pull-left">
                                         <a href="<?= base_url(); ?>web/acnefactsdetail/<?= $acnefacts[$i]['id'];?>" title="READ MORE" rel="bookmark" class="site-button-link">Read More</a>
                                    </div>

                                </div>


                        </div>

                    </div>
                    <?php } ?>

                    <!-- PAGINATION START -->
                  <?php echo $this->pagination->create_links(); ?>
                    <!-- PAGINATION END -->

                </div>
            </div>
            <!-- SECTION CONTENT END -->

        </div>
        <!-- CONTENT END -->
