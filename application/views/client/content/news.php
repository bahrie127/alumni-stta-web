<?php
$resource_path=$this->config->item('resources_path');
$base_url=$this->config->item('app_url');?>
<section class="u-ns-bg-v1-bottom g-bg-aqua-opacity-0_1 g-py-30" style="padding-bottom: 4.14286rem !important;">
    <div class="container">
        <div class="text-center g-mb-50">
            <h2 class="h4 title2">rilis berita</h2>
        </div>

        <div id="shortcode8">
            <div class="shortcode-html">
                <div class="row">
                    <?php foreach($news as $row):?>
                    <div class="col-lg-4 g-mb-30">
                        <!-- Article -->
                        <article class="g-bg-white">
                            <figure class="g-pos-rel">
                                <img class="img-fluid w-100 h-60" src="<?php echo $resource_path ?>uploads/files/<?php echo $row->image_url?>" alt="<?php echo $row->title?>" style="height: 200px;">
                            </figure>

                            <div class="g-pa-15" style="height: 180px;">
                                <p><?php
                                    date_default_timezone_set('Asia/Jakarta');
                                    $t = strtotime($row->date_created);
                                    echo date('d M y, H:i',$t);
                                    ?></p>
                                <h3 class="g-font-weight-300 g-mb-15">
                                    <a class="u-link-v5 g-color-main g-color-primary--hover" href="<?php echo $base_url?>/detail/read/news/<?php echo $row->title_url?>"><?php echo $row->title?></a>
                                </h3>
                            </div>

                        </article>
                        <!-- End Article -->
                    </div>
                    <?php endforeach;?>
                </div>
                <div class="row float-right">
                    <div class="row g-mx-5--sm g-mb-3">
                        <a class="u-pagination-v1__item u-pagination-v1-4 g-brd-gray-light-v3 g-brd-primary--hover g-rounded-50 g-pa-7-16 g-color-blue" href="<?php echo $base_url ?>/home/all/news" aria-label="Next">
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