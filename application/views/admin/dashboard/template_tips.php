<?php
$resource_path=$this->config->item('resources_path');
$base_url=$this->config->item('app_url');?>
<!DOCTYPE html>
<html>
<head>
    <!-- Title -->
    <title>Alumni - Sekolah Tinggi Teknologi Adisutjipto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?php echo $resource_path?>images/plane.png">

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto%3A700%2C300">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Raleway%3A400%2C800%2C500">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="<?php echo $resource_path;?>vendor/bootstrap/bootstrap.min.css">

    <!-- CSS Unify -->
    <link rel="stylesheet" href="<?php echo $resource_path;?>css/unify.css">

    <style>
        .u-header__section--light .navbar-nav:not([class*="u-main-nav-v"])
        .nav-link,
        .u-header__section--light--shift.js-header-change-moment
        .navbar-nav:not([class*="u-main-nav-v"]) .nav-link {
            color: rgba(255, 255, 255, 0.8);
        }

        .u-header__section--light .navbar-nav:not([class*="u-main-nav-v"])
        .dropdown-item .nav-link {
            color: #555555;
        }

        .g-brd-primary {
            border-color: #0275d8 !important;
        }

        a {
            color: #0275d8;
            outline: none;
        }

        a:focus,
        a:hover {
            color: #ab1713;
        }

        .g-color-primary--hover {
            color: #1f58ab;
        }

        .u-pagination-v1-4--active {
            color: #fff;
            background-color: #3398dc;
            border-color: #3398dc;
        }

    </style>

    <?php
    foreach($css_files as $file): ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>

</head>
<body>
<!-- Header -->

<header id="js-header" class="u-header u-header--static u-shadow-v1-1">
    <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10" style="background-color: #3398dc !important;">
        <nav class="js-mega-menu navbar navbar-toggleable-md">
            <div class="container">
                <!-- Responsive Toggle Button -->
                <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-right-0" type="button"
                        aria-label="Toggle navigation"
                        aria-expanded="false"
                        aria-controls="navBar"
                        data-toggle="collapse"
                        data-target="#navBar">
                <span class="hamburger hamburger--slider">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </span>
                </button>
                <!-- End Responsive Toggle Button -->

                <!-- Logo -->
                <a href="<?php echo $base_url ?>/adminx" class="navbar-brand" style="display: flex">
                    <img src="<?php echo $resource_path;?>images/logo/stta.png" alt="Image Description" height="40">
                    <span style="font-size: 90%; color: rgba(255, 255, 255, 0.8); font-weight: 700; align-self: center; margin-left: 1rem;">Admin Alumni STTA</span>
                </a>
                <!-- End Logo -->

                <!-- Navigation -->
                <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg g-mr-40--lg" id="navBar">
                    <ul class="navbar-nav text-uppercase g-font-weight-600 ml-auto">
                        <!-- beranda -->
                        <li class="nav-item g-mx-10--lg g-mx-15--xl">
                            <a href="<?php echo $base_url;?>" class="nav-link g-py-7 g-px-0">Logout</a>
                        </li>
                        <!-- End beranda -->

                    </ul>
                </div>
                <!-- End Navigation -->
            </div>
        </nav>
    </div>
