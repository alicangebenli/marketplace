@extends('layouts.app')
@section('body')
    <body class="dashboard-statement" data-status="{{Session::get("status")}}">
@endsection
@section('content')
    <!--================================
    START BREADCRUMB AREA
=================================-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">Satın Aldıklarım</h1>
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
    <section class="dashboard-area">


        <div class="dashboard_contents dashboard_statement_area">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="statement_table table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Tarih</th>
                                    <th>Ürün ID</th>
                                    <th>Ürün Adı</th>
                                    <th>Durum</th>
                                    <th>Fiyat</th>
                                    <th>#</th>
                                </tr>
                                </thead>

                                <tbody>
                                @if(count($orders) > 0)
                                    @foreach($orders as $order)
                                        <tr>
                                            <td>{{ $order->created_at->format('d.m.Y') }}</td>
                                            <td>{{ $order->mid }}</td>
                                            <td class="detail">
                                                <a href="{{ route('home.product',['name'=>str_slug($order->product->title),'id'=>$order->product->id]) }}">{{ $order->product->title }}</a>
                                            </td>
                                            <td class="type">
                                                @if($order->status==1)
                                                <span class="sale">Teslim Edildi</span>
                                                    @else
                                                    <span class="purchase">Teslim Bekliyor</span>
                                                @endif
                                            </td>
                                            <td>{{ $order->price }}</td>
                                            <td class="action">
                                                <a href="invoice.html">İncele</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    @endif

                                </tbody>
                            </table>

                            <div class="pagination-area pagination-area2">
                                <nav class="navigation pagination " role="navigation">
                                    <div class="nav-links">
                                       {{ $orders->links() }}
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->
    </section>
    <!--================================
            END DASHBOARD AREA
    =================================-->
@endsection
