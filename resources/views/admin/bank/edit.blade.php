@extends('admin.layouts.app')

@section('content')
    <br><br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $data->title }}
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" action="{{ route('admin.bank.update',['id'=>$data->bank->id]) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="form-group">
                                    <label>Banka Adı</label>
                                    <input class="form-control" name="name" value="{{ $data->bank->name }}">
                                </div>
                                <div class="form-group">
                                    <label>Banka İban</label>
                                    <input class="form-control" name="iban" value="{{ $data->bank->iban }}">
                                </div>
                                <div class="form-group">
                                    <label>Banka Hesap Adı</label>
                                    <input class="form-control" name="account_name" value="{{ $data->bank->account_name }}">
                                </div>
                                <div class="form-group">
                                    <label>Banka Hesap Numarası</label>
                                    <input class="form-control" name="account_number" value="{{ $data->bank->account_number }}">
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