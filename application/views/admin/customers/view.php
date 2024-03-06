<div class="content-body">
        <div class="container pd-x-0">
          <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                  <li class="breadcrumb-item"><a href="#">Customers</a></li>
                </ol>
              </nav>
              <h4 class="mg-b-0 tx-spacing--1">View Detail Customer</h4>
            </div>
          </div>

          <div class="row row-xs">
            <div class="container">
              <p class="mg-b-30 col-md-8">Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.</p>
              
                <!-- start form -->
                    <div class="form-group col-md-8">
                        <label for="name" class="d-block">Name</label>
                        <input name="name" type="text" class="form-control" value="<?= $data[0]['name'];?>" disabled>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="email" class="d-block">Name</label>
                        <input name="email" type="text" class="form-control" value="<?= $data[0]['email'];?>" disabled>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="phone" class="d-block">Phone</label>
                        <input name="phone" type="text" class="form-control" value="<?= $data[0]['phone'];?>" disabled>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="dob" class="d-block">DOB</label>
                        <input name="dob" type="text" class="form-control" value="<?= $data[0]['dob'];?>" disabled>
                    </div>
                    <div class="col-md-8">
                        <button onClick="window.location='<?= base_url(); ?>admin/customers/';" class="btn btn-secondary" type="cancel">Back to List</button>
                    </div>
                <!-- end form -->
          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>