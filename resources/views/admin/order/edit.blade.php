@extends('admin.layouts.app')

@section('content')
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $title }}
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" action="{{ route('admin.order.update',['id'=>$order->id]) }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Sipariş Id</label>
                                            <input class="form-control" value="{{ $order->mid }}" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Ürün Adı</label>
                                            <input class="form-control" value="{{ ($order->product != null && isset($order->product->title)) ? $order->product->title : "Ürün Silinmiş!" }}" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                                <label>Fiyat</label>
                                                <input class="form-control" value="{{ $order->price }} TL" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                                            <label>Durum</label>
                                            <select name="status" class="form-control">

                                                <option value="0" {{ ($order->status == 0) ? "selected" : "" }}>Teslim Bekliyor</option>
                                                <option value="1" {{ ($order->status == 1) ? "selected" : "" }}>Teslim Edildi</option>
                                                <option value="2" {{ ($order->status == 2) ? "selected" : "" }}>İade Edildi</option>

                                            </select>

                                            @if ($errors->has('status'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('status') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Teslim</label>
                                    <textarea name="answer" class="editor">{{ $order->answer }}</textarea>
                                    @if ($errors->has('answer'))
                                            <span class="help-block">
                                                    <strong>{{ $errors->first('answer') }}</strong>
                                            </span>
                                    @endif
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-default">Kaydet</button>
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




