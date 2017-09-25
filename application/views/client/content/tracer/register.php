<?php
$resource_path=$this->config->item('base_url').$this->config->item('resources_path');
$base_url=$this->config->item('base_url')."index.php";?>
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
                                <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" action="<?php echo $base_url?>/tracer/submit">
                                    <div class="form-group row g-mb-25">
                                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-control-md rounded-0" id="nama" value="Saiful Bahri" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row g-mb-25">
                                        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-control-md rounded-0" id="jurusan" value="Teknik Informatika" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row g-mb-25">
                                        <label for="angkatan" class="col-sm-2 col-form-label">Angkatan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-control-md rounded-0" id="angkatan" value="2008" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row g-mb-25">
                                        <label for="lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-control-md rounded-0" id="lahir" value="03/27/1990" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row g-mb-25">
                                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-control-md rounded-0" id="username" placeholder="Username">
                                        </div>
                                    </div>

                                    <div class="form-group row g-mb-25">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control form-control-md rounded-0" id="inputPassword3" placeholder="Password">
                                        </div>
                                    </div>

                                    <div class="form-group row g-mb-25">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control form-control-md rounded-0" id="inputEmail3" placeholder="email">
                                        </div>
                                    </div>

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