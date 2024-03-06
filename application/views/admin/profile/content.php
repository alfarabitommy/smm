                    <div class="col-md-12">
                       
                        <div class="block">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Edit Profile</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <form action="<?= base_url();?>admin/proses_edit_profile" method="post" >
                                        <input type="hidden" name="id_profile" value="<?= $data[0]['id_profile']; ?>">
                                      
                                         <div class="block">
                                            <div class="block-header block-header-default">
                                                <h3 class="block-title">Edit Profile</h3>
                                                <div class="block-options">
                                                    <button type="button" class="btn-block-option">
                                                        <i class="si si-wrench"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="block-content block-content-full">
                                              
                                                <textarea class="js-summernote" name="description"><?= $data[0]['description']; ?></textarea>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <button type="submit" class="btn btn-alt-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>