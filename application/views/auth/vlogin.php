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
                                  <h1 class="h4 text-gray-900 mb-5">Login</h1>
                              </div>

                              <?= $this->session->flashdata('message'); ?>

                              <form class="user" method="post" action="<?= base_url('auth/'); ?>">
                                  <div class="form-group">
                                    <input type="text" class="form-control form-control-user mb-5" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                                      <?= form_error('email','<small class="text-danger pl-3">','</small>'); ?>
                                  </div>
                                  <div class="form-group">
                                    <input type="password" class="form-control form-control-user mb-5" id="password" name="password" placeholder="Password">
                                    <?= form_error('password','<small class="text-danger pl-3">','</small>'); ?>
                                  </div>
                                  
                                  <button type="submit" class="btn btn-primary btn-user btn-block">
                                     Login
                                  </button>
                              </form><hr>

                              <div class="text-center">
                                  <a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Forgot Password?</a>
                              </div>
                              <div class="text-center">
                                  <a class="small" href="<?= base_url('auth/vregis'); ?>">Create an Account!</a>
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