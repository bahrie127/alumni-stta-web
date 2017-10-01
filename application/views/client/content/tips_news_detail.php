<?php
$resource_path=$this->config->item('resources_path');
$base_url=$this->config->item('app_url');?>
<!-- News Content -->
<section class="g-pt-50 g-bg-secondary">
    <div class="container">
        <div class="row ">
            <!-- Articles Content -->
            <div class="col-lg-9 g-mb-50 g-mb-0--lg">
                <article class="g-mb-60">
                    <header class="g-mb-30">
                        <h2 class="h1 g-mb-15"><?php echo $detail->title?></h2>

                        <ul class="list-inline d-sm-flex g-color-gray-dark-v4 mb-0">
                            <li class="list-inline-item">
                                <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#"><?php echo $detail->author?></a>
                            </li>
                            <li class="list-inline-item g-mx-10">/</li>
                            <li class="list-inline-item">
                                <?php
                                date_default_timezone_set('Asia/Jakarta');
                                $t = strtotime($detail->date_created);
                                echo date('d M y, H:i',$t);
                                ?>
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
                        <figure class="u-shadow-v25 g-mb-30">
                            <img class="img-fluid w-100" src="<?php echo $resource_path ?>uploads/files/<?php echo $detail->image_url?>" alt="<?php echo $detail->title?>">
                        </figure>

                        <?php echo $detail->text?>

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

                    <hr class="g-brd-gray-light-v4 g-mb-40">

                    <!-- Comments -->
                    <div class="g-mb-60">
                        <div class="u-heading-v3-1 g-mb-30">
                            <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">0 Comments</h2>
                        </div>

                    <!-- Add Comment -->
                    <div class="g-mb-60">
                        <div class="u-heading-v3-1 g-mb-30">
                            <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">Add a Comment</h2>
                        </div>

                        <form>
                            <div class="row">
                                <div class="col-md-6 form-group g-mb-30">
                                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-pa-15" type="text" placeholder="Your Name">
                                </div>

                                <div class="col-md-6 form-group g-mb-30">
                                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-pa-15" type="email" placeholder="Email">
                                </div>
                            </div>

                            <div class="g-mb-30">
                                <textarea class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus g-resize-none rounded-3 g-pa-15" rows="12" placeholder="Your Message"></textarea>
                            </div>

                            <a class="btn u-btn-primary g-font-size-12 text-uppercase g-px-25 g-py-13" href="#">
                                <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-2"></i> Add a Comment
                            </a>
                        </form>
                    </div>
                    <!-- End Add Comment -->
                </article>

                <div id="stickyblock-end"></div>
            </div>
            <!-- End Articles Content -->

            <?php $this->load->view("client/content/sidebar") ?>

        </div>
    </div>
</section>
<!-- End News Content -->