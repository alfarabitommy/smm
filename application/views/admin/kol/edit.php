<?php
$uploadDate = Date('Y-m-d\TH:i', strtotime($data[0]['tanggal_upload']));
?>

<div class="content-body">
    <div class="container pd-x-0">
        <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style2 mg-b-0">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard/">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/iklan/">KOL (Key Opinion Leader)</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit KOL</li>
                    </ol>
                </nav>
                <h4 class="mg-b-0 tx-spacing--1">Edit KOL</h4>
            </div>
        </div>

        <div class="row row-xs">
            <div class="container">
                <p class="mg-b-30 col-md-8">Modul untuk merubah data KOL</p>

                <!-- start form -->
                <form action="<?= base_url(); ?>admin/proses_edit_kol" enctype="multipart/form-data" method="post" data-parsley-validate>
                    <input type="hidden" name="id" value="<?= $data[0]['id']; ?>">
                    <div class="form-group col-md-8">
                        <label for="name" class="d-block">Nama KOL</label>
                        <input name="name" type="text" class="form-control" value="<?= $data[0]['nama']; ?>" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="username" class="d-block">Username</label>
                        <input name="username" type="text" class="form-control" value="<?= $data[0]['username']; ?>" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="whatsapp" class="d-block">Whatsapp</label>
                        <input name="whatsapp" type="text" class="form-control" value="<?= $data[0]['whatsapp']; ?>" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="platform" class="d-block">Platform</label>
                        <textarea name="platform" class="form-control" rows="5" required><?= $data[0]['platform']; ?></textarea>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="tiktok_link" class="d-block">Tiktok Link</label>
                        <input name="tiktok_link" type="text" class="form-control" value="<?= $data[0]['tiktok_link']; ?>">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="instagram_link" class="d-block">Instagram Link</label>
                        <input name="instagram_link" type="text" class="form-control" value="<?= $data[0]['instagram_link']; ?>">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="alamat_domisili" class="d-block">Alamat</label>
                        <textarea name="alamat_domisili" class="form-control" rows="2" placeholder="Masukkan alamat KOL" required><?= $data[0]['alamat_domisili']; ?></textarea>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="followers_instagram" class="d-block">Followers Instagram</label>
                        <input name="followers_instagram" type="text" class="form-control" value="<?= $data[0]['followers_instagram']; ?>">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="followers_tiktok" class="d-block">Followers Tiktok</label>
                        <input name="followers_tiktok" type="text" class="form-control" value="<?= $data[0]['followers_tiktok']; ?>">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="keterangan" class="d-block">Keterangan</label>
                        <textarea name="keterangan" class="form-control" rows="2" placeholder="Masukkan keterangan" required><?= $data[0]['keterangan']; ?></textarea>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="tanggal_upload" class="d-block">Tanggal Upload</label>
                        <input name="tanggal_upload" type="datetime-local" class="form-control" value="<?= $uploadDate; ?>">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="produk" class="d-block">Produk</label>
                        <select class="form-select" name="produk">
                            <option>Pilih Varian Produk</option>
                            <?php
                            $jumlah = count($produks);
                            $no = 1;
                            for ($i = 0; $i < $jumlah; $i++) {
                            ?>
                                <option value="<?= $produks[$i]['nama']; ?>" <?php if($produks[$i]['nama'] == $produks[$i]['nama']) echo 'selected="selected"'; ?>><?= $produks[$i]['nama']; ?></option>
                            <?php $no++;
                            } ?>
                        </select>
                    </div>

                    <div class="col-md-8">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button onClick="window.location='<?= base_url(); ?>admin/kol/';" class="btn btn-secondary" type="cancel">Cancel</button>
                    </div>
                </form>
                <!-- end form -->
            </div><!-- row -->
        </div><!-- container -->
    </div>
</div>