 <!-- Page Wrapper -->
  <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column py-4" style="margin-top : 70px">
      <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg mx-auto">
            <div class="card-body p-0">
                <!-- Begin Page Content -->
                <div class="container-fluid">
                	<!-- Page Heading -->
                    <h1 class="h3 mb-5 mt-5 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                      <div class="col-lg-6">
                        <?= $this->session->flashdata('message'); ?>
                        <form action="<?= base_url('user/changepassword'); ?>" method="post">
                          <div class="form-group">
                              <label for="current_password">Current Password</label>
                              <input type="password" class="form-control" id="current_password" name="current_password">
                               <?= form_error('current_password','<small class="text-danger pl-3">','</small>'); ?>
                          </div>
                          <div class="form-group">
                              <label for="new_password1">New Password</label>
                              <input type="password" class="form-control" id="new_password1" name="new_password1">
                               <?= form_error('new_password1','<small class="text-danger pl-3">','</small>'); ?>
                          </div>
                          <div class="form-group">
                              <label for="new_password2">Repeat Password</label>
                              <input type="password" class="form-control" id="new_password2" name="new_password2">
                              <?= form_error('new_password2','<small class="text-danger pl-3">','</small>'); ?>
                          </div>
                          <div class="form-group row justify-content-end">
                              <div class="col mb-5">
                                <a href="<?= base_url('user/'); ?>" class="btn btn-primary">Back</a>
                                <button type="submit" class="btn btn-primary">Change password</button>
                              </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
