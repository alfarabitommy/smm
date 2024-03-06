<div class="container">
    <div class="col-md-8 col-md-offset-2">
    
    <h1>Login</h1>
                    Log in using your registered email and password
                    <br>
                    <br>
                    <?php if($this->session->flashdata('error')){ ?>
                        <p style="color:red;"><?php echo $this->session->flashdata('error'); ?></p>
                    <?php } ?>

                    <?php if($this->session->flashdata('registered')){ ?>
                        <p style="color:green;"><?php echo $this->session->flashdata('registered'); ?></p>
                    <?php } ?>
                    <form method="post" action="<?= base_url();?>web/proses_login">
                        
                            <div class="row">
                            
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input name="email" type="email" class="form-control" required="" placeholder="Enter email">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                            <input name="password" type="password" class="form-control" required="" placeholder="password">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-12 text-right">
                                    <button name="submit" type="submit" value="Submit" class="site-button  m-r15">Submit  <i class="fa fa-angle-double-right"></i></button>
                                </div>

                            </div>

                        </form>

                        </div>
</div>
<br>
<br>