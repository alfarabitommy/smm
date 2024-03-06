<div class="container">
    <div class="col-md-8 col-md-offset-2">
    
    <h1>Register</h1>
    Register to our site, to get promotional offers and updated info
                    <br>
                    <br>
                    <form action="<?= base_url();?>web/proses_register" method="post">
                        
                            <div class="row">
                            
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input name="name" type="text" class="form-control" required="" placeholder="Enter your name">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            <input name="phone" type="text" class="form-control" required="" placeholder="Enter your phone number">
                                        </div>
                                    </div>

                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input name="dob" type='text' class="form-control" id='datepicker' placeholder="Your birthday" style='width: 300px;' >
                                        </div>
                                    </div>

                                </div>

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
                                    <input type="submit" name="submit" value="Submit" class="site-button m-r15">
                                </div>

                            </div>

                        </form>
                </div>
    </div>
</div>

<br>
<br>