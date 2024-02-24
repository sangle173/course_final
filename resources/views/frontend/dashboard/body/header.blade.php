<header class="header-menu-area">
    <div class="header-menu-content dashboard-menu-content pr-30px pl-30px bg-white shadow-sm">
        <div class="container-fluid">
            <div class="main-menu-content">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="logo-box logo--box">
                            <a href="" class="logo"><img src="{{ asset('frontend/images/logo.png') }}" width="30"
                                                         alt="logo"></a>
                            <div class="user-btn-action">
                                <div class="search-menu-toggle icon-element icon-element-sm shadow-sm mr-2"
                                     data-toggle="tooltip" data-placement="top" title="Search">
                                    <i class="la la-search"></i>
                                </div>
                                <div
                                    class="off-canvas-menu-toggle cat-menu-toggle icon-element icon-element-sm shadow-sm mr-2"
                                    data-toggle="tooltip" data-placement="top" title="Category menu">
                                    <i class="la la-th-large"></i>
                                </div>
                                <div
                                    class="off-canvas-menu-toggle main-menu-toggle icon-element icon-element-sm shadow-sm"
                                    data-toggle="tooltip" data-placement="top" title="Main menu">
                                    <i class="la la-bars"></i>
                                </div>
                            </div>
                        </div><!-- end logo-box -->
                        <div class="menu-wrapper">
                            <form method="post" class="mr-auto ml-0">
                                <div class="form-group mb-0">
                                    <input class="form-control form--control form--control-gray pl-3" type="text"
                                           name="search" placeholder="Search for anything">
                                    <span class="la la-search search-icon"></span>
                                </div>
                            </form>
                            <div class="nav-right-button d-flex align-items-center">
                                <div class="user-action-wrap d-flex align-items-center">


                                    <div class="shop-cart wishlist-cart pr-3 mr-3 border-right border-right-gray">
                                        {{--        <ul>--}}
                                        {{--            <li>--}}
                                        {{--                <p class="shop-cart-btn">--}}
                                        {{--                    <i class="la la-heart-o"></i>--}}
                                        {{--                    <span class="dot-status bg-1"></span>--}}
                                        {{--                </p>--}}
                                        {{--                <ul class="cart-dropdown-menu after-none">--}}
                                        {{--                    <li>--}}
                                        {{--                        <div class="media media-card">--}}
                                        {{--                            <a href="course-details.html" class="media-img">--}}
                                        {{--                                <img class="mr-3" src="images/small-img.jpg" alt="Cart image">--}}
                                        {{--                            </a>--}}
                                        {{--                            <div class="media-body">--}}
                                        {{--                                <h5><a href="course-details.html">The Complete JavaScript Course 2021: From Zero to Expert!</a></h5>--}}
                                        {{--                                <span class="d-block lh-18 py-1">Kamran Ahmed</span>--}}
                                        {{--                                <p class="text-black font-weight-semi-bold lh-18">$12.99 <span class="before-price fs-14">$129.99</span></p>--}}
                                        {{--                            </div>--}}
                                        {{--                        </div>--}}
                                        {{--                        <a href="#" class="btn theme-btn theme-btn-sm theme-btn-transparent lh-28 w-100 mt-3">Add to cart <i class="la la-arrow-right icon ml-1"></i></a>--}}
                                        {{--                    </li>--}}
                                        {{--                    <li>--}}
                                        {{--                        <div class="media media-card">--}}
                                        {{--                            <a href="course-details.html" class="media-img">--}}
                                        {{--                                <img class="mr-3" src="images/small-img.jpg" alt="Cart image">--}}
                                        {{--                            </a>--}}
                                        {{--                            <div class="media-body">--}}
                                        {{--                                <h5><a href="course-details.html">The Complete JavaScript Course 2021: From Zero to Expert!</a></h5>--}}
                                        {{--                                <span class="d-block lh-18 py-1">Kamran Ahmed</span>--}}
                                        {{--                                <p class="text-black font-weight-semi-bold lh-18">$12.99 <span class="before-price fs-14">$129.99</span></p>--}}
                                        {{--                            </div>--}}
                                        {{--                        </div>--}}
                                        {{--                        <a href="#" class="btn theme-btn theme-btn-sm theme-btn-transparent lh-28 w-100 mt-3">Add to cart <i class="la la-arrow-right icon ml-1"></i></a>--}}
                                        {{--                    </li>--}}
                                        {{--                    <li>--}}
                                        {{--                        <a href="my-courses.html" class="btn theme-btn w-100">Got to wishlist <i class="la la-arrow-right icon ml-1"></i></a>--}}
                                        {{--                    </li>--}}
                                        {{--                </ul>--}}
                                        {{--            </li>--}}
                                        {{--        </ul>--}}
                                    </div><!-- end shop-cart -->
                                    <div class="shop-cart notification-cart pr-3 mr-3 border-right border-right-gray">
                                        <ul>
                                            <li>
                                                <p class="shop-cart-btn">
                                                    <i class="la la-bell"></i>
                                                    <span class="dot-status bg-1"></span>
                                                </p>
                                                <ul class="cart-dropdown-menu after-none p-0 notification-dropdown-menu">
                                                </ul>
                                            </li>
                                        </ul>
                                    </div><!-- end shop-cart -->


                                    @php
                                        $id = Auth::user()->id;
                                        $profileData = App\Models\User::find($id);
                                    @endphp


                                    <div class="shop-cart user-profile-cart">
                                        <ul>
                                            <li>
                                                <div class="shop-cart-btn">
                                                    <div class="avatar-xs">
                                                        <img class="rounded-full img-fluid"
                                                             src="{{ (!empty($profileData->photo)) ? url('upload/user_images/'.$profileData->photo) : url('upload/no_image.jpg')}}"
                                                             alt="Avatar image">
                                                    </div>
                                                    <span class="dot-status bg-1"></span>
                                                </div>
                                                <ul class="cart-dropdown-menu after-none p-0 notification-dropdown-menu">
                                                    <li class="menu-heading-block d-flex align-items-center">
                                                        <a href="#" class="avatar-sm flex-shrink-0 d-block">
                                                            <img class="rounded-full img-fluid"
                                                                 src="{{ (!empty($profileData->photo)) ? url('upload/user_images/'.$profileData->photo) : url('upload/no_image.jpg')}}"
                                                                 alt="Avatar image">
                                                        </a>
                                                        <div class="ml-2">
                                                            <h4><a href="#"
                                                                   class="text-black">{{ $profileData->name }}</a></h4>
                                                            <span
                                                                class="d-block fs-14 lh-20">{{ $profileData->email }}</span>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div
                                                            class="theme-picker d-flex align-items-center justify-content-center lh-40">
                                                            <button
                                                                class="theme-picker-btn dark-mode-btn w-100 font-weight-semi-bold justify-content-center"
                                                                title="Dark mode">
                                                                <svg class="mr-1" viewBox="0 0 24 24" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round">
                                                                    <path
                                                                        d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                                                                </svg>
                                                                Giao diện tối
                                                            </button>
                                                            <button
                                                                class="theme-picker-btn light-mode-btn w-100 font-weight-semi-bold justify-content-center"
                                                                title="Light mode">
                                                                <svg class="mr-1" viewBox="0 0 24 24" stroke-width="1.5"
                                                                     stroke-linecap="round" stroke-linejoin="round">
                                                                    <circle cx="12" cy="12" r="5"></circle>
                                                                    <line x1="12" y1="1" x2="12" y2="3"></line>
                                                                    <line x1="12" y1="21" x2="12" y2="23"></line>
                                                                    <line x1="4.22" y1="4.22" x2="5.64"
                                                                          y2="5.64"></line>
                                                                    <line x1="18.36" y1="18.36" x2="19.78"
                                                                          y2="19.78"></line>
                                                                    <line x1="1" y1="12" x2="3" y2="12"></line>
                                                                    <line x1="21" y1="12" x2="23" y2="12"></line>
                                                                    <line x1="4.22" y1="19.78" x2="5.64"
                                                                          y2="18.36"></line>
                                                                    <line x1="18.36" y1="5.64" x2="19.78"
                                                                          y2="4.22"></line>
                                                                </svg>
                                                                Giao diện sáng
                                                            </button>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <ul class="generic-list-item">
                                                            <li>
                                                                <a href="{{ route('user.profile') }}">
                                                                    <i class="la la-edit mr-1"></i> Đổi thông tin
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <div class="section-block"></div>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('user.logout') }}">
                                                                    <i class="la la-power-off mr-1"></i> Đăng xuất
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div><!-- end shop-cart -->
                                </div>
                            </div><!-- end nav-right-button -->
                        </div><!-- end menu-wrapper -->
                    </div><!-- end col-lg-10 -->
                </div><!-- end row -->
            </div>
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-content -->
</header><!-- end header-menu-area -->
