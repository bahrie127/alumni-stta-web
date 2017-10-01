<?php
$resource_path=$this->config->item('resources_path');
$base_url=$this->config->item('app_url');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Alumni - Sekolah Tinggi Teknologi Adisutjipto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo $resource_path;?>css/datepicker.css">
    <link rel="shortcut icon" href="//s3.amazonaws.com/wrapbootstrap/live/imgs/favicon.ico">

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto%3A700%2C300">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Raleway%3A400%2C800%2C500">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="<?php echo $resource_path;?>vendor/bootstrap/bootstrap.min.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?php echo $resource_path;?>vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $resource_path;?>vendor/icon-etlinefont/style.css">
    <link rel="stylesheet" href="<?php echo $resource_path;?>vendor/icon-hs/style.css">
    <link rel="stylesheet" href="<?php echo $resource_path;?>vendor/icon-line-pro/style.css">

    <link rel="stylesheet" href="<?php echo $resource_path;?>vendor/animate.css">
    <link rel="stylesheet" href="<?php echo $resource_path;?>vendor/slick-carousel/slick/slick.css">

    <link rel="stylesheet" href="<?php echo $resource_path;?>vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="<?php echo $resource_path;?>vendor/hamburgers/hamburgers.min.css">

    <!-- CSS Unify -->
    <link rel="stylesheet" href="<?php echo $resource_path;?>css/unify.css">

    <!-- Master Slider -->
    <link rel="stylesheet" href="<?php echo $resource_path;?>vendor/master-slider/source/assets/css/masterslider.main.css">
    <link rel="stylesheet" href="<?php echo $resource_path;?>css/gallery/style.css">

</head>

