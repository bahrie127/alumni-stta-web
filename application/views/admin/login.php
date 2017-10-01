<?php
$resource_path=$this->config->item('resources_path');
$base_url=$this->config->item('app_url');?>
<!-- Login -->
<section class="g-bg-gray-light-v5">
    <div class="container g-py-180">
        <div class="row justify-content-center">
            <div class="col-sm-8 col-lg-5">
                <div class="u-shadow-v21 g-bg-white rounded g-py-40 g-px-30">
                    <header class="text-center mb-4">
                        <h2 class="h2 g-color-black g-font-weight-600">Login</h2>
                    </header>

                    <!-- Form -->
                    <form class="g-py-15" action="<?php echo $base_url?>/adm/login/login_in" method="post">
                        <div class="mb-4">
                            <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Username:</label>
                            <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" type="text" name="username" placeholder="username">
                        </div>

                        <div class="g-mb-35">
                            <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Password:</label>
                            <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15 mb-3" type="password" name="password" placeholder="Password">
                        </div>

                        <div class="mb-4">
                            <button class="btn btn-md btn-block u-btn-primary rounded g-py-13" type="submit">Login</button>
                        </div>
                        <?php if($error!=""):?>
                        <div class="alert fade show g-bg-red-opacity-0_1 g-color-lightred rounded-0" role="alert">
                            <button type="button" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>

                            <div class="media">
                                <div class="media-body">
                                    <p class="m-0"><strong><?php echo $error;?></strong></p>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    </form>
                    <!-- End Form -->

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Login -->
</main>
</body>
</html>