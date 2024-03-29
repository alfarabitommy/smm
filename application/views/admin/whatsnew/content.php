<div class="content-body">
        <div class="container pd-x-0">
          <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                  <li class="breadcrumb-item"><a href="#">What's New</a></li>
                </ol>
              </nav>
              <h4 class="mg-b-0 tx-spacing--1">What's New Article</h4>
            </div>
          </div>

          <div class="row row-xs">
            <div class="container">
              <p class="mg-b-30">Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.</p>
              <button type="button" class="btn btn-xs btn-primary" onClick="window.location='<?= base_url(); ?>admin/add_whatsnew/';">Add What's New Content</button>
              <br>
              <br>
              <div data-label="Example" class="df-example demo-table">
                <table id="example1" class="table">
                  <thead>
                    <tr>
                      <th class="wd-5p">No</th>
                      <th class="wd-25p">Title</th>
                      <th class="wd-20p">Image</th>
                      <th class="wd-15p">Status</th>
                      <th class="wd-20p">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $jumlah = count($whatsnew); 
                      $no = 1;
                      for($i=0;$i<$jumlah;$i++) {    
                    ?> 
                      <tr>
                        <td><?= $no; ?></td>
                        <td><?= $whatsnew[$i]['title'];?></td>
                        <td><img src="<?= base_url(); ?>assets/whatsnew/<?= $whatsnew[$i]['image'];?>" alt="" width="50"></td>
                        <td>
                          <?php if($whatsnew[$i]['status'] == 1) {?>
                            <span class="badge badge-success">Active</span>
                          <?php } else { ?>
                            <span class="badge badge-danger">Inactive</span>
                          <?php } ?>
                        </td>
                        <td>
                          <button type="button" class="btn btn-xs btn-warning" onClick="window.location='<?= base_url(); ?>admin/edit_whatsnew/<?= $whatsnew[$i]['id'];?>';">
                            Edit
                          </button>
                          <button type="button" class="btn btn-xs btn-danger" onClick="window.location='<?= base_url(); ?>admin/delete_whatsnew/<?= $whatsnew[$i]['id'];?>';">
                            Delete
                          </button>
                        </td>
                      </tr>
                    <?php $no++; } ?> 
                  </tbody>
                </table>
              </div>
          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>