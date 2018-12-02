@extends('admin.layouts.app')

@section('content')
        <br><br>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Genel Ayarlar
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" action="{{ route('admin.setting.update')}}" method="post">
                                    {{ csrf_field() }}
                                    @if($settings)
                                        @foreach($settings as $setting)
                                            <div class="col-md-6">
                                                <div class="form-group{{ $errors->has($setting->key) ? ' has-error' : '' }}">
                                                    <label>{{ $setting->title }}</label>
                                                    <input class="form-control" name="{{ $setting->key }}" id="site_url" value="{{ $setting->value }}">
                                                    @if ($errors->has($setting->key))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first($setting->key) }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                        @endforeach
                                    @endif

                                    <div class="col-md-12 text-left">
                                        <button type="submit" class="btn btn-default">Kaydet</button>
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





