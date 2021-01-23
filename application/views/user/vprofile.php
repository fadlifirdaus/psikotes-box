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

                        <div class="card mb-3 mt-5" style="max-width: 650px;">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title"><?= $user['name']; ?></h5>
                                <p class="card-text"><?= $user['email']; ?></p>
                                <p class="card-text"><small class="text-muted">Member since <?= date('d F Y', $user['date_created']); ?></small></p>
                              </div>
                            </div>
                          </div>
                        </div>

                    </div>
                    <a href="<?= base_url('user/'); ?>" class="btn btn-primary mb-5">Back</a>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
