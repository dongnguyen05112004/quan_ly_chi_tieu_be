<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Default | Equation - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="/ltr/assets/img/favicon.ico"/>
    <link href="/ltr/assets/css/components/carousel/slideshow.css" rel="stylesheet" type="text/css" />
    <link href="/ltr/assets/css/design-css/design.css" rel="stylesheet" type="text/css">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="/ltr/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/ltr/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="/ltr/plugins/maps/vector/jvector/jquery-jvectormap-2.0.3.css" rel="stylesheet" type="text/css" />
    <link href="/ltr/plugins/charts/chartist/chartist.css" rel="stylesheet" type="text/css">
    <link href="/ltr/assets/css/default-dashboard/style.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
<body class="default-sidebar">

    <!-- Tab Mobile View Header -->
    <header class="tabMobileView header navbar fixed-top d-lg-none">
        <ul class="navbar-nav flex-row ml-lg-auto w-100">
            <li class="nav-item dropdown user-profile-dropdown w-100 text-center">
                <div class="nav-toggle d-inline-block float-left mt-2">
                    <a href="javascript:void(0);" class="nav-link sidebarCollapse d-inline-block" data-placement="bottom">
                        <i class="flaticon-menu-line-2"></i>
                    </a>
                    <a href="index.html" class="ml-3"> <img src="/ltr/assets/img/logo-3.png" class="img-fluid" alt="logo"></a>
                </div>
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user d-inline-block float-right" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media">
                        <img src="/ltr/assets/img/90x90.jpg" class="img-fluid mr-2" alt="admin-profile">
                        <div class="media-body align-self-center">
                            <h6 class="mb-1">Alan Green</h6>
                            <p class="mb-0">UI/UX Designer</p>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu p-0 mt-5" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item d-flex mt-5" href="user_profile.html">
                        <i class="mr-3 flaticon-user-11"></i> <span class="align-self-center">Profile</span>
                    </a>
                    <a class="dropdown-item d-flex" href="apps_scheduler.html">
                        <i class="mr-3 flaticon-calendar"></i> <span class="align-self-center">My Schedule</span>
                    </a>
                    <a class="dropdown-item d-flex" href="apps_mailbox.html">
                        <i class="mr-3 flaticon-mail-22"></i> <span class="align-self-center">Inbox</span>
                    </a>
                    <a class="dropdown-item d-flex" href="user_lockscreen_1.html">
                        <i class="mr-3 flaticon-lock-1"></i> <span class="align-self-center">Lock Screen</span>
                    </a>
                    <a href="user_login_1.html" class="dropdown-item dropdown-item-btn">
                        <i class="mr-2 flaticon-power-off"></i> <span class="align-self-center">Logout</span>
                    </a>
                </div>
            </li>
        </ul>
    </header>
    <!-- Tab Mobile View Header -->

    <!--  BEGIN NAVBAR  -->
    <header class="desktop-nav header navbar fixed-top">
        <div class="nav-logo mr-5 ml-4 d-lg-inline-block d-none">
            <a href="index.html" class=""> <img src="/ltr/assets/img/logo-3.png" class="img-fluid" alt="logo"></a>
        </div>
        <ul class="navbar-nav flex-row mr-auto">
            <li class="nav-item dropdown language-dropdown mr-5  d-lg-inline-block d-none">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="/ltr/assets/img/ca.png" alt="">
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="language-dropdown">
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="/ltr/assets/img/de.png" class="flag-width mr-3" alt=""> <span class="align-self-center">&#xA0;German</span></a>
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="/ltr/assets/img/jp.png" class="flag-width mr-3" alt=""> <span class="align-self-center">&#xA0;Japanese</span></a>
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="/ltr/assets/img/fr.png" class="flag-width mr-3" alt=""> <span class="align-self-center">&#xA0;French</span></a>
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="/ltr/assets/img/ca.png" class="flag-width mr-3" alt=""> <span class="align-self-center">&#xA0;English</span></a>
                </div>
            </li>

            <li class="nav-item dropdown app-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="app-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="flaticon-star-circle-line"></span>
                </a>
                <div class="dropdown-menu  position-absolute" aria-labelledby="app-dropdown">
                    <a class="dropdown-item d-flex" href="apps_drag_n_drop_calendar.html">
                        <i class="mr-3 flaticon-calendar-1"></i><span>Calendar</span>
                    </a>
                    <a class="dropdown-item d-flex" href="dragndrop_scrumboard.html">
                        <i class="mr-3 flaticon-edit-3"></i><span>Scrumboard</span>
                    </a>
                    <a class="dropdown-item d-flex" href="pages_helpdesk.html">
                        <i class="mr-3 flaticon-copy"></i><span>Helpdesk</span>
                    </a>
                    <a class="dropdown-item d-flex" href="pages_contact_us.html">
                        <i class="mr-3 flaticon-location-1"></i><span>Contact Us</span>
                    </a>
                </div>
            </li>

            <li class="nav-item ml-4 d-lg-none">
                <form class="form-inline search-full form-inline search animated-search" role="search">
                    <i class="flaticon-search-1 d-lg-none d-block"></i>
                    <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                </form>
            </li>
        </ul>

        <ul class="navbar-nav flex-row ml-lg-auto">
            <li class="nav-item mr-5 d-lg-block d-none">
                <form class="form-inline form-inline search animated-search" role="search">
                    <i class="flaticon-search-1 d-lg-none d-block"></i>
                    <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                </form>
            </li>

            <li class="nav-item dropdown user-profile-dropdown mr-5  d-lg-inline-block d-none">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="user-profile-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media">
                        <img src="/ltr/assets/img/90x90.jpg" class="img-fluid mr-2" alt="admin-profile">
                        <div class="media-body align-self-center">
                            <h6 class="mb-1">Alan Green</h6>
                            <p class="mb-0">UI/UX Designer</p>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu  position-absolute p-0" aria-labelledby="user-profile-dropdown">
                    <div class="dropdown-item d-flex justify-content-around">
                        <p class="mb-0 align-self-center">Your Account</p>
                        <div class="">
                            <i class="flaticon-star-outline"></i>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item d-flex" href="user_profile.html">
                        <i class="mr-3 flaticon-user-11"></i> <span class="align-self-center">Profile Setting</span>
                    </a>
                    <a class="dropdown-item d-flex" href="apps_scheduler.html">
                        <i class="mr-3 flaticon-calendar"></i> <span class="align-self-center">Schedule</span>
                    </a>
                    <a class="dropdown-item d-flex" href="apps_mailbox.html">
                        <i class="mr-3 flaticon-mail-22"></i> <span class="align-self-center">Inbox</span>
                    </a>
                    <a class="dropdown-item d-flex" href="user_lockscreen_1.html">
                        <i class="mr-3 flaticon-lock-1"></i> <span class="align-self-center">Lock Screen</span>
                    </a>

                    <div class="dropdown-item dropdown-item-btn d-flex justify-content-around">
                        <a class="" href="user_login_1.html">
                            <i class="mr-2 flaticon-power-off"></i> <span class="align-self-center">Logout</span>
                        </a>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown message-dropdown ml-lg-4 mr-lg-4">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="message-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="icon flaticon-mail-1"></span><span class="badge badge-primary">13</span>
                </a>
                <div class="dropdown-menu  position-absolute p-0" aria-labelledby="message-dropdown">
                    <div class="dropdown-item dropdown-header d-flex justify-content-between">
                        <p class="mb-0 align-self-center">You have 13 new messages</p>
                        <div class="">
                            <i class="flaticon-chat-bubble"></i>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="message-scroll">
                        <div class="dropdown-item">
                            <div class="">
                                <div class="media">
                                    <div class="usr-img online mr-3">
                                        <img class="usr-img rounded-circle" src="/ltr/assets/img/90x90.jpg" alt="profile">
                                    </div>
                                    <div class="media-body">
                                        <div class="d-flex">
                                            <p class="meta-user-name mr-3">Kara Young</p>
                                            <p class="meta-time align-self-center mb-1">2 mins ago</p>
                                        </div>
                                        <p class="message-text mb-0 ">Simple and clean! Nice I'd like to </p>
                                        <a href="javascript:void(0);" class="see-more">See More</a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between dropdown-action">
                                    <a href="javascript:void(0);" class="">View Details</a>
                                    <i class="flaticon-delete"></i>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <div class="">
                                <div class="media">
                                    <div class="usr-img online mr-3">
                                        <img class="usr-img rounded-circle" src="/ltr/assets/img/90x90.jpg" alt="profile">
                                    </div>
                                    <div class="media-body">
                                        <div class="d-flex">
                                            <p class="meta-user-name mr-3">Oscar Garner</p>
                                            <p class="meta-time align-self-center mb-1">5 mins ago</p>
                                        </div>
                                        <p class="message-text mb-0 ">Simple and clean! Nice I'd like to </p>
                                        <a href="javascript:void(0);" class="see-more">See More</a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between dropdown-action">
                                    <a href="javascript:void(0);" class="">View Details</a>
                                    <i class="flaticon-delete"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer dropdown-item text-center">
                        <a class="btn btn-info my-3 btn-rounded" href="javascript:void(0);">More...</a>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown notification-dropdown ml-3 mr-lg-4">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notification-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="icon flaticon-bell-24"></span><span class="badge badge-success">15</span>
                </a>
                <div class="dropdown-menu position-absolute p-0" aria-labelledby="notification-dropdown">
                    <div class="dropdown-item dropdown-header d-flex justify-content-between">
                        <p class="mb-0 align-self-center">Notifications</p>
                        <div class="">
                            <i class="flaticon-gear-1"></i>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="notification-scroll">
                        <div class="dropdown-item">
                            <div class="">
                                <div class="d-flex dropdown-action justify-content-between">
                                    <span class="badge badge-info mb-3">6 Request</span>
                                    <i class="flaticon-cancel-12"></i>
                                </div>
                                <p class="notification-text"><span class="meta-usrname">Kara Young</span>, <span class="meta-usrname">Xavier</span>, <span class="meta-usrname">Lila Perry</span> and <span class="meta-usrname">3 others</span> send a friend request.</p>
                                <p class="meta-time">6 mins ago</p>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <div class="">
                                <div class="d-flex dropdown-action justify-content-between">
                                    <span class="badge badge-primary mb-3">Invoice</span>
                                    <i class="flaticon-cancel-12"></i>
                                </div>
                                <p class="notification-text"> <span class="meta-usrname">Shaun</span>, <span class="meta-usrname">Amy Diaz</span> and <span class="meta-usrname">3 others</span> send a friend request.</p>
                                <p class="meta-time">10 mins ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown cs-toggle ml-3 mr-lg-4">
                <a href="#" class="nav-link toggle-control-sidebar suffle">
                    <span class="icon flaticon-log-3"></span>
                </a>
            </li>
        </ul>
    </header>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <div class="topbar-nav header navbar fixed-top" role="banner">
            <div id="dismiss" class="d-lg-none text-right"><i class="flaticon-cancel-12 mr-3"></i></div>
            <nav id="topbar">
                <ul class="list-unstyled menu-categories d-lg-flex justify-content-lg-around mb-0" id="topAccordion">
                    <li class="menu">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-computer-6"></i>
                                <span>Tour</span>
                            </div>

                            <div>
                                <i class="flaticon-down-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="dashboard" data-parent="#topAccordion">
                            <li>
                                <a href="#dashboards" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> ADMIN <i class="flaticon-dot-three"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu show" id="dashboards">
                                    <li class="active">
                                        <a href="index.html"> Default </a>
                                    </li>
                                    <li>
                                        <a href="ecommerce_dashboard.html"> Ecommerce </a>
                                    </li>
                                    <li>
                                        <a href="accounting_dashboard.html"> Accounting </a>
                                    </li>
                                    <li>
                                        <a href="analytics_dashboard.html"> Analytics </a>
                                    </li>
                                    <li>
                                        <a href="car_dashboard.html"> Car </a>
                                    </li>
                                    <li>
                                        <a href="classic_dashboard.html"> Classic </a>
                                    </li>
                                    <li>
                                        <a href="stock_market_dashboard.html"> Stock Market </a>
                                    </li>
                                    <li>
                                        <a href="cryptocurrency_dashboard.html">Cryptocurrency </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-computer-6"></i>
                                <span>Home</span>
                            </div>

                            <div>
                                <i class="flaticon-down-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="dashboard" data-parent="#topAccordion">
                            <li>
                                <a href="#dashboards" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> ADMIN <i class="flaticon-dot-three"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu show" id="dashboards">
                                    <li class="active">
                                        <a href="index.html"> Default </a>
                                    </li>
                                    <li>
                                        <a href="ecommerce_dashboard.html"> Ecommerce </a>
                                    </li>
                                    <li>
                                        <a href="accounting_dashboard.html"> Accounting </a>
                                    </li>
                                    <li>
                                        <a href="analytics_dashboard.html"> Analytics </a>
                                    </li>
                                    <li>
                                        <a href="car_dashboard.html"> Car </a>
                                    </li>
                                    <li>
                                        <a href="classic_dashboard.html"> Classic </a>
                                    </li>
                                    <li>
                                        <a href="stock_market_dashboard.html"> Stock Market </a>
                                    </li>
                                    <li>
                                        <a href="cryptocurrency_dashboard.html">Cryptocurrency </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-computer-6"></i>
                                <span>Chi tiet</span>
                            </div>

                            <div>
                                <i class="flaticon-down-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="dashboard" data-parent="#topAccordion">
                            <li>
                                <a href="#dashboards" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> ADMIN <i class="flaticon-dot-three"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu show" id="dashboards">
                                    <li class="active">
                                        <a href="index.html"> Default </a>
                                    </li>
                                    <li>
                                        <a href="ecommerce_dashboard.html"> Ecommerce </a>
                                    </li>
                                    <li>
                                        <a href="accounting_dashboard.html"> Accounting </a>
                                    </li>
                                    <li>
                                        <a href="analytics_dashboard.html"> Analytics </a>
                                    </li>
                                    <li>
                                        <a href="car_dashboard.html"> Car </a>
                                    </li>
                                    <li>
                                        <a href="classic_dashboard.html"> Classic </a>
                                    </li>
                                    <li>
                                        <a href="stock_market_dashboard.html"> Stock Market </a>
                                    </li>
                                    <li>
                                        <a href="cryptocurrency_dashboard.html">Cryptocurrency </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-computer-6"></i>
                                <span>Dia diem </span>
                            </div>

                            <div>
                                <i class="flaticon-down-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="dashboard" data-parent="#topAccordion">
                            <li>
                                <a href="#dashboards" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> ADMIN <i class="flaticon-dot-three"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu show" id="dashboards">
                                    <li class="active">
                                        <a href="index.html"> Default </a>
                                    </li>
                                    <li>
                                        <a href="ecommerce_dashboard.html"> Ecommerce </a>
                                    </li>
                                    <li>
                                        <a href="accounting_dashboard.html"> Accounting </a>
                                    </li>
                                    <li>
                                        <a href="analytics_dashboard.html"> Analytics </a>
                                    </li>
                                    <li>
                                        <a href="car_dashboard.html"> Car </a>
                                    </li>
                                    <li>
                                        <a href="classic_dashboard.html"> Classic </a>
                                    </li>
                                    <li>
                                        <a href="stock_market_dashboard.html"> Stock Market </a>
                                    </li>
                                    <li>
                                        <a href="cryptocurrency_dashboard.html">Cryptocurrency </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3>Dashboard</h3>
                    </div>
                </div>
                @yield('ltr')
            </div>
        </div>
        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!--  BEGIN FOOTER  -->
    <footer class="footer-section theme-footer">

        <div class="footer-section-1  sidebar-theme">

        </div>

        <div class="footer-section-2 container-fluid">
            <div class="row">
                <div id="toggle-grid" class="col-xl-7 col-md-6 col-sm-6 col-12 text-sm-left text-center">
                    <ul class="list-inline links ml-sm-5">
                        <li class="list-inline-item mr-3">
                            <a href="javascript:void(0);">Home</a>
                        </li>
                        <li class="list-inline-item mr-3">
                            <a href="javascript:void(0);">Blog</a>
                        </li>
                        <li class="list-inline-item mr-3">
                            <a href="javascript:void(0);">About</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void(0);">Buy</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-5 col-md-6 col-sm-6 col-12">
                    <ul class="list-inline mb-0 d-flex justify-content-sm-end justify-content-center mr-sm-3 ml-sm-0 mx-3">
                        <li class="list-inline-item  mr-3">
                            <p class="bottom-footer">&#xA9; 2019 <a target="_blank" href="https://designreset.com/equation">Equation Admin Theme</a></p>
                        </li>
                        <li class="list-inline-item align-self-center">
                            <div class="scrollTop"><i class="flaticon-up-arrow-fill-1"></i></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--  END FOOTER  -->

    <!--  BEGIN CONTROL SIDEBAR  -->
    <aside class="control-sidebar control-sidebar-light-color cs-content">
        <i class=""></i>
        <div class="">
            <div class="tab-navigation-section text-center mb-5 mt-3">
                <ul class="nav nav-tabs nav-justified mx-2">
                    <li class="nav-item">
                        <a data-toggle="tab" href="#task-tab" class="nav-link rounded-circle  justify-content-center d-flex active show">
                            <p class="mb-0">Task</p>
                            <i class="align-self-center flaticon-notes"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" href="#friends-tab" class="nav-link rounded-circle  justify-content-center d-flex">
                            <p class="mb-0">Friends</p>
                            <i class="align-self-center flaticon-user-8"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" href="#settings-tab" class="nav-link rounded-circle  justify-content-center d-flex">
                            <p class="mb-0">Settings</p>
                            <i class="align-self-center flaticon-gear-1"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="tab-content">
                <div id="task-tab" class="tab-pane tab-1 fade show active">
                    <div class="tasks">
                        <div class="recent">

                            <div class="d-flex justify-content-between mb-5">
                                <div>
                                    <span class="">Today</span> <span class="notification-count ml-2">12</span>
                                </div>

                                <div>
                                    <p class="r-view-all">See all</p>
                                </div>
                            </div>

                            <div class="media">
                                <img src="/ltr/assets/img/120x120.jpg" class="img-fluid mr-3" alt="admin-profile">
                                <div class="media-body">
                                    <h6 class="mb-0">Sean Freeman</h6>
                                    <p>has replied your mail.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                            </div>

                            <div class="media">
                                <img src="/ltr/assets/img/120x120.jpg" class="img-fluid mr-3" alt="admin-profile">
                                <div class="media-body">
                                    <h6 class="mb-0">Laurie Fox</h6>
                                    <p>comment to your posts.</p>
                                    <p class="meta-time">13 mins ago</p>
                                </div>
                            </div>

                            <div class="media system-notify">
                                <i class="flaticon-settings-7  mr-3"></i>
                                <div class="media-body">
                                    <h6 class="mb-0">System Notifications</h6>
                                    <p>has replied your mail.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                            </div>

                            <div class="media mail-notify">
                                <i class="flaticon-folder-fill-1  mr-3"></i>
                                <div class="media-body">
                                    <h6 class="mb-0">Ricky Turner</h6>
                                    <p>has replied your mails.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                            </div>

                        </div>

                        <div class="today mt-5">

                            <div class="d-flex justify-content-between mb-5">
                                <div>
                                    <span>Yesterday</span> <span class="notification-count ml-2">8</span>
                                </div>

                                <div>
                                    <p class="r-view-all">See all</p>
                                </div>
                            </div>

                            <div class="media">
                                <img src="/ltr/assets/img/120x120.jpg" class="img-fluid mr-3" alt="admin-profile">
                                <div class="media-body">
                                    <h6 class="mb-0">Angie Lamb</h6>
                                    <p>has replied your mail.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                            </div>

                            <div class="media">
                                <img src="/ltr/assets/img/120x120.jpg" class="img-fluid mr-3" alt="admin-profile">
                                <div class="media-body">
                                    <h6 class="mb-0">Amy Diaz</h6>
                                    <p>comment to your posts.</p>
                                    <p class="meta-time">13 mins ago</p>
                                </div>
                            </div>

                            <div class="media">
                                <img src="/ltr/assets/img/120x120.jpg" class="img-fluid mr-3" alt="admin-profile">
                                <div class="media-body">
                                    <h6 class="mb-0">Irene Collins</h6>
                                    <p>has replied your mail.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                            </div>

                            <div class="media">
                                <img src="/ltr/assets/img/120x120.jpg" class="img-fluid mr-3" alt="admin-profile">
                                <div class="media-body">
                                    <h6 class="mb-0">Lila Perry</h6>
                                    <p>has replied your mails.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                            </div>

                        </div>

                        <div class="task-stats mt-5">

                            <div class="t-s-header mb-5">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h6><span>TASK STATISTICS</span></h6>
                                    </div>
                                </div>
                            </div>

                            <div class="t-s-body">

                                <div class="row">

                                    <div class="col-md-12">

                                        <div class="d-flex justify-content-between">
                                            <p>Feature development</p>
                                            <p>70%</p>
                                        </div>

                                        <div class="progress  br-30 mb-4">
                                            <div class="progress-bar  br-30 bg-secondary" role="progressbar" style="width: 70%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                    </div>

                                    <div class="col-md-12">

                                        <div class="d-flex justify-content-between mt-3">
                                            <p>Uploading files</p>
                                            <p>30%</p>
                                        </div>

                                        <div class="progress  br-30 mb-4">
                                            <div class="progress-bar  br-30 bg-danger" role="progressbar" style="width: 30%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                    </div>

                                    <div class="col-md-12">

                                        <div class="d-flex justify-content-between mt-3">
                                            <p>Total progress</p>
                                            <p>86%</p>
                                        </div>

                                        <div class="progress  br-30">
                                            <div class="progress-bar  br-30 bg-info" role="progressbar" style="width: 86%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="close-sidebar text-center">
                                <i class="flaticon-cancel-12 toggle-control-sidebar"></i>
                            </div>

                        </div>

                    </div>
                </div>

                <div id="friends-tab" class="tab-pane tab-2 fade">

                    <div class="friends">
                        <div class="recent">
                            <div class="friend-request">

                                <div class="d-flex justify-content-between header mb-5">

                                    <div class="media">
                                        <i class="flaticon-user-plus mr-3 align-self-center"></i>
                                        <div class="media-body">
                                            <h6 class="mt-2">Friend request</h6>
                                        </div>
                                    </div>

                                    <div class="align-self-center">
                                        <p class="mb-0">See all</p>
                                    </div>

                                </div>

                                <div class="media">
                                    <img src="/ltr/assets/img/120x120.jpg" class="img-fluid mr-3" alt="admin-profile">
                                    <div class="media-body">
                                        <h6>Kara Young</h6>
                                        <p>2 mins ago</p>
                                    </div>
                                    <i class="flaticon-fill-tick mr-2"></i>
                                    <i class="flaticon-close-fill"></i>
                                </div>

                                <div class="media mt-2">
                                    <img src="/ltr/assets/img/120x120.jpg" class="img-fluid mr-3" alt="admin-profile">
                                    <div class="media-body">
                                        <h6>Justin Cross</h6>
                                        <p>5 mins ago</p>
                                    </div>
                                    <i class="flaticon-fill-tick mr-2"></i>
                                    <i class="flaticon-close-fill"></i>
                                </div>

                                <div class="media mt-2">
                                    <img src="/ltr/assets/img/120x120.jpg" class="img-fluid mr-3" alt="admin-profile">
                                    <div class="media-body">
                                        <h6>Amy Diaz</h6>
                                        <p>7 mins ago</p>
                                    </div>
                                    <i class="flaticon-fill-tick mr-2"></i>
                                    <i class="flaticon-close-fill"></i>
                                </div>


                                <div class="media mt-2">
                                    <img src="/ltr/assets/img/120x120.jpg" class="img-fluid mr-3" alt="admin-profile">
                                    <div class="media-body">
                                        <h6>Ernest Reeves</h6>
                                        <p>10 mins ago</p>
                                    </div>
                                    <i class="flaticon-fill-tick mr-2"></i>
                                    <i class="flaticon-close-fill"></i>
                                </div>

                            </div>
                        </div>

                        <div class="friends-stats">

                            <div class="a-s-media mt-5">

                                <div class="d-flex justify-content-between header mb-5">

                                    <div class="media">
                                        <div class="media-body">
                                            <h6 class="mt-2 text-center ml-4"><span>Status</span></h6>
                                        </div>
                                    </div>

                                    <div class="align-self-center">
                                        <p class="mb-0">See all</p>
                                    </div>

                                </div>

                                <div class="media mb-3">
                                    <div class="profile-img online mr-3">
                                        <img src="/ltr/assets/img/90x90.jpg" class="img-fluid" alt="admin-profile">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-2 mb-0">Traci Lopez</h6>
                                        <p class="stats">Available</p>
                                    </div>
                                    <div class="align-self-center">
                                        <p class="meta-time">12 mins ago</p>
                                    </div>
                                </div>

                                <div class="media mb-3">
                                    <div class="profile-img away mr-3">
                                        <img src="/ltr/assets/img/120x120.jpg" class="img-fluid" alt="admin-profile">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-2 mb-0">Kristen Beck</h6>
                                        <p class="stats">Away</p>
                                    </div>
                                    <div class="align-self-center">
                                        <div class="text-center mb-2">
                                            <span class="badge-primary">8</span>
                                        </div>
                                        <p class="meta-time">15 mins ago</p>
                                    </div>
                                </div>

                                <div class="media">
                                    <div class="profile-img online mr-3">
                                        <img src="/ltr/assets/img/120x120.jpg" class="img-fluid" alt="admin-profile">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-2 mb-0">Keith Foster</h6>
                                        <p class="stats">Available</p>
                                    </div>
                                    <div class="align-self-center">
                                        <p class="meta-time">35 mins ago</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="close-sidebar text-center">
                            <i class="flaticon-cancel-12 toggle-control-sidebar"></i>
                        </div>

                    </div>
                </div>

                <div id="settings-tab" class="tab-pane tab-3 fade">
                    <div class="settings">
                        <div class="admin-setting">

                            <div class="d-flex justify-content-between header">

                                <div class="media">
                                    <i class="flaticon-user-5 mr-3 align-self-center"></i>
                                    <div class="media-body">
                                        <h6 class="mt-2">Admin settings</h6>
                                    </div>
                                </div>

                                <div class="align-self-center">
                                    <p class="mb-0">See all</p>
                                </div>

                            </div>

                            <div class="mb-3 mt-5">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Show notifications</h6>
                                    <label class="custom-control material-switch mb-4 mt-1 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Enable auto logout</h6>
                                    <label class="custom-control material-switch mb-4 mt-1 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Show recent activity</h6>
                                    <label class="custom-control material-switch mb-4 mt-1 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Chat history</h6>
                                    <label class="custom-control material-switch mb-4 mt-1 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Users activity</h6>
                                    <label class="custom-control material-switch mb-4 mt-1 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Orders history</h6>
                                    <label class="custom-control material-switch mb-4 mt-1 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Show task statistics</h6>
                                    <label class="custom-control material-switch mb-4 mt-1 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="general-setting mt-5">

                            <div class="d-flex justify-content-between header mb-5">

                                <div class="media">
                                    <i class="flaticon-gear-5 mr-3 align-self-center"></i>
                                    <div class="media-body">
                                        <h6 class="mt-2">General Settings</h6>
                                    </div>
                                </div>

                            </div>

                            <div class="media mb-4 social-media-list">
                                <i class="flaticon-facebook-logo fb"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="media mb-4 social-media-list">
                                <i class="flaticon-dribbble-bold dribbble"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="media mb-4 social-media-list">
                                <i class="flaticon-linkedin-logo lin"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="media mb-4 social-media-list">
                                <i class="flaticon-twitter-logo tweet"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="media mb-4 social-media-list">
                                <i class="flaticon-behance-logo behance"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="chk-settings mt-5">

                                <div class="media mb-4 ">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0 mb-3"><span class="media-title">Report panel usage</span>
                                        </h6>
                                        <p class="media-text">
                                            Show information on any malicious activity
                                        </p>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-secondary mr-1">
                                          <input type="checkbox" class="new-control-input" checked>
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="media mb-4 ">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0 mb-3"><span class="media-title">Allow mail redirect</span>
                                        </h6>
                                        <p class="media-text">
                                            Redirect mail through exchange server
                                        </p>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-secondary mr-1">
                                          <input type="checkbox" class="new-control-input">
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="media mb-4 ">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0 mb-3"><span class="media-title"> Show author name in posts</span>
                                        </h6>
                                        <p class="media-text">
                                            Allow the user to show his name in blog posts
                                        </p>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-secondary mr-1">
                                          <input type="checkbox" class="new-control-input" checked>
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="media mb-4 ">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0 mb-3"><span class="media-title"> Sync phone when connected to the PC</span>
                                        </h6>
                                        <p class="media-text">
                                            Connect smart phone automatically and sync with user profile
                                        </p>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-secondary mr-1">
                                          <input type="checkbox" class="new-control-input" checked>
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="media mb-4 ">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0 mb-3"><span class="media-title"> Show me as Online </span>
                                        </h6>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-secondary mr-1">
                                          <input type="checkbox" class="new-control-input" checked>
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <div class="mt-5 delete-chat">

                                <div class="media mb-4">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0 mb-3"><span class="media-title"> Delete chat history</span>
                                        </h6>
                                    </div>
                                    <i class="del-chat flaticon-delete-2 mb-4"></i>

                                </div>

                            </div>

                            <div class="close-sidebar text-center">
                                <i class="flaticon-cancel-12 toggle-control-sidebar"></i>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </aside>
    <!--  END CONTROL SIDEBAR  -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="/ltr/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="/ltr/bootstrap/js/popper.min.js"></script>
    <script src="/ltr/bootstrap/js/bootstrap.min.js"></script>
    <script src="/ltr/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/ltr/assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="/ltr/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="/ltr/plugins/charts/chartist/chartist.js"></script>
    <script src="/ltr/plugins/maps/vector/jvector/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="/ltr/plugins/maps/vector/jvector/worldmap_script/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/ltr/plugins/calendar/pignose/moment.latest.min.js"></script>
    <script src="/ltr/plugins/calendar/pignose/pignose.calendar.js"></script>
    <script src="/ltr/plugins/progressbar/progressbar.min.js"></script>
    <script src="/ltr/assets/js/default-dashboard/default-custom.js"></script>
    <script src="/ltr/assets/js/components/carousel/gallery.js"></script>
    <script src="/ltr/assets/js/design-js/design.js"></script>
    <script src="/ltr/assets/js/components/custom-carousel.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>
</html>
