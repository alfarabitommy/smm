<div class="content-body">
    <div class="container pd-x-0">
        <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style2 mg-b-0">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Summary Campaign</li>
                    </ol>
                </nav>
                <h4 class="mg-b-0 tx-spacing--1">Summary Campaign Iklan / Ads</h4>
            </div>
        </div>

        <div class="row row-xs">
            <div class="container">
                <p class="mg-b-30">Disini terdapat data dan perhitungan summary iklan / ads dari platform Meta</p>
                <button type="button" class="btn btn-xs btn-primary" onClick="window.location='<?= base_url(); ?>admin/add_iklan/';">Add Campaign Data</button>
                <br>
                <br>
                <div data-label="Example" class="df-example demo-table">
                    <table id="example1" class="table">
                        <thead>
                            <tr>
                                <th class="wd-5p">No</th>
                                <th class="wd-10p">Name</th>
                                <th class="wd-10p">Anggaran</th>
                                <th class="wd-10p">Hasil</th>
                                <th class="wd-10p">Jangkauan</th>
                                <th class="wd-10p">Impresi</th>
                                <th class="wd-10p">Periode Mulai</th>
                                <th class="wd-10p">Periode Berakhir</th>
                                <th class="wd-10p">Biaya</th>
                                <th class="wd-10p">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $jumlah = count($iklans);
                            $no = 1;
                            for ($i = 0; $i < $jumlah; $i++) {
                            ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $iklans[$i]['campaign_name']; ?></td>
                                    <td><?= $iklans[$i]['anggaran']; ?></td>
                                    <td><?= $iklans[$i]['hasil']; ?></td>
                                    <td><?= $iklans[$i]['jangkauan']; ?></td>
                                    <td><?= $iklans[$i]['impresi']; ?></td>
                                    <td><?= $iklans[$i]['periode_mulai'];  ?></td>
                                    <td><?= $iklans[$i]['periode_berakhir']; ?></td>
                                    <td><?= $iklans[$i]['jumlah_dibelanjakan']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-xs btn-warning" onClick="window.location='<?= base_url(); ?>admin/edit_iklan/<?= $iklans[$i]['id']; ?>';">
                                            Edit
                                        </button>
                                        <button type="button" class="btn btn-xs btn-danger" onClick="window.location='<?= base_url(); ?>admin/delete_sliders/<?= $iklans[$i]['id']; ?>';">
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