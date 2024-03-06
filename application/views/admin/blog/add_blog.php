                <div class="col-md-12">
                       <h2>Add Blog</h2>
                        <div class="block">
                               
                                <div class="block-content">
                                    <form action="<?= base_url(); ?>admin/proses_add_blog" enctype="multipart/form-data" method="post" >
                                      
                                         <div class="block">
                                            <div class="block-header block-header-default">
                                                <h3 class="block-title">Add Blog</h3>
                                                <div class="block-options">
                                                    <button type="button" class="btn-block-option">
                                                        <i class="si si-wrench"></i>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="example-nf-email">Title</label>
                                                <input type="text" class="form-control" id="example-nf-title" name="title" placeholder="Enter Title..">
                                            </div>

                                            <div class="form-group">
                                                <label for="example-nf-email">Photo</label>
                                                <input type="file" class="form-control" id="example-nf-title" name="photo">
                                            </div>

                                           <div class="form-group">
                                                <label for="example-nf-email">Description</label>

                                                    <div class="block-content block-content-full">
                                                      
                                                        <textarea class="js-summernote" name="description"></textarea>
                                                    </div>
                                            </div>    

                                        </div>


                                        <div class="form-group">
                                            <button type="submit" class="btn btn-alt-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>