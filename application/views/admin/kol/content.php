<div class="content-body">
    <div class="container pd-x-0">
        <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style2 mg-b-0">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Summary KOL</li>
                    </ol>
                </nav>
                <h4 class="mg-b-0 tx-spacing--1">Summary KOL</h4>
            </div>
        </div>

        <div class="row row-xs">
            <div class="container">
                <p class="mg-b-30">Disini terdapat data dan perhitungan summary KOL beserta Platform</p>
                <button type="button" class="btn btn-xs btn-primary" onClick="window.location='<?= base_url(); ?>admin/add_kol/';">Add KOL Data</button>
                <br>
                <br>
                <div data-label="Example" class="df-example demo-table">
                    <table id="example1" class="table">
                        <thead>
                            <tr>
                                <th class="wd-5p">No</th>
                                <th class="wd-10p">Nama</th>
                                <th class="wd-10p">Whatsapp</th>
                                <th class="wd-10p">Platform</th>
                                <th class="wd-10p">Tiktok Link</th>
                                <th class="wd-10p">Instagram Link</th>
                                <th class="wd-10p">Followers Instagram</th>
                                <th class="wd-10p">Followers Tiktok</th>
                                <th class="wd-10p">Produk</th>
                                <th class="wd-10p">Keterangan</th>
                                <th class="wd-10p">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $jumlah = count($kols);
                            $no = 1;
                            for ($i = 0; $i < $jumlah; $i++) {
                            ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $kols[$i]['nama']; ?></td>
                                    <td><?= $kols[$i]['whatsapp']; ?></td>
                                    <td><?= $kols[$i]['platform']; ?></td>
                                    <td><?= $kols[$i]['tiktok_link']; ?></td>
                                    <td><?= $kols[$i]['instagram_link']; ?></td>
                                    <td><?= $kols[$i]['followers_instagram'];  ?></td>
                                    <td><?= $kols[$i]['followers_tiktok']; ?></td>
                                    <td><?= $kols[$i]['product']; ?></td>
                                    <td><?= $kols[$i]['keterangan']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-xs btn-warning" onClick="window.location='<?= base_url(); ?>admin/edit_kol/<?= $kols[$i]['id']; ?>';">
                                            Edit
                                        </button>
                                        <button type="button" class="btn btn-xs btn-danger" onClick="window.location='<?= base_url(); ?>admin/delete_kol/<?= $kols[$i]['id']; ?>';">
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