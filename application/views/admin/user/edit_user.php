                    <div class="col-md-12">
                        <h2>Edit User </h2>
                        <div class="block">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Edit User</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <form action="<?= base_url();?>admin/proses_edit_user" method="post" >
                                        <input type="hidden" name="id_user" value="<?= $data[0]['id_user']; ?>">
                                        <div class="form-group">
                                            <label for="example-nf-email">Username</label>
                                            <input type="text" class="form-control" id="example-nf-email" name="username" placeholder="Enter Username.." value="<?= $data[0]['username']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-nf-email">Email</label>
                                            <input type="email" class="form-control" id="example-nf-email" name="email" placeholder="Enter Email.." value="<?= $data[0]['email']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-nf-password">Password</label>
                                            <input type="password" class="form-control" id="example-nf-password" name="password" placeholder="Enter Password..">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-nf-password">Access</label>
                                            <input type="text" class="form-control" id="example-nf-password" name="access" placeholder="Enter Access." value="<?= $data[0]['access']; ?>">
                                        </div>


                                        <div class="form-group">
                                            <button type="submit" class="btn btn-alt-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>