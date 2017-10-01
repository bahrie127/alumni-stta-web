<?php
$resource_path=$this->config->item('resources_path');
$base_url=$this->config->item('app_url');?>
<section class="u-ns-bg-v1-bottom g-bg-secondary g-py-30">
    <div class="container">
        <div class="text-center g-mb-50">
            <h2 class="h4 title2">Video & profil alumni</h2>
        </div>

                <div class="row">
                    <div class="col-md-6 g-mb-30">

                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/tm-Htq-zI5w" frameborder="0" allowfullscreen></iframe>

                            <div class="g-mx-5--sm g-mb-3 float-right">
                                <a class="u-pagination-v1__item u-pagination-v1-4 g-brd-gray-light-v3 g-brd-primary--hover g-rounded-50 g-pa-7-16 g-color-blue" href="https://www.youtube.com/channel/UCdKcJvmLjJWTsQ97cnG_YCQ" aria-label="Next">
                    <span aria-hidden="true">
                      <strong>LIHAT SELENGKAPNYA</strong> <i class="fa fa-chevron-circle-right g-ml-5"></i>
                    </span>
                                    <span class="sr-only">Selengkapnya</span>
                                </a>
                            </div>
                    </div>

                    <div class="col-md-6 g-mb-30">
<!--                                <iframe width="560" height="315" src="https://www.youtube.com/embed/g3L8l-kC9vA" frameborder="0" allowfullscreen></iframe>-->
                                <div class="ms-gallery-template" id="ms-gallery-2">
                                    <!-- masterslider -->
                                    <div class="master-slider ms-skin-black-2 round-skin" id="masterslider2">
                                        <?php foreach($profil_alumni as $row):?>
                                        <div class="ms-slide">
                                            <img src="<?php echo $resource_path; ?>/images/gallery/blank.gif" data-src="<?php echo $resource_path; ?>uploads/files/<?php echo $row->image_url?>" alt="<?php echo $row->title?>" />
                                            <div class="ms-info">
                                                <?php echo $row->title?>
                                            </div>
                                        </div>
                                        <?php endforeach;?>
                                    </div>
                                    <!-- end of masterslider -->
                                </div>
                            <div class="g-mx-5--sm g-mb-3 float-right g-py-6">
                                <a class="u-pagination-v1__item u-pagination-v1-4 g-brd-gray-light-v3 g-brd-primary--hover g-rounded-50 g-pa-7-16 g-color-blue" href="<?php echo $base_url ?>/home/all/profil_alumni" aria-label="Next">
                    <span aria-hidden="true">
                      <strong>LIHAT SELENGKAPNYA</strong> <i class="fa fa-chevron-circle-right g-ml-5"></i>
                    </span>
                                    <span class="sr-only">Selengkapnya</span>
                                </a>
                            </div>

                    </div>
                </div>
            </div>

</section>