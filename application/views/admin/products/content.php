<div class="content-body">
    <div class="container pd-x-0">
        <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style2 mg-b-0">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Master Produk</li>
                    </ol>
                </nav>
                <h4 class="mg-b-0 tx-spacing--1">Master Produk</h4>
            </div>
        </div>

        <div class="row row-xs">
            <div class="container">
                <p class="mg-b-30">Disini terdapat data Master Produk</p>
                <button type="button" class="btn btn-xs btn-primary" onClick="window.location='<?= base_url(); ?>admin/add-product/';">Add Produk</button>
                <br>
                <br>
                <div data-label="Example" class="df-example demo-table">
                    <table id="example1" class="table">
                        <thead style="font-size: 10pt;">
                            <tr>
                                <th class="wd-5p">No</th>
                                <th class="wd-10p">Nama</th>
                                <th class="wd-10p">Penggunaan</th>
                                <th class="wd-10p">Aroma</th>
                                <th class="wd-10p">Volume</th>
                                <th class="wd-10p">Berat Produk</th>
                                <th class="wd-10p">BPOM</th>
                                <th class="wd-10p">Ukuran Produk</th>
                                <th class="wd-10p">Aksi</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 9pt;">
                            <?php
                            $jumlah = count($products);
                            $no = 1;
                            for ($i = 0; $i < $jumlah; $i++) {
                            ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $products[$i]['nama']; ?></td>
                                    <td><?= $products[$i]['jenis_kelamin']; ?></td>
                                    <td><?= $products[$i]['aroma']; ?></td>
                                    <td><?= $products[$i]['volume']; ?></td>
                                    <td><?= $products[$i]['berat_produk']; ?></td>
                                    <td><?= $products[$i]['bpom'];  ?></td>
                                    <td><?= $products[$i]['ukuran_per_produk']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-xs btn-warning" onClick="window.location='<?= base_url(); ?>admin/edit_product/<?= $products[$i]['id']; ?>';">
                                            Edit
                                        </button>
                                        <button type="button" class="btn btn-xs btn-danger" onClick="window.location='<?= base_url(); ?>admin/delete_product/<?= $products[$i]['id']; ?>';">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            <?php $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div>
</div>