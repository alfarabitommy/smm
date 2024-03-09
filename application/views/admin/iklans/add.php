<div class="content-body">
    <div class="container pd-x-0">
        <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style2 mg-b-0">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard/">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/iklan/">Campaign Iklan / Ads</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Campaign</li>
                    </ol>
                </nav>
                <br>
                <h4 class="mg-b-0 tx-spacing--1">Add New Iklan / Ads</h4>
            </div>
        </div>

        <div class="row row-xs">
            <div class="container">
                <p class="mg-b-30 col-md-8">Penambahan untuk pencatatan dan data Meta Ads untuk pelaporan bulanan Digital Marketing</p>

                <!-- start form -->
                <form action="<?= base_url(); ?>admin/proses_add_iklan" enctype="multipart/form-data" method="post" data-parsley-validate>
                    <div class="form-group col-md-8">
                        <label for="name" class="d-block">Nama Campaign</label>
                        <input name="name" type="text" class="form-control" placeholder="Masukkan nama campaign" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="anggaran" class="d-block">Anggaran</label>
                        <input name="anggaran" type="text" class="form-control" placeholder="Masukkan nilai anggaran" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="hasil" class="d-block">Hasil</label>
                        <input name="hasil" type="text" class="form-control" placeholder="Masukkan nilai hasil" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="jangkauan" class="d-block">Jangkauan</label>
                        <input name="jangkauan" type="text" class="form-control" placeholder="Masukkan jangkauan" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="impresi" class="d-block">Impresi</label>
                        <input name="impresi" type="text" class="form-control" placeholder="Masukkan impresi" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="periode_awal" class="d-block">Periode Awal</label>
                        <input type="text" id="dateFrom" class="form-control hasDatepicker" placeholder="From">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="periode_awal" class="d-block">Periode Akhir</label>
                        <input type="text" id="dateTo" class="form-control hasDatepicker" placeholder="To">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="jumlah_dibelanjakan" class="d-block">Biaya</label>
                        <input name="jumlah_dibelanjakan" type="text" class="form-control" placeholder="Enter link" required>
                    </div>
                    <div class="col-md-8">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button onClick="window.location='<?= base_url(); ?>admin/iklan/';" class="btn btn-secondary" type="cancel">Cancel</button>
                    </div>
                </form>
                <!-- end form -->
            </div><!-- row -->
        </div><!-- container -->
    </div>
</div>