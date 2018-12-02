@extends('layouts.app')
    @section('body')
    <body class="home3">
    @endsection

    @section('content')
    @include('layouts.search')
    @include('layouts.filter')
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Dashboard</div>--}}

                {{--<div class="panel-body">--}}

                 {{--@if(!\Illuminate\Support\Facades\Auth::check())--}}
                    {{--Giriş Yaptınız--}}
                    {{--@endif--}}
                    {{--You are logged in!--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

<!--================================
    START PRODUCTS AREA
=================================-->
<section class="products">
    <!-- start container -->
    <div class="container">

        <!-- start .row -->
        <div class="row">
        @if(isset($products))
            @foreach($products as $product)
                <!-- start .col-md-4 -->
                    <div class="col-lg-4 col-md-6">
                        <!-- start .single-product -->
                        <div class="product product--card">

                            <div class="product__thumbnail">
                                <img src="{{asset('uploads')}}/{!! $product->fimg->url !!}" alt="Product Image">
                                <div class="prod_btn">
                                    <a href="{{ route('home.product',['name'=>str_slug($product->title),'id'=>$product->id]) }}" class="transparent btn--sm btn--round">İncele</a>
                                    {{--<a href="{{ route('home.product',['name'=>$row->product_slug,'id'=>5]) }}" class="transparent btn--sm btn--round">Ön İzleme</a>--}}
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
                                        <img class="auth-img" src="{{asset('home-theme')}}/images/auth.jpg" alt="author image">
                                        <p>
                                            <a href="#">Admin</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        <a href="#">
                                            <span class="lnr lnr-book"></span>{{ $product->category->title }}</a>
                                    </li>
                                </ul>

                                <p>Deneme</p>
                            </div>
                            <!-- end /.product-desc -->

                            <div class="product-purchase">
                                <div class="price_love">
                                    <span>₺{{ $product->price }}</span>
                                    <p>
                                        <span class="lnr lnr-heart"></span> 90</p>
                                </div>
                                <div class="sell">
                                    <p>
                                        <span class="lnr lnr-cart"></span>
                                        <span>16</span>
                                    </p>
                                </div>
                            </div>
                            <!-- end /.product-purchase -->
                        </div>
                        <!-- end /.single-product -->
                    </div>
                    <!-- end /.col-md-4 -->
                @endforeach
            @endif


        </div>
        <!-- end /.row -->

        <div class="row">
            <div class="col-md-12">
                <div class="pagination-area">
                    <nav class="navigation pagination" role="navigation">
                        <div class="nav-links">
                            {{ $products->links() }}
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
@endsection
