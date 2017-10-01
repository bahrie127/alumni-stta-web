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
                        <div id="shortcode6">
                            <div class="shortcode-html">
                                <div class="alert alert-success" role="alert">
                                <p>Registasi berhasil.</p>
                                <p>User dan password sudah diaktivasi dan dapat digunakan. <a href="<?php echo $base_url?>/tracer">Halaman Login</a></p>
                                <p>Terima kasih </p>
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