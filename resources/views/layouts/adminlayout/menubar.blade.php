@yield('content')
<body class="">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="{{url('admin/home')}}">
                            <img src="{{ asset('back/images/icon/logo-blue.png')}}" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="{{url('admin/home')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>

                           <li class="has-sub">
                                <a class="js-arrow" href="#">
                            <i class="fa fa-list-alt" aria-hidden="true"></i>Categories</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">

                            <li>
                                <a href="{{url('admin/categories')}}"><i class="far fa-eye" aria-hidden="true"></i>View Categories</a>
                            </li>

                            <li>
                                <a href="{{url('admin/category/create')}}"><i class="fas fa-plus-square" aria-hidden="true"></i>Add Categories</a>
                            </li>
                            </ul>

                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fab fa-product-hunt"></i>Products</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">

                        <li>
                            <a href="{{url('admin/view-products')}}"> <i class="far fa-eye" aria-hidden="true"></i>View Products</a>
                        </li>

                        <li>
                            <a href="{{url('admin/product/create')}}"><i class="fas fa-plus-square" aria-hidden="true"></i>Add Products</a>
                        </li>

                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-cogs"></i>Settings</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="{{url('admin/register')}}"> <i class="fas fa-user-secret" aria-hidden="true"></i>Add Users</a>
                        </li>

                        <li>
                            <a href="{{url('admin/resetPass')}}"><i class="fas fa-key" aria-hidden="true"></i>Change Password</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="{{url('admin/home')}}">
                    <img src="{{ asset('back/images/icon/logo.png')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a href="{{url('admin/home')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                               <i class="fa fa-list-alt" aria-hidden="true"></i>Categories</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">

                               <li>
                                    <a href="{{url('admin/category/create')}}"><i class="fas fa-plus-square" aria-hidden="true"></i>Add Categories</a>
                                </li>
                                <li>
                                    <a href="{{url('admin/categories')}}"><i class="far fa-eye" aria-hidden="true"></i>View Categories</a>
                                </li>

                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fab fa-product-hunt"></i>Products</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">

                                <li>
                                    <a href="{{url('admin/product/create')}}"><i class="fas fa-plus-square" aria-hidden="true"></i>Add Products</a>
                                </li>

                                <li>
                                    <a href="{{url('admin/view-products')}}"> <i class="far fa-eye" aria-hidden="true"></i>View Products</a>
                                </li>

                            </ul>
                        </li>

                         <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-book"></i>Upcoming Bids</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href=""> <i class="far fa-eye" aria-hidden="true"></i>View Bid Info</a>
                                </li>
                                <li>
                                    <a href=""><i class="fas fa-plus-square" aria-hidden="true"></i>Add Bids</a>
                                </li>

                            </ul>
                        </li>


                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-cogs"></i>Settings</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{url('admin/register')}}"> <i class="fas fa-user-secret" aria-hidden="true"></i>Add Users</a>
                                </li>
                                <li>
                                    <a href="{{url('admin/resetPass')}}"><i class="fas fa-key" aria-hidden="true"></i>Change Password</a>
                                </li>

                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

<div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                        <form class="form-header" action="" method="POST">
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{asset ('back/images/icon/evil-admin.jpg')}}" alt="admin" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                    <img src="{{asset ('back/images/icon/evil-admin.jpg')}}" alt="admin" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{ Auth::user()->name }}</a>
                                                    </h5>
                                                    <span class="email">{{ Auth::user()->email }}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>


                                            </div>
                                            <div class="account-dropdown__footer">
                                            <a href="{{ url ('/logout')  }}">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
