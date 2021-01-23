  <!-- Page Wrapper -->
  <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column py-4" style="margin-top : 70px">
      <div class="container-fluid">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg mx-auto">
            <div class="card-body p-0">
                <!-- Begin Page Content -->
                <div class="container-fluid">
                	<!-- Page Heading -->
                    <h1 class="h3 mb-3 mt-5 text-gray-800"><?= $title; ?></h1>
                      <?php if(validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                          <?= validation_errors(); ?>
                        </div>
                      <?php endif; ?>
                      <?= $this->session->flashdata('message'); ?>

                    <div class="row">
                      <div class="col-md mb-5">
                        <a class="btn btn-danger" href="<?= base_url('admin/cetak') ?>"><i class="fa fa-print">Print</i></a>
                      </div>
                      <div class="col-md-4 navbar-form navbar-right">
                        <form action="<?= base_url('admin/user'); ?>" method="post">
                          <div class="input-group mb-3">
                            <input type="text" name="keyword" class="form-control" placeholder="Search keyword..." autocomplete="off" autofocus>
                            <div class="input-group-append">
                              <input type="submit" class="btn btn-primary" name="submit">
                            </div>
                          </div>
                        </form>
                      </div>

                      <div class="col-md mb-5">
                        <!-- <a href="" class="btn btn-primary mb-5" data-toggle="modal" data-target="#newUser">Add New User</a> -->
                        <h5>Result : <?= $total_rows; ?></h5>
                        <?php if (empty($users)) : ?>
                          <tr>
                            <td>
                              <div class="alert alert-danger" role="alert">
                                Data not found!
                              </div>
                            </td>
                          </tr>
                        <?php endif; ?>
                        <div class="card mt-3">
                          <div class="card-header">
                            <i class="fas fa-table mr-1"> Data User</i>
                          </div>
                          <div class="card-body">
                            <?php if(validation_errors()) : ?>
                              <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                              </div>
                            <?php endif; ?>
                            
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
                                    <th scope="col">Date Created</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php foreach ($users as $user) : ?>
                                  <tr>
                                    <th scope="row"><?= ++$start; ?></th>
                                    <td><?= $user['name']; ?></td>
                                    <td><?= $user['email']; ?></td>
                                    <td><img src="<?= base_url(); ?>/assets/img/<?= $user['image']; ?>" width="50" height="50"></td>
                                    <td><?= $user['role_id']; ?></td>
                                    <td><?= $user['is_active']; ?></td>
                                    <td><?= date('d F Y',$user['date_created']) ?></td>

                                    <td><?= anchor('admin/detail/'.$user['id'],'<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                                    <td onclick="javascript: return confirm('Apakah Anda yakin ingin menghapus data?')"><?= anchor('admin/hapus/'.$user['id'], '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td> 
                                    <td><?= anchor('admin/edit/'.$user['id'], '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                                  </tr>
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
                                    <th scope="col">Action</th>
                                  </tr>
                                </tfoot>
                              </table>
                            </div>
                        </div>
                      </div>
                      <?= $this->pagination->create_links(); ?>
                      <a href="<?= base_url('admin'); ?>" class="btn btn-primary mt-5">Back</a>
                      </div>  
                    </div>


                </div>

            </div>
        </div>
      </div>



    </div>
  </div>
