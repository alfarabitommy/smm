<!-- CONTENT START -->
<div class="page-content">

        <!-- BREADCRUMB ROW -->
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                    <li>Video Details</li>
                </ul>
            </div>
        </div>
        <!-- BREADCRUMB ROW END -->

        <!-- SECTION CONTENT START -->
        <div class="section-full p-t80 p-b50">
            <div class="container">

                <!-- BLOG START -->
                <div class="blog-post date-style-1 blog-detail">
                    <div class="wt-post-media wt-img-effect zoom-slow">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $data[0]['link'];?>"></iframe>
                    </div>
                    <div class="wt-post-title ">
                        <h3 class="post-title"><a href="javascript:void(0);"><?= $data[0]['title'];?> </a></h3>
                    </div>
                    <div class="wt-post-meta ">
                      <ul>
                        <li class="post-date"> <i class="fa fa-calendar"></i><?= $data[0]['created_at'];?> </li>
                        <li class="post-author"><i class="fa fa-user"></i><a href="javascript:void(0);">By <span>Admin</span></a> </li>
                        <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:void(0);">0</a> </li>
                      </ul>
                    </div>
                    <div class="wt-post-text">
                        <?= $data[0]['content'];?>
                    </div>
                    <div class="widget bg-white  widget_tag_cloud">
                        <h4 class="tagcloud">Tags</h4>
                        <div class="tagcloud">
                            <?php $array = explode(', ',$data[0]['tags']); ?>
                            <?php foreach($array as $var) { ?>
                                <a href="javascript:void(0);"><?= $var; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="wt-box">
                        <div class="wt-divider bg-gray-dark"><i class="icon-dot c-square"></i></div>
                        <div class="row  p-lr15">
                            <h4 class="tagcloud pull-left m-t5 m-b0">Share this Post:</h4>
                            <div class="widget_social_inks pull-right">
                                <ul class="social-icons social-md social-square social-dark m-b0">
                                    <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                </ul>
                           </div>
                        </div>
                        <div class="wt-divider bg-gray-dark"><i class="icon-dot c-square"></i></div>
                    </div>
                </div>

                <div class="clear" id="comment-list">
                    <div class="comments-area" id="comments">
                        <h2 class="comments-title">0 Comments</h2>
                        <div class="p-tb30">


                          <ol class="comment-list">


                            <?php
                            $jum = count($comment);
                            for($i=0;$i<$jum;$i++){
                             ?>
                              <li class="comment">

                                  <!-- COMMENT BLOCK -->
                                  <div class="comment-body">

                                      <div class="comment-author vcard">
                                          <cite class="fn"><?= $comment[$i]['email']?></cite>
                                          <span class="says">says:</span>
                                      </div>
                                      <div class="comment-meta">
                                          <a href="javascript:void(0);"><?= $comment[$i]['tanggal']?></a>
                                      </div>
                                      <p><?= $comment[$i]['description']?></p>
                                      <div class="reply">
                                          <a href="javascript:void(0);" class="comment-reply-link"></a>
                                      </div>

                                </div>

                              </li>
                            <?php } ?>



                          </ol>



                            <!-- LEAVE A REPLY START -->
                            <div class="comment-respond" id="respond">

                                <h3 class="comment-reply-title" id="reply-title">Leave a Comments
                                    <small>
                                        <a style="display:none;" href="#" id="cancel-comment-reply-link" rel="nofollow">Cancel reply</a>
                                    </small>
                                </h3>

                                <form class="comment-form" id="commentform" method="post" action="<?= base_url('web/add_comment/'.$this->uri->segment(3));?>">
                                  <input type="hidden" name="type" value="videos">
                                  <input type="hidden" name="segment" value="<?= $this->uri->segment(3);?>">

                                    <p class="comment-form-email" style="width:100%">
                                        <label for="email">Email <span class="required">*</span></label>
                                        <input type="text" value="" placeholder="Email" name="email" id="email">
                                    </p>


                                    <p class="comment-form-comment">
                                        <label for="comment">Comment</label>
                                        <textarea rows="8" name="description" placeholder="Comment" id="comment"></textarea>
                                    </p>

                                    <p class="form-submit">
                                        <button class="site-button text-uppercase" type="submit">Submit Comment</button>
                                    </p>

                                </form>

                            </div>
                            <!-- LEAVE A REPLY END -->

                       </div>
                    </div>
                </div>
                <!-- BLOG END -->

            </div>
        </div>
        <!-- SECTION CONTENT END -->

    </div>
    <!-- CONTENT END -->
