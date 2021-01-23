<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column py-4" style="margin-top : 100px">
            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container d-flex">
                    <div class="card shadow mb-4 mx-auto w-60">
                        <div class="card-body">
                            <div class="text-center">
                                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 20rem;"
                                    src="<?= base_url('assets/img/')?>Finish.svg" alt="">
                            </div>
                            <h2 class="text-primary text-center"><?= $profil->name; ?>, Nilai Psikotest
                                Pilihan
                                Ganda Kamu adalah:</h2>
                            <h1 class="font-weight-bold text-primary text-center"><?= $nilai; ?></h1>
                        </div>
                        <a href="<?= base_url('Test/print_pdf') ?>"
                            class="btn btn-primary font-weight-bold mx-auto mb-2">Print hasil ke PDF</a>
                        <a href="<?= base_url('Test/essay') ?>"
                            class="btn btn-success font-weight-bold mx-auto mb-2">Lanjut
                            Ke
                            Test
                            Essay</a>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->