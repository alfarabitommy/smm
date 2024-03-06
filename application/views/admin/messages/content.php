<div class="content-body">
        <div class="container pd-x-0">
          <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                  <li class="breadcrumb-item"><a href="#">Messages</a></li>
                </ol>
              </nav>
              <h4 class="mg-b-0 tx-spacing--1">Messages List</h4>
            </div>
          </div>

          <div class="row row-xs">
            <div class="container">
              <p class="mg-b-30">Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.</p>
              <div data-label="Example" class="df-example demo-table">
                <table id="example1" class="table">
                  <thead>
                    <tr>
                      <th class="wd-5p">No</th>
                      <th class="wd-25p">Name</th>
                      <th class="wd-25p">Email</th>
                      <th class="wd-15p">Phone</th>
                      <th class="wd-20p">Message</th>
                      <th class="wd-10p">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $jumlah = count($message); 
                      $no = 1;
                      for($i=0;$i<$jumlah;$i++) {    
                    ?> 
                      <tr>
                        <td><?= $no; ?></td>
                        <td><?= $message[$i]['name'];?></td>
                        <td><?= $message[$i]['email'];?></td>
                        <td><?= $message[$i]['phone'];?></td>
                        <td><?= $message[$i]['message'];?></td>
                        <td>
                          <button type="button" class="btn btn-xs btn-warning" onClick="window.location='<?= base_url(); ?>admin/view_message/<?= $message[$i]['id'];?>';">
                            View
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