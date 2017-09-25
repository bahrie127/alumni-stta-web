<?php
$resource_path=$this->config->item('base_url').$this->config->item('resources_path');
$base_url=$this->config->item('base_url')."index.php";?>
<!-- News Content -->
<section class="g-pt-50 g-bg-secondary">
    <div class="container">
        <div class="row">
            <!-- Profile Sidebar -->
            <div class="col-lg-3 g-mb-50 g-mb-0--lg">
                <!-- User Image -->
                <div class="u-block-hover g-pos-rel">
                    <figure>
                        <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="<?php echo $resource_path ?>images/img5.jpg" alt="Image User">
                    </figure>
                </div>
                <!-- User Image -->

                <!-- Sidebar Navigation -->
                <div class="list-group list-group-border-0 g-mb-40">
                    <!-- Overall -->
                    <a href="<?php echo $base_url?>/tracer/home" class="list-group-item list-group-item-action justify-content-between">
                        <span><i class="icon-home g-pos-rel g-top-1 g-mr-8"></i>Home</span>
                    </a>
                    <!-- End Overall -->

                    <a href="<?php echo $base_url?>/tracer/kuisioner" class="list-group-item list-group-item-action justify-content-between">
                        <span><i class="icon-layers g-pos-rel g-top-1 g-mr-8"></i>Kuisioner</span>
                    </a>

                    <!-- Profile -->
                    <a href="<?php echo $base_url?>/tracer/edit_profil" class="list-group-item list-group-item-action justify-content-between">
                        <span><i class="icon-cursor g-pos-rel g-top-1 g-mr-8"></i>Edit Profile</span>
                    </a>
                    <!-- End Profile -->

                    <!-- Users Contacts -->
                    <a href="<?php echo $base_url?>/tracer/teman" class="list-group-item list-group-item-action justify-content-between">
                        <span><i class="icon-notebook g-pos-rel g-top-1 g-mr-8"></i>Teman Seangkatan</span>
                    </a>
                    <!-- End Users Contacts -->

                    <!-- Comments -->
                    <a href="<?php echo $base_url?>/tracer/pesan" class="list-group-item active justify-content-between">
                        <span><i class="icon-bubbles g-pos-rel g-top-1 g-mr-8"></i>Lihat Pesan</span>
                    </a>
                    <!-- End Comments -->

                    <!-- Settings -->
                    <a href="<?php echo $base_url?>/tracer/logout" class="list-group-item list-group-item-action justify-content-between">
                        <span><i class="icon-settings g-pos-rel g-top-1 g-mr-8"></i>Logout</span>
                    </a>
                    <!-- End Settings -->
                </div>
                <!-- End Sidebar Navigation -->

            </div>
            <!-- End Profile Sidebar -->

            <!-- Profle Content -->
            <div class="col-lg-9">
                <div class="g-font-size-16 g-line-height-1_8 g-mb-30">
                    <div id="shortcode6">
                        <div class="shortcode-html">
                            <div class="alert alert-info" role="alert">
                                <div class="text-center">
                                    <p>Tidak Ada Pesan Untuk Anda</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Profle Content -->
        </div>
    </div>
</section>
<!-- End News Content -->