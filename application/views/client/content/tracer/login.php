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
                        <h4>Login</h4>
                        <div id="shortcode6">
                            <div class="shortcode-html">
                                <!-- Horizontal Forms (using the grid) -->
                                <form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" action="<?php echo $base_url?>/tracer/login" method="POST">
                                    <div class="form-group row g-mb-25">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-control-md rounded-0" id="inputEmail3" placeholder="Username" name="username">
                                        </div>
                                    </div>

                                    <div class="form-group row g-mb-25">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control form-control-md rounded-0" id="inputPassword3" placeholder="Password" name="password">
                                        </div>
                                    </div>
                                    <?php if($error_login!=""):?>
                                        <div class="form-group row g-mb-25">
                                            <label for="error" class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <div class="alert fade show g-bg-red-opacity-0_1 g-color-lightred rounded-0" role="alert">
                                                    <button type="button" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>

                                                    <div class="media">
                                                        <div class="media-body">
                                                            <p class="m-0"><strong><?php echo $error_login;?></strong></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php endif; ?>

                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-md u-btn-primary rounded-0">Sign in</button>
                                        </div>
                                    </div>

                                    <hr class="g-brd-gray-light-v4 g-mx-minus-30">

                                    <div class="form-group row">
                                        <div class="offset-sm-0 col-sm-12">
                                            <p>
                                                Mohon untuk meluangkan waktu sejenak untuk melakukan Registrasi sebagai alumni STTA
                                            </p>
                                            <p>
                                                Untuk Registrasi klik button dibawah.
                                            </p>
                                            <p>
                                                <a class="btn btn-md u-btn-primary" href="<?php echo $base_url?>/tracer/search">Registrasi</a>
                                            </p>
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