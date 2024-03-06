  <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <h2 class="content-heading">DATA USER</h2>
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">All Data  <small>User</small></h3>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th>Username</th>
                                        <th class="d-none d-sm-table-cell">Email</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                                        <th class="text-center" style="width: 15%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php 

                                    $jumlah = count($user); 
                                    for($i=0;$i<$jumlah;$i++){    
                                    ?>    

                                    <tr>
                                        <td class="text-center"><?= $user[$i]['id_user'];?></td>
                                        <td class="font-w600"><?= $user[$i]['username'];?></td>
                                        <td class="d-none d-sm-table-cell"><?= $user[$i]['email'];?></td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-success"><?= $user[$i]['access'];?></span>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit User">
                                                <i class="fa fa-user" onclick="window.location='<?= base_url();?>admin/edit_user/<?= $user[$i]['id_user'];?>'"></i>
                                            </button>
                                        </td>
                                    </tr>
                                  <?php } ?> 

                                </tbody>
                            </table>
                        </div>
                    </div>

                    
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->