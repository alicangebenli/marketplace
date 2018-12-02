@extends('layouts.app')
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
                            <a href="{{ route('home') }}">Anasayfa</a>
                        </li>
                        <li>
                            <a href="{{ route('home.category',["name"=>$product->category->slug]) }}">{{ $product->category->title }}</a>
                        </li>
                        <li class="active">
                            <a href="{{ route('home.product',['name'=> str_slug($product->title),'id'=> $product->id]) }}">{{ $product->title }}</a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title">{{ $product->title }}</h1>
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

<!--============================================
    START SINGLE PRODUCT DESCRIPTION AREA
==============================================-->
@if(isset($product))
    <section class="single-product-desc">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="item-preview">
                        <div class="item__preview-slider">
                            <div class="prev-slide">
                                <img src="{{ asset('uploads')}}/{{ $product->fimg->url }}" alt="{{ $product->title }}" width="730" height="420">
                            </div>
                            @if(isset($product->images))
                                @foreach($product->images as $image)
                                    <div class="prev-slide">
                                        <img src="{{ asset('uploads')}}/{{ $image->url }}" alt="{{ $product->title}}">
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <!-- end /.item--preview-slider -->

                        <div class="item__preview-thumb">
                            <div class="prev-thumb">
                                <div class="thumb-slider">
                                    <div class="item-thumb">
                                        <img src="{{ asset('uploads')}}/{{ $image->url }}" alt="{{ $product->title }}">
                                    </div>
                                    @if(isset($images))
                                        @foreach($images as $image)
                                            <div class="item-thumb">
                                                <img src="{{ asset('uploads')}}/{{ $image->url }}" alt="{{ $product->title }}">
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <!-- end /.thumb-slider -->

                                <div class="prev-nav thumb-nav">
                                    <span class="lnr nav-left lnr-arrow-left"></span>
                                    <span class="lnr nav-right lnr-arrow-right"></span>
                                </div>
                                <!-- end /.prev-nav -->
                            </div>

                            <!-- end /.item__action -->
                        </div>
                        <!-- end /.item__preview-thumb-->


                    </div>
                    <!-- end /.item-preview-->

                    <div class="item-info">
                        <div class="item-navigation">
                            <ul class="nav nav-tabs">
                                <li>
                                    <a href="#product-details" class="active" aria-controls="product-details" role="tab" data-toggle="tab">Ürün Detayı</a>
                                </li>
                                <li>
                                    <a href="#product-review" aria-controls="product-review" role="tab" data-toggle="tab">Geri Bildirim
                                        {{--<span>( {{ count($comments) }})</span>--}}
                                    </a>
                                </li>
                                <li>
                                    <a href="#product-faq" aria-controls="product-faq" role="tab" data-toggle="tab">SSS</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.item-navigation -->

                        <div class="tab-content">
                            <div class="fade show tab-pane product-tab active" id="product-details">
                                <div class="tab-content-wrapper">
                                    {!! $product->content !!}
                                </div>
                            </div>
                            <!-- end /.tab-content -->

                            <div class="fade tab-pane product-tab" id="product-review">
                                <div class="thread thread_review">
                                    <ul class="media-list thread-list">
                                        {{--@if($comments)--}}
                                            {{--@foreach($comments as $comment)--}}
                                                {{--<li class="single-thread">--}}
                                                    {{--<div class="media">--}}
                                                        {{--<div class="media-left">--}}
                                                            {{--<a href="#">--}}
                                                                {{--<img class="media-object" src="{{ base_url('public/home') }}/images/m1.png" alt="Commentator Avatar">--}}
                                                            {{--</a>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="media-body">--}}
                                                            {{--<div class="clearfix">--}}
                                                                {{--<div class="pull-left">--}}
                                                                    {{--<div class="media-heading">--}}
                                                                        {{--<a href="author.html">--}}
                                                                            {{--<h4>{{ $comment->user_firstname }}</h4>--}}
                                                                        {{--</a>--}}
                                                                        {{--<span>9 Hours Ago</span>--}}
                                                                    {{--</div>--}}
                                                                    {{--<div class="rating product--rating">--}}
                                                                        {{--<ul>--}}
                                                                            {{--<li>--}}
                                                                                {{--<span class="fa fa-star"></span>--}}
                                                                            {{--</li>--}}
                                                                            {{--<li>--}}
                                                                                {{--<span class="fa fa-star"></span>--}}
                                                                            {{--</li>--}}
                                                                            {{--<li>--}}
                                                                                {{--<span class="fa fa-star"></span>--}}
                                                                            {{--</li>--}}
                                                                            {{--<li>--}}
                                                                                {{--<span class="fa fa-star"></span>--}}
                                                                            {{--</li>--}}
                                                                            {{--<li>--}}
                                                                                {{--<span class="fa fa-star"></span>--}}
                                                                            {{--</li>--}}
                                                                        {{--</ul>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                                {{--<a href="#" class="reply-link">Cevapla</a>--}}
                                                            {{--</div>--}}
                                                            {{--<p>{{ $comment->product_comment_content }}</p>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}

                                                    {{--<!-- comment reply -->--}}
                                                    {{--<div class="media depth-2 reply-comment">--}}
                                                        {{--<div class="media-left">--}}
                                                            {{--<a href="#">--}}
                                                                {{--<img class="media-object" src="{{ base_url('public/home') }}/images/m2.png" alt="Commentator Avatar">--}}
                                                            {{--</a>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="media-body">--}}
                                                            {{--<form action="#" class="comment-reply-form">--}}
                                                                {{--<textarea class="bla" name="reply-comment" placeholder="Yorum Yazabilirsiniz"></textarea>--}}
                                                                {{--<button class="btn btn--md btn--round">Post Comment</button>--}}
                                                            {{--</form>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<!-- comment reply -->--}}
                                                {{--</li>--}}
                                            {{--@endforeach--}}
                                        {{--@else--}}
                                            {{--<li class="single-thread">--}}
                                                {{--<div class="media">--}}

                                                    {{--<div class="media-body">--}}
                                                        {{--<div class="clearfix">--}}
                                                            {{--<div class="pull-left">--}}
                                                                {{--<div class="media-heading">--}}
                                                                    {{--<h4>Bu ürüne hiç geri bildirim yapılmamış.</h4>--}}
                                                                {{--</div>--}}

                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                    {{--@endif--}}
                                    <!-- end single comment thread /.comment-->


                                    </ul>
                                    <!-- end /.media-list -->

                                    <div class="pagination-area pagination-area2">
                                        <nav class="navigation pagination " role="navigation">
                                            <div class="nav-links">
<!--                                                --><?php
//                                                echo ci()->pagination->create_links();
//                                                ?>
                                            </div>
                                        </nav>
                                    </div>
                                    <!-- end /.comment pagination area -->
                                </div>
                                <!-- end /.comments -->
                            </div>
                            <!-- end /.product-comment -->

                            <div class="fade tab-pane product-tab" id="product-faq">
                                <div class="tab-content-wrapper">
                                    <div class="panel-group accordion" role="tablist" id="accordion">
                                        <div class="panel accordion__single" id="panel-one">
                                            <div class="single_acco_title">
                                                <h4>
                                                    <a data-toggle="collapse" href="#collapse1" class="collapsed" aria-expanded="false" data-target="#collapse1" aria-controls="collapse1">
                                                        <span>How to write the changelog for theme updates?</span>
                                                        <i class="lnr lnr-chevron-down indicator"></i>
                                                    </a>
                                                </h4>
                                            </div>

                                            <div id="collapse1" class="panel-collapse collapse" aria-labelledby="panel-one" data-parent="#accordion">
                                                <div class="panel-body">
                                                    <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                        sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                                                        interdum mollis. Aliquip placeat salvia cillum iphone. Seitan aliquip
                                                        quis cardigan american apparel, butcher. Nunc placerat mi id nisi
                                                        interdum mollis. Praesent pharetra, justo ut sceleris que the mattis,
                                                        leo quam aliquet congue placerat mi id nisi interdum mollis. Aliquip
                                                        placeat salvia cillum iphone. Seitan aliquip quis cardigan american
                                                        apparel, butcher .</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end /.accordion__single -->
                                        <div class="panel accordion__single" id="panel-two">
                                            <div class="single_acco_title">
                                                <h4>
                                                    <a data-toggle="collapse" href="#collapse2" class="collapsed" aria-expanded="false" data-target="#collapse2" aria-controls="collapse2">
                                                        <span>Why do I need to login to purchase an item on DigiPro?</span>
                                                        <i class="lnr lnr-chevron-down indicator"></i>
                                                    </a>
                                                </h4>
                                            </div>

                                            <div id="collapse2" class="panel-collapse collapse" aria-labelledby="panel-two" data-parent="#accordion">
                                                <div class="panel-body">
                                                    <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                        sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                                                        interdum mollis. Aliquip placeat salvia cillum iphone. Seitan aliquip
                                                        quis cardigan american apparel, butcher. Nunc placerat mi id nisi
                                                        interdum mollis. Praesent pharetra, justo ut sceleris que the mattis,
                                                        leo quam aliquet congue placerat mi id nisi interdum mollis. Aliquip
                                                        placeat salvia cillum iphone. Seitan aliquip quis cardigan american
                                                        apparel, butcher .</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end /.accordion__single -->
                                        <div class="panel accordion__single" id="panel-three">
                                            <div class="single_acco_title">
                                                <h4>
                                                    <a data-toggle="collapse" href="#collapse3" class="collapsed" aria-expanded="false" data-target="#collapse3" aria-controls="collapse3">
                                                        <span>How to create an account on DigiPro?</span>
                                                        <i class="lnr lnr-chevron-down indicator"></i>
                                                    </a>
                                                </h4>
                                            </div>

                                            <div id="collapse3" class="panel-collapse collapse" aria-labelledby="panel-three" data-parent="#accordion">
                                                <div class="panel-body">
                                                    <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                        sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                                                        interdum mollis. Aliquip placeat salvia cillum iphone. Seitan aliquip
                                                        quis cardigan american apparel, butcher. Nunc placerat mi id nisi
                                                        interdum mollis. Praesent pharetra, justo ut sceleris que the mattis,
                                                        leo quam aliquet congue placerat mi id nisi interdum mollis. Aliquip
                                                        placeat salvia cillum iphone. Seitan aliquip quis cardigan american
                                                        apparel, butcher .</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end /.accordion__single -->
                                        <div class="panel accordion__single" id="panel-four">
                                            <div class="single_acco_title">
                                                <h4>
                                                    <a data-toggle="collapse" href="#collapse4" class="collapsed" aria-expanded="false" data-target="#collapse4" aria-controls="collapse4">
                                                        <span>How to write the changelog for theme updates?</span>
                                                        <i class="lnr lnr-chevron-down indicator"></i>
                                                    </a>
                                                </h4>
                                            </div>

                                            <div id="collapse4" class="panel-collapse collapse" aria-labelledby="panel-four" data-parent="#accordion">
                                                <div class="panel-body">
                                                    <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                        sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                                                        interdum mollis. Aliquip placeat salvia cillum iphone. Seitan aliquip
                                                        quis cardigan american apparel, butcher. Nunc placerat mi id nisi
                                                        interdum mollis. Praesent pharetra, justo ut sceleris que the mattis,
                                                        leo quam aliquet congue placerat mi id nisi interdum mollis. Aliquip
                                                        placeat salvia cillum iphone. Seitan aliquip quis cardigan american
                                                        apparel, butcher .</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end /.accordion__single -->
                                        <div class="panel accordion__single" id="panel-five">
                                            <div class="single_acco_title">
                                                <h4>
                                                    <a data-toggle="collapse" href="#collapse5" class="collapsed" aria-expanded="false" data-target="#collapse5" aria-controls="collapse5">
                                                        <span>Do you recommend using a download manager software?</span>
                                                        <i class="lnr lnr-chevron-down indicator"></i>
                                                    </a>
                                                </h4>
                                            </div>

                                            <div id="collapse5" class="panel-collapse collapse" aria-labelledby="panel-five" data-parent="#accordion">
                                                <div class="panel-body">
                                                    <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                        sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                                                        interdum mollis. Aliquip placeat salvia cillum iphone. Seitan aliquip
                                                        quis cardigan american apparel, butcher. Nunc placerat mi id nisi
                                                        interdum mollis. Praesent pharetra, justo ut sceleris que the mattis,
                                                        leo quam aliquet congue placerat mi id nisi interdum mollis. Aliquip
                                                        placeat salvia cillum iphone. Seitan aliquip quis cardigan american
                                                        apparel, butcher .</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end /.accordion__single -->
                                        <div class="panel accordion__single" id="panel-six">
                                            <div class="single_acco_title">
                                                <h4>
                                                    <a data-toggle="collapse" href="#collapse6" class="collapsed" aria-expanded="false" data-target="#collapse6" aria-controls="collapse6">
                                                        <span>How to purchase an item on DigiPro?</span>
                                                        <i class="lnr lnr-chevron-down indicator"></i>
                                                    </a>
                                                </h4>
                                            </div>

                                            <div id="collapse6" class="panel-collapse collapse" aria-labelledby="panel-six" data-parent="#accordion">
                                                <div class="panel-body">
                                                    <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                        sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                                                        interdum mollis. Aliquip placeat salvia cillum iphone. Seitan aliquip
                                                        quis cardigan american apparel, butcher. Nunc placerat mi id nisi
                                                        interdum mollis. Praesent pharetra, justo ut sceleris que the mattis,
                                                        leo quam aliquet congue placerat mi id nisi interdum mollis. Aliquip
                                                        placeat salvia cillum iphone. Seitan aliquip quis cardigan american
                                                        apparel, butcher .</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end /.accordion__single -->
                                    </div>
                                    <!-- end /.accordion -->
                                </div>

                            </div>
                            <!-- end /.product-faq -->
                        </div>
                        <!-- end /.tab-content -->
                    </div>
                    <!-- end /.item-info -->
                </div>
                <!-- end /.col-md-8 -->

                <div class="col-lg-4">
                    <aside class="sidebar sidebar--single-product">
                        <div class="sidebar-card card-pricing">
                            <div class="price">
                                <h1>
                                    <sup>₺</sup>{{ $product->price }}</h1>
                            </div>
                            <!-- end /.pricing-options -->

                            <div class="purchase-button">
                                <a href="#" class="btn btn--lg btn--round">Satın Al</a>
                            </div>
                            <!-- end /.purchase-button -->
                        </div>
                        <!-- end /.sidebar--card -->

                        <div class="sidebar-card card--metadata">
                            <ul class="data">
                                <li>
                                    <p>
                                        <span class="lnr lnr-cart pcolor"></span>Toplam Satış</p>
                                    <span>426</span>
                                </li>
                                <li>
                                    <p>
                                        <span class="lnr lnr-bubble mcolor3"></span>Toplam Yorum</p>
                                    {{--<span>{{ count($comments) }}</span>--}}
                                </li>
                            </ul>
                            <!-- end /.rating -->
                        </div>
                        <!-- end /.sidebar-card -->

                        <div class="sidebar-card card--product-infos">
                            <div class="card-title">
                                <h4>Ürün Hakkında</h4>
                            </div>

                            {{--<ul class="infos">--}}
                                {{--<li>--}}
                                    {{--<p class="data-label">Yayın Tarihi</p>--}}
                                    {{--<p class="info">{{ (new DateTime($product[0]->product_create_date))->format('d.m.Y') }}</p>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<p class="data-label">Kategori</p>--}}
                                    {{--<p class="info">{{ getCategoryName($product[0]->category_id) }}</p>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<p class="data-label">Etiketler</p>--}}
                                    {{--<p class="info">--}}
                                        {{--{{ $product[0]->product_tag }}--}}
                                    {{--</p>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        </div>
                        <!-- end /.aside -->
                    </aside>
                    <!-- end /.aside -->
                </div>
                <!-- end /.col-md-4 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
@endif
<!--===========================================
    END SINGLE PRODUCT DESCRIPTION AREA
===============================================-->
@endsection('content')
