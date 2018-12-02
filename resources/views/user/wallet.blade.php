@extends('layouts.app')
@section('body')
    <body class="dashboard-page has_chart">
    @endsection
@section('content')

    <!--================================
    START BREADCRUMB AREA
=================================-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">Cüzdanım</h1>
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


        <div class="dashboard_contents">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="author-info author-info--dashboard mcolorbg4">
                            <p>Satın Aldıklarım</p>
                            <h3>{{ $total_order }}</h3>
                        </div>
                    </div>
                    <!-- end /.col-md-3 -->

                    <!-- end /.col-md-3 -->

                    <div class="col-lg-4 col-md-6">
                        <div class="author-info author-info--dashboard mcolorbg3">
                            <p>Toplam Satın Aldıklarım</p>
                            <h3>₺ {{ $total_price }}</h3>
                        </div>
                    </div>
                    <!-- end /.col-md-3 -->

                    <div class="col-lg-4 col-md-6">
                        <div class="author-info author-info--dashboard mcolorbg1">
                            <p>Bakiyem</p>
                            <h3>₺{{ $balance }}</h3>
                        </div>
                    </div>
                    <!-- end /.col-md-3 -->
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