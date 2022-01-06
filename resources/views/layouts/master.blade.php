<!DOCTYPE html>
<html class=" ">
    <head>
        <!-- 
         * @Package: Ultra Admin - Responsive Theme
         * @Subpackage: Bootstrap
         * @Version: B4-1.3
         * This file is part of Ultra Admin Theme.
        -->
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Ultra Admin Bootstrap 4 : Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        
        <link rel="shortcut icon" href="{!! asset('dashboard/assets/images/favicon.png') !!}" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="dashboard/assets/images/apple-touch-icon-57-precomposed.png">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="dashboard/assets/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="dashboard/assets/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="dashboard/assets/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->
  <!-- CORE CSS FRAMEWORK - START -->
        <link href=" {!! asset('dashboard/assets/plugins/pace/pace-theme-flash.css') !!}" rel="stylesheet" type="text/css" media="screen"/><link href="dashboard/assets/plugins/jquery-ui/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" media="screen"/><link href="dashboard/assets/plugins/jvectormap/jquery-jvectormap-2.0.1.css" rel="stylesheet" type="text/css" media="screen"/><link href="dashboard/assets/plugins/icheck/skins/minimal/white.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 
        <link href=" {!! asset('dashboard/assets/plugins/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" media="screen"/><link href="dashboard/assets/plugins/jquery-ui/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" media="screen"/><link href="dashboard/assets/plugins/jvectormap/jquery-jvectormap-2.0.1.css" rel="stylesheet" type="text/css" media="screen"/><link href="dashboard/assets/plugins/icheck/skins/minimal/white.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 
        <link href=" {!! asset('dashboard/assets/fonts/font-awesome/css/font-awesome.css') !!}" rel="stylesheet" type="text/css" media="screen"/><link href="dashboard/assets/plugins/jquery-ui/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" media="screen"/><link href="dashboard/assets/plugins/jvectormap/jquery-jvectormap-2.0.1.css" rel="stylesheet" type="text/css" media="screen"/><link href="dashboard/assets/plugins/icheck/skins/minimal/white.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 
        <link href=" {!! asset('dashboard/assets/css/animate.min.css') !!}" rel="stylesheet" type="text/css" media="screen"/><link href="dashboard/assets/plugins/jquery-ui/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" media="screen"/><link href="dashboard/assets/plugins/jvectormap/jquery-jvectormap-2.0.1.css" rel="stylesheet" type="text/css" media="screen"/><link href="dashboard/assets/plugins/icheck/skins/minimal/white.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 
        <link href=" {!! asset('dashboard/assets/plugins/perfect-scrollbar/perfect-scrollbar.css') !!}" rel="stylesheet" type="text/css" media="screen"/><link href="dashboard/assets/plugins/jquery-ui/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" media="screen"/><link href="dashboard/assets/plugins/jvectormap/jquery-jvectormap-2.0.1.css" rel="stylesheet" type="text/css" media="screen"/><link href="dashboard/assets/plugins/icheck/skins/minimal/white.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 

      

        <!-- CORE CSS FRAMEWORK - END -->
       
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <link href=" {!! asset('dashboard/assets/plugins/morris-chart/css/morris.css') !!}" rel="stylesheet" type="text/css" media="screen"/><link href="dashboard/assets/plugins/jquery-ui/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" media="screen"/><link href="dashboard/assets/plugins/jvectormap/jquery-jvectormap-2.0.1.css" rel="stylesheet" type="text/css" media="screen"/><link href="dashboard/assets/plugins/icheck/skins/minimal/white.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href=" {!! asset('dashboard/assets/css/style.css') !!}" rel="stylesheet" type="text/css"/>
        <link href="{!! asset('dashboard/assets/css/responsive.css') !!}" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->
       
    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" "><!-- START TOPBAR -->
        <div class='page-topbar '>
            <div class='logo-area'>

            </div>
            <div class='quick-area'>
                <div class='float-left'>
                    <ul class="info-menu left-links list-inline list-unstyled">
                        <li class="sidebar-toggle-wrap list-inline-item">
                            <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                        <li class="message-toggle-wrapper list-inline-item">
                            <a href="#" data-toggle="dropdown" class="toggle">
                                <i class="fa fa-envelope"></i>
                                <span class="badge badge-pill badge-primary">7</span>
                            </a>
                            <ul class="dropdown-menu messages animated fadeIn">

                                <li class="list dropdown-item">

                                    <ul class="dropdown-menu-list list-unstyled ps-scrollbar">
                                        <li class="unread status-available">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                
                                                    <img src="{!! asset('dashboard/data/profile/avatar-1.png') !!}" alt="user-image" class="rounded-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Clarine Vassar</strong>
                                                        <span class="time small">- 15 mins ago</span>
                                                        <span class="profile-status available float-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-away">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                    <img src="{!! asset('dashboard/data/profile/avatar-2.png') !!}" alt="user-image" class="rounded-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Brooks Latshaw</strong>
                                                        <span class="time small">- 45 mins ago</span>
                                                        <span class="profile-status away float-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-busy">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                    <img src="{!! asset('dashboard/data/profile/avatar-3.png') !!}" alt="user-image" class="rounded-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Clementina Brodeur</strong>
                                                        <span class="time small">- 1 hour ago</span>
                                                        <span class="profile-status busy float-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-offline">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                    <img src="{!! asset('dashboard/data/profile/avatar-4.png') !!}" alt="user-image" class="rounded-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Carri Busey</strong>
                                                        <span class="time small">- 5 hours ago</span>
                                                        <span class="profile-status offline float-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-offline">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                    <img src="{!! asset('dashboard/data/profile/avatar-5.png') !!}" alt="user-image" class="rounded-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Melissa Dock</strong>
                                                        <span class="time small">- Yesterday</span>
                                                        <span class="profile-status offline float-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-available">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                    <img src="{!! asset('dashboard/data/profile/avatar-1.png') !!}" alt="user-image" class="rounded-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Verdell Rea</strong>
                                                        <span class="time small">- 14th Mar</span>
                                                        <span class="profile-status available float-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-busy">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                    <img src="{!! asset('dashboard/data/profile/avatar-2.png') !!}" alt="user-image" class="rounded-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Linette Lheureux</strong>
                                                        <span class="time small">- 16th Mar</span>
                                                        <span class="profile-status busy float-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-away">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                    <img src="{!! asset('dashboard/data/profile/avatar-3.png') !!}" alt="user-image" class="rounded-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Araceli Boatright</strong>
                                                        <span class="time small">- 16th Mar</span>
                                                        <span class="profile-status away float-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>

                                </li>

                                <li class="external">
                                    <a href="javascript:;">
                                        <span>Read All Messages</span>
                                    </a>
                                </li>
                            </ul>

                        </li>
                        <li class="notify-toggle-wrapper list-inline-item">
                            <a href="#" data-toggle="dropdown" class="toggle">
                                <i class="fa fa-bell"></i>
                                <span class="badge badge-pill badge-orange">3</span>
                            </a>
                            <ul class="dropdown-menu notifications animated fadeIn">
                              
                                <li class="total dropdown-item">
                                    <span class="small">
                                        You have <strong>3</strong> new notifications.
                                        <a href="javascript:;" class="float-right">Mark all as Read</a>
                                    </span>
                                </li>
                                <li class="list dropdown-item">

                                    <ul class="dropdown-menu-list list-unstyled ps-scrollbar">
                                        <li class="unread available"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Server needs to reboot</strong>
                                                        <span class="time small">15 mins ago</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="unread away"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-envelope"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>45 new messages</strong>
                                                        <span class="time small">45 mins ago</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" busy"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-times"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Server IP Blocked</strong>
                                                        <span class="time small">1 hour ago</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" offline"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>10 Orders Shipped</strong>
                                                        <span class="time small">5 hours ago</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" offline"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>New Comment on blog</strong>
                                                        <span class="time small">Yesterday</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" available"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Great Speed Notify</strong>
                                                        <span class="time small">14th Mar</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" busy"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-times"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Team Meeting at 6PM</strong>
                                                        <span class="time small">16th Mar</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>

                                </li>

                                <li class="external dropdown-item">
                                    <a href="javascript:;">
                                        <span>Read All Notifications</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="d-sm-none d-none searchform list-inline-item">
                            <div class="input-group">
                                <span class="input-group-addon input-focus">
                                    <i class="fa fa-search"></i>
                                </span>
                                <form action="search-page.html" method="post">
                                    <input type="text" class="form-control animated fadeIn" placeholder="Search & Enter">
                                    <input type='submit' value="">
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>		
                <div class='float-right'>
                    <ul class="info-menu right-links list-inline list-unstyled">
                   
                
                        <li class="profile list-inline-item">
                            <a href="#" data-toggle="dropdown" class="toggle">
                                <img src="{!! asset('dashboard/data/profile/profile.png') !!}" alt="user-image" class="rounded-circle img-inline">
                                <span>   
                                @if (Auth::check())
                                   {{ Auth::user()->name }} 
                                @endif
                                    <i class="fa fa-angle-down"></i></span>
                            </a>
                            <ul class="dropdown-menu profile animated fadeIn">
                    
                                <li class="dropdown-item">
                                    <a href="#settings">
                                        <i class="fa fa-wrench"></i>
                                        Settings
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#profile">
                                        <i class="fa fa-user"></i>
                                        Profile
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#help">
                                        <i class="fa fa-info"></i>
                                        Help
                                    </a>
                                </li>
                                <li class="last dropdown-item">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                   
                            </ul>
                        </li>
                        <li class="chat-toggle-wrapper list-inline-item">
                            <a href="#" data-toggle="chatbar" class="toggle_chat">
                                <i class="fa fa-comments"></i>
                                <span class="badge badge-pill badge-warning">9</span>
                                <i class="fa fa-times"></i>
                            </a>
                        </li>
                    </ul>			
                </div>		
            </div>

        </div>
        <!-- END TOPBAR -->
        <!-- START CONTAINER -->
        <div class="page-container row-fluid">

            <!-- SIDEBAR - START -->
            <div class="page-sidebar " style="margin-top:30px">

                <!-- MAIN MENU - START -->
                <div class="page-sidebar-wrapper" id="main-menu-wrapper"> 

                    <!-- USER INFO - START -->
                    <div class="profile-info row">

                        <div class="profile-image col-lg-4 col-md-4 col-4">
                            <a href="ui-profile.html">
                                <img src="{!! asset('dashboard/data/profile/profile.png') !!}" class="img-fluid rounded-circle">
                            </a>
                        </div>

                        <div class="profile-details col-lg-8 col-md-8 col-8">

                            <h3>
                                <a href="ui-profile.html">{{ Auth::user()->name }}</a>

                                <!-- Available statuses: online, idle, busy, away and offline -->
                                <span class="profile-status online"></span>
                            </h3>

                            <p class="profile-title">Web Developer</p>

                        </div>

                    </div>
                    <!-- USER INFO - END -->



                    <ul class='wraplist'>	


                        <li class="{{ Request::segment(1) === 'home' ? 'open' : null }}"> 
                            <a href="{!! url('home') !!}">
                                <i class="fa fa-dashboard"></i>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li class="{{ Request::segment(1) === 'employees' ? 'open' : null }}"> 
                            <a href="{!! url('employees') !!}">
                                <i class="fa fa-suitcase"></i>
                                <span class="title">Employee</span>
                            </a>
                         
                        </li>
                      

                    </ul>

                </div>
                <!-- MAIN MENU - END -->



                <div class="project-info">

                    <div class="block1">
                        <div class="data">
                            <span class='title'>New&nbsp;Orders</span>
                            <span class='total'>2,345</span>
                        </div>
                        <div class="graph">
                            <span class="sidebar_orders">...</span>
                        </div>
                    </div>

                    <div class="block2">
                        <div class="data">
                            <span class='title'>Visitors</span>
                            <span class='total'>345</span>
                        </div>
                        <div class="graph">
                            <span class="sidebar_visitors">...</span>
                        </div>
                    </div>

                </div>



            </div>

          @yield('content')



            

            <div class="chatapi-windows ">


            </div>    </div>
        <!-- END CONTAINER -->
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->

        <!-- CORE JS FRAMEWORK - START --> 
        <script src="{!! asset('dashboard/assets/js/jquery-3.4.1.min.js') !!}" type="text/javascript"></script> 
        <script src="{!! asset('dashboard/assets/js/popper.min.js') !!}" type="text/javascript"></script> 
        <!-- <script src="dashboard/assets/js/jquery.easing.min.js" type="text/javascript"></script>  -->
        <script src="{!! asset('dashboard/assets/plugins/bootstrap/js/bootstrap.min.js') !!}" type="text/javascript"></script> 
        <script src="{!! asset('dashboard/assets/plugins/pace/pace.min.js') !!}" type="text/javascript"></script>  

        <script src="{!! asset('dashboard/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') !!}" type="text/javascript"></script> 
        <script src="{!! asset('dashboard/assets/plugins/viewport/viewportchecker.js') !!}" type="text/javascript"></script>  
        <!-- CORE JS FRAMEWORK - END --> 


        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <script src="{!! asset('dashboard/assets/plugins/jquery-ui/smoothness/jquery-ui.min.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('dashboard/assets/plugins/sparkline-chart/jquery.sparkline.min.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('dashboard/assets/plugins/easypiechart/jquery.easypiechart.min.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('dashboard/assets/plugins/morris-chart/js/raphael-min.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('dashboard/assets/plugins/morris-chart/js/morris.min.js') !!}" type="text/javascript"></script>

        <script src="{!! asset('dashboard/assets/plugins/jvectormap/jquery-jvectormap-2.0.1.min.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('dashboard/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('dashboard/assets/plugins/gauge/gauge.min.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('dashboard/assets/plugins/icheck/icheck.min.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('dashboard/assets/js/dashboard.js') !!}" type="text/javascript"></script>

        
        
        

      
        <!-- CORE TEMPLATE JS - START --> 
        <script src="{!! asset('dashboard/assets/js/scripts.js') !!}" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 

        <!-- Sidebar Graph - START --> 
        <script src="{!! asset('dashboard/assets/plugins/sparkline-chart/jquery.sparkline.min.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('dashboard/assets/js/chart-sparkline.js') !!}" type="text/javascript"></script>
        <!-- Sidebar Graph - END --> 













        <!-- General section box modal start -->
        <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
            <div class="modal-dialog animated bounceInDown">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Section Settings</h4>
                    </div>
                    <div class="modal-body">

                        Body goes here...

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->
    </body>
</html>





<script type="text/javascript">


</script>