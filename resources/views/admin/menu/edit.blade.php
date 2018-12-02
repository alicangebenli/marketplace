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
                            <form role="form" action="{{ route('admin.menu.update',['id'=>$menu->id]) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                    <label>Başlık</label>
                                    <input class="form-control" name="title" value="{{ $menu->title }}">
                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('title') }}</strong>
                                            </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                                    <label>Link</label>
                                    <input class="form-control" name="url" value="{{ $menu->url }}">
                                    @if ($errors->has('url'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('url') }}</strong>
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




