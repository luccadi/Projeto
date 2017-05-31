<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?> | Josh Admin Template</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="../vendors/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="../css/styles/black.css" rel="stylesheet" type="text/css" id="colorscheme" />
    <link href="../css/panel.css" rel="stylesheet" type="text/css"/>
    <link href="../css/metisMenu.css" rel="stylesheet" type="text/css"/>
    
    <!-- end of global css -->
    <?php echo isset ($css) ?  $css : '' ?>
</head>

<body class="skin-josh">
    <header class="header">
        <a href="index.php" class="logo">
            <img src="../img/logo.png" alt="logo">
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <div>
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <div class="responsive_nav"></div>
                </a>
            </div>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="livicon" data-name="message-flag" data-loop="true" data-color="#42aaca" data-hovercolor="#42aaca" data-size="28"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages pull-right">
                            <li class="dropdown-title">4 New Messages</li>
                            <li class="unread message">
                                <a href="javascript:;" class="message"> <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read"><span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span></i> 
                                    <img data-src="holder.js/45x45/#000:#fff" class="img-responsive message-image" alt="icon">
                                    <div class="message-body">
                                        <strong>Riot Zeast</strong>
                                        <br>Hello, You there?
                                        <br>
                                        <small>8 minutes ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="unread message">
                                <a href="javascript:;" class="message">
                                    <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read"><span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span></i> 
                                    <img data-src="holder.js/45x45/#000:#fff" class="img-responsive message-image" alt="icon">
                                    <div class="message-body">
                                        <strong>John Kerry</strong>
                                        <br>Can we Meet ?
                                        <br>
                                        <small>45 minutes ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="unread message">
                                <a href="javascript:;" class="message">
                                    <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read">
                                        <span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span>
                                    </i>
                                    <img data-src="holder.js/45x45/#000:#fff" class="img-responsive message-image" alt="icon">
                                    <div class="message-body">
                                        <strong>Jenny Kerry</strong>
                                        <br>Dont forgot to call...
                                        <br>
                                        <small>An hour ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="unread message">
                                <a href="javascript:;" class="message">
                                    <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read">
                                        <span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span>
                                    </i>
                                    <img data-src="holder.js/45x45/#000:#fff" class="img-responsive message-image" alt="icon">
                                    <div class="message-body">
                                        <strong>Ronny</strong>
                                        <br>Hey! sup Dude?
                                        <br>
                                        <small>3 Hours ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="footer">
                                <a href="#">View all</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="livicon" data-name="bell" data-loop="true" data-color="#e9573f" data-hovercolor="#e9573f" data-size="28"></i>
                            <span class="label label-warning">7</span>
                        </a>
                        <ul class=" notifications dropdown-menu">
                            <li class="dropdown-title">You have 7 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <i class="livicon danger" data-n="timer" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">after a long time</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            Just Now
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon success" data-n="gift" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">Jef's Birthday today</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            Few seconds ago
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon warning" data-n="dashboard" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">out of space</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            8 minutes ago
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon bg-aqua" data-n="hand-right" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">New friend request</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            An hour ago
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon danger" data-n="shopping-cart-in" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">On sale 2 products</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            3 Hours ago
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon success" data-n="image" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">Lee Shared your photo</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            Yesterday
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon warning" data-n="thumbs-up" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">David liked your photo</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            2 July 2014
                                        </small>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img data-src="holder.js/35x35/#fff:#000" width="35" class="img-circle img-responsive pull-left" height="35" alt="riot">
                            <div class="riot">
                                <div>
                                    Riot
                                    <span>
                                        <i class="caret"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header bg-light-blue">
                                <img data-src="holder.js/90x90/#fff:#000" class="img-responsive img-circle" alt="User Image">
                                <p class="topprofiletext">Riot Zeast</p>
                            </li>
                            <!-- Menu Body -->
                            <li>
                                <a href="#">
                                    <i class="livicon" data-name="user" data-s="18"></i>
                                    My Profile
                                </a>
                            </li>
                            <li role="presentation"></li>
                            <li>
                                <a href="#">
                                    <i class="livicon" data-name="gears" data-s="18"></i>
                                    Account Settings
                                </a>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="lockscreen.php">
                                        <i class="livicon" data-name="lock" data-s="18"></i>
                                        Lock
                                    </a>
                                </div>
                                <div class="pull-right">
                                    <a href="login.php">
                                        <i class="livicon" data-name="sign-out" data-s="18"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <section class="sidebar ">
                <div class="page-sidebar  sidebar-nav">
                    <div class="nav_icons">
                        <ul class="sidebar_threeicons">
                            <li>
                                <a href="form_builder.php">
                                    <i class="livicon" data-name="hammer" title="Form Builder 1" data-loop="true" data-color="#42aaca" data-hc="#42aaca" data-s="25"></i>
                                </a>
                            </li>
                            <li>
                                <a href="form_builder2.php">
                                    <i class="livicon" data-name="list-ul" title="Form Builder 2" data-loop="true" data-color="#e9573f" data-hc="#e9573f" data-s="25"></i>
                                </a>
                            </li>
                            <li>
                                <a href="buttonbuilder.php">
                                    <i class="livicon" data-name="vector-square" title="Button Builder" data-loop="true" data-color="#f6bb42" data-hc="#f6bb42" data-s="25"></i>
                                </a>
                            </li>
                            <li>
                                <a href="gridmanager.php">
                                    <i class="livicon" data-name="new-window" title="Form Builder 1" data-loop="true" data-color="#37bc9b" data-hc="#37bc9b" data-s="25"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <!-- BEGIN SIDEBAR MENU -->
                    <ul id="menu" class="page-sidebar-menu">
                        <li>
                            <a href="index.php">
                                <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
                                <span class="title">Dashboard</span>
                            </a>

                        </li>
                        <li <?php if($page == 'accordionformwizard') echo 'class="active" id="active"'; ?> >
                            <a href="#">
                                <i class="livicon" data-name="medal" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">Builders</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li <?php if($page == 'accordionformwizard') echo 'class="active" id="active"'; ?> >
                                    <a href="form_builder.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Form Builder
                                    </a>
                                </li>
                                <li <?php if($page == 'accordionformwizard') echo 'class="active" id="active"'; ?> >
                                    <a href="form_builder2.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Form Builder 2
                                    </a>
                                </li>
                                <li <?php if($page == 'accordionformwizard') echo 'class="active" id="active"'; ?> >
                                    <a href="buttonbuilder.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Button Builder
                                    </a>
                                </li>
                                <li <?php if($page == 'accordionformwizard') echo 'class="active" id="active"'; ?> >
                                    <a href="gridmanager.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Page Builder
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li <?php if(($page == 'form_examples') || ($page == 'editor') || ($page == 'validation') || ($page == 'formelements') || ($page == 'form_layouts') || ($page == 'formwizard') || ($page == 'accordionformwizard'))  echo 'class="active"'; ?> >
                            <a href="#">
                                <i class="livicon" data-name="doc-portrait" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                <span class="title">Forms</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li <?php if($page == 'form_examples') echo 'class="active" id="active"'; ?> >
                                    <a href="form_examples.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Form Examples
                                    </a>
                                </li>
                                <li <?php if($page == 'editor') echo 'class="active" id="active"'; ?> >
                                    <a href="editor.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Form Editors
                                    </a>
                                </li>
                                <li <?php if($page == 'validation') echo 'class="active" id="active"'; ?> >
                                    <a href="validation.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Form Validation
                                    </a>
                                </li>
                                <li <?php if($page == 'formelements') echo 'class="active" id="active"'; ?> >
                                    <a href="formelements.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Form Elements
                                    </a>
                                </li>
                                <li <?php if($page == 'form_layouts') echo 'class="active" id="active"'; ?> >
                                    <a href="form_layouts.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Form Layouts
                                    </a>
                                </li>
                                <li <?php if($page == 'formwizard') echo 'class="active" id="active"'; ?> >
                                    <a href="formwizard.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Form Wizards
                                    </a>
                                </li>
                                <li <?php if($page == 'accordionformwizard') echo 'class="active" id="active"'; ?> >
                                    <a href="accordionformwizard.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Accordion Wizards
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li <?php if(($page == 'animatedicons') || ($page == 'buttons') || ($page == 'advanced_buttons') || ($page == 'tabs_accordions') || ($page == 'panels') || ($page == 'icon') || ($page == 'color') || ($page == 'grid') || ($page == 'carousel') || ($page == 'advanced_modals') || ($page == 'tagsinput') || ($page == 'nestable') || ($page == 'toastr') || ($page == 'notifications') || ($page == 'session_timeout') || ($page == 'portlet_draggable')) echo 'class="active"'; ?> >
                            <a href="#">
                                <i class="livicon" data-name="brush" data-c="#F89A14" data-hc="#F89A14" data-size="18" data-loop="true"></i>
                                <span class="title">UI Features</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li <?php if($page == 'animatedicons') echo 'class="active" id="active"'; ?> >
                                    <a href="animatedicons.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Animated Icons
                                    </a>
                                </li>
                                <li <?php if($page == 'buttons') echo 'class="active" id="active"'; ?> >
                                    <a href="buttons.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Buttons
                                    </a>
                                </li>
                                <li <?php if($page == 'advanced_buttons') echo 'class="active" id="active"'; ?> >
                                    <a href="advanced_buttons.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Advanced Buttons
                                    </a>
                                </li>
                                <li <?php if($page == 'tabs_accordions') echo 'class="active" id="active"'; ?> >
                                    <a href="tabs_accordions.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Tabs and Accordions
                                    </a>
                                </li>
                                <li <?php if($page == 'panels') echo 'class="active" id="active"'; ?> >
                                    <a href="panels.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Panels
                                    </a>
                                </li>
                                <li <?php if($page == 'icon') echo 'class="active" id="active"'; ?> >
                                    <a href="icon.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Font Icons
                                    </a>
                                </li>
                                <li <?php if($page == 'color') echo 'class="active" id="active"'; ?> >
                                    <a href="color.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Color Picker Slider
                                    </a>
                                </li>
                                <li <?php if($page == 'grid') echo 'class="active" id="active"'; ?> >
                                    <a href="grid.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Grid Layout
                                    </a>
                                </li>
                                <li <?php if($page == 'carousel') echo 'class="active" id="active"'; ?> >
                                    <a href="carousel.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Carousel
                                    </a>
                                </li>
                                <li <?php if($page == 'advanced_modals') echo 'class="active" id="active"'; ?> >
                                    <a href="advanced_modals.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Advanced Modals
                                    </a>
                                </li>
                                <li <?php if($page == 'tagsinput') echo 'class="active" id="active"'; ?> >
                                    <a href="tagsinput.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Tags Input
                                    </a>
                                </li>
                                <li <?php if($page == 'nestable') echo 'class="active" id="active"'; ?> >
                                    <a href="nestable.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Nestable List
                                    </a>
                                </li>
                                <li <?php if($page == 'toastr') echo 'class="active" id="active"'; ?> >
                                    <a href="toastr.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Toastr Notifications
                                    </a>
                                </li>
                                <li <?php if($page == 'notifications') echo 'class="active" id="active"'; ?> >
                                    <a href="notifications.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Notifications
                                    </a>
                                </li>
                                <li <?php if($page == 'session_timeout') echo 'class="active" id="active"'; ?> >
                                    <a href="session_timeout.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Session Timeout
                                    </a>
                                </li>
                                <li <?php if($page == 'portlet_draggable') echo 'class="active" id="active"'; ?> >
                                    <a href="portlet_draggable.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Draggable Portlets
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li <?php if(($page == 'general') || ($page == 'pickers') || ($page == 'x-editable') || ($page == 'timeline') || ($page == 'transitions') || ($page == 'sliders') || ($page == 'knob')) echo 'class="active"'; ?> >
                            <a href="#">
                                <i class="livicon" data-name="lab" data-c="#EF6F6C" data-hc="#EF6F6C" data-size="18" data-loop="true"></i>
                                <span class="title">UI Components</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li <?php if($page == 'general') echo 'class="active" id="active"'; ?> >
                                    <a href="general.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        General Components
                                    </a>
                                </li>
                                <li <?php if($page == 'pickers') echo 'class="active" id="active"'; ?> >
                                    <a href="pickers.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Pickers
                                    </a>
                                </li>
                                <li <?php if($page == 'x-editable') echo 'class="active" id="active"'; ?> >
                                    <a href="x-editable.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        X-editable
                                    </a>
                                </li>
                                <li <?php if($page == 'timeline') echo 'class="active" id="active"'; ?> >
                                    <a href="timeline.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Timeline
                                    </a>
                                </li>
                                <li <?php if($page == 'transitions') echo 'class="active" id="active"'; ?> >
                                    <a href="transitions.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Transitions
                                    </a>
                                </li>
                                <li <?php if($page == 'sliders') echo 'class="active" id="active"'; ?> >
                                    <a href="sliders.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Sliders
                                    </a>
                                </li>
                                <li <?php if($page == 'knob') echo 'class="active" id="active"'; ?> >
                                    <a href="knob.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Circles Sliders
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li <?php if(($page == 'simple_table') || ($page == 'responsive_tables') || ($page == 'advanced_tables') || ($page == 'editable_table')) echo 'class="active"'; ?> >
                            <a href="#">
                                <i class="livicon" data-name="table" data-c="#418BCA" data-hc="#418BCA" data-size="18" data-loop="true"></i>
                                <span class="title">DataTables</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li <?php if($page == 'simple_table') echo 'class="active" id="active"'; ?> >
                                    <a href="simple_table.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Simple tables
                                    </a>
                                </li>
                                <li <?php if($page == 'responsive_tables') echo 'class="active" id="active"'; ?> >
                                    <a href="responsive_tables.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Responsive Datatables
                                    </a>
                                </li>
                                <li <?php if($page == 'advanced_tables') echo 'class="active" id="active"'; ?> >
                                    <a href="advanced_tables.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Advanced Data Tables
                                    </a>
                                </li>
                                <li <?php if($page == 'editable_table') echo 'class="active" id="active"'; ?> >
                                    <a href="editable_table.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Editable Datatables
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li <?php if(($page == 'charts') || ($page == 'piecharts') || ($page == 'charts_animation') || ($page == 'jscharts') || ($page == 'sparklinecharts')) echo 'class="active"'; ?> >
                            <a href="#">
                                <i class="livicon" data-name="barchart" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">Charts</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li <?php if($page == 'charts') echo 'class="active" id="active"'; ?> >
                                    <a href="charts.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Flot Charts
                                    </a>
                                </li>
                                <li <?php if($page == 'piecharts') echo 'class="active" id="active"'; ?> >
                                    <a href="piecharts.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Pie Charts
                                    </a>
                                </li>
                                <li <?php if($page == 'charts_animation') echo 'class="active" id="active"'; ?> >
                                    <a href="charts_animation.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Animated Charts
                                    </a>
                                </li>
                                <li <?php if($page == 'jscharts') echo 'class="active" id="active"'; ?> >
                                    <a href="jscharts.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        JS Charts
                                    </a>
                                </li>
                                <li <?php if($page == 'sparklinecharts') echo 'class="active" id="active"'; ?> >
                                    <a href="sparklinecharts.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Sparkline Charts
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li <?php if($page == 'calendar') echo 'class="active" id="active"'; ?> >
                            <a href="calendar.php">
                                <i class="livicon" data-c="#F89A14" data-hc="#F89A14" data-name="calendar" data-size="18" data-loop="true"></i>
                                Calendar
                                <span class="badge badge-danger">7</span>
                            </a>
                        </li>
                        <li <?php if(($page == 'mail_box') || ($page == 'compose') || ($page == 'view_mail')) echo 'class="active"'; ?> >
                            <a href="#">
                                <i class="livicon" data-name="mail" data-size="18" data-c="#5bc0de" data-hc="#5bc0de" data-loop="true"></i>
                                <span class="title">Email</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li <?php if($page == 'mail_box') echo 'class="active" id="active"'; ?> >
                                    <a href="mail_box.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Inbox
                                    </a>
                                </li>
                                <li <?php if($page == 'compose') echo 'class="active" id="active"'; ?> >
                                    <a href="compose.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Compose
                                    </a>
                                </li>
                                <li <?php if($page == 'view_mail') echo 'class="active" id="active"'; ?> >
                                    <a href="view_mail.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Single Mail
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li <?php if($page == 'tasks') echo 'class="active" id="active"'; ?> >
                            <a href="tasks.php">
                                <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="list-ul" data-size="18" data-loop="true"></i>
                                Tasks
                                <span class="badge badge-danger">10</span>
                            </a>
                        </li>
                        <li <?php if(($page == 'gallery') || ($page == 'masonry_gallery') || ($page == 'dropzone') || ($page == 'imagecropping') || ($page == 'multiple_upload') || ($page == 'imgmagnifier')) echo 'class="active"'; ?> >
                            <a href="#">
                                <i class="livicon" data-name="image" data-c="#418BCA" data-hc="#418BCA" data-size="18" data-loop="true"></i>
                                <span class="title">Gallery</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li <?php if($page == 'gallery') echo 'class="active" id="active"'; ?> >
                                    <a href="gallery.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Gallery
                                    </a>
                                </li>
                                <li <?php if($page == 'masonry_gallery') echo 'class="active" id="active"'; ?> >
                                    <a href="masonry_gallery.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Masonry Gallery
                                    </a>
                                </li>
                                <li <?php if($page == 'dropzone') echo 'class="active" id="active"'; ?> >
                                    <a href="dropzone.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Dropzone
                                    </a>
                                </li>
                                <li <?php if($page == 'imagecropping') echo 'class="active" id="active"'; ?> >
                                    <a href="imagecropping.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Image Cropping
                                    </a>
                                </li>
                                <li <?php if($page == 'multiple_upload') echo 'class="active" id="active"'; ?> >
                                    <a href="multiple_upload.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Multiple File Upload
                                    </a>
                                </li>
                                <li <?php if($page == 'imgmagnifier') echo 'class="active" id="active"'; ?> >
                                    <a href="imgmagnifier.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Image Magnifier
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li <?php if(($page == 'users') || ($page == 'adduser') || ($page == 'view_user') || ($page == 'deleted_users')) echo 'class="active"'; ?> >
                            <a href="#">
                                <i class="livicon" data-name="users" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">Users</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li <?php if($page == 'users') echo 'class="active" id="active"'; ?> >
                                    <a href="users.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Users
                                    </a>
                                </li>
                                <li <?php if($page == 'adduser') echo 'class="active" id="active"'; ?> >
                                    <a href="adduser.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Add New User
                                    </a>
                                </li>
                                <li <?php if($page == 'view_user') echo 'class="active" id="active"'; ?> >
                                    <a href="view_user.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        View User
                                    </a>
                                </li>
                                <li <?php if($page == 'deleted_users') echo 'class="active" id="active"'; ?> >
                                    <a href="deleted_users.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Deleted Users
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li <?php if(($page == 'googlemaps') || ($page == 'vectormaps') || ($page == 'advancedmaps')) echo 'class="active"'; ?> >
                            <a href="#">
                                <i class="livicon" data-name="map" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                <span class="title">Maps</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li <?php if($page == 'googlemaps') echo 'class="active" id="active"'; ?> >
                                    <a href="googlemaps.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Google Maps
                                    </a>
                                </li>
                                <li <?php if($page == 'vectormaps') echo 'class="active" id="active"'; ?> >
                                    <a href="vectormaps.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Vector Maps
                                    </a>
                                </li>
                                <li <?php if($page == 'advancedmaps') echo 'class="active" id="active"'; ?> >
                                    <a href="advancedmaps.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Advanced Maps
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li <?php if(($page == 'blog_list') || ($page == 'blog_details') || ($page == 'add_newblog')) echo 'class="active"'; ?> >
                            <a href="#">
                                <i class="livicon" data-name="comment" data-c="#F89A14" data-hc="#F89A14" data-size="18" data-loop="true"></i>
                                <span class="title">Blog</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li <?php if($page == 'blog_list') echo 'class="active" id="active"'; ?> >
                                    <a href="blog_list.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Blog List
                                    </a>
                                </li>
                                <li <?php if($page == 'blog_details') echo 'class="active" id="active"'; ?> >
                                    <a href="blog_details.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Blog Details
                                    </a>
                                </li>
                                <li <?php if($page == 'add_newblog') echo 'class="active" id="active"'; ?> >
                                    <a href="add_newblog.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Add New Blog
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li <?php if(($page == 'news') || ($page == 'news_item')) echo 'class="active"'; ?> >
                            <a href="#">
                                <i class="livicon" data-name="move" data-c="#EF6F6C" data-hc="#EF6F6C" data-size="18" data-loop="true"></i>
                                <span class="title">News</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li <?php if($page == 'news') echo 'class="active" id="active"'; ?> >
                                    <a href="news.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        News
                                    </a>
                                </li>
                                <li <?php if($page == 'news_item') echo 'class="active" id="active"'; ?> >
                                    <a href="news_item.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        News Details
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li <?php if(($page == 'invoice') || ($page == 'blank')) echo 'class="active"'; ?> >
                            <a href="#">
                                <i class="livicon" data-name="flag" data-c="#418bca" data-hc="#418bca" data-size="18" data-loop="true"></i>
                                <span class="title">Pages</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="lockscreen.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Lockscreen
                                    </a>
                                </li>
                                <li <?php if($page == 'invoice') echo 'class="active" id="active"'; ?> >
                                    <a href="invoice.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Invoice
                                    </a>
                                </li>
                                <li>
                                    <a href="login.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Login
                                    </a>
                                </li>
                                <li>
                                    <a href="login2.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Login 2
                                    </a>
                                </li>
                                <li>
                                    <a href="login.php#toregister">
                                        <i class="fa fa-angle-double-right"></i>
                                        Register
                                    </a>
                                </li>
                                <li>
                                    <a href="register2.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Register 2
                                    </a>
                                </li>
                                <li>
                                    <a href="404.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        404 Error
                                    </a>
                                </li>
                                <li>
                                    <a href="500.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        500 Error
                                    </a>
                                </li>
                                <li <?php if($page == 'blank') echo 'class="active" id="active"'; ?> >
                                    <a href="blank.php">
                                        <i class="fa fa-angle-double-right"></i>
                                        Blank Page
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
            </section>
        </aside>