  <!-- Page Wrapper -->
  <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column py-4" style="margin-top : 70px">
      <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg mx-auto">
            <div class="card-body p-0">
                <!-- Begin Page Content -->
                <div class="container-fluid">
                  <!-- Page Heading -->
                    <h1 class="h3 mb-3 mt-5 text-gray-800"><?= $title; ?></h1>

                    <div class="row">
                      <div class="col-lg-6 mb-5">

                        <?= $this->session->flashdata('message'); ?>

                        <h5 class="mb-5">Role : <?= $role['role']; ?></h5>

                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th scope="col">No.</th>
                              <th scope="col">Menu</th>
                              <th scope="col">Access</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($menu as $m) : ?>
                            <tr>
                              <th scope="row"><?= $i; ?></th>
                              <td><?= $m['menu']; ?></td>
                              <td>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">
                                </div>
                              </td>
                            </tr>
                            <?php $i++; ?>
                          <?php endforeach; ?>
                          </tbody>
                        </table>
                        <a href="<?= base_url('admin'); ?>" class="btn btn-primary">Back</a>
                      </div>  
                    </div>
                    
                </div>

                 </div>
            <!-- End of Main Content -->       


            <!-- Modal -->
            <div class="modal fade" id="newRoleModal" tabindex="-1" aria-labelledby="newRoleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="newRoleModalLabel">Add New Role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="<?= base_url('admin/role'); ?>" method="post">
                    <div class="modal-body">
                      <div class="form-group">
                      <input type="text" class="form-control" id="role" name="role" placeholder="Role Name">
                  </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Add</button>
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
