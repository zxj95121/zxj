<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />

        <title>@yield('title')</title>

        <!-- Google-Fonts -->
        <!-- <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:100,300,400,600,700,900,400italic' rel='stylesheet'> -->

        <!-- Bootstrap core CSS -->
        <link href="/all/admin/css/bootstrap.min.css" rel="stylesheet">
        <link href="/all/admin/css/bootstrap-reset.css" rel="stylesheet">

        <!--Animation css-->
        <link href="/all/admin/css/animate.css" rel="stylesheet">

        <!--Icon-fonts css-->
        <link href="/all/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="/all/admin/assets/ionicon/css/ionicons.min.css" rel="stylesheet" />

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="/all/admin/assets/morris/morris.css">

        <!-- sweet alerts -->
        <!-- <link href="/all/admin/assets/sweet-alert/sweet-alert.min.css" rel="stylesheet"> -->

        <!-- Custom styles for this template -->
        <link href="/all/admin/css/style.css" rel="stylesheet">
        <link href="/all/admin/css/helper.css" rel="stylesheet">
        <!-- <link href="/all/admin/css/style-responsive.css" rel="stylesheet" /> -->


        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="/all/admin/js/html5shiv.js"></script>
          <script src="/all/admin/js/respond.min.js"></script>
        <![endif]-->
        @yield('style')
    </head>


    <body>

        <!-- Aside Start-->
        <aside class="left-panel">

            <!-- brand -->
            <div class="logo">
                <a href="/zxj/dashboard" class="logo-expanded">
                    <img src="/favicon.ico" alt="logo" width="20px" height="20px" style="border-radius: 50%;">
                    <span class="nav-label">管理后台</span>
                </a>
            </div>
            <!-- / brand -->
        
            <!-- Navbar Start -->
            <nav class="navigation">
                <ul class="list-unstyled">
                    <!--  -->

                    <li class="has-submenu {!!(Request::is('zxj/leaveMessage/notRead', 'zxj/leaveMessage/all')? 'active' : '') !!}">
                        <a href="#">
                            <i class="ion-email"></i> 
                            <span class="nav-label">留言</span>
                            <span class="badge bg-info" style="float: right;">7</span>
                        </a>
                        <ul class="list-unstyled lyUl">
                            <li class="{!!(Request::is('zxj/leaveMessage/notRead')? 'active' : '') !!}">
                                <a href="/zxj/leaveMessage/notRead">未读留言<span class="badge bg-success" style="float: right;">7</span></a>
                            </li>
                            <li class="{!!(Request::is('zxj/leaveMessage/all')? 'active' : '') !!}">
                                <a href="/zxj/leaveMessage/all">所有留言</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
                
        </aside>
        <!-- Aside Ends-->


        <!--Main Content Start -->
        <section class="content">
            
            <!-- Header -->
            <header class="top-head container-fluid" style="height: fit-content;">
                <button type="button" class="navbar-toggle pull-left">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <!-- Search -->
                <form role="search" class="navbar-left app-search pull-left hidden-xs">
                  <input type="text" placeholder="Search..." class="form-control">
                </form>
                
                <!-- Left navbar -->
                <nav class=" navbar-default hidden-xs" role="navigation">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                          <a data-toggle="dropdown" class="dropdown-toggle" href="#">English <span class="caret"></span></a>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="#">German</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">Italian</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Files</a></li>
                        <li><a href="../frontend/" target="_blank">Frontend</a></li>
                    </ul>
                </nav>
                
                <!-- Right navbar -->
                <ul class="list-inline navbar-right top-menu top-right-menu">  
                    <!-- mesages -->  
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-envelope-o "></i>
                            <span class="badge badge-sm up bg-purple count">4</span>
                        </a>
                        <ul class="dropdown-menu extended fadeInUp animated nicescroll" tabindex="5001">
                            <li>
                                <p>Messages</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><img src="/all/admin/img/avatar-2.jpg" class="img-circle thumb-sm m-r-15" alt="img"></span>
                                    <span class="block"><strong>John smith</strong></span>
                                    <span class="media-body block">New tasks needs to be done<br><small class="text-muted">10 seconds ago</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><img src="/all/admin/img/avatar-3.jpg" class="img-circle thumb-sm m-r-15" alt="img"></span>
                                    <span class="block"><strong>John smith</strong></span>
                                    <span class="media-body block">New tasks needs to be done<br><small class="text-muted">3 minutes ago</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><img src="/all/admin/img/avatar-4.jpg" class="img-circle thumb-sm m-r-15" alt="img"></span>
                                    <span class="block"><strong>John smith</strong></span>
                                    <span class="media-body block">New tasks needs to be done<br><small class="text-muted">10 minutes ago</small></span>
                                </a>
                            </li>
                            <li>
                                <p><a href="inbox.html" class="text-right">See all Messages</a></p>
                            </li>
                        </ul>
                    </li>
                    <!-- /messages -->
                    <!-- Notification -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge badge-sm up bg-pink count">3</span>
                        </a>
                        <ul class="dropdown-menu extended fadeInUp animated nicescroll" tabindex="5002">
                            <li class="noti-header">
                                <p>Notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><i class="fa fa-user-plus fa-2x text-info"></i></span>
                                    <span>New user registered<br><small class="text-muted">5 minutes ago</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><i class="fa fa-diamond fa-2x text-primary"></i></span>
                                    <span>Use animate.css<br><small class="text-muted">5 minutes ago</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><i class="fa fa-bell-o fa-2x text-danger"></i></span>
                                    <span>Send project demo files to client<br><small class="text-muted">1 hour ago</small></span>
                                </a>
                            </li>
                            
                            <li>
                                <p><a href="#" class="text-right">See all notifications</a></p>
                            </li>
                        </ul>
                    </li>
                    <!-- /Notification -->

                    <!-- user login dropdown start-->
                    <li class="dropdown text-center">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="/all/admin/img/avatar-2.jpg" class="img-circle profile-img thumb-sm">
                            <span class="username">John Deo </span> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu extended pro-menu fadeInUp animated" tabindex="5003" style="overflow: hidden; outline: none;">
                            <li><a href="profile.html"><i class="fa fa-briefcase"></i>Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="#"><i class="fa fa-bell"></i> Friends <span class="label label-info pull-right mail-info">5</span></a></li>
                            <li><a href="#"><i class="fa fa-sign-out"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->       
                </ul>
                <!-- End right navbar -->

            </header>
            <!-- Header Ends -->


            <!-- Page Content Start -->
            <!-- ================== -->

            @yield('content')

            <!-- Page Content Ends -->
            <!-- ================== -->

            <!-- Footer Start -->
            <footer class="footer">
                2017 © wells.
            </footer>
            <!-- Footer Ends -->



        </section>
        <!-- Main Content Ends -->
        


        <!-- js placed at the end of the document so the pages load faster -->
        <script src="/all/admin/js/jquery.js"></script>
        <script src="/all/admin/js/bootstrap.min.js"></script>
        <script src="/all/admin/js/modernizr.min.js"></script>
        <script src="/all/admin/js/pace.min.js"></script>
        <script src="/all/admin/js/wow.min.js"></script>
        <script src="/all/admin/js/jquery.scrollTo.min.js"></script>
        <script src="/all/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
        <!-- <script src="/all/admin/assets/chat/moment-2.2.1.js"></script> -->

        <!-- Counter-up -->
        <script src="/all/admin/js/waypoints.min.js" type="text/javascript"></script>
        <script src="/all/admin/js/jquery.counterup.min.js" type="text/javascript"></script>

        <!-- EASY PIE CHART JS -->
        <!-- <script src="/all/admin/assets/easypie-chart/easypiechart.min.js"></script> -->
        <!-- <script src="/all/admin/assets/easypie-chart/jquery.easypiechart.min.js"></script> -->
        <!-- <script src="/all/admin/assets/easypie-chart/example.js"></script> -->


        <!--C3 Chart-->
        <!-- <script src="/all/admin/assets/c3-chart/d3.v3.min.js"></script> -->
        <!-- <script src="/all/admin/assets/c3-chart/c3.js"></script> -->

        <!--Morris Chart-->
        <script src="/all/admin/assets/morris/morris.min.js"></script>
        <script src="/all/admin/assets/morris/raphael.min.js"></script>

        <!-- sparkline --> 
        <!-- <script src="/all/admin/assets/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script> -->
        <!-- <script src="/all/admin/assets/sparkline-chart/chart-sparkline.js" type="text/javascript"></script>  -->

        <!-- sweet alerts -->
        <!-- <script src="/all/admin/assets/sweet-alert/sweet-alert.min.js"></script> -->
        <!-- <script src="/all/admin/assets/sweet-alert/sweet-alert.init.js"></script> -->

        <script src="/all/admin/js/jquery.app.js"></script>
        <!-- Chat -->
        <script src="/all/admin/js/jquery.chat.js"></script>
        <!-- Dashboard -->
        <script src="/all/admin/js/jquery.dashboard.js"></script>

        <!-- Todo -->
        <!-- <script src="/all/admin/js/jquery.todo.js"></script> -->


        <script type="text/javascript">
        /* ==============================================
             Counter Up
             =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
    
        @yield('script')
    </body>
</html>
