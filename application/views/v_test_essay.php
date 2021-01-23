<body id="page-top">
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

                    <div class="row">
                        <div class="col-lg-12 d-lg-flex justify-content-around">
                            <div class="container align-items-center mb-4">
                                <!-- Basic Card Example -->
                                <div class="card shadow mb-3 mx-auto" style="max-width: 800px">
                                    <div class="card-header">
                                        <h6 class="font-weight-bold my-auto text-primary d-inline">
                                            Soal Essay
                                        </h6>
                                        <div class="btn-group float-right" role="group" aria-label="Basic example">
                                            <button id="waktu_jam" type="button" class="btn btn-success btn-sm"
                                                disabled>
                                                00
                                            </button>
                                            <button id="waktu_menit" type="button" class="btn btn-success btn-sm"
                                                disabled>
                                                30
                                            </button>
                                            <button id="waktu_detik" type="button" class="btn btn-success btn-sm"
                                                disabled>
                                                00
                                            </button>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <img src="<?= base_url('assets/');?>img/soal/essay1.png"
                                            class="card-img-top mb-4" />
                                        <p class="text-dark">
                                            <?php $soal->pertanyaan; ?>
                                            Tampilkan data yang memiliki type account "P" dan mengandung nomor handphone
                                            yang awalnya 0812
                                        </p>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Jawaban:</label>
                                            <form action="<?= base_url('Finish_essay')?>">
                                                <textarea class="form-control" id="jawabanEssay" name="jawabanEssay"
                                                    rows="5"></textarea>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- card body -->
                                </div>
                                <!-- card -->

                                <div class="row mb-2 mx-auto" style="max-width: 800px">
                                    <a href="<?= base_url('Finish_essay')?>"
                                        class="btn btn-success font-weight-bold ml-auto">
                                        Submit</a>
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



    <script>
    // Mengatur waktu akhir perhitungan mundur
    var countDownDate = new Date().getTime() + 30 * 60000;

    // Memperbarui hitungan mundur setiap 1 detik
    var x = setInterval(function() {

        // Untuk mendapatkan tanggal dan waktu hari ini
        var now = new Date().getTime();

        // Temukan jarak antara sekarang dan tanggal hitung mundur
        var distance = countDownDate - now;

        // Perhitungan waktu untuk hari, jam, menit dan detik
        // var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);


        // Keluarkan hasil dalam elemen dengan id = "demo"

        if (hours < 10) {
            document.getElementById("waktu_jam").innerHTML = "0" + hours;
        } else {

            document.getElementById("waktu_jam").innerHTML = hours;
        }

        if (minutes < 10) {
            document.getElementById("waktu_menit").innerHTML = "0" + minutes;
        } else {

            document.getElementById("waktu_menit").innerHTML = minutes;
        }

        if (seconds < 10) {

            document.getElementById("waktu_detik").innerHTML = "0" + seconds;
        } else {

            document.getElementById("waktu_detik").innerHTML = seconds;
        }

        // Jika hitungan mundur selesai, tulis beberapa teks 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
    </script>