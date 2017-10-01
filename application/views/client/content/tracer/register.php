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
                        <h4>Data Valid, Silahkan Lengkapi data dibawah ini :</h4>
                        <div id="shortcode6">
                            <div class="shortcode-html">
                                <!-- Horizontal Forms (using the grid) -->

                                <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" action="<?php echo $base_url?>/tracer/submit" method="POST">

                                    <div class="form-group row g-mb-25">
                                        <label for="nim" class="col-sm-2 col-form-label">Nim</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-control-md rounded-0" name="nim" id="nim" value="<?php echo $mhs->nim?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row g-mb-25">
                                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-control-md rounded-0" id="nama" value="<?php echo $mhs->nama?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row g-mb-25">
                                        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-control-md rounded-0" id="jurusan" value="<?php echo $mhs->nm_prodi?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row g-mb-25">
                                        <label for="angkatan" class="col-sm-2 col-form-label">Angkatan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-control-md rounded-0" id="angkatan" value="20<?php echo substr($mhs->nim,0,2)?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row g-mb-25">
                                        <label for="lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-control-md rounded-0" id="lahir" value="<?php echo $mhs2->tgl_lahir?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row g-mb-25">
                                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-control-md rounded-0" id="username" name="username" placeholder="Username">
                                        </div>
                                    </div>

                                    <div class="form-group row g-mb-25">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control form-control-md rounded-0" id="inputPassword3" name="password" placeholder="Password">
                                        </div>
                                    </div>

                                    <div class="form-group row g-mb-25">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control form-control-md rounded-0" name="email" id="inputEmail3" placeholder="email">
                                        </div>
                                    </div>
                                    <?php if($error_reg!=""):?>
                                    <div class="form-group row g-mb-25">
                                        <label for="error" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">

                                                <div class="alert fade show g-bg-red-opacity-0_1 g-color-lightred rounded-0" role="alert">
                                                    <button type="button" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>

                                                    <div class="media">
                                                        <div class="media-body">
                                                            <p class="m-0"><strong><?php echo $error_reg;?></strong></p>
                                                        </div>
                                                    </div>
                                                </div>

                                        </div>
                                    </div>
                                    <?php endif;?>

                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-md u-btn-primary rounded-0">Registrasi</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- End Horizontal Forms (using the grid) -->
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