<?php
$resource_path=$this->config->item('resources_path');
$base_url=$this->config->item('app_url');?>

<!-- Footer -->
<div class="g-bg-black-opacity-0_9 g-color-white-opacity-0_8 g-py-60">
    <div class="container">
        <div class="row">
            <!-- Footer Content -->
            <div class="col-lg-3 col-md-6 g-mb-40 g-mb-0--lg">
                <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
                    <h2 class="u-heading-v2__title h6 text-uppercase mb-0">Tentang Kami</h2>
                </div>

                <p>Website Alumni Sekolah Tinggi Teknologi Adisutjipto adalah portal berita, tips, lowongan, agenda, dan sebagainya yang bermanfaat bagi alumni, mahasiswa dan seluruh keluarga besar Sekolah Tinggi Teknologi Adisutjipto Yogyakarta</p>
            </div>
            <!-- End Footer Content -->

            <!-- Footer Content -->
            <div class="col-lg-3 col-md-6 g-mb-40 g-mb-0--lg">
                <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
                    <h2 class="u-heading-v2__title h6 text-uppercase mb-0">Berita Terbaru</h2>
                </div>
                <?php foreach($news as $row):?>
                <article>
                    <h3 class="h6 g-mb-2">
                        <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#"><?php echo $row->title?></a>
                    </h3>
                    <div class="small g-color-white-opacity-0_6">
                        <?php
                        date_default_timezone_set('Asia/Jakarta');
                        $t = strtotime($row->date_created);
                        echo date('d M y, H:i',$t);
                        ?>
                    </div>
                </article>
                    <hr class="g-brd-white-opacity-0_1 g-my-10">
                <?php endforeach;?>
            </div>
            <!-- End Footer Content -->

            <!-- Footer Content -->
            <div class="col-lg-3 col-md-6 g-mb-40 g-mb-0--lg">
                <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
                    <h2 class="u-heading-v2__title h6 text-uppercase mb-0">Link Berguna</h2>
                </div>

                <nav class="text-uppercase1">
                    <ul class="list-unstyled g-mt-minus-10 mb-0">
                        <li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10">
                            <h4 class="h6 g-pr-20 mb-0">
                                <a class="g-color-white-opacity-0_8 g-color-white--hover" href="http://Jobstreet.co.id">Jobstreet.co.id</a>
                                <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
                            </h4>
                        </li>
                        <li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10">
                            <h4 class="h6 g-pr-20 mb-0">
                                <a class="g-color-white-opacity-0_8 g-color-white--hover" href="http://jobsdb.com">Jobsdb.com</a>
                                <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
                            </h4>
                        </li>
                        <li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10">
                            <h4 class="h6 g-pr-20 mb-0">
                                <a class="g-color-white-opacity-0_8 g-color-white--hover" href="http://rekrutmen.net">Rekrukment.net</a>
                                <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
                            </h4>
                        </li>
                        <li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10">
                            <h4 class="h6 g-pr-20 mb-0">
                                <a class="g-color-white-opacity-0_8 g-color-white--hover" href="http://openkerja.com">Openkerja.com</a>
                                <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
                            </h4>
                        </li>
                        <li class="g-pos-rel g-py-10">
                            <h4 class="h6 g-pr-20 mb-0">
                                <a class="g-color-white-opacity-0_8 g-color-white--hover" href="https://sscn.bkn.go.id/">Badan Kepegawaian Negara</a>
                                <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
                            </h4>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- End Footer Content -->

            <!-- Footer Content -->
            <div class="col-lg-3 col-md-6">
                <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
                    <h2 class="u-heading-v2__title h6 text-uppercase mb-0">Kontak Kami</h2>
                </div>

                <address class="g-bg-no-repeat g-font-size-12 mb-0" style="background-image: url(<?php echo $resource_path ?>images/map2.png);">
                    <!-- Location -->
                    <div class="d-flex g-mb-20">
                        <div class="g-mr-10">
                    <span class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-color-white-opacity-0_6">
                      <i class="fa fa-map-marker"></i>
                    </span>
                        </div>
                        <p class="mb-0">Jalan Janti Blok. R, Lanud Adisutjipto, Banguntapan, Bantul, Daerah Istimewa Yogyakarta 55198</p>
                    </div>
                    <!-- End Location -->

                    <!-- Phone -->
                    <div class="d-flex g-mb-20">
                        <div class="g-mr-10">
                    <span class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-color-white-opacity-0_6">
                      <i class="fa fa-phone"></i>
                    </span>
                        </div>
                        <p class="mb-0">(0274) 451262</p>
                    </div>
                    <!-- End Phone -->

                    <!-- Email and Website -->
                    <div class="d-flex g-mb-20">
                        <div class="g-mr-10">
                    <span class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-color-white-opacity-0_6">
                      <i class="fa fa-globe"></i>
                    </span>
                        </div>
                        <p class="mb-0">
                            <a class="g-color-white-opacity-0_8 g-color-white--hover" href="alumni@stta.ac.id">alumni@stta.ac.id</a>
                            <br>
                            <a class="g-color-white-opacity-0_8 g-color-white--hover" href="http://alumni.stta.ac.id">www.alumni.stta.ac.id</a>
                        </p>
                    </div>
                    <!-- End Email and Website -->
                </address>
            </div>
            <!-- End Footer Content -->
        </div>
    </div>
