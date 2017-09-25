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
                    <a href="<?php echo $base_url?>/tracer/home" class="list-group-item active justify-content-between">
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
                    <a href="<?php echo $base_url?>/tracer/pesan" class="list-group-item list-group-item-action justify-content-between">
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
                <div class="text-center">
                    <h2>PROFIL MAHASISWA ALUMNI</h2>
                </div>
                <!-- User Block -->
                <div class="g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-40">
                    <!-- User Details -->
                    <div class="row g-pa-10">
                        <div class="col-sm-2">
                            NIM
                        </div>
                        <div class="col-sm-10">
                            080035
                        </div>

                    </div>
                    <!-- End User Details -->

                    <div class="row g-pa-10">
                        <div class="col-sm-2">
                            Nama
                        </div>
                        <div class="col-sm-10">
                            Saiful Bahri
                        </div>

                    </div>

                    <div class="row g-pa-10">
                        <div class="col-sm-2">
                            Jurusan
                        </div>
                        <div class="col-sm-10">
                            Teknik Informatika
                        </div>

                    </div>

                    <div class="row g-pa-10">
                        <div class="col-sm-2">
                            Angkatan
                        </div>
                        <div class="col-sm-10">
                            2008
                        </div>

                    </div>

                    <div class="row g-pa-10">
                        <div class="col-sm-2">
                            Lulus
                        </div>
                        <div class="col-sm-10">
                            2012
                        </div>

                    </div>

                    <div class="row g-pa-10">
                        <div class="col-sm-2">
                            Judul TA
                        </div>
                        <div class="col-sm-10">
                            Akses Pintu Menggunakan Kartu Lobang Teregritasi Berbasis Mikrokontroller AT89C51
                        </div>

                    </div>
                </div>
                <!-- End User Block -->

            </div>
            <!-- End Profle Content -->
        </div>
    </div>
</section>
<!-- End News Content -->