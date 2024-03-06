<div class="content-body">
        <div class="container pd-x-0">
          <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                  <li class="breadcrumb-item"><a href="#">Products</a></li>
                </ol>
              </nav>
              <h4 class="mg-b-0 tx-spacing--1">Edit Product</h4>
            </div>
          </div>

          <div class="row row-xs">
            <div class="container">
              <p class="mg-b-30 col-md-8">Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.</p>

                <!-- start form -->
                <form action="<?= base_url(); ?>admin/proses_edit_product" enctype="multipart/form-data" method="post" data-parsley-validate>
                <input type="hidden" name="id" value="<?= $data[0]['id'];?>">
                    <div class="form-group col-md-8">
                        <label for="product_name" class="d-block">Product Name</label>
                        <input name="product_name" type="text" class="form-control" value="<?= $data[0]['product_name'];?>" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="lead_desc" class="d-block">Lead Description</label>
                        <textarea name="lead_desc" id="editor-container4" class="form-control" rows="10" placeholder="Enter description"><?= $data[0]['lead_desc'];?></textarea>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="price" class="d-block">Price</label>
                        <input name="price" type="number" class="form-control" value="<?= $data[0]['price'];?>" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="stock" class="d-block">Stock</label>
                        <select class="custom-select" name="stock" required>
                            <option value="">- Select Product Stock -</option>
                            <option value="Available" <?= ($data[0]['stock']=='Available')? 'selected':''; ?>>Available</option>
                            <option value="Not Available" <?= ($data[0]['stock']=='Not Available')? 'selected':''; ?>>Not Available</option>
                        </select>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="rating" class="d-block">Rating</label>
                        <select class="custom-select" name="rating" required>
                            <option value="0">- Select Product Rating -</option>
                            <option value="1" <?= ($data[0]['rating']==1)? 'selected':''; ?>>1</option>
                            <option value="2" <?= ($data[0]['rating']==2)? 'selected':''; ?>>2</option>
                            <option value="3" <?= ($data[0]['rating']==3)? 'selected':''; ?>>3</option>
                            <option value="4" <?= ($data[0]['rating']==4)? 'selected':''; ?>>4</option>
                            <option value="5" <?= ($data[0]['rating']==5)? 'selected':''; ?>>5</option>
                        </select>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="store_link" class="d-block">Store Link</label>
                        <input name="store_link" type="text" class="form-control" value="<?= $data[0]['store_link'];?>" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="desc" class="d-block">Description</label>
                        <textarea name="desc" id="editor-container4" class="form-control" rows="10"><?= $data[0]['desc'];?></textarea>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="contains" class="d-block">Contains</label>
                        <textarea name="contains" id="editor-container2" class="form-control" rows="10"><?= $data[0]['contains'];?></textarea>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="packaging" class="d-block">Packaging</label>
                        <input name="packaging" type="text" class="form-control" value="<?= $data[0]['packaging'];?>">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="howto" class="d-block">How to use</label>
                        <textarea name="howto" id="editor-container3" class="form-control" rows="10"><?= $data[0]['howto'];?></textarea>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="image1">Current Image 1</label>
                        <img src="<?= base_url(); ?>assets/products/<?= $data[0]['image1'];?>" alt="" width="150">
                    </div>
                    <div class="form-group col-md-8">
                        <input type="file" class="custom-file-input" id="image1" name="image1">
                        <label class="custom-file-label" for="image1">Upload New Image 1</label>
                    </div>

                    <div class="form-group col-md-8">
                        <label for="banner">Banner</label>
                        <img src="<?= base_url(); ?>assets/products/<?= $data[0]['banner'];?>" alt="" width="150">
                    </div>
                    <div class="form-group col-md-8">
                        <input type="file" class="custom-file-input" id="banner" name="banner">
                        <label class="custom-file-label" for="banner">Upload New Banner</label>
                    </div>


                    <!-- <div class="form-group col-md-8">
                        <input type="file" class="custom-file-input" id="image2" name="image2">
                        <label class="custom-file-label" for="image2">Upload Image 2</label>
                    </div>
                    <div class="form-group col-md-8">
                        <input type="file" class="custom-file-input" id="image3" name="image3">
                        <label class="custom-file-label" for="image3">Upload Image 3</label>
                    </div>
                    <div class="form-group col-md-8">
                        <input type="file" class="custom-file-input" id="image4" name="image4">
                        <label class="custom-file-label" for="image4">Upload Image 4</label>
                    </div> -->
                    <!-- <div class="form-group col-md-8">
                        <input type="file" class="custom-file-input" id="background" name="background">
                        <label class="custom-file-label" for="background">Upload Background Image</label>
                    </div> -->
                    <div class="form-group col-md-8">
                        <label for="status" class="d-block">Status</label>
                        <select class="custom-select" name="status" required>
                            <option value="1">- Select Product Status -</option>
                            <option value="1" <?= ($data[0]['status']==1)? 'selected':''; ?>>Active</option>
                            <option value="0" <?= ($data[0]['status']==0)? 'selected':''; ?>>Inactive</option>
                        </select>
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
