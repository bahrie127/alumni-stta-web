<?php
$resource_path=$this->config->item('resources_path');
$base_url=$this->config->item('app_url');?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="<?php echo $resource_path?>images/plane.png">

    <link rel="stylesheet" href="<?php echo $resource_path;?>vendor/bootstrap3/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $resource_path;?>vendor/font-awesome/css/font-awesome.min.css">

    <!-- CSS Global Compulsory -->
<!--    <link rel="stylesheet" href="--><?php //echo $resource_path;?><!--vendor/bootstrap/bootstrap.min.css">-->
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $resource_path;?>css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo $resource_path;?>css/_all-skins.min.css">

    <?php
    if(isset($css_files)){
        foreach($css_files as $file): ?>
            <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
        <?php endforeach;
    }
    if(isset($js_files)){
        ?>

        <?php foreach($js_files as $file): ?>
            <script src="<?php echo $file; ?>"></script>
        <?php endforeach;
    }
    ?>
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>S</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Alumni</b> STTA</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo $base_url;?>/adm/login/logout" class="nav-link g-py-7 g-px-0">Logout</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Admin 2</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active">
                    <a href="pages/widgets.html">
                        <i class="fa fa-circle-o"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="pages/widgets.html">
                        <i class="fa fa-sliders"></i> <span>Slider</span>
                    </a>
                </li>
                <li>
                    <a href="pages/widgets.html">
                        <i class="fa fa-th"></i> <span>Pages</span>
                    </a>
                </li>
                <li>
                    <a href="pages/widgets.html">
                        <i class="fa fa-gittip"></i> <span>Tips</span>
                    </a>
                </li>
                <li>
                    <a href="pages/widgets.html">
                        <i class="fa fa-btc"></i> <span>Lowongan</span>
                    </a>
                </li>
                <li>
                    <a href="pages/widgets.html">
                        <i class="fa fa-calendar-times-o"></i> <span>Agenda</span>
                    </a>
                </li>
                <li>
                    <a href="pages/widgets.html">
                        <i class="fa fa-newspaper-o"></i> <span>Berita</span>
                    </a>
                </li>
                <li>
                    <a href="pages/widgets.html">
                        <i class="fa fa-user"></i> <span>Profil Alumni</span>
                    </a>
                </li>
                <li>
                    <a href="pages/widgets.html">
                        <i class="fa fa-users"></i> <span>Data Alumni</span>
                    </a>
                </li>
                <li>
                    <a href="pages/widgets.html">
                        <i class="fa fa-user-plus"></i> <span>Data Mahasiswa</span>
                    </a>
                </li>
                <li>
                    <a href="pages/widgets.html">
                        <i class="fa fa-sticky-note-o"></i> <span>Kuisioner</span>
                    </a>
                </li>
                <li>
                    <a href="pages/widgets.html">
                        <i class="fa fa-smile-o"></i> <span>Administrator</span>
                    </a>
                </li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>150</h3>

                            <p>Pages</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>53</h3>

                            <p>Tips</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>144</h3>

                            <p>Lowongan</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>65</h3>

                            <p>Berita</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 0.1
        </div>
        <strong>Copyright &copy; 2017 <a href="https://bahri.web.id">Alumni STTA</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo $resource_path;?>vendor/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo $resource_path;?>vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo $resource_path;?>vendor/tether.min.js"></script>
<script src="<?php echo $resource_path;?>vendor/bootstrap/bootstrap.min.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- AdminLTE App -->
<script src="<?php echo $resource_path;?>js/adminlte.min.js"></script>
</body>
</html>
