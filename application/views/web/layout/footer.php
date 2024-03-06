<!-- FOOTER START -->
<footer class="site-footer footer-light">
            
            
            <!-- FOOTER BLOCKES START -->  
            <div class="footer-top overlay-wraper">
                <div class="overlay-main"></div>
                <div class="container">
                    <div class="row">
                        <!-- ABOUT COMPANY -->
                        <div class="col-md-4 col-sm-6">  
                            <div class="widget widget_about">
                                <h4 class="widget-title">About Erha Acne</h4>
                                <div class="logo-footer clearfix p-b15">
                                    <a href="index.html"><img src="<?= base_url(); ?>assets/web/images/acneact-bot.png" width="230" height="67" alt=""/></a>
                                </div>
                                <p>Temukan rangkaian produk skin care untuk kulit berjerawat dari ERHA. Perawatan skin care ERHA khusus kulit berjerawat memberikan solusi terbaik untuk menuntaskan dan menghilangkan jerawat, bekas jerawat serta perawatan untuk kulit berjerawat.
                                </p>  
                            </div>
                        </div> 
                        <!-- RESENT POST -->
                        <div class="col-md-4 col-sm-6">
                            <div class="widget recent-posts-entry-date">
                                <h4 class="widget-title">Recent Post</h4>
                                <div class="widget-post-bx">
                                    <?php $uri = $this->uri->segment(2);if($uri!='whatsnew') {?>
                                        <?php 
                                        $jumlah = count($whatsnew); 
                                        for($i=0;$i<3;$i++) {    
                                        ?> 
                                        <div class="bdr-light-blue widget-post clearfix  bdr-b-1 m-b10 p-b10">
                                            <div class="wt-post-date text-center text-uppercase text-white p-t5">
                                                <strong>20</strong>
                                                <span>Mar</span>
                                            </div>
                                            <div class="wt-post-info">
                                                <div class="wt-post-header">
                                                    <h6 class="post-title"><a href="<?= base_url(); ?>web/whatsnewdetail/<?= $whatsnew[$i]['id'];?>"><?= $whatsnew[$i]['title'];?> </a></h6>
                                                </div>
                                                <div class="wt-post-meta">
                                                    <ul>
                                                        <li class="post-author"><i class="fa fa-user"></i>By Admin</li>
                                                        <li class="post-comment"><i class="fa fa-comments"></i> 0</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?> 
                                    <?php } else {?>
                                        <?php 
                                        $jumlah = count($whatsnewfoot); 
                                        for($i=0;$i<3;$i++) {    
                                        ?> 
                                        <div class="bdr-light-blue widget-post clearfix  bdr-b-1 m-b10 p-b10">
                                            <div class="wt-post-date text-center text-uppercase text-white p-t5">
                                                <strong>20</strong>
                                                <span>Mar</span>
                                            </div>
                                            <div class="wt-post-info">
                                                <div class="wt-post-header">
                                                    <h6 class="post-title"><a href="<?= base_url(); ?>web/whatsnewdetail/<?= $whatsnewfoot[$i]['id'];?>"><?= $whatsnewfoot[$i]['title'];?> </a></h6>
                                                </div>
                                                <div class="wt-post-meta">
                                                    <ul>
                                                        <li class="post-author"><i class="fa fa-user"></i>By Admin</li>
                                                        <li class="post-comment"><i class="fa fa-comments"></i> 0</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?> 
                                    <?php } ?>
                                    
                                </div>
                            </div>
                        </div>      
                        <!-- USEFUL LINKS -->
                        <div class="col-md-4 col-sm-6">
                            <div class="widget widget_services">
                                <h4 class="widget-title">Useful links</h4>
                                <ul>
                                    <li><a href="<?= base_url(); ?>">Home</a></li>
                                    <li><a href="<?= base_url(); ?>web/products">Products</a></li>
                                    <li><a href="<?= base_url(); ?>web/whatsnew">What's New</a></li>
                                    <li><a href="<?= base_url(); ?>web/acnefacts">Acnefacts</a></li>
                                    <li><a href="<?= base_url(); ?>web/videos">Video</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- NEWSLETTER -->
                        
                    </div>

                    <div class="row">
                        <!-- <div class="col-md-4">&nbsp;</div> -->
                        <div class="col-md-12 col-sm-12">
                            <div class="widget widget_newsletter">
                                <h4 class="widget-title">Newsletter</h4>
                                <!-- <p>Follow our newsletter to get our newest info and promos!</p> -->
                                <div class="newsletter-bx">
                                    <form role="search" method="post">
                                        <div class="input-group">
                                        <input name="news-letter" class="form-control" placeholder="ENTER YOUR EMAIL" type="text">
                                        <span class="input-group-btn">
                                            <button type="submit" class="site-button"><i class="fa fa-paper-plane-o"></i></button>
                                        </span>
                                    </div>
                                     </form>
                                </div>
                            </div>
                            <!-- SOCIAL LINKS -->
                            <!-- <div class="widget widget_social_inks">
                                <h4 class="widget-title">Social Links</h4>
                                <ul class="social-icons social-square social-darkest">
                                    <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                </ul>
                            </div> -->
                        </div>
                        <!-- <div class="col-md-4">&nbsp;</div> -->
                        
                    </div>
                </div>
            </div>
            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom overlay-wraper">
                <div class="overlay-main"></div>
                <div class="container p-t30">
                    <div class="row">
                        <div class="wt-footer-bot-left">
                            <span class="copyrights-text">© 2020 ErhaAcne. All Rights Reserved.</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

        
        <!-- BUTTON TOP START -->
        <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Top</button>
        
    </div>
 
<!-- LOADING AREA START ===== -->
<!-- <div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="cssload-container">
            <div class="cssload-progress cssload-float cssload-shadow">
                <div class="cssload-progress-item"></div>
            </div>
        </div>
    </div>
</div> -->
<!-- LOADING AREA  END ====== -->
<!-- JAVASCRIPT  FILES ========================================= --> 
<script   src="<?= base_url(); ?>assets/web/js/jquery-1.12.4.min.js"></script><!-- JQUERY.MIN JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js' type='text/javascript'></script>
<script   src="<?= base_url(); ?>assets/web/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->

<script   src="<?= base_url(); ?>assets/web/js/bootstrap-select.min.js"></script><!-- FORM JS -->
<script   src="<?= base_url(); ?>assets/web/js/jquery.bootstrap-touchspin.min.js"></script><!-- FORM JS -->

<script   src="<?= base_url(); ?>assets/web/js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->

<script   src="<?= base_url(); ?>assets/web/js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script   src="<?= base_url(); ?>assets/web/js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script   src="<?= base_url(); ?>assets/web/js/waypoints-sticky.min.js"></script><!-- COUNTERUP JS -->

<script  src="<?= base_url(); ?>assets/web/js/isotope.pkgd.min.js"></script><!-- MASONRY  -->

<script   src="<?= base_url(); ?>assets/web/js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->

<script   src="<?= base_url(); ?>assets/web/js/stellar.min.js"></script><!-- PARALLAX BG IMAGE   --> 
<script   src="<?= base_url(); ?>assets/web/js/scrolla.min.js"></script><!-- ON SCROLL CONTENT ANIMTE   -->

<script   src="<?= base_url(); ?>assets/web/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script   src="<?= base_url(); ?>assets/web/js/shortcode.js"></script><!-- SHORTCODE FUCTIONS  -->


<!-- REVOLUTION JS FILES -->

<script  src="<?= base_url(); ?>assets/web/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script  src="<?= base_url(); ?>assets/web/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
<script  src="<?= base_url(); ?>assets/web/plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>

<!-- REVOLUTION SLIDER FUNCTION  ===== -->
<script   src="<?= base_url(); ?>assets/web/js/rev-script-1.js"></script>
<script>
$( document ).ready(function() {
    console.log( "ready!" );
    
    $(window).on('load',function(){
        $('#with-form').modal('show');

        document.getElementById("password").placeholder = "Enter your password";
    });

    $('#datepicker').datepicker({dateFormat: 'yyyy-mm-dd'}); 

});
</script>
</body>

</html>
