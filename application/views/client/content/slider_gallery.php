<?php
$resource_path=$this->config->item('resources_path');
$base_url=$this->config->item('app_url');?>
<section class="u-ns-bg-v1-bottom g-bg-aqua-opacity-0_1 g-py-10">

<div class="ms-gallery-template" id="ms-gallery-1">
    <!-- masterslider -->
    <div class="master-slider ms-skin-black-2 round-skin" id="masterslider">
        <?php foreach($sliders as $row):?>
        <div class="ms-slide">
            <img src="<?php echo $resource_path; ?>images/gallery/blank.gif" data-src="<?php echo $resource_path; ?>uploads/files/slider/<?php echo $row->image;?>" alt="<?php echo $row->description?>" />
            <div class="ms-info">
                <?php echo $row->description;?>
            </div>
        </div>
        <?php endforeach;?>
    </div>
    <!-- end of masterslider -->
</div>

</section>


