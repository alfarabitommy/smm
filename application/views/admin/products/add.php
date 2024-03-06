<div class="content-body">
        <div class="container pd-x-0">
          <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                  <li class="breadcrumb-item"><a href="#">Products</a></li>
                </ol>
              </nav>
              <h4 class="mg-b-0 tx-spacing--1">Add New Product</h4>
            </div>
          </div>

          <div class="row row-xs">
            <div class="container">
              <p class="mg-b-30 col-md-8">Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.</p>

                <!-- start form -->
                <form action="<?= base_url(); ?>admin/proses_add_product" enctype="multipart/form-data" method="post" data-parsley-validate>
                    <div class="form-group col-md-8">
                        <label for="product_name" class="d-block">Product Name</label>
                        <input name="product_name" type="text" class="form-control" placeholder="Enter product name" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="lead_desc" class="d-block">Lead Description</label>
                        <textarea name="lead_desc" id="editor-container4" class="form-control" rows="10" placeholder="Enter description"></textarea>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="price" class="d-block">Price</label>
                        <input name="price" type="number" class="form-control" placeholder="Enter price" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="stock" class="d-block">Stock</label>
                        <select class="custom-select" name="stock" required>
                            <option value="">- Select Product Stock -</option>
                            <option value="Available">Available</option>
                            <option value="Not Available">Not Available</option>
                        </select>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="rating" class="d-block">Rating</label>
                        <select class="custom-select" name="rating" required>
                            <option value="0">- Select Product Rating -</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="store_link" class="d-block">Store Link</label>
                        <input name="store_link" type="text" class="form-control" placeholder="Enter store link" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="desc" class="d-block">Description</label>
                        <textarea name="desc" id="editor-container4" class="form-control" rows="10" placeholder="Enter description"></textarea>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="contains" class="d-block">Contains</label>
                        <textarea name="contains" id="editor-container2" class="form-control" rows="10" placeholder="Enter contains"></textarea>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="packaging" class="d-block">Packaging</label>
                        <input name="packaging" type="text" class="form-control" placeholder="Enter packaging">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="howto" class="d-block">How to use</label>
                        <textarea name="howto" id="editor-container3" class="form-control" rows="10" placeholder="Enter how to use"></textarea>
                    </div>
                    <div class="form-group col-md-8">
                        <input type="file" class="custom-file-input" id="image1" name="image1" required>
                        <label class="custom-file-label" for="image1">Upload Image 1</label>
                    </div>
                    <div class="form-group col-md-8">
                        <input type="file" class="custom-file-input" id="banner" name="banner" required>
                        <label class="custom-file-label" for="banner">Upload Banner</label>
                    </div>

                    <div class="form-group col-md-8">
                        <label for="status" class="d-block">Status</label>
                        <select class="custom-select" name="status" required>
                            <option value="1">- Select Product Status -</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>

                    <div class="col-md-8">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button onClick="window.location='<?= base_url(); ?>admin/products/';" class="btn btn-secondary" type="cancel">Cancel</button>
                    </div>
                </form>
                <!-- end form -->
          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>
