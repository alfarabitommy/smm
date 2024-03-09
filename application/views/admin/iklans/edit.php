<div class="content-body">
        <div class="container pd-x-0">
          <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
            <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style2 mg-b-0">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard/">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/iklan/">Campaign Iklan / Ads</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Campaign</li>
                    </ol>
                </nav>
              <h4 class="mg-b-0 tx-spacing--1">Edit Campaign</h4>
            </div>
          </div>

          <div class="row row-xs">
            <div class="container">
              <p class="mg-b-30 col-md-8">Modul untuk merubah data iklan di campaign tertentu</p>
              
                <!-- start form -->
                <form action="<?= base_url(); ?>admin/proses_edit_iklan" enctype="multipart/form-data" method="post" data-parsley-validate>
                <input type="hidden" name="id" value="<?= $data[0]['id'];?>">  
                    <div class="form-group col-md-8">
                        <label for="name" class="d-block">Nama Campaign</label>
                        <input name="name" type="text" class="form-control" value="<?= $data[0]['name'];?>" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="anggaran" class="d-block">Anggaran</label>
                        <input name="anggaran" type="text" class="form-control" value="<?= $data[0]['anggaran'];?>" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="hasil" class="d-block">Hasil</label>
                        <textarea name="hasil" class="form-control" rows="5" required><?= $data[0]['hasil'];?></textarea>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="jangkauan" class="d-block">Jangkauan</label>
                        <input name="jangkauan" type="text" class="form-control" value="<?= $data[0]['jangkauan'];?>">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="impresi" class="d-block">Impresi</label>
                        <input name="impresi" type="text" class="form-control" value="<?= $data[0]['impresi'];?>">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="periode_mulai" class="d-block">Periode Mulai</label>
                        <input name="periode_mulai" type="text" class="form-control" value="<?= $data[0]['periode_mulai'];?>">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="periode_berakhir" class="d-block">Periode Berakhir</label>
                        <input name="periode_berakhir" type="text" class="form-control" value="<?= $data[0]['periode_berakhir'];?>">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="jumlah_dibelanjakan" class="d-block">Jumlah Dibelanjakan</label>
                        <input name="jumlah_dibelanjakan" type="text" class="form-control" value="<?= $data[0]['jumlah_dibelanjakan'];?>">
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