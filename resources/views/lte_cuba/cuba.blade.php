<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="/cuba/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="/cuba/assets/images/favicon.png" type="image/x-icon">
    <title>Cuba - Premium Admin Template</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/cuba/assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="/cuba/assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="/cuba/assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="/cuba/assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="/cuba/assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="/cuba/assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="/cuba/assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="/cuba/assets/css/vendors/chartist.css">
    <link rel="stylesheet" type="text/css" href="/cuba/assets/css/vendors/date-picker.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="/cuba/assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="/cuba/assets/css/style.css">
    <link id="color" rel="stylesheet" href="/cuba/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="/cuba/assets/css/responsive.css">
</head>

<body onload="startTime()">
    <div class="loader-wrapper">
        <div class="loader-index"><span></span></div>
        <svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
                </fecolormatrix>
            </filter>
        </svg>
    </div>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper  row m-0">
                <form class="form-inline search-full col" action="#" method="get">
                    <div class="form-group w-100">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative">
                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                    placeholder="Search Cuba .." name="q" title="" autofocus>
                                <div class="spinner-border Typeahead-spinner" role="status"><span
                                        class="sr-only">Loading...</span></div><i class="close-search"
                                    data-feather="x"></i>
                            </div>
                            <div class="Typeahead-menu"></div>
                        </div>
                    </div>
                </form>
                <div class="header-logo-wrapper col-auto p-0">
                    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid"
                                src="/cuba/assets/images/logo/logo.png" alt=""></a></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle"
                            data-feather="align-center"></i></div>
                </div>

                <div class="nav-right col-8 pull-right right-header p-0">
                    <ul class="nav-menus">
                        <li class="language-nav">
                            <div class="translate_wrapper">
                                <div class="current_lang">
                                    <div class="lang"><i class="flag-icon flag-icon-us"></i><span
                                            class="lang-txt">EN </span></div>
                                </div>
                                <div class="more_lang">
                                    <div class="lang selected" data-value="en"><i
                                            class="flag-icon flag-icon-us"></i><span class="lang-txt">English<span>
                                                (US)</span></span></div>
                                    <div class="lang" data-value="de"><i class="flag-icon flag-icon-de"></i><span
                                            class="lang-txt">Deutsch</span></div>
                                    <div class="lang" data-value="es"><i class="flag-icon flag-icon-es"></i><span
                                            class="lang-txt">Español</span></div>
                                    <div class="lang" data-value="fr"><i class="flag-icon flag-icon-fr"></i><span
                                            class="lang-txt">Français</span></div>
                                    <div class="lang" data-value="pt"><i class="flag-icon flag-icon-pt"></i><span
                                            class="lang-txt">Português<span> (BR)</span></span></div>
                                    <div class="lang" data-value="cn"><i class="flag-icon flag-icon-cn"></i><span
                                            class="lang-txt">简体中文</span></div>
                                    <div class="lang" data-value="ae"><i class="flag-icon flag-icon-ae"></i><span
                                            class="lang-txt">لعربية <span> (ae)</span></span></div>
                                </div>
                            </div>
                        </li>
                        <li> <span class="header-search"><i data-feather="search"></i></span></li>
                        <li class="onhover-dropdown">
                            <div class="notification-box"><i data-feather="bell"> </i><span
                                    class="badge rounded-pill badge-secondary">4 </span></div>
                            <ul class="notification-dropdown onhover-show-div">
                                <li><i data-feather="bell"></i>
                                    <h6 class="f-18 mb-0">Notitications</h6>
                                </li>
                                <li>
                                    <p><i class="fa fa-circle-o me-3 font-primary"> </i>Delivery processing <span
                                            class="pull-right">10 min.</span></p>
                                </li>
                                <li>
                                    <p><i class="fa fa-circle-o me-3 font-success"></i>Order Complete<span
                                            class="pull-right">1 hr</span></p>
                                </li>
                                <li>
                                    <p><i class="fa fa-circle-o me-3 font-info"></i>Tickets Generated<span
                                            class="pull-right">3 hr</span></p>
                                </li>
                                <li>
                                    <p><i class="fa fa-circle-o me-3 font-danger"></i>Delivery Complete<span
                                            class="pull-right">6 hr</span></p>
                                </li>
                                <li><a class="btn btn-primary" href="#">Check all notification</a></li>
                            </ul>
                        </li>
                        <li class="onhover-dropdown">
                            <div class="notification-box"><i data-feather="star"></i></div>
                            <div class="onhover-show-div bookmark-flip">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="front">
                                            <ul class="droplet-dropdown bookmark-dropdown">
                                                <li class="gradient-primary"><i data-feather="star"></i>
                                                    <h6 class="f-18 mb-0">Bookmark</h6>
                                                </li>
                                                <li>
                                                    <div class="row">
                                                        <div class="col-4 text-center"><i
                                                                data-feather="file-text"></i></div>
                                                        <div class="col-4 text-center"><i data-feather="activity"></i>
                                                        </div>
                                                        <div class="col-4 text-center"><i data-feather="users"></i>
                                                        </div>
                                                        <div class="col-4 text-center"><i
                                                                data-feather="clipboard"></i></div>
                                                        <div class="col-4 text-center"><i data-feather="anchor"></i>
                                                        </div>
                                                        <div class="col-4 text-center"><i data-feather="settings"></i>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="text-center">
                                                    <button class="flip-btn" id="flip-btn">Add New Bookmark</button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="back">
                                            <ul>
                                                <li>
                                                    <div class="droplet-dropdown bookmark-dropdown flip-back-content">
                                                        <input type="text" placeholder="search...">
                                                    </div>
                                                </li>
                                                <li>
                                                    <button class="d-block flip-back" id="flip-back">Back</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="mode"><i class="fa fa-moon-o"></i></div>
                        </li>
                        <li class="cart-nav onhover-dropdown">
                            <div class="cart-box"><i data-feather="shopping-cart"></i><span
                                    class="badge rounded-pill badge-primary">2</span></div>
                            <ul class="cart-dropdown onhover-show-div">
                                <li>
                                    <h6 class="mb-0 f-20">Shoping Bag</h6><i data-feather="shopping-cart"></i>
                                </li>
                                <li class="mt-0">
                                    <div class="media"><img class="img-fluid rounded-circle me-3 img-60"
                                            src="/cuba/assets/images/ecommerce/01.jpg" alt="">
                                        <div class="media-body"><span>V-Neck Shawl Collar Woman's Solid T-Shirt</span>
                                            <p>Yellow(#fcb102)</p>
                                            <div class="qty-box">
                                                <div class="input-group"><span class="input-group-prepend">
                                                        <button class="btn quantity-left-minus" type="button"
                                                            data-type="minus" data-field=""><i
                                                                data-feather="minus"></i></button></span>
                                                    <input class="form-control input-number" type="text"
                                                        name="quantity" value="1"><span
                                                        class="input-group-prepend">
                                                        <button class="btn quantity-right-plus" type="button"
                                                            data-type="plus" data-field=""><i
                                                                data-feather="plus"></i></button></span>
                                                </div>
                                            </div>
                                            <h6 class="text-end text-muted">$299.00</h6>
                                        </div>
                                        <div class="close-circle"><a href="#"><i data-feather="x"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="mt-0">
                                    <div class="media"><img class="img-fluid rounded-circle me-3 img-60"
                                            src="/cuba/assets/images/ecommerce/03.jpg" alt="">
                                        <div class="media-body"><span>V-Neck Shawl Collar Woman's Solid T-Shirt</span>
                                            <p>Yellow(#fcb102)</p>
                                            <div class="qty-box">
                                                <div class="input-group"><span class="input-group-prepend">
                                                        <button class="btn quantity-left-minus" type="button"
                                                            data-type="minus" data-field=""><i
                                                                data-feather="minus"></i></button></span>
                                                    <input class="form-control input-number" type="text"
                                                        name="quantity" value="1"><span
                                                        class="input-group-prepend">
                                                        <button class="btn quantity-right-plus" type="button"
                                                            data-type="plus" data-field=""><i
                                                                data-feather="plus"></i></button></span>
                                                </div>
                                            </div>
                                            <h6 class="text-end text-muted">$299.00</h6>
                                        </div>
                                        <div class="close-circle"><a href="#"><i data-feather="x"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="total">
                                        <h6 class="mb-2 mt-0 text-muted">Order Total : <span
                                                class="f-right f-20">$598.00</span></h6>
                                    </div>
                                </li>
                                <li><a class="btn btn-block w-100 mb-2 btn-primary view-cart" href="cart.html">Go to
                                        shoping bag</a><a class="btn btn-block w-100 btn-secondary view-cart"
                                        href="checkout.html">Checkout</a></li>
                            </ul>
                        </li>
                        <li class="onhover-dropdown"><i data-feather="message-square"></i>
                            <ul class="chat-dropdown onhover-show-div">
                                <li><i data-feather="message-square"></i>
                                    <h6 class="f-18 mb-0">Message Box </h6>
                                </li>
                                <li>
                                    <div class="media"><img class="img-fluid rounded-circle me-3"
                                            src="/cuba/assets/images/user/1.jpg" alt="">
                                        <div class="status-circle online"></div>
                                        <div class="media-body"><span>Erica Hughes</span>
                                            <p>Lorem Ipsum is simply dummy...</p>
                                        </div>
                                        <p class="f-12 font-success">58 mins ago</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"><img class="img-fluid rounded-circle me-3"
                                            src="/cuba/assets/images/user/2.jpg" alt="">
                                        <div class="status-circle online"></div>
                                        <div class="media-body"><span>Kori Thomas</span>
                                            <p>Lorem Ipsum is simply dummy...</p>
                                        </div>
                                        <p class="f-12 font-success">1 hr ago</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"><img class="img-fluid rounded-circle me-3"
                                            src="/cuba/assets/images/user/4.jpg" alt="">
                                        <div class="status-circle offline"></div>
                                        <div class="media-body"><span>Ain Chavez</span>
                                            <p>Lorem Ipsum is simply dummy...</p>
                                        </div>
                                        <p class="f-12 font-danger">32 mins ago</p>
                                    </div>
                                </li>
                                <li class="text-center"> <a class="btn btn-primary" href="#">View All </a></li>
                            </ul>
                        </li>
                        <li class="maximize"><a class="text-dark" href="#!"
                                onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                        <li class="profile-nav onhover-dropdown p-0 me-0">
                            <div class="media profile-media"><img class="b-r-10"
                                    src="/cuba/assets/images/dashboard/profile.jpg" alt="">
                                <div class="media-body"><span>Emay Walter</span>
                                    <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li><a href="#"><i data-feather="user"></i><span>Account </span></a></li>
                                <li><a href="#"><i data-feather="mail"></i><span>Inbox</span></a></li>
                                <li><a href="#"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                                <li><a href="#"><i data-feather="settings"></i><span>Settings</span></a></li>
                                <li><a href="#"><i data-feather="log-in"> </i><span>Log in</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName"></div>
            </div>
            </div>
          </script>
                <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
            </div>
        </div>
        <!-- Page Header Ends -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
                <div>
                    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light"
                                src="/cuba/assets/images/logo/logo.png" alt=""><img
                                class="img-fluid for-dark" src="/cuba/assets/images/logo/logo_dark.png"
                                alt=""></a>
                        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                        <div class="toggle-sidebar" checked="checked"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-grid status_toggle middle sidebar-toggle">
                                <rect x="3" y="3" width="7" height="7"></rect>
                                <rect x="14" y="3" width="7" height="7"></rect>
                                <rect x="14" y="14" width="7" height="7"></rect>
                                <rect x="3" y="14" width="7" height="7"></rect>
                            </svg></div>
                    </div>
                    <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid"
                                src="/cuba/assets/images/logo/logo-icon.png" alt=""></a></div>
                    <nav class="sidebar-main">
                        <div class="left-arrow disabled" id="left-arrow"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-arrow-left">
                                <line x1="19" y1="12" x2="5" y2="12"></line>
                                <polyline points="12 19 5 12 12 5"></polyline>
                            </svg></div>
                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar" data-simplebar="init" style="display: block;">
                                <div class="simplebar-wrapper" style="margin: 0px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper"
                                                style="height: 100%; overflow: hidden scroll;">
                                                <div class="simplebar-content" style="padding: 0px;">
                                                    <li class="back-btn"><a href="index.html"><img class="img-fluid"
                                                                src="/cuba/assets/images/logo/logo-icon.png"
                                                                alt=""></a>
                                                        <div class="mobile-back text-end"><span>Back</span><i
                                                                class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                                                        </div>
                                                    </li>



                                                    <li class="sidebar-list">
                                                        <label class="badge badge-info">Latest </label><a
                                                            class="sidebar-link sidebar-title link-nav"
                                                            href="/bai1"><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-monitor">
                                                                <rect x="2" y="3" width="20" height="14"
                                                                    rx="2" ry="2"></rect>
                                                                <line x1="8" y1="21" x2="16"
                                                                    y2="21"></line>
                                                                <line x1="12" y1="17" x2="12"
                                                                    y2="21"></line>
                                                            </svg><span>Trang chu</span>
                                                            <div class="according-menu"><i
                                                                    class="fa fa-angle-right"></i></div>
                                                        </a>
                                                    </li>

                                                    <ul class="sidebar-submenu" style="display: none;">
                                                        <li><a href="product.html">Product</a></li>
                                                        <li><a href="product-page.html">Product page</a></li>
                                                        <li><a href="list-products.html">Product list</a></li>
                                                        <li><a href="payment-details.html">Payment Details</a></li>
                                                        <li><a href="order-history.html">Order History</a></li>
                                                        <li><a href="invoice-template.html">Invoice</a></li>
                                                        <li><a href="cart.html">Cart</a></li>
                                                        <li><a href="list-wish.html">Wishlist</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="pricing.html">Pricing </a></li>
                                                    </ul>
                                                    </li>
                                                    <li class="sidebar-list">
                                                        <label class="badge badge-info">Latest </label><a
                                                            class="sidebar-link sidebar-title link-nav"
                                                            href="/bai2"><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-monitor">
                                                                <rect x="2" y="3" width="20" height="14"
                                                                    rx="2" ry="2"></rect>
                                                                <line x1="8" y1="21" x2="16"
                                                                    y2="21"></line>
                                                                <line x1="12" y1="17" x2="12"
                                                                    y2="21"></line>
                                                            </svg><span>Chi tiet phim</span>
                                                            <div class="according-menu"><i
                                                                    class="fa fa-angle-right"></i></div>
                                                        </a>
                                                    </li>
                                                    <li class="sidebar-list">
                                                        <label class="badge badge-info">Latest </label><a
                                                            class="sidebar-link sidebar-title link-nav"
                                                            href="/bai3"><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-monitor">
                                                                <rect x="2" y="3" width="20" height="14"
                                                                    rx="2" ry="2"></rect>
                                                                <line x1="8" y1="21" x2="16"
                                                                    y2="21"></line>
                                                                <line x1="12" y1="17" x2="12"
                                                                    y2="21"></line>
                                                            </svg><span>Phim</span>
                                                            <div class="according-menu"><i
                                                                    class="fa fa-angle-right"></i></div>
                                                        </a>
                                                    </li>
                                                    <li class="sidebar-list">
                                                        <label class="badge badge-info">Latest </label><a
                                                            class="sidebar-link sidebar-title link-nav"
                                                            href="/bai4"><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-monitor">
                                                                <rect x="2" y="3" width="20" height="14"
                                                                    rx="2" ry="2"></rect>
                                                                <line x1="8" y1="21" x2="16"
                                                                    y2="21"></line>
                                                                <line x1="12" y1="17" x2="12"
                                                                    y2="21"></line>
                                                            </svg><span>The loai</span>
                                                            <div class="according-menu"><i
                                                                    class="fa fa-angle-right"></i></div>
                                                        </a>
                                                    </li>
                                                    <li class="sidebar-list">
                                                        <label class="badge badge-info">Latest </label><a
                                                            class="sidebar-link sidebar-title link-nav"
                                                            href="/bai5"><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-monitor">
                                                                <rect x="2" y="3" width="20" height="14"
                                                                    rx="2" ry="2"></rect>
                                                                <line x1="8" y1="21" x2="16"
                                                                    y2="21"></line>
                                                                <line x1="12" y1="17" x2="12"
                                                                    y2="21"></line>
                                                            </svg><span>Profile</span>
                                                            <div class="according-menu"><i
                                                                    class="fa fa-angle-right"></i></div>
                                                        </a>
                                                    </li>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: auto; height: 2559px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                    <div class="simplebar-scrollbar"
                                        style="height: 43px; transform: translate3d(0px, 0px, 0px); display: block;">
                                    </div>
                                </div>
                            </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-arrow-right">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg></div>
                    </nav>
                </div>
            </div>

            <!-- Page Sidebar Ends-->
            <div class="page-body">
                @yield('cuba')
            </div>
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 footer-copyright text-center">
                            <p class="mb-0">Copyright 2021 © Cuba theme by pixelstrap </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="/cuba/assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="/cuba/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="/cuba/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="/cuba/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="/cuba/assets/js/scrollbar/simplebar.js"></script>
    <script src="/cuba/assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="/cuba/assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="/cuba/assets/js/sidebar-menu.js"></script>
    <script src="/cuba/assets/js/chart/chartist/chartist.js"></script>
    <script src="/cuba/assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="/cuba/assets/js/chart/knob/knob.min.js"></script>
    <script src="/cuba/assets/js/chart/knob/knob-chart.js"></script>
    <script src="/cuba/assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="/cuba/assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="/cuba/assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="/cuba/assets/js/dashboard/default.js"></script>
    <script src="/cuba/assets/js/notify/index.js"></script>
    <script src="/cuba/assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="/cuba/assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="/cuba/assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="/cuba/assets/js/typeahead/handlebars.js"></script>
    <script src="/cuba/assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="/cuba/assets/js/typeahead/typeahead.custom.js"></script>
    <script src="/cuba/assets/js/typeahead-search/handlebars.js"></script>
    <script src="/cuba/assets/js/typeahead-search/typeahead-custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="/cuba/assets/js/script.js"></script>
    <script src="/cuba/assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
</body>

</html>
