<?php
$resource_path=$this->config->item('base_url').$this->config->item('resources_path');
$base_url=$this->config->item('base_url')."index.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Alumni - Sekolah Tinggi Teknologi Adisutjipto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
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

        .title2 {
            font-family: "Montserrat",Helvetica,Arial,sans-serif;
            font-size: 24px;
            font-weight: 600;
            letter-spacing: 1px;
            color: rgb(0, 0, 0);
            padding: 5px 0 0 0;
            text-transform: uppercase;
            text-shadow: 0 0 1px rgba(0, 0, 0, 0.1);
            border-bottom-width: 3px;
            border-bottom-style: solid;
            border-bottom-color: #3398dc;
        }

        .tpb-custom-row-rilis {
            background-image: url(https://airbus-h.assetsadobe2.com/is/image/content/dam/events/airshows/A350-900_RR_Garuda.jpg?wid=1072&fit=fit,1) !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
            background-position: center !important;
            background-color: #073c64 !important;
            border-style: none !important;
            margin-right: 1px !important;
            margin-bottom: 0px !important;
            margin-left: 1px !important;
            padding-top: 30px !important;
            padding-bottom: 10px !important;
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

</head>

<body>
<main>
<!-- Header -->
<!--<header id="js-header" class="u-header u-header--static u-shadow-v1-1" style="position: fixed;top: 0;">-->
    <header id="js-header" class="u-header u-header--static u-shadow-v1-1">
   <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10" style="background-color: #3398dc !important;">
<!--        <div class="u-header__section u-header__section--dark g-bg-primary g-transition-0_3 g-py-10" style="background-repeat: repeat-x;background-image: linear-gradient(150deg, #72c02c, rgba(51, 152, 220, 0.7/**/));}">-->
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
                <a href="<?php echo $base_url ?>" class="navbar-brand" style="display: flex">
                    <img src="<?php echo $resource_path;?>images/logo/stta.png" alt="Image Description" height="75">
                    <span style="font-size: 90%; color: rgba(255, 255, 255, 0.8); font-weight: 700; align-self: center; margin-left: 1rem;">Alumni<br>Sekolah Tinggi <br>Teknologi Adisutjipto</span>
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
                                <li class="dropdown-item"><a class="nav-link" href="<?php echo $base_url ?>/detail/page">PROFIL HUBUNGAN ALUMNI</a></li>
                                <li class="dropdown-item"><a class="nav-link" href="<?php echo $base_url ?>/detail/page">STRUKTUR ORGANISASI</a></li>
                                <li class="dropdown-item"><a class="nav-link" href="<?php echo $base_url ?>/detail/page">DIREKTORI STAF</a></li>
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
                                        <li class="dropdown-item"><a class="nav-link" href="<?php echo $base_url ?>/detail/page">PEMBUATAN KARTU ALUMNI</a></li>
                                        <li class="dropdown-item"><a class="nav-link" href="<?php echo $base_url ?>/detail/page">LEGALISASI IJAZAH & TRANSKRIP NILAI</a></li>
                                        <li class="dropdown-item"><a class="nav-link" href="<?php echo $base_url ?>/detail/page">DONASI BEASISWA ALUMNI UGM</a></li>

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
                                        <li class="dropdown-item"><a class="nav-link" href="<?php echo $base_url ?>/detail/page">Instansi atau Perusahaan</a></li>
                                        <li class="dropdown-item"><a class="nav-link" href="<?php echo $base_url ?>/detail/page">LOWONGAN KERJA</a></li>
                                    </ul>
                                    <!-- End Submenu (level 2) -->
                                </li>
                            </ul>
                        </li>
                        <!-- End layanan -->

                        <!--  alumni awards
                        <li class="nav-item hs-has-sub-menu g-mx-10--lg g-mx-15--xl">
                            <a id="nav-link--blog" class="nav-link g-py-7 g-px-0" href="#"
                               aria-haspopup="true"
                               aria-expanded="false"
                               aria-controls="nav-submenu--blog"
                            >ALUMNI AWARDS</a>

                            <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-20 g-mt-10--lg--scrolling" id="nav-submenu--blog"
                                aria-labelledby="nav-link--blog">
                                <li class="dropdown-item"><a class="nav-link" href="<?php echo $base_url ?>/detail/page">TENTANG ALUMNI AWARDS</a></li>
                                <li class="dropdown-item hs-has-sub-menu">
                                    <a id="nav-link--pages--blog--minimal" class="nav-link" href="#"
                                       aria-haspopup="true"
                                       aria-expanded="false"
                                       aria-controls="nav-submenu--pages--blog--minimal"
                                    >PEMENANG</a>

                                    <!-- Submenu (level 2)
                                    <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2" id="nav-submenu--pages--blog--minimal"
                                        aria-labelledby="nav-link--pages--blog--minimal">
                                        <li class="dropdown-item"><a class="nav-link" href="<?php echo $base_url ?>/detail/page">2017</a></li>
                                        <li class="dropdown-item"><a class="nav-link" href="<?php echo $base_url ?>/detail/page">2016</a></li>
                                        <li class="dropdown-item"><a class="nav-link" href="<?php echo $base_url ?>/detail/page">2015</a></li>
                                        <li class="dropdown-item"><a class="nav-link" href="<?php echo $base_url ?>/detail/page">2014</a></li>
                                        <li class="dropdown-item"><a class="nav-link" href="<?php echo $base_url ?>/detail/page">2013</a></li>
                                        <li class="dropdown-item"><a class="nav-link" href="<?php echo $base_url ?>/detail/page">2012</a></li>


                                    </ul>
                                    <!-- End Submenu (level 2)
                                </li>

                            </ul>
                        </li>
                        <!--  end alumni awards -->

                        <!--  tracer study -->
                        <li class="nav-item g-mx-10--lg g-mx-15--xl">
                            <a href="<?php echo $base_url ?>/detail/page" class="nav-link g-py-7 g-px-0">TRACER STUDY</a>
                        </li>
                        <!--  end tracer study -->

                        <!-- tetap terhubung -->
                        <li class="nav-item hs-has-sub-menu g-mx-10--lg g-mx-15--xl">
                            <a id="nav-link-pages" class="nav-link g-py-7 g-px-0" href="#"
                               aria-haspopup="true"
                               aria-expanded="false"
                               aria-controls="nav-submenu-pages"
                            >TETAP TERHUBUNG</a>

                            <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-20 g-mt-10--lg--scrolling" id="nav-submenu-pages"
                                aria-labelledby="nav-link-pages">

                                <!-- list -->
                                <li class="dropdown-item"><a class="nav-link" href="<?php echo $base_url ?>/detail/page">KONTAK KAMI</a></li>
                                <li class="dropdown-item"><a class="nav-link" href="<?php echo $base_url ?>/detail/page">FAKULTAS & SEKOLAH</a></li>
                                <li class="dropdown-item"><a class="nav-link" href="<?php echo $base_url ?>/detail/page">MEDIA SOSIAL & HOTLINE SERVICE</a></li>
                                <li class="dropdown-item"><a class="nav-link" href="<?php echo $base_url ?>/detail/page">KELUARGA ALUMNI STTA</a></li>
                                <!-- End list -->

                            </ul>
                        </li>
                        <!-- End tetap terhubung -->
                    </ul>
                </div>
                <!-- End Navigation -->
            </div>
        </nav>
    </div>
</header>
<!-- End Header -->