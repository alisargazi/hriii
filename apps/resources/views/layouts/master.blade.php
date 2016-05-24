<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="bootstrap admin template">
        <meta name="author" content="">
        <title>Blank | Remark Admin Template</title>
        <link rel="apple-touch-icon" href="{{asset('assets/template/assets/images/apple-touch-icon.png')}}">
        <link rel="shortcut icon" href="{{asset('assets/template/assets/images/favicon.ico')}}">
        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{asset('assets/template/global/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/template/global/css/bootstrap-extend.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/template/assets/css/site.min.css')}}">
        <!-- Plugins -->
        <link rel="stylesheet" href="{{asset('assets/template/global/vendor/animsition/animsition.css')}}">
        <link rel="stylesheet" href="{{asset('assets/template/global/vendor/asscrollable/asScrollable.css')}}">
        <link rel="stylesheet" href="{{asset('assets/template/global/vendor/switchery/switchery.css')}}">
        <link rel="stylesheet" href="{{asset('assets/template/global/vendor/intro-js/introjs.css')}}">
        <link rel="stylesheet" href="{{asset('assets/template/global/vendor/slidepanel/slidePanel.css')}}">
        <link rel="stylesheet" href="{{asset('assets/template/global/vendor/jquery-mmenu/jquery-mmenu.css')}}">
        <link rel="stylesheet" href="{{asset('assets/template/global/vendor/flag-icon-css/flag-icon.css')}}">
        <link rel="stylesheet" href="{{asset('assets/template/global/vendor/waves/waves.css')}}">
        <link rel="stylesheet" href="{{asset('assets/template/assets/examples/css/pages/profile.css')}}">
        <!-- Fonts -->
        <link rel="stylesheet" href="{{asset('assets/template/global/fonts/material-design/material-design.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/template/global/fonts/brand-icons/brand-icons.min.css')}}">
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
        <!--[if lt IE 9]>
          <script src="../../../global/vendor/html5shiv/html5shiv.min.js"></script>
          <![endif]-->
        <!--[if lt IE 10]>
          <script src="../../../global/vendor/media-match/media.match.min.js"></script>
          <script src="../../../global/vendor/respond/respond.min.js"></script>
          <![endif]-->
        <!-- Scripts -->




        @if(Request::is('dashboard'))
        <!--Calendar ใน Dashboard-->
        <link rel="stylesheet" href="{{asset('assets/template/global/vendor/fullcalendar/fullcalendar.css')}}">
        <link rel="stylesheet" href="{{asset('assets/template/global/vendor/bootstrap-datepicker/bootstrap-datepicker.css')}}">
        <link rel="stylesheet" href="{{asset('assets/template/global/vendor/bootstrap-touchspin/bootstrap-touchspin.css')}}">
        <link rel="stylesheet" href="{{asset('assets/template/global/vendor/jquery-selective/jquery-selective.css')}}">
        <link rel="stylesheet" href="{{asset('assets/template/assets/examples/css/apps/calendar.css')}}">
        <!--/Calendar-->

        <!--markdown Editor-->
        <!--  <link rel="stylesheet" href="{{asset('assets/template/global/vendor/bootstrap-markdown/bootstrap-markdown.css')}}">  -->
        @endif


        @if( (Request::is('customer/list')) || (Request::is('employee/list'))   )
        <link rel="stylesheet" href="{{asset('assets/template/global/vendor/filament-tablesaw/tablesaw.css')}}">
        <link rel="stylesheet" href="{{asset('assets/template/global/vendor/slidepanel/slidePanel.css')}}">
        <link rel="stylesheet" href="{{asset('assets/template/assets/examples/css/apps/contacts.css')}}">
        @endif






        <script src="{{asset('assets/template/global/vendor/modernizr/modernizr.js')}}"></script>
        <script src="{{asset('assets/template/global/vendor/breakpoints/breakpoints.js')}}"></script>
        <script>
