<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>CAI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link href="views/assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

    <link rel="shortcut icon" href="views/assets/images/LG_UPVictoria.jpg">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="views/assets/plugins/morris/morris.css">

    <!-- Bootstrap core CSS -->
    <link href="views/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="views/assets/css/metisMenu.min.css" rel="stylesheet">
    <!-- Icons CSS -->
    <link href="views/assets/css/icons.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="views/assets/css/style.css" rel="stylesheet">

    <link href="views/assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
    <link rel="stylesheet" href="views/assets/plugins/switchery/switchery.min.css">
    <link href="views/assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="views/assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="views/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="views/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="views/assets/plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
    <link href="views/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Summernote css -->
    <link href="views/assets/plugins/summernote/summernote.css" rel="stylesheet" />

    <link href="views/assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link href="views/assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="views/assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="views/assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="views/assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
    <link href="views/assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="views/assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>


</head>
    <body>

        <div id="page-wrapper">
<!-- #########################################################################################-->
            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="">
                        <a href="index.html" class="logo">
                            <img src="views/assets/images/upvlogo.png" alt="logo" class="logo-lg" width=50/>
                            <img src="views/assets/images/upvlogo.png" alt="logo" class="logo-sm hidden" />
                        </a>
                    </div>
                </div>

                <!-- Top navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">

                            <!-- Mobile menu button -->
                            <div class="pull-left">
                                <button type="button" class="button-menu-mobile visible-xs visible-sm">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <!-- Top nav left menu -->
                            <ul class="nav navbar-nav hidden-sm hidden-xs top-navbar-items">

                            </ul>

                            <!-- Top nav Right menu -->
                            <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">
                                <li class="hidden-xs">
                                    <form role="search" class="navbar-left app-search pull-left">
                                       <input type="text" placeholder="Search..." class="form-control">
                                       <a href=""><i class="fa fa-search"></i></a>
                                   </form>
                               </li>
                               <li class="dropdown top-menu-item-xs">
                                <a href="#" data-target="#" class="dropdown-toggle menu-right-item" data-toggle="dropdown" aria-expanded="true">
                                    <i class="mdi mdi-bell"></i> <span class="label label-danger">3</span>
                                </a>
                                <ul class="dropdown-menu p-0 dropdown-menu-lg">
                                    <!--<li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>-->
                                    <li class="list-group notification-list" style="height: 267px;">
                                     <div class="slimscroll">
                                         <!-- list item-->
                                         <a href="javascript:void(0);" class="list-group-item">
                                          <div class="media">
                                           <div class="media-left p-r-10">
                                            <em class="fa fa-diamond bg-primary"></em>
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
                                   <div class="media-left p-r-10">
                                    <em class="fa fa-cog bg-warning"></em>
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
                           <div class="media-left p-r-10">
                            <em class="fa fa-bell-o bg-custom"></em>
                        </div>
                        <div class="media-body">
                            <h5 class="media-heading">Updates</h5>
                            <p class="m-0">
                                <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                            </p>
                        </div>
                    </div>
                </a>

                <!-- list item-->
                <a href="javascript:void(0);" class="list-group-item">
                  <div class="media">
                   <div class="media-left p-r-10">
                    <em class="fa fa-user-plus bg-danger"></em>
                </div>
                <div class="media-body">
                    <h5 class="media-heading">New user registered</h5>
                    <p class="m-0">
                        <small>You have 10 unread messages</small>
                    </p>
                </div>
            </div>
        </a>

        <!-- list item-->
        <a href="javascript:void(0);" class="list-group-item">
          <div class="media">
             <div class="media-left p-r-10">
                <em class="fa fa-diamond bg-primary"></em>
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
         <div class="media-left p-r-10">
            <em class="fa fa-cog bg-warning"></em>
        </div>
        <div class="media-body">
            <h5 class="media-heading">New settings</h5>
            <p class="m-0">
                <small>There are new settings available</small>
            </p>
        </div>
    </div>
</a>
</div>
</li>
<!--<li>-->
    <!--<a href="javascript:void(0);" class="list-group-item text-right">-->
        <!--<small class="font-600">See all notifications</small>-->
        <!--</a>-->
        <!--</li>-->
    </ul>
</li>

