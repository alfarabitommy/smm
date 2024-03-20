<?php
$uploadDate = Date('Y-m-d\TH:i', strtotime($data[0]['tanggal_upload']));
$uploadDate2 = Date('Y-m-d\TH:i', strtotime($data[0]['tanggal_visit']));
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
                        <label for="alamat_domisili" class="d-block">Alamat</label>
                        <textarea name="alamat_domisili" class="form-control" rows="2" placeholder="Masukkan alamat KOL" required><?= $data[0]['alamat_domisili']; ?></textarea>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="status_kol" class="d-block">Status KOL</label>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio1" name="customRadio1" class="custom-control-input" checked>
                            <label class="custom-control-label" for="customRadio1">Sudah pernah kerjasama</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2" name="customRadio1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Belum pernah kerjasama</label>
                        </div>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="status" class="d-block">Status</label>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio3" name="customRadio2" class="custom-control-input" checked>
                            <label class="custom-control-label" for="customRadio3">Listing</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio4" name="customRadio2" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio4">Komunikasi</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio5" name="customRadio2" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio5">Kirim Produk</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio6" name="customRadio2" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio6">Posting</label>
                        </div>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="tanggal_visit" class="d-block">Tanggal Visit</label>
                        <input type="datetime-local" name="tanggal_visit" id="dateTo" class="form-control hasDatepicker" value="<?= $uploadDate2; ?>">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="jenis_kreator" class="d-block">Jenis Kreator</label>
                        <textarea name="jenis_kreator" class="form-control" rows="2" placeholder="Lifestyle, Beauty, Parenting"><?= $data[0]['jenis_kreator']; ?></textarea>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="persona_kreator" class="d-block">Persona Kreator</label>
                        <textarea name="persona_kreator" class="form-control" rows="2" placeholder="Fun, Engaging, Story Teller, Daily Life"><?= $data[0]['persona_kreator']; ?></textarea>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="audience_kreator" class="d-block">Audience Kreator</label>
                        <textarea name="audience_kreator" class="form-control" rows="4" placeholder="Age : 20 - 35&#10;Gender : Women&#10;Interest: Family, Parenting, Life Style, Beauty, Food"><?= $data[0]['audience_kreator']; ?></textarea>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="whatsapp" class="d-block">Whatsapp</label>
                        <input name="whatsapp" type="text" class="form-control" value="<?= $data[0]['whatsapp']; ?>" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="platform" class="d-block">Platform</label>
                        <div class="form-group col-md-8">
                            <?php
                                $pos = strpos($data[0]['platform'], ",");
                                if ($pos !== false) {
                                        $pf = explode(",",$data[0]['platform']);
                                   ?>                                   
                                   <label for="platform" class="d-block">Platform</label>
                                        <!-- <input name="platform" type="text" class="form-control" placeholder="Masukkan platform" required> -->
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" id="platform" name="platform[]" value="<?= $pf[0];?>" checked> <?= $pf[0]; ?>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" id="platform" name="platform[]" value="<?= $pf[1];?>" checked> <?= $pf[1]; ?>
                                        </div>
                                   <?php
                                } else {
                                    $plf1 = ($data[0]['platform'] == 'Tiktok') ? 'checked' : '';
                                    $plf2 = ($data[0]['platform'] == 'Instagram') ? 'checked' : '';
                                   ?>
                                    <label for="platform" class="d-block">Platform</label>
                                        <!-- <input name="platform" type="text" class="form-control" placeholder="Masukkan platform" required> -->
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" id="platform" name="platform[]" value="Tiktok" <?= $plf1; ?> > Tiktok
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" id="platform" name="platform[]" value="Instagram" <?= $plf2; ?> > Instagram
                                        </div>
                                   <?php
                                }
                            ?>
                        </div>
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
                        <label for="eng_rate" class="d-block">Engagement Rates</label>
                        <input name="eng_rate" type="text" class="form-control" value="<?= $data[0]['eng_rate']; ?>">
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
                        <label for="avg_views" class="d-block">Average Views</label>
                        <input name="avg_views" type="text" class="form-control" value="<?= $data[0]['avg_views']; ?>">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="cpv" class="d-block">Cost per Views</label>
                        <input name="cpv" type="text" class="form-control" value="<?= $data[0]['cpv']; ?>">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="cpm" class="d-block">Cost per Miles</label>
                        <input name="cpm" type="text" class="form-control" value="<?= $data[0]['cpm']; ?>">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="link_published" class="d-block">Link Published</label>
                        <input name="link_published" type="text" class="form-control" value="<?= $data[0]['link_published']; ?>">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="impression" class="d-block">Impression</label>
                        <input name="impression" type="text" class="form-control" value="<?= $data[0]['impression']; ?>">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="reach" class="d-block">Reach</label>
                        <input name="reach" type="text" class="form-control" value="<?= $data[0]['reach']; ?>">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="comment" class="d-block">Comment</label>
                        <input name="comment" type="text" class="form-control" value="<?= $data[0]['comment']; ?>">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="likes" class="d-block">Like</label>
                        <input name="likes" type="text" class="form-control" value="<?= $data[0]['likes']; ?>">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="share" class="d-block">Share</label>
                        <input name="share" type="text" class="form-control" value="<?= $data[0]['share']; ?>">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="save" class="d-block">Save</label>
                        <input name="save" type="text" class="form-control" value="<?= $data[0]['save']; ?>">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="link_click" class="d-block">Link Click</label>
                        <input name="link_click" type="text" class="form-control" value="<?= $data[0]['link_click']; ?>">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="conversion" class="d-block">Conversion</label>
                        <input name="conversion" type="text" class="form-control" value="<?= $data[0]['conversion']; ?>">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="act_cpv" class="d-block">Actual CPV</label>
                        <input name="act_cpv" type="text" class="form-control" value="<?= $data[0]['act_cpv']; ?>">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="act_cpm" class="d-block">Actual CPM</label>
                        <input name="act_cpm" type="text" class="form-control" value="<?= $data[0]['act_cpm']; ?>">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="act_cpc" class="d-block">Actual CPC (Cost per Click)</label>
                        <input name="act_cpc" type="text" class="form-control" value="<?= $data[0]['act_cpc']; ?>">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="act_cpr" class="d-block">Actual CPR (Cost per Conversion)</label>
                        <input name="act_cpr" type="text" class="form-control" value="<?= $data[0]['act_cpr']; ?>">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="keterangan" class="d-block">Keterangan Tambahan</label>
                        <textarea name="keterangan" class="form-control" rows="2" placeholder="Masukkan keterangan" required><?= $data[0]['keterangan']; ?></textarea>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="tanggal_upload" class="d-block">Tanggal Upload</label>
                        <input name="tanggal_upload" type="datetime-local" class="form-control" value="<?= $uploadDate; ?>">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="produk" class="d-block">Produk</label>
                        <select class="form-control" name="produk">
                            <option>Pilih Varian Produk</option>
                            <?php
                            $jumlah = count($produks);
                            for ($i = 0; $i < $jumlah; $i++) {
                                if($produks[$i]['nama'] == $data[0]['product']){
                                    echo "<option value='".$produks[$i]['nama']."' selected>".$produks[$i]['nama']."</option>";
                                }else{
                                    echo "<option value='".$produks[$i]['nama']."'>".$produks[$i]['nama']."</option>";
                                }
                            } 
                            ?>
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