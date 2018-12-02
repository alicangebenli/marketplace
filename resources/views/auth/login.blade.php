@extends('layouts.app')
@section('body')
    <body class="home-3">
    @endsection
@section('content')
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
                                <a href="">Giriş</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Giriş</h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <section class="login_area section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="cardify login">
                        <div class="login--header">
                            <h3>Hoş Geldiniz</h3>
                        </div>
                        <div class="login--form">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" >E-Mail Address</label>
                                <input id="email" type="email" class="text_field" name="email" value="{{ old('email') }}" placeholder="Email adresinizi giriniz..." required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Password</label>

                                <input id="password" type="password" class="text_field" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button class="btn btn--md btn--round" type="submit">Giriş</button>
                            <div class="login_assist">
                                <p class="recover"><a href="{{ route('password.request') }}">Forgot Your Password?</a> </p>
                            </div>
                        </div>
                    </form>
                        </div>
                    </div>
                </div>
                <!-- end .col-md-6 -->
            </div>
            <!-- end .row -->
        </div>
        <!-- end .container -->
    </section>
@endsection
