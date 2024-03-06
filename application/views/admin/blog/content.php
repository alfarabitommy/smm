          <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <h2 class="content-heading">DATA BLOG</h2>
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title"><a href="<?= base_url();?>admin/add_blog">Add  <small>Blog</small></a></h3>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th>Title</th>
                                        <th class="d-none d-sm-table-cell">Description</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Photo</th>
                                        <th class="text-center" style="width: 15%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php 

                                    $jumlah = count($blog); 
                                    for($i=0;$i<$jumlah;$i++){    
                                    ?>    

                                    <tr>
                                        <td class="text-center"><?= $blog[$i]['id_blog'];?></td>
                                        <td class="font-w600"><?= $blog[$i]['title'];?></td>
                                        <td class="d-none d-sm-table-cell"><?= $blog[$i]['description'];?></td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-success"><img src="<?= base_url().'assets/all-images/'.$blog[$i]['photo'];?>" width="100"></span>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit Blog">
                                                <a href="<?= base_url();?>admin/edit_blog/<?= $blog[$i]['id_blog'];?>">Edit</a>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete Blog">

                                            <a href="<?= base_url();?>admin/hapus_blog/<?= $blog[$i]['id_blog'];?>">Delete</a>
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
       
