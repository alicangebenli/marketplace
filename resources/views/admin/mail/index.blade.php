@extends('admin.layouts.app')

@section('content')
    <br><br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $title }}
                </div>
                <div class="panel-body">
                    <div class="row">

                        <div class="col-lg-12">
                            <span class="label label-success">Yazacağınız metin tüm kullanıcılara gönderilecektir.</span>
                            <br><br>
                            <form role="form" action="{{ route('admin.mail.send') }}" method="post">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
                                    <label>İçerik</label>
                                    <textarea name="text"></textarea>
                                    @if ($errors->has('text'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('text') }}</strong>
                                        </span>
                                    @endif
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-default">Gönder</button>
                                    </div>

                                </div>

                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

@endsection




