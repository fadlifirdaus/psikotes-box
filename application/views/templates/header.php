<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Psikotes-Box</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?=base_url('assets/');?>img/favicon.png" rel="icon">
    <link href="<?=base_url('assets/');?>img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="<?=base_url('assets/');?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/');?>vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/');?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/');?>vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/');?>vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/');?>vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?=base_url('assets/');?>vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/');?>vendor/aos/aos.css" rel="stylesheet">
    <link href="<?=base_url('assets/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />

    <!-- Template Main CSS File -->
    <link href="<?=base_url('assets/');?>css/style.css" rel="stylesheet">

    <!-- Custom fonts for this template-->

    <!-- Custom styles for this template-->
    <link href="<?=base_url('assets/');?>css/sb-admin-2.min.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: BizPage - v3.1.1
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">

        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-xl-11 d-flex align-items-center">
                    <h1 class="logo mr-auto"><img width="30px" height="30px"
                            src="<?=base_url('assets/');?>img/apple-touch-icon.jpeg"><a
                            href="<?=base_url('Dashboard');?>">
                            Psikotes-Box</a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                    <nav class="nav-menu d-none d-lg-block">
                        <ul>
                            <li class="active"><a href="<?=base_url('dashboard');?>">Home</a></li>
                            <li><a href="<?=base_url('test');?>">Psikotes</a></li>
                            <li><a href="<?=base_url('about');?>">About</a></li>
                            <?php
//here we check if session `username` is exist. so it means that the current user is logged in correctly
if ($this->session->userdata('is_login')): ?>
                            <li class="drop-down"><a href="<?=base_url('auth');?>"><?=$userx;?></a>
                                <ul>
                                    <li><a href="<?=base_url('user');?>">Profile</a></li>
                                    <li><a href="<?=base_url('user/edit');?>">Edit Profile</a></li>
                                    <li><a href="<?=base_url('user/changepassword');?>">Change Password</a></li>
                                    <li><a href="<?=base_url('auth/logout');?>">Logout</a></li>
                                </ul>
                            </li>
                            <?php else: ?>
                            <li><a href="<?=base_url('auth/');?>">Login</a></li>
                            <?php endif;?>
                        </ul>
                    </nav><!-- .nav-menu -->
                </div>
            </div>

        </div>
    </header><!-- End Header -->