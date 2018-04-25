        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title" style="padding-bottom: 10px;">Profile</h4>
                <!--<p class="text-muted page-title-alt">Welcome to Ubold admin panel !</p>
              -->
            </div>
        </div>  

        <div class="row">
            <div class="col-sm-4"> 
                <div class="profile-detail card-box">
                    <div>
                        <img src="<?php echo base_url();?>assets/images/users/profile.png" class="img-circle" alt="profile-image">

                        <ul class="list-inline status-list m-t-20">
                            <li>
                                <h3 class="text-primary m-b-5">Login start</h3>
                                <p class="text-muted">08.00</p>
                            </li>
                        </ul>


                        <div class="text-left">
                            <p class="text-muted font-13"><strong>Username :</strong> <span class="m-l-15"><?php echo $this->session->userdata('username'); ?></span></p>

                            <p class="text-muted font-13"><strong>Fullname :</strong><span class="m-l-15"><?php echo $this->session->userdata('fullname'); ?></span></p>

                            <p class="text-muted font-13"><strong>Level :</strong> <span class="m-l-15"><?php echo $this->session->userdata('level'); ?></span></p>

                            <p class="text-muted font-13"><strong>Status :</strong> <span class="m-l-15 label label-success"><?php echo $this->session->userdata('status'); ?></span></p>
                        </div>


                        <div class="button-list m-t-20">
                            <button type="button" class="btn btn-facebook waves-effect waves-light">
                               <i class="fa fa-facebook"></i>
                            </button>

                            <button type="button" class="btn btn-twitter waves-effect waves-light">
                               <i class="fa fa-twitter"></i>
                            </button>

                            <button type="button" class="btn btn-success waves-effect waves-light">
                               <i class="fa fa-whatsapp"></i>
                            </button>

                            <button type="button" class="btn btn-github waves-effect waves-light">
                               <i class="fa fa-github"></i>
                            </button>

                        </div>
                    </div>

                </div>
            </div>

            <div class="col-sm-8">
                <div class="card-box">
                    <div class="panel panel-header">
                        <h4>Change password</h4>
                    </div>
                    <div class="panel panel-body">
                        <form action="<?php echo site_url('profile/ganti_password') ?>" class="form-horizontal" method="post">
                            <?php
                                if(isset($error)){
                                    echo "<div class='alert alert-danger'><a href=''#'' class='close' data-dismiss='alert' aria-label='close' title='close'>×</a>$error</div>";
                                }
                                if(isset($success)){
                                    echo "<div class='alert alert-success'><a href=''#'' class='close' data-dismiss='alert' aria-label='close' title='close'>×</a>$success</div>";
                                }
                            ?>
                            <input type="hidden" value="" name="id"/>
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Password Awal</label>
                                    <div class="col-md-9">
                                        <input name="password" placeholder="Password Awal" class="form-control" type="password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Password baru</label>
                                    <div class="col-md-9">
                                        <input name="password_baru" placeholder="Password Baru" class="form-control" type="password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Konfirmasi Password</label>
                                        <div class="col-md-9">
                                            <input name="konfirmasi_password" placeholder="Konfirmasi Password" class="form-control" type="password">
                                        </div>
                                </div>
                            </div>
                            <div class="form-group">
                              <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Simpan</button>
                                <button type="reset" class="btn btn-default"><i class="fa fa-"></i> Reset</button>
                              </div>
                            </div>
                        </form>
                    </div>
                  
                </div>
            </div>

        </div>       