<body>
<main>
    <!-- Header -->
    <header id="js-header" class="u-header u-header--sticky-top u-header--toggle-section u-header--change-appearance"
            data-header-fix-moment="300">
        <div class="u-header__section u-header__section--dark g-bg-primary-gradient-opacity-v1 g-transition-0_3 g-py-10"
             data-header-fix-moment-exclude="g-py-10"
             data-header-fix-moment-classes="g-py-0">
            <nav class="navbar navbar-toggleable-md">
                <div class="container">
                    <!-- Responsive Toggle Button -->
                    <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-right-0" type="button"
                            aria-label="Toggle navigation"
                            aria-expanded="false"
                            aria-controls="navBar"
                            data-toggle="collapse"
                            data-target="#navBar"
                    >
              <span class="hamburger hamburger--slider">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </span>
                    </button>
                    <!-- End Responsive Toggle Button -->

                    <!-- Logo -->
                    <a href="#" class="navbar-brand">
                        <img src="<?php echo $resource_path;?>images/logo/stta.png" alt="Image Description" height="100px">
                    </a>
                    <!-- End Logo -->


                <!-- Navigation -->
                <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg g-mr-40--lg" id="navBar">
                    <ul class="navbar-nav text-uppercase g-font-weight-600 ml-auto">
                        <!-- beranda -->
                        <li class="nav-item g-mx-10--lg g-mx-15--xl">
                            <a href="<?php echo $base_url;?>" class="nav-link g-py-7 g-px-0">BERANDA</a>
                        </li>
                        <!-- End beranda -->

                        <!-- tentang kami -->
                        <li class="nav-item hs-has-sub-menu g-mx-10--lg g-mx-15--xl">
                            <a id="nav-link-pages" class="nav-link g-py-7 g-px-0" href="#"
                               aria-haspopup="true"
                               aria-expanded="false"
                               aria-controls="nav-submenu-pages"
                            >TENTANG KAMI</a>

                            <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-20 g-mt-10--lg--scrolling" id="nav-submenu-pages"
                                aria-labelledby="nav-link-pages">

                                <!-- list -->
                                <li class="dropdown-item"><a class="nav-link" href="#">PROFIL HUBUNGAN ALUMNI</a></li>
                                <li class="dropdown-item"><a class="nav-link" href="#">STRUKTUR ORGANISASI</a></li>
                                <li class="dropdown-item"><a class="nav-link" href="#">DIREKTORI STAF</a></li>
                                <!-- End list -->

                            </ul>
                        </li>
                        <!-- End tentang kami -->

                        <!-- layanan -->
                        <li class="nav-item hs-has-sub-menu g-mx-10--lg g-mx-15--xl">
                            <a id="nav-link--blog" class="nav-link g-py-7 g-px-0" href="#"
                               aria-haspopup="true"
                               aria-expanded="false"
                               aria-controls="nav-submenu--blog"
                            >LAYANAN</a>

                            <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-20 g-mt-10--lg--scrolling" id="nav-submenu--blog"
                                aria-labelledby="nav-link--blog">
                                <li class="dropdown-item hs-has-sub-menu">
                                    <a id="nav-link--pages--blog--minimal" class="nav-link" href="#"
                                       aria-haspopup="true"
                                       aria-expanded="false"
                                       aria-controls="nav-submenu--pages--blog--minimal"
                                    >ALUMNI & MAHASISWA</a>

                                    <!-- Submenu (level 2) -->
                                    <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2" id="nav-submenu--pages--blog--minimal"
                                        aria-labelledby="nav-link--pages--blog--minimal">
                                        <li class="dropdown-item"><a class="nav-link" href="#">PEMBUATAN KARTU ALUMNI</a></li>
                                        <li class="dropdown-item"><a class="nav-link" href="#">LEGALISASI IJAZAH & TRANSKRIP NILAI</a></li>
                                        <li class="dropdown-item"><a class="nav-link" href="#">DONASI BEASISWA ALUMNI UGM</a></li>

                                    </ul>
                                    <!-- End Submenu (level 2) -->
                                </li>

                                <li class="dropdown-item hs-has-sub-menu">
                                    <a id="nav-link--pages--blog--grid-bg" class="nav-link" href="#"
                                       aria-haspopup="true"
                                       aria-expanded="false"
                                       aria-controls="nav-submenu--pages--blog--grid-bg"
                                    >KARIR</a>

                                    <!-- Submenu (level 2) -->
                                    <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2" id="nav-submenu--pages--blog--grid-bg"
                                        aria-labelledby="nav-link--pages--blog--grid-bg">
                                        <li class="dropdown-item"><a class="nav-link" href="#">Instansi atau Perusahaan</a></li>
                                        <li class="dropdown-item"><a class="nav-link" href="#">LOWONGAN KERJA</a></li>
                                    </ul>
                                    <!-- End Submenu (level 2) -->
                                </li>
                            </ul>
                        </li>
                        <!-- End layanan -->

                        <!--  alumni awards -->
                        <li class="nav-item hs-has-sub-menu g-mx-10--lg g-mx-15--xl">
                            <a id="nav-link--blog" class="nav-link g-py-7 g-px-0" href="#"
                               aria-haspopup="true"
                               aria-expanded="false"
                               aria-controls="nav-submenu--blog"
                            >ALUMNI AWARDS</a>

                            <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-20 g-mt-10--lg--scrolling" id="nav-submenu--blog"
                                aria-labelledby="nav-link--blog">
                                <li class="dropdown-item"><a class="nav-link" href="#">TENTANG ALUMNI AWARDS</a></li>
                                <li class="dropdown-item hs-has-sub-menu">
                                    <a id="nav-link--pages--blog--minimal" class="nav-link" href="#"
                                       aria-haspopup="true"
                                       aria-expanded="false"
                                       aria-controls="nav-submenu--pages--blog--minimal"
                                    >PEMENANG</a>

                                    <!-- Submenu (level 2) -->
                                    <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2" id="nav-submenu--pages--blog--minimal"
                                        aria-labelledby="nav-link--pages--blog--minimal">
                                        <li class="dropdown-item"><a class="nav-link" href="#">2017</a></li>
                                        <li class="dropdown-item"><a class="nav-link" href="#">2016</a></li>
                                        <li class="dropdown-item"><a class="nav-link" href="#">2015</a></li>
                                        <li class="dropdown-item"><a class="nav-link" href="#">2014</a></li>
                                        <li class="dropdown-item"><a class="nav-link" href="#">2013</a></li>
                                        <li class="dropdown-item"><a class="nav-link" href="#">2012</a></li>


                                    </ul>
                                    <!-- End Submenu (level 2) -->
                                </li>

                            </ul>
                        </li>
                        <!--  end alumni awards -->

                        <!--  tracer study -->
                        <li class="nav-item g-mx-10--lg g-mx-15--xl">
                            <a href="<?php echo $base_url;?>" class="nav-link g-py-7 g-px-0">TRACER STUDY</a>
                        </li>
                        <!--  end tracer study -->

