<?php
$resource_path=$this->config->item('base_url').$this->config->item('resources_path');
$base_url=$this->config->item('base_url')."index.php";?>
<!-- News Content -->
<section class="g-pt-50 g-pb-100 g-bg-secondary">
    <div class="container">
        <div class="row g-mb-60">
            <!-- Articles Content -->
            <div class="col-lg-9 g-mb-50 g-mb-0--lg">
                <article class="g-mb-60">
                    <header class="g-mb-30">
                        <h2 class="h1 g-mb-15">REUNI AKBAR SEKOLAH TINGGI TEKNOLOGI ADISUTJIPTO 2017 </h2>

                        <ul class="list-inline d-sm-flex g-color-gray-dark-v4 mb-0">
                            <li class="list-inline-item">
                                <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#">Mike Coolman</a>
                            </li>
                            <li class="list-inline-item g-mx-10">/</li>
                            <li class="list-inline-item">
                                July 20, 2017
                            </li>
                        </ul>

                        <hr class="g-brd-gray-light-v4 g-my-15">

                        <ul class="list-inline text-uppercase mb-0">
                            <li class="list-inline-item g-mr-10">
                                <a class="btn u-btn-facebook g-font-size-12 rounded g-px-20--sm g-py-10" href="#">
                                    <i class="fa fa-facebook g-mr-5--sm"></i> <span class="hidden-xs-down">Share on Facebook</span>
                                </a>
                            </li>
                            <li class="list-inline-item g-mr-10">
                                <a class="btn u-btn-twitter g-font-size-12 rounded g-px-20--sm g-py-10" href="#">
                                    <i class="fa fa-twitter g-mr-5--sm"></i> <span class="hidden-xs-down">Tweet on Twitter</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn u-btn-lightred g-font-size-12 rounded g-py-10" href="#">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </header>

                    <div class="g-font-size-16 g-line-height-1_8 g-mb-30">
                        <div class="g-bg-gray-light-v5">
                        <p>Di umumkan kepada seluruh Alumni Sekolah Tinggi Teknologi Adisutjipto semua angkatan, bahwa STTA mengadakan REUNI AKBAR tahun 2017,
                            <a title="Silahkan Download" href="#">
                                Silahkan Download</a><
                            /p>
                        <p>Cara Pendaftaran :</p>
                        <ol>
                            <li>klik <a>www.stiesia.ac.id</a></li>
                            <li>klik menu reuni akbar stiesia 2016</li>
                            <li>isi Form Pendaftaran Reuni Akbar Alumni</li>
                            <li>klik Simpan</li>
                        </ol>
                        </div>
                        <img class="img-fluid w-100" src="<?php echo $resource_path ?>images/img5.jpg" alt="Image Description">
                    </div>

                    <!-- Sources & Tags -->
                    <div class="g-mb-30">
                        <h6 class="g-color-gray-dark-v1">
                            <strong class="g-mr-5">Tags:</strong>
                            <a class="u-tags-v1 g-font-size-12 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15 g-mr-5" href="#">Business</a>
                            <a class="u-tags-v1 g-font-size-12 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15 g-mr-5" href="#">SaaS</a>
                            <a class="u-tags-v1 g-font-size-12 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15 g-mr-5" href="#">Web Design</a>
                            <a class="u-tags-v1 g-font-size-12 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15 g-mr-5" href="#">IT</a>
                        </h6>
                    </div>
                    <!-- End Sources & Tags -->

                    <hr class="g-brd-gray-light-v4">

                    <!-- Social Shares -->
                    <div class="g-mb-30">
                        <ul class="list-inline text-uppercase mb-0">
                            <li class="list-inline-item g-mr-10">
                                <a class="btn u-btn-facebook g-font-size-12 rounded g-px-20--sm g-py-10" href="#">
                                    <i class="fa fa-facebook g-mr-5--sm"></i> <span class="hidden-xs-down">Share on Facebook</span>
                                </a>
                            </li>
                            <li class="list-inline-item g-mr-10">
                                <a class="btn u-btn-twitter g-font-size-12 rounded g-px-20--sm g-py-10" href="#">
                                    <i class="fa fa-twitter g-mr-5--sm"></i> <span class="hidden-xs-down">Tweet on Twitter</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn u-btn-lightred g-font-size-12 rounded g-py-10" href="#">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Social Shares -->

                </article>

            </div>
            <!-- End Articles Content -->

            <?php $this->load->view("client/content/sidebar") ?>

        </div>
    </div>
</section>
<!-- End News Content -->