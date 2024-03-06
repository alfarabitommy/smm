<div class="content-body">
        <div class="container pd-x-0">
          <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                  <li class="breadcrumb-item"><a href="#">Sliders</a></li>
                </ol>
              </nav>
              <h4 class="mg-b-0 tx-spacing--1">Edit Slider</h4>
            </div>
          </div>

          <div class="row row-xs">
            <div class="container">
              <p class="mg-b-30 col-md-8">Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.</p>
              
                <!-- start form -->
                <form action="<?= base_url(); ?>admin/proses_edit_sliders" enctype="multipart/form-data" method="post" data-parsley-validate>
                <input type="hidden" name="id" value="<?= $data[0]['id'];?>">  
                    <div class="form-group col-md-8">
                        <label for="title_1" class="d-block">Title</label>
                        <input name="title_1" type="text" class="form-control" value="<?= $data[0]['title_1'];?>" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="title_2" class="d-block">Title 2</label>
                        <input name="title_2" type="text" class="form-control" value="<?= $data[0]['title_2'];?>" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="lead_desc" class="d-block">Short Description</label>
                        <textarea name="lead_desc" class="form-control" rows="5" required><?= $data[0]['lead_desc'];?></textarea>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="link" class="d-block">Link</label>
                        <input name="link" type="text" class="form-control" value="<?= $data[0]['link'];?>">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="image1">Current Desktop Slider</label>
                        <br>
                        <img src="<?= base_url(); ?>assets/sliders/<?= $data[0]['image'];?>" alt="" width="150">
                    </div>
                    <div class="form-group col-md-8">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Upload New Desktop Slider</label>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="image1">Current Mobile Slider Image</label>
                        <br>
                        <img src="<?= base_url(); ?>assets/sliders/<?= $data[0]['mobile'];?>" alt="" width="150">
                    </div>
                    <div class="form-group col-md-8">
                        <input type="file" class="custom-file-input" id="mobile" name="mobile">
                        <label class="custom-file-label" for="mobile">Upload New Mobile Slider</label>
                    </div>
                    
                    <div class="form-group col-md-8">
                        <label for="status" class="d-block">Status</label>
                        <select class="custom-select" name="status" required>
                            <option value="1">- Select Status -</option>
                            <option value="1" <?= ($data[0]['status']==1)? 'selected':''; ?>>Active</option>
                            <option value="0" <?= ($data[0]['status']==0)? 'selected':''; ?>>Inactive</option>
                        </select>
                    </div>

                    <div class="col-md-8">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button onClick="window.location='<?= base_url(); ?>admin/sliders/';" class="btn btn-secondary" type="cancel">Cancel</button>
                    </div>
                </form>
                <!-- end form -->
          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>