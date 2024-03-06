<!-- CONTENT START -->
<div class="page-content">

        <!-- BREADCRUMB ROW -->
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                    <li>Products</li>
                </ul>
            </div>
        </div>
        <!-- BREADCRUMB ROW END -->


        <?php
            $jumlah = count($products);
            for($i=0;$i<$jumlah;$i++) {
        ?>
        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper" style="background-image:url('<?= base_url(); ?>assets/products/<?= $products[$i]['banner'];?>'); height: 500px;">
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <?php if($products[$i]['id'] % 2 == 0) {?>
                        <div style="float: left;">
                            <h1 class="" style="color: #555;"><?= $products[$i]['product_name'];?></h1>
                            <p class="" style="color: #555;"><?= $products[$i]['lead_desc'];?></p>
                            <button onClick="window.location='<?= base_url(); ?>web/productsdetail/<?= $products[$i]['id'];?>';" class="site-button  m-r15" type="button">View Product  <i class="fa fa-angle-double-right"></i></button>
                        </div>
                        <!-- <img src="<?= base_url(); ?>assets/products/<?= $products[$i]['image1'];?>" alt="" width="300" style="float: right; margin-right: 20%;"> -->
                    <?php } else { ?>
                        <!-- <img src="<?= base_url(); ?>assets/products/<?= $products[$i]['image1'];?>" alt="" width="300" style="margin-left: 20%;"> -->
                        <div style="float: right;">
                            <h1 class="" style="color: #555;"><?= $products[$i]['product_name'];?></h1>
                            <p class="" style="color: #555;"><?= $products[$i]['lead_desc'];?></p>
                            <button onClick="window.location='<?= base_url(); ?>web/productsdetail/<?= $products[$i]['id'];?>';" class="site-button  m-r15" type="button">View Product  <i class="fa fa-angle-double-right"></i></button>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->
        <?php } ?>

    </div>
    <!-- CONTENT END -->
