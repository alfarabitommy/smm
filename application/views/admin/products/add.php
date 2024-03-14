<div class="content-body">
    <div class="container pd-x-0">
        <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style2 mg-b-0">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard/">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/kol/">Master Product</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                    </ol>
                </nav>
                <br>
                <h4 class="mg-b-0 tx-spacing--1">Add New Product</h4>
            </div>
        </div>

        <div class="row row-xs">
            <div class="container">
                <p class="mg-b-30 col-md-8">Penambahan Data Produk terbaru</p>

                <!-- start form -->
                <form action="<?= base_url(); ?>admin/proses_add_product" enctype="multipart/form-data" method="post" data-parsley-validate>
                    <div class="form-group col-md-8">
                        <label for="nama" class="d-block">Nama Produk</label>
                        <input name="nama" type="text" class="form-control" placeholder="Masukkan nama KOL" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="jenis_kelamin" class="d-block">Pengguna</label>
                        <input name="jenis_kelamin" type="text" class="form-control" placeholder="Masukkan jenis kelamin pengguna" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="aroma" class="d-block">Aroma</label>
                        <input name="aroma" type="text" class="form-control" placeholder="Masukkan jenis aroma" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="volume" class="d-block">Volume</label>
                        <input name="volume" type="text" class="form-control" placeholder="Masukkan jumlah volume" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="formulasi" class="d-block">Formulasi</label>
                        <input name="formulasi" type="text" class="form-control" placeholder="Masukkan jenis formulasi" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="berat_produk" class="d-block">Berat Produk</label>
                        <input name="berat_produk" type="text" class="form-control" placeholder="Masukkan berat produk" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="masa_penyimpanan" class="d-block">Masa Penyimpanan</label>
                        <textarea name="masa_penyimpanan" class="form-control" rows="2" placeholder="Masukkan masa penyimpanan" required></textarea>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="kandungan_parfum" class="d-block">Kandungan Parfum</label>
                        <input name="kandungan_parfum" type="text" class="form-control" placeholder="Masukkan kandungan parfum" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="bpom" class="d-block">BPOM</label>
                        <input name="bpom" type="text" class="form-control" placeholder="Masukkan nomor BPOM" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="ukuran_per_produk" class="d-block">Ukuran per Produk</label>
                        <input name="ukuran_per_produk" type="text" class="form-control" placeholder="Masukkan ukuran per produk" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="deskripsi" class="d-block">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="2" placeholder="Masukkan deskripsi produk" required></textarea>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="tgl_kadaluarsa" class="d-block">Tanggal Kadaluarsa</label>
                        <input type="datetime-local" name="tgl_kadaluarsa" id="dateTo" class="form-control hasDatepicker" placeholder="To">
                    </div>
                    <div class="col-md-8">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button onClick="window.location='<?= base_url(); ?>admin/master-produk/';" class="btn btn-secondary" type="cancel">Cancel</button>
                    </div>
                </form>
                <!-- end form -->
            </div><!-- row -->
        </div><!-- container -->
    </div>
</div>