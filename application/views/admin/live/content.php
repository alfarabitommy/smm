<div class="content-body">
    <div class="container pd-x-0">
        <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style2 mg-b-0">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Live Streams</li>
                    </ol>
                </nav>
                <h4 class="mg-b-0 tx-spacing--1">Live Streams</h4>
            </div>
        </div>

        <div class="row row-xs">
            <div class="container">
                <p class="mg-b-30">Disini terdapat data dan laporan dari divisi Live Tiktok / Shopee</p>
                <button type="button" class="btn btn-xs btn-primary" onClick="window.location='<?= base_url(); ?>admin/add_live/';">Tambah Data Live</button>
                <br>
                <br>
                <div data-label="Example" class="df-example demo-table">
                    <table id="example1" class="table">
                        <thead style="font-size: 10pt;">
                            <tr>
                                <th class="wd-5p">No</th>
                                <th class="wd-10p">Name</th>
                                <th class="wd-10p">Shift</th>
                                <th class="wd-10p">Penonton</th>
                                <th class="wd-10p">Likes</th>
                                <th class="wd-10p">Gifts</th>
                                <th class="wd-10p">Shares</th>
                                <th class="wd-10p">Tanggal</th>
                                <th class="wd-10p">Aksi</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 9pt;">
                            <?php
                            $jumlah = count($lives);
                            $no = 1;
                            for ($i = 0; $i < $jumlah; $i++) {
                            ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $lives[$i]['nama']; ?></td>
                                    <td><?= $lives[$i]['shift']; ?></td>
                                    <td><?= $lives[$i]['penonton']; ?></td>
                                    <td><?= $lives[$i]['likes']; ?></td>
                                    <td><?= $lives[$i]['gifts']; ?></td>
                                    <td><?= $lives[$i]['share'];  ?></td>
                                    <td><?= $lives[$i]['tanggal']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-xs btn-warning" onClick="window.location='<?= base_url(); ?>admin/edit_live/<?= $lives[$i]['id']; ?>';">
                                            View
                                        </button>
                                        <!-- <button type="button" class="btn btn-xs btn-danger" onClick="window.location='<?= base_url(); ?>admin/delete_live/<?= $lives[$i]['id']; ?>';">
                                            Delete
                                        </button> -->
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