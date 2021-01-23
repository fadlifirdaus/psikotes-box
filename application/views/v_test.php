  <!-- Page Wrapper -->
  <div id="wrapper">
      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column py-4" style="margin-top : 70px">
          <!-- Main Content -->
          <div id="content">
              <!-- Begin Page Content -->
              <div class="container-fluid">
                  <!-- Page Heading -->
                  <div class="d-sm-flex align-items-center justify-content-between mb-4"></div>

                  <div class="alert alert-warning alert-dismissible fade" role="alert">
                      <?php echo $this->session->flashdata('berakhir');?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>

                  <div class="row">
                      <div class="col-lg-12 d-lg-flex justify-content-around ">
                          <div class="container align-items-center mb-4" data-aos="fade-up">
                              <!-- Basic Card Example -->
                              <div class="card shadow mb-3 mx-auto" style="width: 500px">
                                  <div class="card-header text-center py-3">
                                      <h4 class="m-0 font-weight-bold text-primary">
                                          Pilihan Ganda
                                      </h4>
                                  </div>
                                  <div class="card-body">
                                      <img src="<?= base_url('assets/') ?>img/bg-02.jpg" class="card-img-top mb-4" />
                                      <!-- <p>
                                          10 soal test pilhan ganda
                                      </p> -->
                                      <h6 class="text-center font-weight-bold">
                                          Waktu : 30 Menit
                                      </h6>
                                  </div>
                              </div>
                              <div class="row mb-2">
                                  <a href="<?= base_url('Test/pilgan/1') ?>"
                                      class="btn btn-success font-weight-bold mx-auto">
                                      ATTEMPT NOW</a>
                              </div>
                          </div>

                          <div class="container align-items-center mb-4" data-aos="fade-up">
                              <!-- Basic Card Example -->
                              <div class="card shadow mb-3 mx-auto" style="width: 500px">
                                  <div class="card-header text-center py-3">
                                      <h4 class="m-0 font-weight-bold text-primary">Essay</h4>
                                  </div>
                                  <div class="card-body">
                                      <img src="<?= base_url('assets/') ?>img/bg-01.jpg" class="card-img-top mb-4" />
                                      <!-- <p>
                                          soal essay, satu soal dikerjakan dalam waktu 30 menit
                                      </p> -->
                                      <h6 class="text-center font-weight-bold">
                                          Waktu : 30 Menit
                                      </h6>
                                  </div>
                              </div>
                              <div class="row mb-2">
                                  <a href="<?= base_url('Test/essay') ?>"
                                      class="btn btn-success font-weight-bold mx-auto">ATTEMPT NOW</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- /.container-fluid -->
          </div>
          <!-- End of Main Content -->

      </div>
      <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->