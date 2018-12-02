@extends('layouts.app')
@section('body')
    <body class="home-3">
    @endsection
@section('content')
    @include('layouts.search')
    @include('layouts.filter')
<!--================================
    START PRODUCTS AREA
=================================-->
<section class="products section--padding2">
    <!-- start container -->
    <div class="container">
        <!-- start .row -->
        <div class="row">
            <!-- start .col-md-3 -->
            <div class="col-lg-3">
                <!-- start aside -->
                <aside class="sidebar product--sidebar">
                    <div class="sidebar-card card--category">
                        <a class="card-title" href="#collapse1" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                            <h4>Alt Kategoriler
                                <span class="lnr lnr-chevron-down"></span>
                            </h4>
                        </a>
                        <div class="collapse show collapsible-content" id="collapse1">
                            <ul class="card-content">
                                @if(count($category->subcategory) > 0)
                                    @foreach($category->subcategory as $sub_category)
                                        <li>
                                            <a href="{{ $sub_category->slug }}">
                                                <span class="lnr lnr-chevron-right"></span>{{ $sub_category->title }}
                                                <span class="item-count">35</span>
                                            </a>
                                        </li>
                                    @endforeach
                                @else
                                    Bu kategorinin alt kategorisi yoktur.
                                @endif
                            </ul>
                        </div>
                        <!-- end /.collapsible_content -->
                    </div>
                    <!-- end /.sidebar-card -->

                    <div class="sidebar-card card--filter">
                        <a class="card-title" href="#collapse2" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse2">
                            <h4>Filter Products
                                <span class="lnr lnr-chevron-down"></span>
                            </h4>
                        </a>
                        <div class="collapse show collapsible-content" id="collapse2">
                            <ul class="card-content">
                                <li>
                                    <div class="custom-checkbox2">
                                        <input type="checkbox" id="opt1" class="" name="filter_opt">
                                        <label for="opt1">
                                            <span class="circle"></span>Trending Products</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox2">
                                        <input type="checkbox" id="opt2" class="" name="filter_opt">
                                        <label for="opt2">
                                            <span class="circle"></span>Popular Products</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox2">
                                        <input type="checkbox" id="opt3" class="" name="filter_opt">
                                        <label for="opt3">
                                            <span class="circle"></span>New Products</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox2">
                                        <input type="checkbox" id="opt4" class="" name="filter_opt">
                                        <label for="opt4">
                                            <span class="circle"></span>Best Seller</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox2">
                                        <input type="checkbox" id="opt5" class="" name="filter_opt">
                                        <label for="opt5">
                                            <span class="circle"></span>Best Rating</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox2">
                                        <input type="checkbox" id="opt6" class="" name="filter_opt">
                                        <label for="opt6">
                                            <span class="circle"></span>Free Support</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox2">
                                        <input type="checkbox" id="opt7" class="" name="filter_opt">
                                        <label for="opt7">
                                            <span class="circle"></span>On Sale</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end /.sidebar-card -->

                    <div class="sidebar-card card--slider">
                        <a class="card-title" href="#collapse3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse3">
                            <h4>Filter Products
                                <span class="lnr lnr-chevron-down"></span>
                            </h4>
                        </a>
                        <div class="collapse show collapsible-content" id="collapse3">
                            <div class="card-content">
                                <div class="range-slider price-range"></div>

                                <div class="price-ranges">
                                    <span class="from rounded">$30</span>
                                    <span class="to rounded">$300</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end /.sidebar-card -->
                </aside>
                <!-- end aside -->
            </div>
            <!-- end /.col-md-3 -->

            <!-- start col-md-9 -->
            <div class="col-lg-9">
                <div class="row">

                    @if(count($category->products) > 0)
                        @foreach($category->products as $product)

                            <div class="col-lg-4 col-md-6">
                                <!-- start .single-product -->
                                <div class="product product--card product--card-small">

                                    <div class="product__thumbnail">
                                        <img src="{{ asset('uploads')}}/{{ $product->fimg->url }}" alt="Product Image">
                                        <div class="prod_btn">
                                            <a href="{{ route('home.product',['name'=>str_slug($product->title),'id'=>$product->id]) }}" class="transparent btn--sm btn--round">İncele</a>
                                            <a href="{{ route('home.product',['name'=>$product->slug,'id'=>5]) }}" class="transparent btn--sm btn--round">Ön İzleme</a>
                                        </div>
                                        <!-- end /.prod_btn -->
                                    </div>
                                    <!-- end /.product__thumbnail -->

                                    <div class="product-desc">
                                        <a href="#" class="product_title">
                                            <h4>{{ $product->title }}</h4>
                                        </a>
                                        <ul class="titlebtm">
                                            <li>
                                                <img class="auth-img" src="{{ asset('home-theme')}}/images/auth.jpg" alt="author image">
                                                <p>
                                                    <a href="#">Admin</a>
                                                </p>
                                            </li>
                                            <li class="out_of_class_name">
                                                <div class="sell">
                                                    <p>
                                                        <span class="lnr lnr-cart"></span>
                                                        <span>27</span>
                                                    </p>
                                                </div>
                                                <div class="rating product--rating">
                                                    <ul>
                                                        <li>
                                                            <span class="fa fa-star"></span>
                                                        </li>
                                                        <li>
                                                            <span class="fa fa-star"></span>
                                                        </li>
                                                        <li>
                                                            <span class="fa fa-star"></span>
                                                        </li>
                                                        <li>
                                                            <span class="fa fa-star"></span>
                                                        </li>
                                                        <li>
                                                            <span class="fa fa-star-half-o"></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>
                                    <!-- end /.product-desc -->

                                    <div class="product-purchase">
                                        <div class="price_love">
                                            <span>₺{{ $product->price }}</span>
                                        </div>
                                        <a href="#">
                                            <span class="lnr lnr-book"></span>Plugin</a>
                                    </div>
                                    <!-- end /.product-purchase -->
                                </div>
                                <!-- end /.single-product -->
                            </div>
                            <!-- end /.col-md-4 -->
                        @endforeach
                    @endif
                </div>
            </div>
            <!-- end /.col-md-9 -->
        </div>
        <!-- end /.row -->

        <div class="row">
            <div class="col-md-12">
                <div class="pagination-area categorised_item_pagination">
                    <nav class="navigation pagination" role="navigation">
                        <div class="nav-links">
                            {{--{{ ci()->pagination->create_links() }}--}}


                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->

</section>
<!--================================
    END PRODUCTS AREA
=================================-->
@endsection('content')
