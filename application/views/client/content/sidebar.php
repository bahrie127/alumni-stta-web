<?php
$resource_path=$this->config->item('resources_path');
$base_url=$this->config->item('app_url');?>
<!-- Sidebar -->
<div class="col-lg-3">

    <!-- Tips -->
    <div class="g-mb-30">
        <div class="u-heading-v3-1 g-mb-30">
            <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">TIPS</h2>
        </div>
<?php foreach($tips as $row): ?>
        <!-- Article -->
        <article class="media g-mb-30">
            <a class="d-flex u-shadow-v25 mr-3" href="#">
                <img class="g-width-60 g-height-60" src="<?php echo $resource_path ?>uploads/files/<?php echo $row->image_url?>" alt="<?php echo $row->title?>">
            </a>

            <div class="media-body">
                <h3 class="h6">
                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="<?php echo $base_url ?>/detail/read/tips/<?php echo $row->title_url?>"><?php echo $row->title?></a>
                </h3>

                <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                    <li class="list-inline-item">
                        <?php
                        date_default_timezone_set('Asia/Jakarta');
                        $t = strtotime($row->date_created);
                        echo date('d M y, H:i',$t);
                        ?>
                    </li>
                </ul>
            </div>
        </article>
        <!-- End Article -->
<?php endforeach;?>

    </div>
    <!-- End tips -->

    <!-- Lowongan -->
    <div class="g-mb-30">
        <div class="u-heading-v3-1 g-mb-30">
            <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">LOWONGAN</h2>
        </div>
        <?php foreach($lowongan as $row): ?>
        <!-- Article -->
        <article class="media g-mb-30">
            <a class="d-flex u-shadow-v25 mr-3" href="#">
                <img class="g-width-60 g-height-60" src="<?php echo $resource_path ?>uploads/files/<?php echo $row->image_url?>" alt="<?php echo $row->title?>">
            </a>

            <div class="media-body">
                <h3 class="h6">
                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="<?php echo $base_url ?>/detail/read/lowongan/<?php echo $row->title_url?>"><?php echo $row->title?></a>
                </h3>

                <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                    <li class="list-inline-item">
                        <?php
                        date_default_timezone_set('Asia/Jakarta');
                        $t = strtotime($row->date_created);
                        echo date('d M y, H:i',$t);
                        ?>
                    </li>
                </ul>
            </div>
        </article>
        <!-- End Article -->
        <?php endforeach; ?>
    </div>
    <!-- End Lowongan -->

    <!-- agenda -->
    <div class="g-mb-30">
        <div class="u-heading-v3-1 g-mb-30">
            <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">AGENDA</h2>
        </div>
        <?php foreach($agenda as $row):?>
        <!-- Article -->
        <article class="media g-mb-30">
            <a class="d-flex u-shadow-v25 mr-3" href="#">
                <img class="g-width-60 g-height-60" src="<?php echo $resource_path ?>uploads/files/<?php echo $row->image_url?>" alt="<?php echo $row->title?>">
            </a>

            <div class="media-body">
                <h3 class="h6">
                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="<?php echo $base_url ?>/detail/read/agenda/<?php echo $row->title_url?>"><?php echo $row->title?></a>
                </h3>

                <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                    <li class="list-inline-item">
                        <?php
                        date_default_timezone_set('Asia/Jakarta');
                        $t = strtotime($row->date_created);
                        echo date('d M y, H:i',$t);
                        ?>
                    </li>
                </ul>
            </div>
        </article>
        <!-- End Article -->
        <?php endforeach;?>

    </div>
    <!-- End agenda -->

</div>
<!-- End Sidebar -->