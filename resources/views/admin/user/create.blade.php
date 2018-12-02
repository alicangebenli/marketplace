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
                            <form role="form" action="{{ route('admin.user.store') }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Kullanıcı Adı</label>
                                    <input class="form-control{{ $errors->has('name') ? ' has-error' : '' }}" name="name" value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('realname') ? ' has-error' : '' }}">
                                    <label>Adı & Soyadı</label>
                                    <input class="form-control" name="realname" value="{{ old('realname') }}">
                                    @if ($errors->has('realname'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('realname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label>Email</label>
                                    <input class="form-control" name="email" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('balance') ? ' has-error' : '' }}">
                                    <label>Bakiye</label>
                                    <input class="form-control" name="balance" value="{{ old('balance') }}">
                                    @if ($errors->has('balance'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('balance') }}</strong>
                                            </span>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-default">Kaydet</button>
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
@endsection