<li class="dropdown top-menu-item-xs">
    <a href="" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><img src="views/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
    <ul class="dropdown-menu">
        <li><a href="javascript:void(0)"><i class="ti-user m-r-10"></i> Profile</a></li>
        <li><a href="javascript:void(0)"><i class="ti-settings m-r-10"></i> Settings</a></li>
        <li><a href="javascript:void(0)"><i class="ti-lock m-r-10"></i> Lock screen</a></li>
        <li class="divider"></li>
        <li><a href="index.php?action=log_out"><i class="ti-power-off m-r-10"></i> Logout</a></li>
    </ul>
</li>
</ul>
</div>
</div> <!-- end container -->
</div> <!-- end navbar -->
</div>
<!-- Top Bar End -->
<!--##################################################################################################-->

<!-- Page content start -->
<div class="page-contentbar">

    <!--left navigation start-->
    <aside class="sidebar-navigation">
        <div class="scrollbar-wrapper">
            <div>
                <button type="button" class="button-menu-mobile btn-mobile-view visible-xs visible-sm">
                    <i class="mdi mdi-close"></i>
                </button>
                <!-- User Detail box -->
                <div class="user-details">
                    <div class="pull-left">
                        <img src="views/assets/images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
                    </div>
                    <div class="user-info">
                        <a href="#">Aarón Sánchez</a>
                        <p class="text-muted m-0">Admin</p>
                    </div>
                </div>
                <!--- End User Detail box -->
                <!--NAVEGACION-->
                <?php
                    include "modules/navegacion.php";
                ?>
            </div>
        </div><!--Scrollbar wrapper-->
    </aside>
    <!--left navigation end-->

    <!-- START PAGE CONTENT -->
    <div id="page-right-content">
        <div class="container">
          <?php
            $mvc = new Controller();
            $mvc -> enlacesPaginas();
          ?>
      </div>
      <!-- end container -->

  </div>
  <!-- End #page-right-content -->
</div>
<!-- end .page-contentbar -->
</div>
<!-- End #page-wrapper -->

<!-- js placed at the end of the document so the pages load faster -->
<script src="views/assets/js/jquery-2.1.4.min.js"></script>
<script src="views/assets/js/bootstrap.min.js"></script>
<script src="views/assets/js/metisMenu.min.js"></script>
<script src="views/assets/js/jquery.slimscroll.min.js"></script>

<!--Morris Chart-->
<script src="views/assets/plugins/morris/morris.min.js"></script>
<script src="views/assets/plugins/raphael/raphael-min.js"></script>

<!-- Dashboard init -->
<script src="views/assets/pages/jquery.dashboard.js"></script>

<!-- App Js -->
<script src="views/assets/js/jquery.app.js"></script>
<!-- select2 -->
<script src="views/assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
<script src="views/assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
<script src="views/assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
<script src="views/assets/plugins/switchery/switchery.min.js"></script>
<script type="text/javascript" src="views/assets/plugins/parsleyjs/parsley.min.js"></script>

<script src="views/assets/plugins/moment/moment.js"></script>
<script src="views/assets/plugins/timepicker/bootstrap-timepicker.js"></script>
<script src="views/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="views/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="views/assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
<script src="views/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="views/assets/plugins/summernote/summernote.min.js"></script>
<!-- form advanced init js -->
<script src="views/assets/pages/jquery.form-advanced.init.js"></script>


<!-- Datatable js -->
<script src="views/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="views/assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="views/assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="views/assets/plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="views/assets/plugins/datatables/jszip.min.js"></script>
<script src="views/assets/plugins/datatables/pdfmake.min.js"></script>
<script src="views/assets/plugins/datatables/vfs_fonts.js"></script>
<script src="views/assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="views/assets/plugins/datatables/buttons.print.min.js"></script>
<script src="views/assets/plugins/datatables/dataTables.keyTable.min.js"></script>
<script src="views/assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="views/assets/plugins/datatables/responsive.bootstrap.min.js"></script>
<script src="views/assets/plugins/datatables/dataTables.scroller.min.js"></script>
<script src="views/assets/plugins/datatables/dataTables.colVis.js"></script>
<script src="views/assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>

<!-- init -->
<script src="views/assets/pages/jquery.datatables.init.js"></script>

</body>
</html>
