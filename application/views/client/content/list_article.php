<?php
$resource_path=$this->config->item('resources_path');
$base_url=$this->config->item('app_url');?>
<!-- News Content -->
<section class="g-pt-50 g-bg-secondary">
    <div class="container">
        <div class="row g-mb-60">
            <div class="col-lg-9 g-mb-80">
                <div class="g-pr-20--lg">
                    <?php foreach($list as $row):?>
                    <article class="row align-items-center u-block-hover">
                        <div class="col-md-4">
                            <div class="g-overflow-hidden g-height-160">
                                <img class="img-fluid w-100 u-block-hover__main--mover-down g-mb-minus-6" src="<?php echo $resource_path ?>uploads/files/<?php echo $row->image_url?>" alt="<?php echo $row->title?>">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="g-pa-15--md">
                                <ul class="list-inline g-color-gray-dark-v4 g-font-weight-600 g-font-size-12">
                                    <li class="list-inline-item mr-0"><?php echo $row->author?></li>
                                    <li class="list-inline-item mx-2">·</li>
                                    <li class="list-inline-item"><?php
                                        date_default_timezone_set('Asia/Jakarta');
                                        $t = strtotime($row->date_created);
                                        echo date('d M y, H:i',$t);
                                        ?></li>
                                </ul>
                                <h2 class="h3 g-color-black g-font-weight-600 mb-4">
                                    <a class="u-link-v5 g-color-black g-color-primary--hover" href="<?php echo $base_url ?>/detail/read/<?php echo $category?>/<?php echo $row->title_url?>"><?php echo $row->title?></a>
                                </h2>
                                <a class="g-color-gray-dark-v2 g-color-primary--hover g-font-weight-600 g-font-size-12 g-text-underline--none--hover text-uppercase" href="<?php echo $base_url ?>/detail/read/<?php echo $row->title_url?>">Baca selengkapnya ...</a>
                            </div>
                        </div>
                    </article>

                    <hr class="g-mx-15">
                    <?php endforeach;?>
                    <?php if($isMore == true){?>
                    <!-- Pagination -->
                    <nav id="stickyblock-end" class="text-center" aria-label="Page Navigation">
                        <ul class="list-inline">
                            <?php  if($isPrev){?>
                            <li class="list-inline-item float-left hidden-xs-down">
                                <a class="u-pagination-v1__item u-pagination-v1-4 g-brd-gray-light-v3 g-brd-primary--hover g-rounded-50 g-pa-7-16" href="<?php echo $base_url ?>/home/all/<?php echo $category?>/8/<?php echo $prevLimit?>" aria-label="Previous">
                    <span aria-hidden="true">
                      <i class="fa fa-angle-left g-mr-5"></i> Sebelumnya
                    </span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <?php }?>
                            <?php if($isNext){?>
                            <li class="list-inline-item float-right hidden-xs-down">
                                <a class="u-pagination-v1__item u-pagination-v1-4 g-brd-gray-light-v3 g-brd-primary--hover g-rounded-50 g-pa-7-16" href="<?php echo $base_url ?>/home/all/<?php echo $category?>/8/<?php echo $nextLimit?>" aria-label="Next">
                    <span aria-hidden="true">
                      Selanjutnya <i class="fa fa-angle-right g-ml-5"></i>
                    </span>
                                    <span class="sr-only"></span>
                                </a>
                            </li>
                            <?php }?>
                        </ul>
                    </nav>
                    <!-- End Pagination -->
                    <?php }?>
                </div>
            </div>

            <?php $this->load->view("client/content/sidebar") ?>

        </div>
    </div>
</section>
<!-- End News Content -->