<!DOCTYPE html>
<html>
    
<!-- Mirrored from coderthemes.com/ubold_2.2/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Mar 2017 14:04:56 GMT -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon_1.ico">

    <title>Inventory Barang</title>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/morris/morris.css">

    <!-- DataTables -->
    <link href="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>


    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url(); ?>https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="<?php echo base_url(); ?>https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="<?php echo base_url(); ?>assets/js/modernizr.min.js"></script>



  </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="<?php echo base_url('app') ?>" class="logo"><span>INVENTORY</span></a>
                        <!-- Image Logo here -->
                        <!--<a href="index.html" class="logo">-->
                            <!--<i class="icon-c-logo"> <img src="<?php echo base_url(); ?>assets/images/logo_sm.png" height="42"/> </i>-->
                            <!--<span><img src="<?php echo base_url(); ?>assets/images/logo_light.png" height="20"/></span>-->
                        <!--</a>-->
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="md md-menu"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown top-menu-item-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="icon-bell"></i> <span class="badge badge-xs badge-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>
                                        <li class="list-group slimscroll-noti notification-list">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-diamond noti-primary"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-cog noti-warning"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">New settings</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-bell-o noti-custom"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">Updates</h5>
                                                    <p class="m-0">
                                                        <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                        <li>
                                            <a href="javascript:void(0);" class="list-group-item text-right">
                                                <small class="font-600">See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                              
                                <li class="dropdown top-menu-item-xs">
                                    <a href="#" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="<?php echo base_url(); ?>assets/images/users/profile.png" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url('profile') ?>"><i class="ti-user m-r-10 text-custom"></i> Profile</a></li>
                                        <li class="divider"></li>
                                        <li><a href="<?php echo base_url('auth/logout')?>"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>

                        	<li class="text-muted menu-title">Main Navigation</li>

                            <li class="has_sub">
                                <a href="<?php echo site_url('app') ?>" class="<?php echo isset ($active) ? $active : ""; ?>"><i class="fa fa-home"></i> <span> Dashboard </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="<?php echo base_url('app/barang') ?>" class="waves-effect"><i class="fa fa-database"></i> <span> Data Barang </span> </a>   
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-shopping-cart"></i><span> Pembelian </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="tables-basic.html">Data pembelian</a></li>
                                    <li><a href="tables-datatable.html">Transaksi Pembelian</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-shopping-cart"></i> <span> Penjualan </span><span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="tables-basic.html">Data Penjualan</a></li>
                                    <li><a href="tables-datatable.html">Transaksi penjualan</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="<?php echo site_url('supplier'); ?>" class="waves-effect"><i class="fa fa-university"></i><span> Supplier </span> </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-file-text"></i><span> Laporan </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="tables-basic.html">Data barang</a></li>
                                    <li><a href="tables-datatable.html">Pembelian</a></li>
                                    <li><a href="tables-editable.html">Penjualan</a></li>
                                </ul>
                            </li>

                            <li class="text-muted menu-title">Settings</li>

                            <li class="has_sub">
                                <a href="<?php echo site_url('user') ?>" class="waves-effect"><i class="fa fa-users"></i><span> Users </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="<?php echo site_url('profile'); ?>" class="waves-effect"><i class="fa fa-user"></i><span> Profile </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="<?php echo base_url('auth/logout') ?>" class="waves-effect"><i class="fa fa-sign-out"></i><span> Logout </span></a>
                            </li>

                            <li class="text-muted menu-title">Information</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-info"></i><span> Tentang </span></a>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                      <?php echo $content; ?>

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    © 2018. All rights reserved.
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Chat</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="<?php echo base_url(); ?>assets/images/users/avatar-1.jpg" alt="">
                                </div>
                                <span class="name">Chadengle</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="<?php echo base_url(); ?>assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <span class="name">Tomaslau</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="<?php echo base_url(); ?>assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <span class="name">Stillnotdavid</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="<?php echo base_url(); ?>assets/images/users/avatar-4.jpg" alt="">
                                </div>
                                <span class="name">Kurafire</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="<?php echo base_url(); ?>assets/images/users/avatar-5.jpg" alt="">
                                </div>
                                <span class="name">Shahedk</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="<?php echo base_url(); ?>assets/images/users/avatar-6.jpg" alt="">
                                </div>
                                <span class="name">Adhamdannaway</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="<?php echo base_url(); ?>assets/images/users/avatar-7.jpg" alt="">
                                </div>
                                <span class="name">Ok</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="<?php echo base_url(); ?>assets/images/users/avatar-8.jpg" alt="">
                                </div>
                                <span class="name">Arashasghari</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="<?php echo base_url(); ?>assets/images/users/avatar-9.jpg" alt="">
                                </div>
                                <span class="name">Joshaustin</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="<?php echo base_url(); ?>assets/images/users/avatar-10.jpg" alt="">
                                </div>
                                <span class="name">Sortino</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/detect.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/fastclick.js"></script>

        <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>

        <!--Morris Chart-->
        <script src="<?php echo base_url(); ?>assets/plugins/morris/morris.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/raphael/raphael-min.js"></script>
        <script src="<?php echo base_url(); ?>assets/pages/morris.init.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-knob/jquery.knob.js"></script>

        <!--datatables-->
        <script src="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.js"></script>

        <script src="<?php echo base_url();?>assets/pages/datatables.init.js"></script>

        <script src="<?php echo base_url(); ?>assets/pages/jquery.dashboard.js"></script>

        <script src="<?php echo base_url(); ?>assets/js/jquery.core.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

                $(".knob").knob();

            });

        </script>




    </body>

<!-- Mirrored from coderthemes.com/ubold_2.2/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Mar 2017 14:05:41 GMT -->
</html>