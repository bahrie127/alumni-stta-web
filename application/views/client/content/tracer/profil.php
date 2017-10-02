<?php
$resource_path=$this->config->item('resources_path');
$base_url=$this->config->item('app_url');?>
<!-- News Content -->
<section class="g-pt-50 g-bg-secondary">
    <div class="container">
        <div class="row">
            <!-- Articles Content -->
            <div class="col-lg-9 g-mb-50 g-mb-0--lg">
                <article class="g-mb-60">
                    <header class="g-mb-30">
                        <h2 class="h1 g-mb-15">TRACER STUDY </h2>
                    </header>

                    <div class="g-font-size-16 g-line-height-1_8 g-mb-30">

                        <div class="text-center">
                            <h4>
                                Profil Alumni
                            </h4>
                        </div>

                        <div class="g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-40">
                            <div class="row">
                                <div class="col-lg-4 g-mb-40 g-mb-0--lg">
                                    <!-- User Image -->
                                    <div class="g-mb-20">
                                        <?php if(isset($mhs2)){ if ($mhs2->foto!='' || $mhs2->foto!=null){?>
                                            <img class="img-fluid w-100" src="<?php echo $resource_path ?>uploads/files/foto/<?php echo $mhs2->foto?>" alt="Image Alumni">
                                        <?php }}else {?>
                                            <img class="img-fluid w-100" src="<?php echo $resource_path ?>images/user.png" alt="image">
                                        <?php }?>
                                    </div>
                                    <!-- User Image -->
                                </div>

                                <div class="col-lg-8">
                                    <!-- User Details -->
                                    <div class="row g-pa-10">
                                        <div class="col-sm-2">
                                            NIM
                                        </div>
                                        <div class="col-sm-10">
                                            <?php echo $mhs->nim?>
                                        </div>

                                    </div>
                                    <!-- End User Details -->

                                    <div class="row g-pa-10">
                                        <div class="col-sm-2">
                                            Nama
                                        </div>
                                        <div class="col-sm-10">
                                            <?php echo $mhs->nama?>
                                        </div>

                                    </div>

                                    <div class="row g-pa-10">
                                        <div class="col-sm-2">
                                            Jurusan
                                        </div>
                                        <div class="col-sm-10">
                                            <?php echo $mhs->nm_prodi?>
                                        </div>

                                    </div>

                                    <div class="row g-pa-10">
                                        <div class="col-sm-2">
                                            Angkatan
                                        </div>
                                        <div class="col-sm-10">
                                            20<?php echo substr($mhs->nim,0,2)?>
                                        </div>

                                    </div>

                                    <div class="row g-pa-10">
                                        <div class="col-sm-2">
                                            Lulus
                                        </div>
                                        <div class="col-sm-10">
                                            <?php echo $mhs->tahun?>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <hr class="g-brd-gray-light-v4 g-mx-minus-10">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <strong>Judul Skripsi</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <?php echo $mhs->judul_ta?>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </article>

            </div>
            <!-- End Articles Content -->

            <?php $this->load->view("client/content/sidebar") ?>

        </div>
    </div>
</section>
<!-- End News Content -->