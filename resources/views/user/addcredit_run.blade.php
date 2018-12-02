@extends('layouts.app')
@section('content')
<body class="dashboard-add-credit">

<!--================================
    START BREADCRUMB AREA
=================================-->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1 class="page-title">Kredi Ekle</h1>
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
            <form action="#" name="add_credit_form">
                <div class="row">
                    <div class="col-md-12">
                        <div class="credit_modules">
                            <!-- Ödeme formunun açılması için gereken HTML kodlar / Başlangıç -->
                            <script src="https://www.paytr.com/js/iframeResizer.min.js"></script>
                            <iframe src="https://www.paytr.com/odeme/guvenli/{{ $token }}" id="paytriframe" frameborder="0" scrolling="no" style="width: 100%;"></iframe>
                            <script>iFrameResize({},'#paytriframe');</script>
                            <!-- Ödeme formunun açılması için gereken HTML kodlar / Bitiş -->
                        </div>
                        <!-- end /.credit_modules -->
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->
            </form>
            <!-- end /.add_credit_form -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end /.dashboard_menu_area -->
</section>
<!--================================
        END DASHBOARD AREA
=================================-->
@endsection
