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

                     

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Data User
                            </div>
                            <div class="card-body">
                              <?php if(validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                              <?= validation_errors(); ?>
                            </div>
                              <?php endif; ?>
                              <?= $this->session->flashdata('message'); ?>

                                <div class="table-responsive">
                                    <table class="table table-hover">
                                      <thead>
                                        <tr>
                                          <th scope="col">No.</th>
                                          <th scope="col">Name</th>
                                          <th scope="col">Email</th>
                                          <th scope="col">Image</th>
                                          <th scope="col">Role</th>
                                          <th scope="col">Active</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($uSer as $us) : ?>
                                        <tr>
                                          <th scope="row"><?= $i; ?></th>
                                          <td><?= $us['name']; ?></td>
                                          <td><?= $us['email']; ?></td>
                                          <td><?= $us['image']; ?></td>
                                          <td><?= $us['role_id']; ?></td>
                                          <td><?= $us['is_active']; ?></td>
                                        </tr>
                                        <?php $i++; ?>
                                      <?php endforeach; ?>
                                      </tbody>
                                    </table>
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
  </div>
