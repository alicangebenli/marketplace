@extends('layouts.app')
@section('content')
<!--================================
    START BREADCRUMB AREA
=================================-->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1 class="page-title">Ayarlar</h1>
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

                        <div class="col-lg-12">

                                <div class="information_module">
                                    <a class="toggle_title" href="#collapse2" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                        <h4>Bilgileriniz
                                            <span class="lnr lnr-chevron-down"></span>
                                        </h4>
                                    </a>

                                    <div class="information__set toggle_module collapse show" id="collapse2">
                                        <div class="information_wrapper form--fields">
                                            <form action="{{ route('user.update_setting') }}" class="setting_form" method="post">
                                                {{ csrf_field() }}
                                                <div class="form-group{{ $errors->has("realname") ? ' has-error' : '' }}">
                                                    <label for="realname">Adınız & Soyadınız
                                                        <sup>*</sup>
                                                    </label>
                                                    <input id="realname" name="realname" type="text" class="text_field" placeholder="First Name" value="{{Auth::user()->realname}}">
                                                    @if ($errors->has("realname"))
                                                        <span class="help-block">
                                                        <strong>{{ $errors->first("realname") }}</strong>
                                                    </span>
                                                    @endif
                                                </div>

                                                <div class="form-group">
                                                    <label for="usrname">Kullanıcı Adı
                                                        <sup>*</sup>
                                                    </label>
                                                    <input type="text" class="text_field" value="{{Auth::user()->name}}" disabled="disabled">
                                                    <p>Mağaza Adresiniz:
                                                        <span>{{Auth::user()->name}}</span>
                                                    </p>
                                                </div>

                                                <div class="form-group">
                                                    <label for="email">Mail Adresi
                                                        <sup>*</sup>
                                                    </label>
                                                    <input id="email" type="text" class="text_field" placeholder="Email address" value="{{Auth::user()->email}}" disabled="disabled">
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="password">Şifre
                                                                <sup>*</sup>
                                                            </label>
                                                            <input id="password" type="password" class="text_field" placeholder="Şifre">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="password_confirmation">Şifre Tekrarı
                                                                <sup>*</sup>
                                                            </label>
                                                            <input id="password_confirmation" name="password_confirmation" type="password" class="text_field" placeholder="Şifre Tekrarı">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="authbio">Hakkınızda</label>
                                                    <textarea name="about" class="text_field" placeholder="Kendiniz veya hesabınız hakkında kısa bir özet">
                                                        {{ Auth::user()->about }}
                                                    </textarea>
                                                </div>

                                                <div class="dashboard_setting_btn">
                                                    <button type="submit" class="btn btn--round btn--md">Kaydet</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- end /.information_wrapper -->
                                    </div>
                                    <!-- end /.information__set -->
                                </div>
                            <!-- end /.information_module -->

                        </div>
                        <!-- end /.col-md-6 -->

                </div>
                <!-- end /.row -->

            <!-- end /form -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end /.dashboard_menu_area -->
</section>
<!--================================
        END DASHBOARD AREA
=================================-->
@endsection