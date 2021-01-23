  <!-- Page Wrapper -->
  <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column py-4" style="margin-top : 70px">
      <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg mx-auto">
            <div class="card-body p-0">
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                            <img class="logo-about mt-5" src="<?= base_url('assets/img/log.jpg'); ?>">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 mt-5" data-aos="fade-left" data-aos-delay="200">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-5">Create an Account!</h1>
                                </div>
                                <form class="user" method="post" action="<?= base_url('auth/vregis'); ?>">
                                     <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="name" name="name" 
                                            placeholder="Full name" value="<?= set_value('name'); ?>">
                                        <?= form_error('name','<small class="text-danger pl-3">','</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" 
                                            placeholder="Email Address" value="<?= set_value('email'); ?>">
                                        <?= form_error('email','<small class="text-danger pl-3">','</small>'); ?>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user"
                                                id="password1" name="password1" placeholder="Password">
                                            <?= form_error('password1','<small class="text-danger pl-3">','</small>'); ?>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user"
                                                id="password2" name="password2" placeholder="Repeat Password">
                                            <?= form_error('password2','<small class="text-danger pl-3">','</small>'); ?>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Register Account
                                    </button>
                                </form><hr>

                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/'); ?>">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>