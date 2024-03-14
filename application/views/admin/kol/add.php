<div class="content-body">
    <div class="container pd-x-0">
        <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style2 mg-b-0">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard/">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/kol/">KOL (Key Opinion Leader)</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Kol</li>
                    </ol>
                </nav>
                <br>
                <h4 class="mg-b-0 tx-spacing--1">Add New KOL</h4>
            </div>
        </div>

        <div class="row row-xs">
            <div class="container">
                <p class="mg-b-30 col-md-8">Penambahan Data Kol terbaru</p>

                <!-- start form -->
                <form action="<?= base_url(); ?>admin/proses_add_kol" enctype="multipart/form-data" method="post" data-parsley-validate>
                    <div class="form-group col-md-8">
                        <label for="nama" class="d-block">Nama KOL</label>
                        <input name="nama" type="text" class="form-control" placeholder="Masukkan nama KOL" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="username" class="d-block">Username</label>
                        <input name="username" type="text" class="form-control" placeholder="Masukkan username KOL" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="whatsapp" class="d-block">Whatsapp</label>
                        <input name="whatsapp" type="text" class="form-control" placeholder="Masukkan nomor whatsapp" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="platform" class="d-block">Platform</label>
                        <input name="platform" type="text" class="form-control" placeholder="Masukkan platform" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="tiktok_link" class="d-block">Tiktok Link</label>
                        <input name="tiktok_link" type="text" class="form-control" placeholder="Masukkan link TikTok" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="instagram_link" class="d-block">Instagram Link</label>
                        <input name="instagram_link" type="text" class="form-control" placeholder="Masukkan instagram Link" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="alamat_domisili" class="d-block">Alamat</label>
                        <textarea name="alamat_domisili" class="form-control" rows="2" placeholder="Masukkan alamat KOL" required></textarea>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="followers_instagram" class="d-block">Followers Instagram</label>
                        <input name="followers_instagram" type="text" class="form-control" placeholder="Masukkan instagram Link" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="followers_tiktok" class="d-block">Followers Tiktok</label>
                        <input name="followers_tiktok" type="text" class="form-control" placeholder="Masukkan instagram Link" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="keterangan" class="d-block">Keterangan</label>
                        <textarea name="keterangan" class="form-control" rows="2" placeholder="Masukkan keterangan" required></textarea>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="tanggal_upload" class="d-block">Tanggal Upload</label>
                        <input type="datetime-local" name="tanggal_upload" id="dateTo" class="form-control hasDatepicker" placeholder="To">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="produk" class="d-block">Produk</label>
                        <input name="produk" type="text" class="form-control" placeholder="Masukkan varian produk" required>
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