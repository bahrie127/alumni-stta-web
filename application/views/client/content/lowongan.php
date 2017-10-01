<?php
$resource_path=$this->config->item('resources_path');
$base_url=$this->config->item('app_url');?>
<section class="u-ns-bg-v1-bottom g-bg-secondary g-pt-40">

<div class="container">
    <!-- Icon Blocks -->
    <div class="row">
        <div class="col-md-4 g-mb-30">

            <h3 class="h3 g-color-black g-mb-10 text-center title2">TIPS</h3>
            <!-- Article -->
            <?php foreach($tips as $row):?>
            <div class="row g-mx-5--sm g-mb-3">
                <!-- Article Image -->
                <div class="col-sm-4 g-px-0--sm">
                    <div class="g-height-120 g-bg-size-cover" style="background-image: url(<?php echo $resource_path ?>uploads/files/<?php echo $row->image_url?>);"></div>
                </div>
                <!-- End Article Image -->

                <!-- Article Content -->
                <div class="col-sm-8 g-px-0--sm">
                    <div class="u-info-v1-1 g-height-120 g-bg-gray-light-v5" style="padding: 1.42857rem 0.8rem 0 !important;">
                        <h3 class="h6 g-font-weight-600">
                            <a class="u-link-v5 g-color-black g-color-primary--hover" href="<?php echo $base_url?>/detail/read/tips/<?php echo $row->title_url?>"><?php echo $row->title?></a>
                        </h3>
                        <p class="small g-color-blue">
                            <time><?php
                                date_default_timezone_set('Asia/Jakarta');
                                $t = strtotime($row->date_created);
                                echo date('d M y, H:i',$t);
                                ?></time>
                        </p>


                    </div>
                </div>
                <!-- End Article Content -->
            </div>
            <?php endforeach;?>
            <!-- End Article -->

            <div class="row g-mx-5--sm g-mb-3 g-py-10 float-right">
                <a class="u-pagination-v1__item u-pagination-v1-4 g-brd-gray-light-v3 g-brd-primary--hover g-rounded-50 g-pa-7-16 g-color-blue" href="<?php echo $base_url ?>/home/all/tips" aria-label="Next">
                    <span aria-hidden="true">
                      <strong>LIHAT SELENGKAPNYA</strong> <i class="fa fa-chevron-circle-right g-ml-5"></i>
                    </span>
                    <span class="sr-only">Selengkapnya</span>
                </a>
            </div>
        </div>

        <div class="col-md-4 g-mb-30">
            <h3 class="h3 g-color-black g-mb-10 text-center title2">Lowongan</h3>
            <!-- Article -->
            <?php foreach($lowongan as $row):?>
                <div class="row g-mx-5--sm g-mb-3">
                    <!-- Article Image -->
                    <div class="col-sm-4 g-px-0--sm">
                        <div class="g-height-120 g-bg-size-cover" style="background-image: url(<?php echo $resource_path ?>uploads/files/<?php echo $row->image_url?>);"></div>
                    </div>
                    <!-- End Article Image -->

                    <!-- Article Content -->
                    <div class="col-sm-8 g-px-0--sm">
                        <div class="u-info-v1-1 g-height-120 g-bg-gray-light-v5" style="padding: 1.42857rem 0.8rem 0 !important;">
                            <h3 class="h6 g-font-weight-600">
                                <a class="u-link-v5 g-color-black g-color-primary--hover" href="<?php echo $base_url?>/detail/read/lowongan/<?php echo $row->title_url?>"><?php echo $row->title?></a>
                            </h3>
                            <p class="small g-color-blue">
                                <time><?php
                                    date_default_timezone_set('Asia/Jakarta');
                                    $t = strtotime($row->date_created);
                                    echo date('d M y, H:i',$t);
                                    ?></time>
                            </p>

                        </div>
                    </div>
                    <!-- End Article Content -->
                </div>
            <?php endforeach;?>
            <!-- End Article -->
            <div class="row g-mx-5--sm g-mb-3 g-py-10 float-right">
                <a class="u-pagination-v1__item u-pagination-v1-4 g-brd-gray-light-v3 g-brd-primary--hover g-rounded-50 g-pa-7-16 g-color-blue" href="<?php echo $base_url ?>/home/all/lowongan" aria-label="Next">
                    <span aria-hidden="true">
                      <strong>LIHAT SELENGKAPNYA</strong> <i class="fa fa-chevron-circle-right g-ml-5"></i>
                    </span>
                    <span class="sr-only">Selengkapnya</span>
                </a>
            </div>

        </div>
        <div class="col-md-4 g-mb-30">

            <h3 class="h3 g-color-black g-mb-10 text-center title2">Agenda</h3>
            <!-- Article -->
            <?php foreach($agenda as $row):?>
                <div class="row g-mx-5--sm g-mb-3">
                    <!-- Article Image -->
                    <div class="col-sm-4 g-px-0--sm">
                        <div class="g-height-120 g-bg-size-cover" style="background-image: url(<?php echo $resource_path ?>uploads/files/<?php echo $row->image_url?>);"></div>
                    </div>
                    <!-- End Article Image -->

                    <!-- Article Content -->
                    <div class="col-sm-8 g-px-0--sm">
                        <div class="u-info-v1-1 g-height-120 g-bg-gray-light-v5" style="padding: 1.42857rem 0.8rem 0 !important;">
                            <h3 class="h6 g-font-weight-600">
                                <a class="u-link-v5 g-color-black g-color-primary--hover" href="<?php echo $base_url?>/detail/read/agenda/<?php echo $row->title_url?>"><?php echo $row->title?></a>
                            </h3>
                            <p class="small g-color-blue">
                                <time><?php
                                    date_default_timezone_set('Asia/Jakarta');
                                    $t = strtotime($row->date_created);
                                    echo date('d M y, H:i',$t);
                                    ?></time>
                            </p>


                        </div>
                    </div>
                    <!-- End Article Content -->
                </div>
            <?php endforeach;?>
            <!-- End Article -->
            <!-- Selengkapnya -->
            <div class="row g-mx-5--sm g-mb-3 g-py-10 float-right">
                <a class="u-pagination-v1__item u-pagination-v1-4 g-brd-gray-light-v3 g-brd-primary--hover g-rounded-50 g-pa-7-16 g-color-blue" href="<?php echo $base_url ?>/home/all/agenda" aria-label="Next">
                    <span aria-hidden="true">
                      <strong>LIHAT SELENGKAPNYA</strong> <i class="fa fa-chevron-circle-right g-ml-5"></i>
                    </span>
                    <span class="sr-only">Selengkapnya</span>
                </a>
            </div>
            <!-- End Selengkapnya -->



        </div>
    </div>
    <!-- End Icon Blocks -->
</div>
</section>