Breakpoints();
        </script>
    </head>
    <body class="site-navbar-small ">
        @section('navbar')
        <nav class="site-navbar navbar navbar-inverse navbar-fixed-top navbar-mega" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
                        data-toggle="menubar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="hamburger-bar"></span>
                </button>
                <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
                        data-toggle="collapse">
                    <i class="icon md-more" aria-hidden="true"></i>
                </button>
                <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
                    <img class="navbar-brand-logo" src="{{asset('assets/template/assets/images/logo.png')}}" title="Remark">
                    <span class="navbar-brand-text hidden-xs"> Remark</span>
                </div>
                <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
                        data-toggle="collapse">
                    <span class="sr-only">Toggle Search</span>
                    <i class="icon md-search" aria-hidden="true"></i>
                </button>
            </div>
            <div class="navbar-container container-fluid">
                <!-- Navbar Collapse -->
                <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
                    <!-- Navbar Toolbar -->
                    <ul class="nav navbar-toolbar">
                        <li class="hidden-float" id="toggleMenubar">
                            <a data-toggle="menubar" href="#" role="button">
                                <i class="icon hamburger hamburger-arrow-left">
                                    <span class="sr-only">Toggle menubar</span>
                                    <span class="hamburger-bar"></span>
                                </i>
                            </a>
                        </li>
                        <li class="hidden-xs" id="toggleFullscreen">
                            <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                                <span class="sr-only">Toggle fullscreen</span>
                            </a>
                        </li>
                        <li class="hidden-float">
                            <a class="icon md-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
                               role="button">
                                <span class="sr-only">Toggle Search</span>
                            </a>
                        </li>
                        <li class="dropdown dropdown-fw dropdown-mega">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
                               data-animation="fade" role="button">Mega <i class="icon md-chevron-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation">
                                    <div class="mega-content">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h5>UI Kit</h5>
                                                <ul class="blocks-2">
                                                    <li class="mega-menu margin-0">
                                                        <ul class="list-icons">
                                                            <li><i class="md-chevron-right" aria-hidden="true"></i>
                                                                <a href="../advanced/animation.html">Animation</a>
                                                            </li>
                                                            <li><i class="md-chevron-right" aria-hidden="true"></i>
                                                                <a href="../uikit/buttons.html">Buttons</a>
                                                            </li>
                                                            <li><i class="md-chevron-right" aria-hidden="true"></i>
                                                                <a href="../uikit/colors.html">Colors</a>
                                                            </li>
                                                            <li><i class="md-chevron-right" aria-hidden="true"></i>
                                                                <a href="../uikit/dropdowns.html">Dropdowns</a>
                                                            </li>
                                                            <li><i class="md-chevron-right" aria-hidden="true"></i>
                                                                <a href="../uikit/icons.html">Icons</a>
                                                            </li>
                                                            <li><i class="md-chevron-right" aria-hidden="true"></i>
                                                                <a href="../advanced/lightbox.html">Lightbox</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu margin-0">
                                                        <ul class="list-icons">
                                                            <li><i class="md-chevron-right" aria-hidden="true"></i>
                                                                <a href="../uikit/modals.html">Modals</a>
                                                            </li>
                                                            <li><i class="md-chevron-right" aria-hidden="true"></i>
                                                                <a href="../uikit/panel-structure.html">Panels</a>
                                                            </li>
                                                            <li><i class="md-chevron-right" aria-hidden="true"></i>
                                                                <a href="../structure/overlay.html">Overlay</a>
                                                            </li>
                                                            <li><i class="md-chevron-right" aria-hidden="true"></i>
                                                                <a href="../uikit/tooltip-popover.html ">Tooltips</a>
                                                            </li>
                                                            <li><i class="md-chevron-right" aria-hidden="true"></i>
                                                                <a href="../advanced/scrollable.html">Scrollable</a>
                                                            </li>
                                                            <li><i class="md-chevron-right" aria-hidden="true"></i>
                                                                <a href="../uikit/typography.html">Typography</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <h5>Media
                                                    <span class="badge badge-success">4</span>
                                                </h5>
                                                <ul class="blocks-3">
                                                    <li>
                                                        <a class="thumbnail margin-0" href="javascript:void(0)">
                                                            <img class="width-full" src="assets/template/global/photos/placeholder.png" alt="..."
                                                                 />
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="thumbnail margin-0" href="javascript:void(0)">
                                                            <img class="width-full" src="assets/template/global/photos/placeholder.png" alt="..."
                                                                 />
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="thumbnail margin-0" href="javascript:void(0)">
                                                            <img class="width-full" src="assets/template/global/photos/placeholder.png" alt="..."
                                                                 />
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="thumbnail margin-0" href="javascript:void(0)">
                                                            <img class="width-full" src="assets/template/global/photos/placeholder.png" alt="..."
                                                                 />
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="thumbnail margin-0" href="javascript:void(0)">
                                                            <img class="width-full" src="assets/template/global/photos/placeholder.png" alt="..."
                                                                 />
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="thumbnail margin-0" href="javascript:void(0)">
                                                            <img class="width-full" src="assets/template/global/photos/placeholder.png" alt="..."
                                                                 />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <h5 class="margin-bottom-0">Accordion</h5>
                                                <!-- Accordion -->
                                                <div class="panel-group panel-group-simple" id="siteMegaAccordion" aria-multiselectable="true"
                                                     role="tablist">
                                                    <div class="panel">
                                                        <div class="panel-heading" id="siteMegaAccordionHeadingOne" role="tab">
                                                            <a class="panel-title" data-toggle="collapse" href="#siteMegaCollapseOne" data-parent="#siteMegaAccordion"
                                                               aria-expanded="false" aria-controls="siteMegaCollapseOne">
                                                                Collapsible Group Item #1
                                                            </a>
                                                        </div>
                                                        <div class="panel-collapse collapse" id="siteMegaCollapseOne" aria-labelledby="siteMegaAccordionHeadingOne"
                                                             role="tabpanel">
                                                            <div class="panel-body">
                                                                De moveat laudatur vestra parum doloribus labitur sentire partes, eripuit praesenti
                                                                congressus ostendit alienae, voluptati ornateque
                                                                accusamus clamat reperietur convicia albucius.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel">
                                                        <div class="panel-heading" id="siteMegaAccordionHeadingTwo" role="tab">
                                                            <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseTwo"
                                                               data-parent="#siteMegaAccordion" aria-expanded="false"
                                                               aria-controls="siteMegaCollapseTwo">
                                                                Collapsible Group Item #2
                                                            </a>
                                                        </div>
                                                        <div class="panel-collapse collapse" id="siteMegaCollapseTwo" aria-labelledby="siteMegaAccordionHeadingTwo"
                                                             role="tabpanel">
                                                            <div class="panel-body">
                                                                Praestabiliorem. Pellat excruciant legantur ullum leniter vacare foris voluptate
                                                                loco ignavi, credo videretur multoque choro fatemur
                                                                mortis animus adoptionem, bello statuat expediunt
                                                                naturales.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel">
                                                        <div class="panel-heading" id="siteMegaAccordionHeadingThree" role="tab">
                                                            <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseThree"
                                                               data-parent="#siteMegaAccordion" aria-expanded="false"
                                                               aria-controls="siteMegaCollapseThree">
                                                                Collapsible Group Item #3
                                                            </a>
                                                        </div>
                                                        <div class="panel-collapse collapse" id="siteMegaCollapseThree" aria-labelledby="siteMegaAccordionHeadingThree"
                                                             role="tabpanel">
                                                            <div class="panel-body">
                                                                Horum, antiquitate perciperet d conspectum locus obruamus animumque perspici probabis
                                                                suscipere. Desiderat magnum, contenta poena desiderant
                                                                concederetur menandri damna disputandum corporum.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Accordion -->
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- End Navbar Toolbar -->
                    <!-- Navbar Toolbar Right -->
                    <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" data-animation="scale-up"
                               aria-expanded="false" role="button">
                                <span class="flag-icon flag-icon-us"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation">
                                    <a href="javascript:void(0)" role="menuitem">
                                        <span class="flag-icon flag-icon-gb"></span> English</a>
                                </li>
                                <li role="presentation">
                                    <a href="javascript:void(0)" role="menuitem">
                                        <span class="flag-icon flag-icon-fr"></span> French</a>
                                </li>
                                <li role="presentation">
                                    <a href="javascript:void(0)" role="menuitem">
                                        <span class="flag-icon flag-icon-cn"></span> Chinese</a>
                                </li>
                                <li role="presentation">
                                    <a href="javascript:void(0)" role="menuitem">
                                        <span class="flag-icon flag-icon-de"></span> German</a>
                                </li>
                                <li role="presentation">
                                    <a href="javascript:void(0)" role="menuitem">
                                        <span class="flag-icon flag-icon-nl"></span> Dutch</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
                               data-animation="scale-up" role="button">
                                <span class="avatar avatar-online">
                                    <?php $empPic = Session::get('em_file'); ?>
                                    <img src='{{asset("apps/upload/$empPic")}}' alt="...">
                                    <i></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation">
                                    <a href="{{asset('employee/profile')}}" role="menuitem"><i class="icon md-account" aria-hidden="true"></i> Profile</a>
                                </li>
                                <li role="presentation">
                                    <a href="javascript:void(0)" role="menuitem"><i class="icon md-card" aria-hidden="true"></i> Billing</a>
                                </li>
                                <li role="presentation">
                                    <a href="javascript:void(0)" role="menuitem"><i class="icon md-settings" aria-hidden="true"></i> Settings</a>
                                </li>
                                <li class="divider" role="presentation"></li>
                                <li role="presentation">
                                    <a href="{{asset('logout')}}" role="menuitem"><i class="icon md-power" aria-hidden="true"></i> Logout</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" href="javascript:void(0)" title="Notifications" aria-expanded="false"
                               data-animation="scale-up" role="button">
                                <i class="icon md-notifications" aria-hidden="true"></i>
                                <span class="badge badge-danger up">5</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                                <li class="dropdown-menu-header" role="presentation">
                                    <h5>NOTIFICATIONS</h5>
                                    <span class="label label-round label-danger">New 5</span>
                                </li>
                                <li class="list-group" role="presentation">
                                    <div data-role="container">
                                        <div data-role="content">
                                            <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                                <div class="media">
                                                    <div class="media-left padding-right-10">
                                                        <i class="icon md-receipt bg-red-600 white icon-circle" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">A new order has been placed</h6>
                                                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">5 hours ago</time>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                                <div class="media">
                                                    <div class="media-left padding-right-10">
                                                        <i class="icon md-account bg-green-600 white icon-circle" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Completed the task</h6>
                                                        <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">2 days ago</time>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                                <div class="media">
                                                    <div class="media-left padding-right-10">
                                                        <i class="icon md-settings bg-red-600 white icon-circle" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Settings updated</h6>
                                                        <time class="media-meta" datetime="2015-06-11T14:05:00+08:00">2 days ago</time>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                                <div class="media">
                                                    <div class="media-left padding-right-10">
                                                        <i class="icon md-calendar bg-blue-600 white icon-circle" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Event started</h6>
                                                        <time class="media-meta" datetime="2015-06-10T13:50:18+08:00">3 days ago</time>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                                <div class="media">
                                                    <div class="media-left padding-right-10">
                                                        <i class="icon md-comment bg-orange-600 white icon-circle" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Message received</h6>
                                                        <time class="media-meta" datetime="2015-06-10T12:34:48+08:00">3 days ago</time>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-menu-footer" role="presentation">
                                    <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                                        <i class="icon md-settings" aria-hidden="true"></i>
                                    </a>
                                    <a href="javascript:void(0)" role="menuitem">
                                        All notifications
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" href="javascript:void(0)" title="Messages" aria-expanded="false"
                               data-animation="scale-up" role="button">
                                <i class="icon md-email" aria-hidden="true"></i>
                                <span class="badge badge-info up">3</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                                <li class="dropdown-menu-header" role="presentation">
                                    <h5>MESSAGES</h5>
                                    <span class="label label-round label-info">New 3</span>
                                </li>
                                <li class="list-group" role="presentation">
                                    <div data-role="container">
                                        <div data-role="content">
                                            <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                                <div class="media">
                                                    <div class="media-left padding-right-10">
                                                        <span class="avatar avatar-sm avatar-online">
                                                            <img src="assets/template/global/portraits/2.jpg" alt="..." />
                                                            <i></i>
                                                        </span>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Mary Adams</h6>
                                                        <div class="media-meta">
                                                            <time datetime="2015-06-17T20:22:05+08:00">30 minutes ago</time>
                                                        </div>
                                                        <div class="media-detail">Anyways, i would like just do it</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                                <div class="media">
                                                    <div class="media-left padding-right-10">
                                                        <span class="avatar avatar-sm avatar-off">
                                                            <img src="assets/template/global/portraits/3.jpg" alt="..." />
                                                            <i></i>
                                                        </span>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Caleb Richards</h6>
                                                        <div class="media-meta">
                                                            <time datetime="2015-06-17T12:30:30+08:00">12 hours ago</time>
                                                        </div>
                                                        <div class="media-detail">I checheck the document. But there seems</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                                <div class="media">
                                                    <div class="media-left padding-right-10">
                                                        <span class="avatar avatar-sm avatar-busy">
                                                            <img src="assets/template/global/portraits/4.jpg" alt="..." />
                                                            <i></i>
                                                        </span>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">June Lane</h6>
                                                        <div class="media-meta">
                                                            <time datetime="2015-06-16T18:38:40+08:00">2 days ago</time>
                                                        </div>
                                                        <div class="media-detail">Lorem ipsum Id consectetur et minim</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                                <div class="media">
                                                    <div class="media-left padding-right-10">
                                                        <span class="avatar avatar-sm avatar-away">
                                                            <img src="assets/template/global/portraits/5.jpg" alt="..." />
                                                            <i></i>
                                                        </span>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Edward Fletcher</h6>
                                                        <div class="media-meta">
                                                            <time datetime="2015-06-15T20:34:48+08:00">3 days ago</time>
                                                        </div>
                                                        <div class="media-detail">Dolor et irure cupidatat commodo nostrud nostrud.</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-menu-footer" role="presentation">
                                    <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                                        <i class="icon md-settings" aria-hidden="true"></i>
                                    </a>
                                    <a href="javascript:void(0)" role="menuitem">
                                        See all messages
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li id="toggleChat">
                            <a data-toggle="site-sidebar" href="javascript:void(0)" title="Chat" data-url="{{asset('assets/template/site-sidebar.tpl')}}">
                                <i class="icon md-comment" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- End Navbar Toolbar Right -->
                </div>
                <!-- End Navbar Collapse -->
                <!-- Site Navbar Seach -->
                <div class="collapse navbar-search-overlap" id="site-navbar-search">
                    <form role="search">
                        <div class="form-group">
                            <div class="input-search">
                                <i class="input-search-icon md-search" aria-hidden="true"></i>
                                <input type="text" class="form-control" name="site-search" placeholder="Search...">
                                <button type="button" class="input-search-close icon md-close" data-target="#site-navbar-search"
                                        data-toggle="collapse" aria-label="Close"></button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End Site Navbar Seach -->
            </div>
        </nav>
        @show
        @section('sidebar')
        <div class="site-menubar">
            <ul class="site-menu">
                <li class="site-menu-item  @if(Request::is('dashboard')) active @endif">  <!--Active อันที่เลือก-->
                    <a class="animsition-link" href="{{asset('dashboard')}}">
                        <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                        <span class="site-menu-title">Dashboard</span>
                    </a>
                </li>
                <!--System Data-->
                <li class="site-menu-item has-sub">
                    <a href="javascript:void(0)">
                        <i class="site-menu-icon icon md-developer-board" aria-hidden="true"></i>
                        <span class="site-menu-title">System Data</span>
                        <span class="site-menu-arrow"></span>
                    </a>
                    <ul class="site-menu-sub">
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{asset('customer/list')}}">
                                <span class="site-menu-title">Customer</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{asset('employee/list')}}">
                                <span class="site-menu-title">Employee</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!--Project-->
                <li class="site-menu-item">
                    <a class="animsition-link" href="dashboard">
                        <i class="site-menu-icon icon md-collection-text" aria-hidden="true"></i>
                        <span class="site-menu-title">Project</span>
                    </a>
                </li>
                <!--Work-->
                <li class="site-menu-item has-sub">
                    <a href="javascript:void(0)">
                        <i class="site-menu-icon icon md-assignment" aria-hidden="true"></i>
                        <span class="site-menu-title">Work</span>
                        <span class="site-menu-arrow"></span>
                    </a>
                    <ul class="site-menu-sub">
                        <li class="site-menu-item">
                            <a class="animsition-link" href="../layouts/menu-collapsed.html">
                                <span class="site-menu-title">Account</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="../layouts/menu-collapsed.html">
                                <span class="site-menu-title">Tax</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="../layouts/menu-collapsed.html">
                                <span class="site-menu-title">Audit</span>
                            </a>
                        </li>
                    </ul>
                </li>



                <!--Security-->
                <li class="site-menu-item">
                    <a class="animsition-link" href="dashboard">
                        <i class="site-menu-icon icon md-shield-check" aria-hidden="true"></i>
                        <span class="site-menu-title">Security</span>
                    </a>
                </li>
                `              </ul>
        </div>
        @show
        @section('gridmenu')
        <div class="site-gridmenu">
            <div>
                <div>
                    <ul>
                        <li>
                            <a href="../apps/mailbox/mailbox.html">
                                <i class="icon md-email"></i>
                                <span>Mailbox</span>
                            </a>
                        </li>
                        <li>
                            <a href="../apps/calendar/calendar.html">
                                <i class="icon md-calendar"></i>
                                <span>Calendar</span>
                            </a>
                        </li>
                        <li>
                            <a href="../apps/contacts/contacts.html">
                                <i class="icon md-account"></i>
                                <span>Contacts</span>
                            </a>
                        </li>
                        <li>
                            <a href="../apps/media/overview.html">
                                <i class="icon md-videocam"></i>
                                <span>Media</span>
                            </a>
                        </li>
                        <li>
                            <a href="../apps/documents/categories.html">
                                <i class="icon md-receipt"></i>
                                <span>Documents</span>
                            </a>
                        </li>
                        <li>
                            <a href="../apps/projects/projects.html">
                                <i class="icon md-image"></i>
                                <span>Project</span>
                            </a>
                        </li>
                        <li>
                            <a href="../apps/forum/forum.html">
                                <i class="icon md-comments"></i>
                                <span>Forum</span>
                            </a>
                        </li>
                        <li>
                            <a href="dashboard">
                                <i class="icon md-view-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @show

        <div class="page animsition">
            <div class="page-content">
                @yield('content')
            </div>
        </div>



        @section('footer')
        <footer class="site-footer">
            <div class="site-footer-legal">© 2016 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">kanfin.com</a></div>
            <div class="site-footer-right">
                Crafted with <i class="red-600 icon md-favorite"></i> by <a href="http://themeforest.net/user/amazingSurge">tb</a>
            </div>
        </footer>
        @show




        <!-- Core  -->
        <script src="{{asset('assets/template/global/vendor/jquery/jquery.js')}}"></script>
        <script src="{{asset('assets/template/global/vendor/bootstrap/bootstrap.js')}}"></script>
        <script src="{{asset('assets/template/global/vendor/animsition/animsition.js')}}"></script>
        <script src="{{asset('assets/template/global/vendor/asscroll/jquery-asScroll.js')}}"></script>
        <script src="{{asset('assets/template/global/vendor/mousewheel/jquery.mousewheel.js')}}"></script>
        <script src="{{asset('assets/template/global/vendor/asscrollable/jquery.asScrollable.all.js')}}"></script>
        <script src="{{asset('assets/template/global/vendor/ashoverscroll/jquery-asHoverScroll.js')}}"></script>
        <script src="{{asset('assets/template/global/vendor/waves/waves.js')}}"></script>
        <!-- Plugins -->
        <script src="{{asset('assets/template/global/vendor/jquery-mmenu/jquery.mmenu.min.all.js')}}"></script>
        <script src="{{asset('assets/template/global/vendor/switchery/switchery.min.js')}}"></script>
        <script src="{{asset('assets/template/global/vendor/intro-js/intro.js')}}"></script>
        <script src="{{asset('assets/template/global/vendor/screenfull/screenfull.js')}}"></script>
        <script src="{{asset('assets/template/global/vendor/slidepanel/jquery-slidePanel.js')}}"></script>


        <!-- Scripts -->
        <script src="{{asset('assets/template/global/js/core.js')}}"></script>
        <script src="{{asset('assets/template/assets/js/site.js')}}"></script>
        <script src="{{asset('assets/template/assets/js/sections/menu.js')}}"></script>
        <script src="{{asset('assets/template/assets/js/sections/menubar.js')}}"></script>
        <script src="{{asset('assets/template/assets/js/sections/gridmenu.js')}}"></script>
        <script src="{{asset('assets/template/assets/js/sections/sidebar.js')}}"></script>
        <script src="{{asset('assets/template/global/js/configs/config-colors.js')}}"></script>
        <script src="{{asset('assets/template/assets/js/configs/config-tour.js')}}"></script>
        <script src="{{asset('assets/template/global/js/components/asscrollable.js')}}"></script>
        <script src="{{asset('assets/template/global/js/components/animsition.js')}}"></script>
        <script src="{{asset('assets/template/global/js/components/slidepanel.js')}}"></script>
        <script src="{{asset('assets/template/global/js/components/switchery.js')}}"></script>
        <script src="{{asset('assets/template/global/js/components/tabs.js')}}"></script>
        <script src="{{asset('assets/template/global/js/plugins/responsive-tabs.js')}}"></script>


        @if(Request::is('dashboard'))
        <!--Calendar JS-->
        <!--Plugins-->

        <script src="{{asset('assets/template/global/vendor/jquery-ui/jquery-ui.min.js')}}"></script>
        <script src="{{asset('assets/template/global/vendor/moment/moment.min.js')}}"></script>
        <script src="{{asset('assets/template/global/vendor/fullcalendar/fullcalendar.js')}}"></script>
        <script src="{{asset('assets/template/global/vendor/jquery-selective/jquery-selective.min.js')}}"></script>
        <script src="{{asset('assets/template/global/vendor/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
        <script src="{{asset('assets/template/global/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
        <script src="{{asset('assets/template/global/vendor/bootbox/bootbox.js')}}"></script>
        <!--Mark Down Editor
              <script src="{{asset('assets/template/global/vendor/bootstrap-markdown/bootstrap-markdown.js')}}"></script>
               <script src="{{asset('assets/template/global/vendor/marked/marked.js')}}"></script>
               <script src="{{asset('assets/template/global/vendor/to-markdown/to-markdown.js')}}"></script> -->
        <!--/Mark Down Editor-->
        <!--Plugins-->


        <script src="{{asset('assets/template/global/js/components/tabs.js')}}"></script>
        <script src="{{asset('assets/template/global/js/components/bootstrap-touchspin.js')}}"></script>
        <script src="{{asset('assets/template/global/js/components/bootstrap-datepicker.js')}}"></script>
        <script src="{{asset('assets/template/global/js/components/material.js')}}"></script>
        <script src="{{asset('assets/template/global/js/plugins/action-btn.js')}}"></script>
        <script src="{{asset('assets/template/global/js/components/bootbox.js')}}"></script>
        <script src="{{asset('assets/template/assets/js/app.js')}}"></script>
        <script src="{{asset('assets/template/assets/examples/js/apps/calendar.js')}}"></script>
        <!--Calendar JS-->
        @endif

        @if(Request::is('employee/list') || Request::is('customer/list'))
        <!--หน้า employee/list หรือ customer/list JS-->
        <script src="{{asset('assets/template/global/vendor/aspaginator/jquery.asPaginator.min.js')}}"></script>
        <script src="{{asset('assets/template/global/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>
        <script src="{{asset('assets/template/global/vendor/bootbox/bootbox.js')}}"></script>
        <script src="{{asset('assets/template/global/js/plugins/sticky-header.js')}}"></script>
        <script src="{{asset('assets/template/global/js/plugins/action-btn.js')}}"></script>
        <script src="{{asset('assets/template/global/js/plugins/selectable.js')}}"></script>
        <script src="{{asset('assets/template/global/js/components/aspaginator.js')}}"></script>
        <script src="{{asset('assets/template/global/js/components/animate-list.js')}}"></script>
        <script src="{{asset('assets/template/global/js/components/jquery-placeholder.js')}}"></script>
        <script src="{{asset('assets/template/global/js/components/material.js')}}"></script>
        <script src="{{asset('assets/template/global/js/components/selectable.js')}}"></script>
        <script src="{{asset('assets/template/global/js/components/bootbox.js')}}"></script>
        <script src="{{asset('assets/template/assets/js/app.js')}}"></script>
        <script src="{{asset('assets/template/assets/examples/js/apps/contacts.js')}}"></script>
        @endif

        <script>
(function (document, window, $) {
    'use strict';
    var Site = window.Site;
    $(document).ready(function () {
        Site.run();
    });
})(document, window, jQuery);
        </script>
    </body>
</html>