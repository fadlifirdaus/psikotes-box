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
                      <div class="col-lg">
                        <?= $this->session->flashdata('message'); ?>
                        <?= form_open_multipart('user/edit'); ?>
                          <div class="form-group row">
                              <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
                                 <?= form_error('name','<small class="text-danger pl-3">','</small>'); ?>
                             </div>
                          </div>
                          <div class="form-group row">
                             <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                             <div class="col-sm-6">
                                <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                             </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-sm-2">Picture</div>
                            <div class="col-sm-10">
                              <div class="row">
                                <div class="col-sm-2">
                                  <img src="<?= base_url('assets/img/profile/'). $user['image']; ?>" class="img-thumbnail">
                                </div>
                                <div class="col-sm-5">
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="form-group row justify-content-end">
                            <div class="col-sm-10 mb-5">
                              <a href="<?= base_url('user/'); ?>" class="btn btn-primary">Back</a>
                              <button type="submit" class="btn btn-primary">Edit</button>
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