</header>
<!-- End Header -->
<section class="g-pt-50 g-bg-secondary">
    <div class="container">
        <div class="row">
            <!-- Profile Sidebar -->
            <div class="col-lg-3 g-mb-50 g-mb-0--lg">
                <!-- User Image -->
                <div class="u-block-hover g-pos-rel">
                    <figure>
                        <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="<?php echo $resource_path ?>images/user.png" alt="Image User">
                    </figure>
                    <span class="g-pos-abs g-top-20 g-left-0">
                      <a class="btn btn-sm u-btn-primary rounded-0" href="#"><?php echo $this->session->userdata('name')?></a>
                    </span>
                </div>
                <!-- User Image -->
                <!-- Sidebar Navigation -->
                <div class="list-group list-group-border-0 g-mb-40">
                    <!-- Overall -->
                    <a href="<?php echo $base_url?>/adminx/dashboard" class="list-group-item list-group-item-action justify-content-between">
                        <span><i class="icon-home g-pos-rel g-top-1 g-mr-8"></i>Dashboard</span>
                    </a>
                    <!-- End Overall -->
                    <a href="<?php echo $base_url?>/adminx/slider" class="list-group-item list-group-item-action justify-content-between">
                        <span><i class="icon-layers g-pos-rel g-top-1 g-mr-8"></i>Slider</span>
                    </a>
                    <a href="<?php echo $base_url?>/adminx/pages" class="list-group-item list-group-item-action justify-content-between">
                        <span><i class="icon-layers g-pos-rel g-top-1 g-mr-8"></i>Pages</span>
                    </a>

                    <!-- Profile -->
                    <a href="<?php echo $base_url?>/adminx/tips" class="list-group-item active justify-content-between">
                        <span><i class="icon-cursor g-pos-rel g-top-1 g-mr-8"></i>Tips</span>
                    </a>
                    <!-- End Profile -->

                    <!-- Users Contacts -->
                    <a href="<?php echo $base_url?>/adminx/lowongan" class="list-group-item list-group-item-action justify-content-between">
                        <span><i class="icon-notebook g-pos-rel g-top-1 g-mr-8"></i>Lowongan</span>
                    </a>
                    <!-- End Users Contacts -->

                    <!-- Comments -->
                    <a href="<?php echo $base_url?>//adminx/agenda" class="list-group-item list-group-item-action justify-content-between">
                        <span><i class="icon-bubbles g-pos-rel g-top-1 g-mr-8"></i>Agenda</span>
                    </a>
                    <!-- End Comments -->

                    <!-- Settings -->
                    <a href="<?php echo $base_url?>/adminx/news" class="list-group-item list-group-item-action justify-content-between">
                        <span><i class="icon-settings g-pos-rel g-top-1 g-mr-8"></i>News</span>
                    </a>
                    <!-- End Settings -->

                    <a href="<?php echo $base_url?>/adminx/profil_alumni" class="list-group-item list-group-item-action justify-content-between">
                        <span><i class="icon-settings g-pos-rel g-top-1 g-mr-8"></i>Alumni Profil</span>
                    </a>

                    <a href="<?php echo $base_url?>/adminx/" class="list-group-item list-group-item-action justify-content-between">
                        <span><i class="icon-settings g-pos-rel g-top-1 g-mr-8"></i>Video Alumni</span>
                    </a>
                    <a href="<?php echo $base_url?>/adminx/" class="list-group-item list-group-item-action justify-content-between">
                        <span><i class="icon-settings g-pos-rel g-top-1 g-mr-8"></i>Data Alumni</span>
                    </a>

                    <a href="<?php echo $base_url?>/adminx/" class="list-group-item list-group-item-action justify-content-between">
                        <span><i class="icon-settings g-pos-rel g-top-1 g-mr-8"></i>Kuisioner Alumni</span>
                    </a>
                    <a href="<?php echo $base_url?>/adminx/administrator" class="list-group-item list-group-item-action justify-content-between">
                        <span><i class="icon-settings g-pos-rel g-top-1 g-mr-8"></i>Administrator</span>
                    </a>
                </div>
                <!-- End Sidebar Navigation -->

            </div>
            <!-- End Profile Sidebar -->

            <!-- Profle Content -->
            <div class="col-lg-9">

                <!-- Box Shadow -->
                <h3 class="h3 g-font-weight-300 g-mb-20"><strong>TIPS</strong></h3>
<!--                <div class="u-shadow-v1-3 g-line-height-2 g-pa-40 g-mb-30" role="alert">-->
                    <?php echo $output; ?>
<!--                </div>-->
                <!-- End Box Shadow -->

            </div>
            <!-- End Profle Content -->
        </div>
    </div>
</section>
<!-- Copyright Footer -->
<footer class="g-bg-gray-dark-v1 g-color-white-opacity-0_8 g-py-20">
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center text-md-left g-mb-10 g-mb-0--md">
                <div class="d-lg-flex">
                    <small class="d-block g-font-size-default g-mr-10 g-mb-10 g-mb-0--md">2017 © All Rights Reserved.</small>
                    <ul class="u-list-inline">
                        <li class="list-inline-item">
                            <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#">Alumni STTA</a>
                        </li>
                        <li class="list-inline-item">
                            <span>|</span>
                        </li>
                        <li class="list-inline-item">
                            <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#">STTA</a>
                        </li>
                        <li class="list-inline-item">
                            <span>|</span>
                        </li>
                        <li class="list-inline-item">
                            <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#">License</a>
                        </li>
                        <li class="list-inline-item">
                            <span>|</span>
                        </li>
                        <li class="list-inline-item">
                            <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#">Support</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 align-self-center">
                <ul class="list-inline text-center text-md-right mb-0">
                    <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Facebook">
                        <a href="#" class="g-color-white-opacity-0_5 g-color-white--hover">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Skype">
                        <a href="#" class="g-color-white-opacity-0_5 g-color-white--hover">
                            <i class="fa fa-skype"></i>
                        </a>
                    </li>
                    <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Linkedin">
                        <a href="#" class="g-color-white-opacity-0_5 g-color-white--hover">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                    <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Pinterest">
                        <a href="#" class="g-color-white-opacity-0_5 g-color-white--hover">
                            <i class="fa fa-pinterest"></i>
                        </a>
                    </li>
                    <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Twitter">
                        <a href="#" class="g-color-white-opacity-0_5 g-color-white--hover">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Dribbble">
                        <a href="#" class="g-color-white-opacity-0_5 g-color-white--hover">
                            <i class="fa fa-dribbble"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
<script src="<?php echo $resource_path;?>vendor/bootstrap/bootstrap.min.js"></script>
</html>
