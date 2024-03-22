<div class="content-body">
    <div class="container pd-x-0">
        <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style2 mg-b-0">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard/">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/live/">Livestreams</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Livestream Info</li>
                    </ol>
                </nav>
                <br>
                <h4 class="mg-b-0 tx-spacing--1">Add New Livestream Info</h4>
            </div>
        </div>

        <div class="row row-xs">
            <div class="container">
                <p class="mg-b-30 col-md-8">Menambahkan data Livestreams ke Master Data Livestreams</p>

                <!-- start form -->
                <form action="<?= base_url(); ?>admin/proses_add_live" enctype="multipart/form-data" method="post" data-parsley-validate>
                    <div class="form-group col-md-8">
                        <label for="nama" class="d-block">Nama Host</label>
                        <input name="nama" type="text" class="form-control" placeholder="Masukkan nama host" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="tanggal_live" class="d-block">Tanggal Live</label>
                        <input type="datetime-local" name="tanggal_live" id="dateFrom" class="form-control hasDatepicker" placeholder="From">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="penonton" class="d-block">Penonton</label>
                        <input name="penonton" type="text" class="form-control" placeholder="Masukkan jumlah penonton" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="shift" class="d-block">Shift</label>
                        <input name="shift" type="text" class="form-control" placeholder="Masukkan info shift" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="likes" class="d-block">Likes</label>
                        <input name="likes" type="text" class="form-control" placeholder="Masukkan jumlah likes" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="gifts" class="d-block">Gifts</label>
                        <input name="gifts" type="text" class="form-control" placeholder="Masukkan jumlah gifts" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="share" class="d-block">Share</label>
                        <input name="share" type="text" class="form-control" placeholder="Masukkan jumlah shares" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="photo" class="d-block">Screenshot</label>
                        <input type="file" class="form-control" id="example-nf-title" name="photo" required>
                    </div>
                    <div class="col-md-8">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button onClick="window.location='<?= base_url(); ?>admin/live/';" class="btn btn-secondary" type="cancel">Cancel</button>
                    </div>
                </form>
                <!-- end form -->
            </div><!-- row -->
        </div><!-- container -->
    </div>
</div>