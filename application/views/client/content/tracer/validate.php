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
                        <h4>Validasi</h4>
                        <div id="shortcode6">
                            <div class="shortcode-html">
                                <?php if($valid){?>
                                <!-- Horizontal Forms (using the grid) -->
                                <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" action="<?php echo $base_url?>/tracer/register" method="POST">
                                    <div class="form-group row g-mb-25">
                                        <label for="nim" class="col-sm-2 col-form-label">Nim</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-control-md rounded-0" name="nim" id="nim" value="<?php echo $mhs->nim?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row g-mb-25">
                                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-control-md rounded-0" name="nama" id="nama" value="<?php echo $mhs->nama?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row g-mb-25">
                                        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-control-md rounded-0" name="jurusan" id="jurusan" value="<?php echo $mhs->nm_prodi?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row g-mb-25">
                                        <label for="angkatan" class="col-sm-2 col-form-label">Angkatan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-control-md rounded-0" name="angkatan" id="angkatan" value="20<?php echo substr($mhs->nim,0,2)?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row g-mb-25">
                                        <label for="lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-4">
                                            <input class="form-control form-control-md rounded-0" type="text" name="tgl_lahir">
                                        </div>
                                            <label class="col-sm-6">format: yyyy-mm-dd contoh :(1992-02-25) <br>
                                                <?php if(!$tgl_valid){?>
                                                    <p style="color: red">Format tanggal lahir salah</p>
                                                <?php }?>

                                            </label>
                                    </div>

                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-md u-btn-primary rounded-0">Validate</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- End Horizontal Forms (using the grid) -->
                                <?php } else {?>
                                    <div class="alert alert-danger" role="alert">
                                        <p>Data Alumni tidak ditemukan</p>
                                    </div>
                                <?php }?>
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