<!--                        <!-- tetap terhubung -->-->
<!--                        <li class="nav-item hs-has-sub-menu g-mx-10--lg g-mx-15--xl">-->
<!--                            <a id="nav-link-pages" class="nav-link g-py-7 g-px-0" href="#"-->
<!--                               aria-haspopup="true"-->
<!--                               aria-expanded="false"-->
<!--                               aria-controls="nav-submenu-pages"-->
<!--                            >TETAP TERHUBUNG</a>-->
<!---->
<!--                            <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-20 g-mt-10--lg--scrolling" id="nav-submenu-pages"-->
<!--                                aria-labelledby="nav-link-pages">-->
<!---->
<!--                                <!-- list -->-->
<!--                                <li class="dropdown-item"><a class="nav-link" href="#">KONTAK KAMI</a></li>-->
<!--                                <li class="dropdown-item"><a class="nav-link" href="#">FAKULTAS & SEKOLAH</a></li>-->
<!--                                <li class="dropdown-item"><a class="nav-link" href="#">MEDIA SOSIAL & HOTLINE SERVICE</a></li>-->
<!--                                <li class="dropdown-item"><a class="nav-link" href="#">KELUARGA ALUMNI STTA</a></li>-->
<!--                                <!-- End list -->-->
<!---->
<!--                            </ul>-->
<!--                        </li>-->
                        <!-- End tetap terhubung -->

                        <li class="nav-item hs-has-sub-menu active g-mx-20--lg">
                            <a href="#" class="nav-link g-px-0" id="nav-link-1"
                               aria-haspopup="true"
                               aria-expanded="false"
                               aria-controls="nav-submenu-1"
                            >Pages</a>

                            <!-- Submenu -->
                            <ul class="hs-sub-menu list-unstyled g-text-transform-none g-brd-top g-brd-primary g-brd-top-2 g-min-width-200 g-mt-20 g-mt-10--lg--scrolling" id="nav-submenu-1"
                                aria-labelledby="nav-link-1">
                                <li class="dropdown-item"><a class="nav-link g-px-0" href="#">Page 1</a></li>
                                <li class="dropdown-item hs-has-sub-menu active">
                                    <a id="nav-link-2" class="nav-link g-px-0" href="#"
                                       aria-haspopup="true"
                                       aria-expanded="false"
                                       aria-controls="nav-submenu-2"
                                    >Page 2</a>

                                    <!-- Submenu (level 2) -->
                                    <ul class="hs-sub-menu list-unstyled g-brd-top g-brd-primary g-brd-top-2 g-min-width-200 g-my-2" id="nav-submenu-2"
                                        aria-labelledby="nav-link-2">
                                        <li class="dropdown-item active"><a class="nav-link g-px-0" href="#">Page 2-1</a></li>
                                        <li class="dropdown-item"><a class="nav-link g-px-0" href="#">Page 2-2</a></li>
                                        <li class="dropdown-item"><a class="nav-link g-px-0" href="#">Page 2-3</a></li>
                                        <li class="dropdown-item"><a class="nav-link g-px-0" href="#">Page 2-4</a></li>
                                        <li class="dropdown-item"><a class="nav-link g-px-0" href="#">Page 2-5</a></li>
                                    </ul>
                                    <!-- End Submenu (level 2) -->
                                </li>
                                <li class="dropdown-item"><a class="nav-link g-px-0" href="#">Page 3</a></li>
                                <li class="dropdown-item"><a class="nav-link g-px-0" href="#">Page 4</a></li>
                                <li class="dropdown-item"><a class="nav-link g-px-0" href="#">Page 5</a></li>
                                <li class="dropdown-item"><a class="nav-link g-px-0" href="#">Page 6</a></li>
                                <li class="dropdown-item"><a class="nav-link g-px-0" href="#">Page 7</a></li>
                            </ul>
                            <!-- End Submenu -->
                        </li>
                    </ul>
                </div>
                <!-- End Navigation -->
            </div>
        </nav>
    </div>
</header>
<!-- End Header -->