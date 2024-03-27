<?php
$start=Date('Y-m-d\TH:i',strtotime($data[0]['tanggal']));
?>

<div class="content-body">
        <div class="container pd-x-0">
          <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
            <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style2 mg-b-0">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard/">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/iklan/">Livestreams</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Livestream</li>
                    </ol>
                </nav>
              <h4 class="mg-b-0 tx-spacing--1">View Livestream</h4>
            </div>
          </div>

          <div class="row row-xs">
            <div class="container">
              <p class="mg-b-30 col-md-8">Detail informasi Livestream</p>
              
                <!-- start form -->
                <form action="<?= base_url(); ?>admin/proses_edit_live" enctype="multipart/form-data" method="post" data-parsley-validate>
                <input type="hidden" name="id" value="<?= $data[0]['id'];?>">  
                    <div class="form-group col-md-8">
                        <label for="nama" class="d-block">Nama Host</label>
                        <input name="nama" type="text" class="form-control" value="<?= $data[0]['nama'];?>" disabled>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="tanggal_live" class="d-block">Tanggal Live</label>
                        <input name="tanggal_live" type="datetime-local" class="form-control" value="<?= $start;?>" disabled>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="penonton" class="d-block">Penonton</label>
                        <textarea name="penonton" class="form-control" rows="5" disabled><?= $data[0]['penonton'];?></textarea>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="shift" class="d-block">Shift</label>
                        <input name="shift" type="text" class="form-control" value="<?= $data[0]['shift'];?>" disabled>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="penjualan" class="d-block">Penjualan</label>
                        <input name="penjualan" type="text" class="form-control" value="<?= $data[0]['penjualan'];?>" disabled>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="likes" class="d-block">Likes</label>
                        <input name="likes" type="text" class="form-control" value="<?= $data[0]['likes'];?>" disabled>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="gifts" class="d-block">Gifts</label>
                        <input name="gifts" type="text" class="form-control" value="<?= $data[0]['gifts'];?>" disabled>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="share" class="d-block">Share</label>
                        <input name="share" type="text" class="form-control" value="<?= $data[0]['share'];?>" disabled>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="share" class="d-block">Share</label>
                        <img src="<?= base_url(); ?>assets/all-images/<?= $data[0]['screenshot'];?>" alt="" width="50">
                    </div>
                    
                    <div class="col-md-8">
                        <!-- <button class="btn btn-primary" type="submit">Submit</button> -->
                        <button onClick="window.location='<?= base_url(); ?>admin/live/';" class="btn btn-secondary" type="cancel">Cancel</button>
                    </div>
                </form>
                <!-- end form -->
          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>