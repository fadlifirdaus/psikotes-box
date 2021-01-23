 <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h4>Psikotes-Box</h4>
            <p>Platform Psikotes Online No.1 Di Indonesia</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Additional Menu</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="<?= base_url('about/faq'); ?>">FAQ</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="<?= base_url('about/terms'); ?>">Terms & Condition</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="<?= base_url('about/privacy'); ?>">Privacy Policy</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="<?= base_url('about/security'); ?>">Security Policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Kramat Raya No.18<br>
              Salemba, Jakarta Pusat<br>
              DKI Jakarta <br>
              <strong>Phone:</strong> +62 812 1215 2011<br>
              <strong>Email:</strong> info.psikotesbox@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fab fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Input Email to subcribe our newsletter.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Psikotes-Box 2020</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
      -->
        Designed by <a href="#">Psikotes-Box Team</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/counterup/counterup.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/venobox/venobox.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/aos/aos.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/');?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/');?>js/sb-admin-2.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/'); ?>js/main.js"></script>
  <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });

        $('.form-check-input').on('click', function() {
            const menuId = $(this).data('menu');
            const roleId = $(this).data('role');

            $.ajax({
                url: "<?= base_url('admin/changeaccess'); ?>",
                type: 'post',
                data: {
                    menuId : menuId,
                    roleId : roleId
                },
                success: function() {
                    document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
                }
            });

        });
    </script>

</body>

</html>