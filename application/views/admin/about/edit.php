<div class="content-body">
        <div class="container pd-x-0">
          <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                  <li class="breadcrumb-item"><a href="#">About</a></li>
                </ol>
              </nav>
              <h4 class="mg-b-0 tx-spacing--1">Edit About</h4>
            </div>
          </div>

          <div class="row row-xs">
            <div class="container">
              <p class="mg-b-30 col-md-8">Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.</p>
              
                <!-- start form -->
                <form action="<?= base_url(); ?>admin/proses_edit_about" enctype="multipart/form-data" method="post" data-parsley-validate>
                <input type="hidden" name="id" value="<?= $data[0]['id'];?>">
                    <div class="form-group col-md-8">
                        <label for="lead" class="d-block">Lead Prolog</label>
                        <textarea name="lead" class="form-control" rows="3" required><?= $data[0]['lead'];?></textarea>
                    </div>
                    
                    <div class="form-group col-md-8">
                        <label for="content" class="d-block">Content</label>
                        <textarea name="content" id="editor-container" class="form-control" rows="3" required><?= $data[0]['content'];?></textarea>
                    </div>

                    <div class="col-md-8">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-secondary" type="cancel">Cancel</button>
                    </div>
                </form>
                <!-- end form -->
          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>