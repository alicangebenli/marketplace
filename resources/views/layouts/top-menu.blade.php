<!-- start .top-menu-area -->
<div class="top-menu-area">
    <!-- start .container -->
    <div class="container">
        <!-- start .row -->
        <div class="row">
            <!-- start .col-md-3 -->
            <div class="col-lg-3 col-md-3 col-6 v_middle">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('home-theme') }}/images/logo.png" alt="logo image" class="img-fluid">
                    </a>
                </div>
            </div>
            <!-- end /.col-md-3 -->

            <!-- start .col-md-5 -->
            <div class="col-lg-8 offset-lg-1 col-md-9 col-6 v_middle">

                    <!-- start .author-area -->
                        <div class="author-area">
                            @if(Auth::guest())
                            <a href="{{ route('register') }}" class="author-area__seller-btn inline">Kayıt OL</a>
                            <a href="{{ route('login') }}" class="author-area__seller-btn inline">Giriş Yap</a>
                            @endif

                            <div class="author__notification_area">
                                <ul>
                                    <li class="has_dropdown">
                                        <div class="icon_wrap">
                                            <span class="lnr lnr-alarm"></span>
                                            <span class="notification_count noti">25</span>
                                        </div>

                                        <div class="dropdown notification--dropdown">

                                            <div class="dropdown_module_header">
                                                <h4>My Notifications</h4>
                                                <a href="notification.html">View All</a>
                                            </div>

                                            <div class="notifications_module">
                                                <div class="notification">
                                                    <div class="notification__info">
                                                        <div class="info_avatar">
                                                            <img src="images/notification_head.png" alt="">
                                                        </div>
                                                        <div class="info">
                                                            <p>
                                                                <span>Anderson</span> added to Favourite
                                                                <a href="#">Mccarther Coffee Shop</a>
                                                            </p>
                                                            <p class="time">Just now</p>
                                                        </div>
                                                    </div>
                                                    <!-- end /.notifications -->

                                                    <div class="notification__icons ">
                                                        <span class="lnr lnr-heart loved noti_icon"></span>
                                                    </div>
                                                    <!-- end /.notifications -->
                                                </div>
                                                <!-- end /.notifications -->

                                                <div class="notification">
                                                    <div class="notification__info">
                                                        <div class="info_avatar">
                                                            <img src="images/notification_head2.png" alt="">
                                                        </div>
                                                        <div class="info">
                                                            <p>
                                                                <span>Michael</span> commented on
                                                                <a href="#">MartPlace Extension Bundle</a>
                                                            </p>
                                                            <p class="time">Just now</p>
                                                        </div>
                                                    </div>
                                                    <!-- end /.notifications -->

                                                    <div class="notification__icons ">
                                                        <span class="lnr lnr-bubble commented noti_icon"></span>
                                                    </div>
                                                    <!-- end /.notifications -->
                                                </div>
                                                <!-- end /.notifications -->

                                                <div class="notification">
                                                    <div class="notification__info">
                                                        <div class="info_avatar">
                                                            <img src="images/notification_head3.png" alt="">
                                                        </div>
                                                        <div class="info">
                                                            <p>
                                                                <span>Khamoka </span>purchased
                                                                <a href="#"> Visibility Manager Subscriptions</a>
                                                            </p>
                                                            <p class="time">Just now</p>
                                                        </div>
                                                    </div>
                                                    <!-- end /.notifications -->

                                                    <div class="notification__icons ">
                                                        <span class="lnr lnr-cart purchased noti_icon"></span>
                                                    </div>
                                                    <!-- end /.notifications -->
                                                </div>
                                                <!-- end /.notifications -->

                                                <div class="notification">
                                                    <div class="notification__info">
                                                        <div class="info_avatar">
                                                            <img src="images/notification_head4.png" alt="">
                                                        </div>
                                                        <div class="info">
                                                            <p>
                                                                <span>Anderson</span> added to Favourite
                                                                <a href="#">Mccarther Coffee Shop</a>
                                                            </p>
                                                            <p class="time">Just now</p>
                                                        </div>
                                                    </div>
                                                    <!-- end /.notifications -->

                                                    <div class="notification__icons ">
                                                        <span class="lnr lnr-star reviewed noti_icon"></span>
                                                    </div>
                                                    <!-- end /.notifications -->
                                                </div>
                                                <!-- end /.notifications -->
                                            </div>
                                            <!-- end /.dropdown -->
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--start .author__notification_area -->

                            <!--start .author-author__info-->
                            <div class="author-author__info inline has_dropdown">
                                <div class="author__avatar">
                                    @if(!Auth::guest())
                                        Üye Menüsü
                                        @else
                                        Üye Olunuz..
                                    @endif


                                </div>

                                <div class="autor__info"  @if(Auth::guest())  style="visibility: hidden" @endif>
                                    <p class="name">
                                        Jhon Doe
                                    </p>
                                    <p class="ammount">$20.45</p>
                                </div>

                                <div class="dropdown dropdown--author"  @if(Auth::guest())  style="visibility: hidden" @endif>
                                    <ul>
                                        <li>
                                            <a href="{{ route('home') }}/genel-bakis">
                                                <span class="lnr lnr-home"></span>Genel Bakış</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('user.setting')  }}">
                                                <span class="lnr lnr-cog"></span>Ayarlar</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('user.setting') }}">
                                                <span class="lnr lnr-cart"></span>Satın Aldıklarım</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('user.setting') }}">
                                                <span class="lnr lnr-heart"></span>Favorilerim</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('user.addcredit') }}">
                                                <span class="lnr lnr-dice"></span>Kredi Ekle</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('user.addcredit') }}">
                                                <span class="lnr lnr-briefcase"></span>Cüzdan</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                                <span class="lnr lnr-exit"></span>Çıkış
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--end /.author-author__info-->

                        </div>
                        <!-- end .author-area -->





                <!-- MOBIL MOBIL MOBIL MOBIL MOBIL MOBIL MOBIL MOBIL MOBIL MOBIL MOBIL MOBIL MOBIL MOBIL -->
                <!-- author area restructured for mobile -->
                <div class="mobile_content ">
                    <span class="lnr lnr-user menu_icon"></span>

                    <!-- offcanvas menu -->
                    <div class="offcanvas-menu closed">
                        <span class="lnr lnr-cross close_menu"></span>
                        <div class="author-author__info">
                            <div class="author__avatar v_middle">
                                <img src="{{ asset('home-theme')}}/images/usr_avatar.png" alt="user avatar">
                            </div>
                            <div class="autor__info v_middle">
                                <p class="name">
                                    Jhon Doe
                                </p>
                                <p class="ammount">$20.45</p>
                            </div>
                        </div>
                        <!--end /.author-author__info-->

                        <div class="author__notification_area">
                            <ul>
                                <li>
                                    <a href="notification.html">
                                        <div class="icon_wrap">
                                            <span class="lnr lnr-alarm"></span>
                                            <span class="notification_count noti">25</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="message.html">
                                        <div class="icon_wrap">
                                            <span class="lnr lnr-envelope"></span>
                                            <span class="notification_count msg">6</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="cart.html">
                                        <div class="icon_wrap">
                                            <span class="lnr lnr-cart"></span>
                                            <span class="notification_count purch">2</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--start .author__notification_area -->

                        <div class="dropdown dropdown--author">
                            <ul>
                                {{--<li>--}}
                                    {{--<a href="{{ base_url('panel') }}/genel-bakis">--}}
                                        {{--<span class="lnr lnr-home"></span>Genel Bakış</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="{{ base_url('panel') }}/ayarlar">--}}
                                        {{--<span class="lnr lnr-cog"></span>Ayarlar</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="{{ base_url('panel') }}/ayarlar">--}}
                                        {{--<span class="lnr lnr-cart"></span>Satın Aldıklarım</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="{{ base_url('panel') }}/ayarlar">--}}
                                        {{--<span class="lnr lnr-heart"></span>Favorilerim</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="{{ base_url('panel') }}/kredi-ekle">--}}
                                        {{--<span class="lnr lnr-dice"></span>Kredi Ekle</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="{{ base_url('panel') }}/satislarim">--}}
                                        {{--<span class="lnr lnr-chart-bars"></span>Satışlarım</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="{{ base_url('panel') }}/yeni-urun">--}}
                                        {{--<span class="lnr lnr-upload"></span>Yeni Ürün</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="{{ base_url('panel') }}/urunlerim">--}}
                                        {{--<span class="lnr lnr-book"></span>Ürünlerim</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="{{ base_url('panel') }}/cuzdan">--}}
                                        {{--<span class="lnr lnr-briefcase"></span>Cüzdan</a>--}}
                                {{--</li>--}}
                                <li>
                                    <a href="#">
                                        <span class="lnr lnr-exit"></span>Çıkış</a>
                                </li>
                            </ul>
                        </div>

                        <div class="text-center">
                            <a href="signup.html" class="author-area__seller-btn inline">Kayıt Ol</a>
                            <a href="signup.html" class="author-area__seller-btn inline">Giriş Yap</a>
                        </div>
                    </div>
                </div>
                <!-- end /.mobile_content -->
                <!-- MOBIL MOBIL MOBIL MOBIL MOBIL MOBIL MOBIL MOBIL MOBIL MOBIL MOBIL MOBIL MOBIL MOBIL -->

            </div>
            <!-- end /.col-md-5 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</div>
<!-- end  -->