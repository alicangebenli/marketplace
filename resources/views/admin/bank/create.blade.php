@extends('admin.layouts.app')

@section('content')
<br><br>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                {{ $data->title  }}

            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form" action="{{ route('admin.bank.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label>Banka Adı</label>
                                <input class="form-control" name="name" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('iban') ? ' has-error' : '' }}">
                                <label>Banka İban</label>
                                <input class="form-control" name="iban" value="{{ old('iban') }}">
                                @if ($errors->has('iban'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('iban') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('account_name') ? ' has-error' : '' }}">
                                <label>Banka Hesap Adı</label>
                                <input class="form-control" name="account_name" value="{{ old('account_name') }}">
                                @if ($errors->has('account_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('account_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('account_number') ? ' has-error' : '' }}">
                                <label>Banka Hesap Numarası</label>
                                <input class="form-control" name="account_number" value="{{ old('account_number') }}">
                                @if ($errors->has('account_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('account_number') }}</strong>
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