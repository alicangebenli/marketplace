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
                            <div class="modules__title">
                                <h3>Kredi miktarı</h3>
                            </div>

                            <div class="modules__content">
                                <p class="subtitle">Miktar Giriniz</p>
                                <div class="custom_amount">
                                    <div class="input-group">
                                        <span class="input-group-addon">₺</span>
                                        <input type="text" id="rlicense" class="text_field" placeholder="Örn: 250">
                                    </div>
                                </div>

                            </div>
                            <!-- end /.modules__content -->
                        </div>
                        <!-- end /.credit_modules -->
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->

                <div class="credit_modules">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="modules__title">
                                <h3>Ödeme Yöntemi ve Onay</h3>
                            </div>

                            <div class="modules__content">

                                <ul class="payment_method">
                                    <li>
                                        <div class="custom-radio custom_radio--big">
                                            <input type="radio" id="opt1" class="" name="card">
                                            <label for="opt1">
                                                <img src="{{ asset('home-theme')}}/images/mas.jpg" alt="payment cards">
                                                <span class="circle"></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-radio custom_radio--big">
                                            <input type="radio" id="opt2" class="" name="card">
                                            <label for="opt2">
                                                <img src="{{ asset('home-theme')}}/images/vis.jpg" alt="payment cards">
                                                <span class="circle"></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-radio custom_radio--big">
                                            <input type="radio" id="opt3" class="" name="card">
                                            <label for="opt3">
                                                <img src="{{ asset('home-theme')}}/images/ppl.jpg" alt="payment cards">
                                                <span class="circle"></span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="custom-radio custom_radio--big">
                                            <input type="radio" id="opt5" class="" name="card">
                                            <label for="opt5">
                                                <img src="{{ asset('home-theme')}}/images/dis.jpg" alt="payment cards">
                                                <span class="circle"></span>
                                            </label>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="custom-radio custom_radio--big">
                                            <input type="radio" id="opt6" class="" name="card">
                                            <label for="opt6">
                                                <img src="{{ asset('home-theme')}}/images/ami.jpg" alt="payment cards">
                                                <span class="circle"></span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.modules__content -->
                        </div>
                        <!-- end /.col-md-12 -->
                    </div>
                    <!-- end /.row -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="payment_info modules__content">
                                <div class="form-group">
                                    <label for="card_number">Kart Numarası</label>
                                    <input id="card_number" type="text" class="text_field" placeholder="Kart numaranızı buraya giriniz...">
                                </div>

                                <!-- lebel for date selection -->
                                <label for="name">Son Kullanma Tarihi</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="select-wrap select-wrap2">
                                                <select name="months" id="name">
                                                    <option value="">Ay</option>
                                                    <option value="jan">Ocak</option>
                                                    <option value="feb">Şubat</option>
                                                    <option value="mar">Mart</option>
                                                    <option value="apr">Nisan</option>
                                                    <option value="may">Mayıs</option>
                                                    <option value="jun">Haziran</option>
                                                    <option value="jul">Temmuz</option>
                                                    <option value="aug">Ağustos</option>
                                                    <option value="sep">Eylül</option>
                                                    <option value="oct">Ekim</option>
                                                    <option value="nov">Kasım</option>
                                                    <option value="dec">Aralık</option>
                                                </select>
                                                <span class="lnr lnr-chevron-down"></span>
                                            </div>
                                            <!-- end /.select-wrap -->
                                        </div>
                                        <!-- end /.form-group -->
                                    </div>
                                    <!-- end /.col-md-6-->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="select-wrap select-wrap2">
                                                <select name="years" id="years">
                                                    <option value="">Yıl</option>
                                                    <option value="28">2028</option>
                                                    <option value="27">2027</option>
                                                    <option value="26">2026</option>
                                                    <option value="25">2025</option>
                                                    <option value="24">2024</option>
                                                    <option value="23">2023</option>
                                                    <option value="22">2022</option>
                                                    <option value="21">2021</option>
                                                    <option value="20">2020</option>
                                                    <option value="19">2019</option>
                                                    <option value="18">2018</option>
                                                    <option value="17">2017</option>
                                                </select>
                                                <span class="lnr lnr-chevron-down"></span>
                                            </div>
                                            <!-- end /.select-wrap -->
                                        </div>
                                        <!-- end /.form-group -->
                                    </div>
                                    <!-- end /.col-md-6-->
                                </div>
                                <!-- end /.row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cv_code">CVV Kodu</label>
                                            <input id="cv_code" type="text" class="text_field" placeholder="Kodu buraya girin...">
                                        </div>

                                        <button type="submit" class="btn btn--round btn--default">Kredi Ekle</button>
                                    </div>
                                </div>
                            </div>
                            <!-- end /.payment_info -->
                        </div>
                        <!-- end /.col-md-6 -->
                    </div>
                    <!-- end /.row -->
                </div>
                <!-- end /.credit_modules -->
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