<div class="content-body">
        <div class="container pd-x-0">
          <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                  <li class="breadcrumb-item"><a href="#">Videos</a></li>
                </ol>
              </nav>
              <h4 class="mg-b-0 tx-spacing--1">Add New Video</h4>
            </div>
          </div>

          <div class="row row-xs">
            <div class="container">
              <p class="mg-b-30 col-md-8">Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.</p>
              
                <!-- start form -->
                <form action="<?= base_url(); ?>admin/proses_add_videos" enctype="multipart/form-data" method="post" data-parsley-validate>
                    <div class="form-group col-md-8">
                        <label for="title" class="d-block">Title</label>
                        <input name="title" type="text" class="form-control" placeholder="Enter title" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="content" class="d-block">Content</label>
                        <textarea name="content" id="editor-container" class="form-control" rows="5" placeholder="Enter content" required></textarea>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="tags" class="d-block">Tags</label>
                        <input name="tags" type="text" class="form-control" placeholder="Enter tags" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="link" class="d-block">Link Video</label>
                        <input name="link" type="text" class="form-control" placeholder="Enter video link" required>
                    </div>
                    
                    <div class="form-group col-md-8">
                        <label for="status" class="d-block">Status</label>
                        <select class="custom-select" name="status" required>
                            <option value="1">- Select Status -</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>

                    <div class="col-md-8">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button onClick="window.location='<?= base_url(); ?>admin/videos/';" class="btn btn-secondary" type="cancel">Cancel</button>
                    </div>
                </form>
                <!-- end form -->
          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>