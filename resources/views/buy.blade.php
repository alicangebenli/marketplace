@extends('layouts.app')
@section('body')
    <body class="cart-page" data-status="{{Session::get("status")}}">
    @endsection
@section('content')
    <!--================================
        START BREADCRUMB AREA
    =================================-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li class="active">
                                <a href="#">Shopping Cart</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Shopping Cart</h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END BREADCRUMB AREA
    =================================-->

    <!--================================
            START DASHBOARD AREA
    =================================-->
    <section class="cart_area section--padding2 bgcolor">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product_archive added_to__cart">
                        <div class="title_area">
                            <div class="row">
                                <div class="col-md-5">
                                    <h4>Ürün Detayı</h4>
                                </div>
                                <div class="col-md-3">
                                    <h4 class="add_info">Kategori</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Fiyat</h4>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="single_product clearfix">
                                    <div class="col-lg-5 col-md-7 v_middle">
                                        <div class="product__description">
                                            <img src="{{ config('app.url') }} {{ $product->fimg->url }}" alt="Purchase image" width="100px" height="100px">
                                            <div class="short_desc">
                                                <a href="{{ route('home.product',['name'=>str_slug($product->title),'id'=>$product->id]) }}">
                                                    <h4>{{ $product->title }}</h4>
                                                </a>

                                            </div>
                                        </div>
                                        <!-- end /.product__description -->
                                    </div>
                                    <!-- end /.col-md-5 -->

                                    <div class="col-lg-3 col-md-2 v_middle">
                                        <div class="product__additional_info">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <img src="" alt="">{{ $product->category->title }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- end /.product__additional_info -->
                                    </div>
                                    <!-- end /.col-md-3 -->

                                    <div class="col-lg-4 col-md-3 v_middle">
                                        <div class="product__price_download">
                                            <div class="item_price v_middle">
                                                <span>₺ {{ $product->price }}</span>
                                            </div>

                                        </div>
                                        <!-- end /.product__price_download -->
                                    </div>
                                    <!-- end /.col-md-4 -->
                                </div>
                                <!-- end /.single_product -->
                            </div>
                        </div>
                        <!-- end /.row -->

                        <div class="row">
                            <div class="col-md-6 offset-md-6">
                                <div class="cart_calculation">
                                    <a href="{{ route('home.buy_run',['id'=>$product->id]) }}" class="btn btn--round btn--md checkout_link">Satın Al</a>
                                </div>
                            </div>

                            <!-- end .col-md-12 -->
                        </div>
                        <!-- end .row -->
                    </div>
                    <!-- end /.product_archive2 -->
                </div>
                <!-- end .col-md-12 -->
            </div>
            <!-- end .row -->

        </div>
        <!-- end .container -->
    </section>
    <!--================================
            END DASHBOARD AREA
    =================================-->
@endsection('content')
