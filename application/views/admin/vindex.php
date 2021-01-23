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
                    <?php if(validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>

                    <div class="col-lg-8">
                        <?= $this->session->flashdata('message'); ?>
                    </div>

                    <div class="row">

                      <!-- User Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4 mt-5">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                User Management</div>
                                            <a href="<?= base_url('admin/user'); ?>">see more</a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-cog fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                      <!-- Profile Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4 mt-5">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Menu Management</div>
                                            <a href="<?= base_url('admin/menu'); ?>">see more</a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-folder fa-2x text-gray-300"></i>
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
                                                Sub Menu Management</div>
                                            <a href="<?= base_url('admin/submenu'); ?>">see more</a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-folder-open fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4 mt-5">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Role
                                            </div>
                                            <a href="<?= base_url('admin/role'); ?>">see more</a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive mt-5 mb-5">
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Image</th>
                                <th scope="col">Role</th>
                                <th scope="col">Active</th>
                                <th scope="col">Date Created</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php $i = 1; ?>
                              <?php foreach ($uSer as $us) : ?>
                              <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $us['name']; ?></td>
                                <td><?= $us['email']; ?></td>
                                <td><img src="<?= base_url(); ?>/assets/img/<?= $us['image']; ?>" width="50" height="50"></td>
                                <td><?= $us['role_id']; ?></td>
                                <td><?= $us['is_active']; ?></td>
                                <td><?= date('d F Y',$us['date_created']) ?></td>
                              </tr>
                              <?php $i++; ?>
                              <?php endforeach; ?>
                              </tbody>
                              <tfoot>
                                <tr>
                                  <th scope="col">No.</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Email</th>
                                  <th scope="col">Image</th>
                                  <th scope="col">Role</th>
                                  <th scope="col">Active</th>
                                  <th scope="col">Date Created</th>
                                </tr>
                              </tfoot>
                            </table>
                          </div>
                          
                    </div> 
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