</div>
<!-- End Footer -->

<!-- Copyright Footer -->
<footer class="g-bg-gray-dark-v1 g-color-white-opacity-0_8 g-py-20">
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center text-md-left g-mb-10 g-mb-0--md">
                <div class="d-lg-flex">
                    <small class="d-block g-font-size-default g-mr-10 g-mb-10 g-mb-0--md">2017 © All Rights Reserved.</small>
                    <ul class="u-list-inline">
                        <li class="list-inline-item">
                            <a class="g-color-white-opacity-0_8 g-color-white--hover" href="http://alumni.stta.ac.id">Alumni</a>
                        </li>
                        <li class="list-inline-item">
                            <span>|</span>
                        </li>
                        <li class="list-inline-item">
                            <a class="g-color-white-opacity-0_8 g-color-white--hover" href="http://stta.ac.id">STTA</a>
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
<!-- End Copyright Footer -->
</main>
</body>

<!-- JS Global Compulsory -->
<script src="<?php echo $resource_path;?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo $resource_path;?>vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="<?php echo $resource_path;?>vendor/jquery.easing/js/jquery.easing.min.js"></script>
<script src="<?php echo $resource_path;?>vendor/tether.min.js"></script>
<script src="<?php echo $resource_path;?>vendor/bootstrap/bootstrap.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="<?php echo $resource_path;?>vendor/masonry/dist/masonry.pkgd.min.js"></script>
<script src="<?php echo $resource_path;?>vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo $resource_path;?>vendor/slick-carousel/slick/slick.js"></script>
<script src="<?php echo $resource_path;?>vendor/hs-megamenu/src/hs.megamenu.js"></script>

<!-- JS Unify -->
<script src="<?php echo $resource_path;?>js/hs.core.js"></script>
<script src="<?php echo $resource_path;?>js/components/hs.header.js"></script>
<script src="<?php echo $resource_path;?>js/helpers/hs.hamburgers.js"></script>
<script src="<?php echo $resource_path;?>js/components/hs.scroll-nav.js"></script>
<script src="<?php echo $resource_path;?>js/components/hs.carousel.js"></script>

<!-- JS Master Slider -->
<script src="<?php echo $resource_path;?>vendor/master-slider/source/assets/js/masterslider.min.js"></script>

<!-- JS Custom -->
<script src="<?php echo $resource_path;?>js/custom.js"></script>
<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {
        // Header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // Initialization of HSMegaMenu plugin
        $('.js-mega-menu').HSMegaMenu({
            event: 'hover',
            pageContainer: $('.container'),
            breakpoint: 991
        });
    });
</script>
</html>