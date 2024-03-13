<?php
$uploadDate = Date('Y-m-d\TH:i', strtotime($data[0]['tanggal_upload']));
?>

<div class="content-body">
    <div class="container pd-x-0">
        <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style2 mg-b-0">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/dashboard/">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin/iklan/">KOL (Key Opinion Leader)</a></li>
                        <li class="breadcrumb-item active" aria-current="page">View KOL</li>
                    </ol>
                </nav>
                <h4 class="mg-b-0 tx-spacing--1">View KOL</h4>
            </div>
        </div>

        <div class="row row-xs">
            <div class="container">
                <div class="profile-sidebar pd-lg-r-25">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="avatar avatar-xxl avatar-online"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                        </div><!-- col -->
                        <div class="col-sm-8 col-md-7 col-lg-12 mg-t-20 mg-sm-t-0 mg-lg-t-25">
                            <h5 class="mg-b-2 tx-spacing--1">Fen Chiu Mao</h5>
                            <p class="tx-color-03 mg-b-25">@fenchiumao</p>
                            <div class="d-flex mg-b-25">
                                <button class="btn btn-xs btn-white flex-fill">Message</button>
                                <button class="btn btn-xs btn-primary flex-fill mg-l-10">Follow</button>
                            </div>

                            <p class="tx-13 tx-color-02 mg-b-25">Redhead, Innovator, Saviour of Mankind, Hopeless Romantic, Attractive 20-something Yogurt Enthusiast... <a href="">Read more</a></p>

                            <div class="d-flex">
                                <div class="profile-skillset flex-fill">
                                    <h4><a href="" class="link-01">1.4k</a></h4>
                                    <label>Stars</label>
                                </div>
                                <div class="profile-skillset flex-fill">
                                    <h4><a href="" class="link-01">2.8k</a></h4>
                                    <label>Followers</label>
                                </div>
                                <div class="profile-skillset flex-fill">
                                    <h4><a href="" class="link-01">437</a></h4>
                                    <label>Following</label>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-sm-6 col-md-5 col-lg-12 mg-t-40">
                            <label class="tx-sans tx-10 tx-semibold tx-uppercase tx-color-01 tx-spacing-1 mg-b-15">Skills</label>
                            <ul class="list-inline list-inline-skills">
                                <li class="list-inline-item"><a href="">HTML5</a></li>
                                <li class="list-inline-item"><a href="">Sass</a></li>
                                <li class="list-inline-item"><a href="">CSS</a></li>
                                <li class="list-inline-item"><a href="">React</a></li>
                                <li class="list-inline-item"><a href="">jQuery</a></li>
                                <li class="list-inline-item"><a href="">Angular</a></li>
                                <li class="list-inline-item"><a href="">Wordpress</a></li>
                                <li class="list-inline-item"><a href="">Photoshop</a></li>
                                <li class="list-inline-item"><a href="">PHP</a></li>
                                <li class="list-inline-item"><a href="">Node</a></li>
                                <li class="list-inline-item"><a href="">Git</a></li>
                                <li class="list-inline-item"><a href="">Front-End Development</a></li>
                                <li class="list-inline-item"><a href="">Web Design</a></li>
                            </ul>
                        </div><!-- col -->
                        <div class="col-sm-6 col-md-5 col-lg-12 mg-t-40">
                            <label class="tx-sans tx-10 tx-semibold tx-uppercase tx-color-01 tx-spacing-1 mg-b-15">Websites &amp; Social Channel</label>
                            <ul class="list-unstyled profile-info-list">
                                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="2" y1="12" x2="22" y2="12"></line>
                                        <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                                    </svg> <a href="">http://fenchiumao.me/</a></li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                                        <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                    </svg> <a href="">@fenchiumao</a></li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
                                        <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                    </svg> <a href="">@fenmao</a></li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                    </svg> <a href="">@fenchiumao</a></li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                    </svg> <a href="">@fenchiumao</a></li>
                            </ul>
                        </div><!-- col -->
                        <div class="col-sm-6 col-md-5 col-lg-12 mg-t-40">
                            <label class="tx-sans tx-10 tx-semibold tx-uppercase tx-color-01 tx-spacing-1 mg-b-15">Contact Information</label>
                            <ul class="list-unstyled profile-info-list">
                                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase">
                                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                    </svg> <span class="tx-color-03">Bay Area, San Francisco, CA</span></li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg> <span class="tx-color-03">Westfield, Oakland, CA</span></li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smartphone">
                                        <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>
                                        <line x1="12" y1="18" x2="12.01" y2="18"></line>
                                    </svg> <a href="">(+1) 012 345 6789</a></li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg> <a href="">(+1) 987 654 3201</a></li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg> <a href="">me@fenchiumao.me</a></li>
                            </ul>
                        </div><!-- col -->
                        <div class="col-sm-6 col-md-5 col-lg-12 mg-t-40">
                            <label class="tx-sans tx-10 tx-semibold tx-uppercase tx-color-01 tx-spacing-1 mg-b-15">Explore</label>
                            <nav class="nav nav-classic tx-13">
                                <a href="" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg> <span>Groups</span></a>
                                <a href="" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                        <line x1="16" y1="2" x2="16" y2="6"></line>
                                        <line x1="8" y1="2" x2="8" y2="6"></line>
                                        <line x1="3" y1="10" x2="21" y2="10"></line>
                                    </svg> <span>Events</span></a>
                                <a href="" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase">
                                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                    </svg> <span>Jobs</span></a>
                                <a href="" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="2" y1="12" x2="22" y2="12"></line>
                                        <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                                    </svg> <span>Discover People</span></a>
                                <a href="" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag">
                                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                        <line x1="3" y1="6" x2="21" y2="6"></line>
                                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                                    </svg> <span>Buy &amp; Sell</span></a>
                            </nav>
                        </div><!-- col -->
                    </div><!-- row -->

                </div>
                <!-- start form -->
                <form action="<?= base_url(); ?>admin/proses_edit_kol" enctype="multipart/form-data" method="post" data-parsley-validate>
                    <input type="hidden" name="id" value="<?= $data[0]['id']; ?>">
                    <div class="form-group col-md-8">
                        <label for="name" class="d-block">Nama KOL</label>
                        <input name="name" type="text" class="form-control" value="<?= $data[0]['nama']; ?>" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="whatsapp" class="d-block">Whatsapp</label>
                        <input name="whatsapp" type="text" class="form-control" value="<?= $data[0]['whatsapp']; ?>" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="platform" class="d-block">Platform</label>
                        <textarea name="platform" class="form-control" rows="5" required><?= $data[0]['platform']; ?></textarea>
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
                        <label for="alamat_domisili" class="d-block">Alamat</label>
                        <textarea name="alamat_domisili" class="form-control" rows="2" placeholder="Masukkan alamat KOL" required><?= $data[0]['alamat_domisili']; ?></textarea>
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
                        <label for="keterangan" class="d-block">Keterangan</label>
                        <textarea name="keterangan" class="form-control" rows="2" placeholder="Masukkan keterangan" required><?= $data[0]['keterangan']; ?></textarea>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="tanggal_upload" class="d-block">Tanggal Upload</label>
                        <input name="tanggal_upload" type="datetime-local" class="form-control" value="<?= $uploadDate; ?>">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="produk" class="d-block">Produk</label>
                        <input name="produk" type="text" class="form-control" value="<?= $data[0]['product']; ?>">
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