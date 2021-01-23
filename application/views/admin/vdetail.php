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
                    <?php if(validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                          <?= validation_errors(); ?>
                        </div>
                      <?php endif; ?>

                    <div class="row">
                      <div class="col-lg mb-5">
                        <?= $this->session->flashdata('message'); ?>

                        <form action="<?= base_url('admin/update'); ?>" method="post">
                          <table class="table">
                            <tr>
                              <th>Full Name</th>
                              <td><?= $detail->name ?></td>
                            </tr>
                            <tr>
                              <th>Email</th>
                              <td><?= $detail->email ?></td>
                            </tr>
                            <tr>
                              <th>Role</th>
                              <td><?= $detail->role_id ?></td>
                            </tr>
                            <tr>
                              <th>Active</th>
                              <td><?= $detail->is_active ?></td>
                            </tr>
                            <tr>
                              <th>Date Created</th>
                              <td><?= date('d F Y',$detail->date_created) ?></td>
                            </tr>

                            <tr>
                              <th>Foto</th>
                              <td><img src="<?= base_url(); ?>/assets/img/<?= $detail->image; ?>" width="50" height="50"></td> 
                            </tr>
                          </table>
                          <a href="<?= base_url('admin/user'); ?>" class="btn btn-primary">Back</a>

                        </form>
                      </div>
                    </div>
                    
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
