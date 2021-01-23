  <!-- Page Wrapper -->
  <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column py-4" style="margin-top : 70px">
      <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg mx-auto">
            <div class="card-body p-0">
                <!-- Begin Page Content -->
                <div class="container-fluid">
                	<!-- Page Heading -->
                    <h1 class="h3 mt-5 text-gray-800"><?= $title; ?></h1>
                    <h6>Welcome <?= $user['name']; ?></h6>

                    <div class="col-lg-8">
                        <?= $this->session->flashdata('message'); ?>
                    </div>

                    <div class="row">
                     <!-- Profile Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4 mt-5">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Profile</div>
                                            <a href="<?= base_url('user/profile'); ?>">see more</a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                      <!-- Edit Profile Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4 mt-5">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Edit Profile</div>
                                            <a href="<?= base_url('user/edit'); ?>">see more</a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-edit fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Psikotes Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4 mt-5">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Psikotes
                                            </div>
                                            <a href="<?= base_url('test'); ?>">see more</a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Password Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4 mt-5">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Change Password</div>
                                            <a href="<?= base_url('user/changepassword'); ?>">see more</a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-key fa-2x text-gray-300"></i>
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
    </div>
  </div>
