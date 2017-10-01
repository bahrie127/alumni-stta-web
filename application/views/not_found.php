<?php
$resource_path=$this->config->item('resources_path');
$base_url=$this->config->item('app_url')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>404 | Unify - Responsive Website Template</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
<!--    <link rel="shortcut icon" href="../../favicon.ico">-->

    <!-- Google Fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="<?php echo $resource_path?>vendor/bootstrap/bootstrap.min.css">

    <!-- CSS Unify -->
    <link rel="stylesheet" href="<?php echo $resource_path?>css/unify.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="<?php echo $resource_path?>css/custom.css">
</head>

<body>
<main class="g-min-height-100vh g-flex-centered g-pa-15">
    <div class="text-center g-flex-centered-item g-position-rel g-pb-15">
        <div class="g-font-size-180 g-font-size-240--sm g-line-height-1 g-font-weight-600er g-color-gray-light-v4">404</div>

        <div class="g-absolute-centered">
            <h1 class="g-color-black g-mt-minus-8 mb-0">404&nbsp;Not&nbsp;Found</h1>

            <hr class="g-brd-gray-light-v3 g-my-15">

            <p class="g-font-size-18 mb-0"><a href="<?php echo $base_url?>" class="g-color-black g-color-primary--hover g-text-no-underline--hover">← Home Page</a></p>
        </div>
    </div>
</main>

<!-- JS Global Compulsory -->
<script src="<?php echo $resource_path?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo $resource_path?>vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="<?php echo $resource_path?>vendor/tether.min.js"></script>
<script src="<?php echo $resource_path?>vendor/bootstrap/bootstrap.min.js"></script>

<!-- JS Customization -->
<script src="<?php echo $resource_path?>js/custom.js"></script>
</body>
</html>