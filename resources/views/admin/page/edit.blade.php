@extends('admin.layouts.app')

@section('content')
    <style>
        .upload-btn-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
            margin-top: 2px;
        }

        .upload-btn-wrapper input[type=file] {
            font-size: 100px;
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
        }

    </style>

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
                            <form role="form" action="{{ route('admin.page.update',['page'=>$page->id]) }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                    <label>Başlık</label>
                                    <input class="form-control" name="title" value="{{ $page->title }}">
                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('title') }}</strong>
                                            </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                                    <label>İçerik</label>
                                    <textarea name="content">{{ $page->content }}</textarea>
                                    @if ($errors->has('content'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('content') }}</strong>
                                            </span>
                                    @endif
                                </div>
                                <!--
                                <div class="row">
                                    <div class="col-md-12"><a class="btn btn-success" onclick="NewFileInput()" id="newimage">YENİ RESİM</a></div>
                                    <div style="display: none" id="fileinput">0</div>
                                </div>

                                <br>
                                -->
                                <div class="row">
                                    <div class="col-md-2" id="form-file">
                                        <div class="form-group">
                                            <br>
                                            <div class="image">
                                                <img id="blah-0" src="{{ config('app.url').'/public/uploads/'.$page->image->url }}" alt="..." class="img-thumbnail" width="200" height="200">
                                            </div>

                                            <div class="upload-btn-wrapper">
                                                <button class="btn btn-success btn-xs">Gözat</button>
                                                <input type="file" name="image" onchange="readURL(this,0)"/>
                                            </div>
                                        </div>
                                    </div>
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




