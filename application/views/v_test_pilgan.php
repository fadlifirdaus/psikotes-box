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
                                <form action="#" method="POST" id="testPilgan">
                                    <!-- Basic Card Example -->
                                    <div class="card shadow mb-3 mx-auto" style="max-width: 800px">
                                        <div class="card-header">
                                            <h6 class="font-weight-bold my-auto text-primary d-inline">
                                                Soal Pilihan Ganda - <?php echo $soal->id ; ?>
                                            </h6>
                                            <!-- countdown -->
                                            <div class="btn-group float-right" role="group" aria-label="Basic example">
                                                <button id="waktu_jam" type="button" class="btn btn-success btn-sm"
                                                    disabled>
                                                    00
                                                </button>
                                                <button id="waktu_menit" type="button" class="btn btn-success btn-sm"
                                                    disabled>
                                                    00
                                                </button>
                                                <button id="waktu_detik" type="button" class="btn btn-success btn-sm"
                                                    disabled>
                                                    00
                                                </button>
                                            </div>
                                            <!-- end of countdown -->
                                        </div>

                                        <div class="card-body">
                                            <img src="<?= base_url('assets/img/pilgan/').$soal->gambar ?>"
                                                class="card-img-top mb-4" style="max-width: 500px; 
                                            <?php 
                                                 if($soal->topik != "gambar") echo "display:none"
                                            ?>;" />
                                            <p class="text-dark" /> <?php 
                                            echo $soal->pertanyaan ;
                                            ?> </p>
                                            <!-- pilihan -->

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pilganRadio"
                                                    id="pilganRadioA" value="<?=$jawaban[0]?>" />
                                                <label class="form-check-label" for="pilganRadioA"
                                                    value="<?= $jawaban[0]?>">
                                                    <?= $jawaban[0]?>
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pilganRadio"
                                                    id="pilganRadioB" value="<?=$jawaban['1']?>" />
                                                <label class="form-check-label" for="pilganRadioB"
                                                    value="<?= $jawaban['1'] ?>">
                                                    <?= $jawaban['1'] ?>
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pilganRadio"
                                                    id="pilganRadioC" value="<?=$jawaban['2']?>" />
                                                <label class="form-check-label" for="pilganRadioC"
                                                    value="<?= $jawaban['2'] ?>">
                                                    <?= $jawaban['2'] ?>
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pilganRadio"
                                                    id="pilganRadioD" value="<?=$jawaban['3']?>" />
                                                <label class="form-check-label" for="pilganRadioD"
                                                    value="<?= $jawaban['3'] ?>">
                                                    <?= $jawaban['3'] ?>
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pilganRadio"
                                                    id="pilganRadioE" value="<?= $jawaban['4'] ?>" />
                                                <label class="form-check-label" for="pilganRadioE"
                                                    value="<?= $jawaban['4'] ?>">
                                                    <?= $jawaban['4'] ?>
                                                </label>
                                            </div>
                                            <!-- end of plihan -->
                                        </div>
                                        <div class="card-footer d-flex justify-content-end">
                                            <button class="btn btn-success mr-3 <?php 
                                                if ($this->uri->segment(3) < 2) { echo 'd-none'; } 
                                                ?>" type="submit" formaction="<?= base_url('Test/pg_prev')?>">
                                                Prev</button>
                                            <button class="btn btn-success mr-3 <?php 
                                                if ($this->uri->segment(3) > 9) { echo 'd-none'; } 
                                                ?>" type="submit"
                                                formaction="<?= base_url('Test/pg_next')?>">Next</button>
                                            <button id="submit" class="btn btn-success <?php 
                                                if ($this->uri->segment(3) <= 9) { echo 'd-none'; } 
                                                ?>" type="submit"
                                                formaction="<?= base_url('Finish_pg')?>">Finish</button>
                                        </div>
                                        <!-- card body -->
                                    </div>
                                    <!-- card -->
                                </form>
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

    // Memperbarui hitungan mundur setiap 1 detik
    var x = setInterval(function() {

        // Untuk mendapatkan tanggal dan waktu hari ini
        var now = Date.now()
        // Temukan jarak antara sekarang dan tanggal hitung mundur
        var distance = <?php echo $_SESSION['pgEndTime']; ?> - now;
        // Perhitungan waktu untuk hari, jam, menit dan detik
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
        // console.log(distance);

        // Jika hitungan mundur selesai, tulis beberapa teks 
        if (distance < 0) {
            clearInterval(x);
            // document.getElementById("submit").submit();
            window.location.replace("http://localhost/psikotestbox/Finish_pg");
            alert("Timeout");
        }
    }, 1000);
    </script>
    <?php if(isset($_COOKIE['pgDistanceCountdown']) <= 0 ) { unset($_SESSION['pgStartTime']); } ?>