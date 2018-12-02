@extends('admin.layouts.app')
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

                                <form role="form" action="{{ route('admin.product.store') }}" enctype="multipart/form-data" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group{{ $errors->has("title") ? ' has-error' : '' }}">
                                        <label>Başlık</label>
                                        <input class="form-control" type="text" name="title">
                                        @if ($errors->has("title"))
                                            <span class="help-block">
                                                <strong>{{ $errors->first("title") }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has("content") ? ' has-error' : '' }}">
                                        <label>İçerik</label>
                                        <textarea name="content"></textarea>
                                        @if ($errors->has("content"))
                                            <span class="help-block">
                                                <strong>{{ $errors->first("content") }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="row" style="padding: 1%">
                                        <div class="col-md-12" style="border: 2px dashed #3c763d !important;">
                                            <div class="col-md-12" style="padding: 1%"><div class="alert alert-success" role="alert">Kapak Resmi</div></div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <br>
                                                    <div class="image">
                                                        <img id="slah" src="http://via.placeholder.com/200x150" alt="..." class="img-thumbnail" style="width: 200px !important;height: 150px !important;">
                                                    </div>

                                                    <div class="upload-btn-wrapper">
                                                        <button class="btn btn-success btn-xs">Gözat</button>
                                                        <input type="file" name="image_first" onchange="readFirstURL(this)" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row" style="padding: 1%">
                                        <div class="col-md-12" style="border: 2px dashed #3c763d !important;">
                                            <div class="col-md-12" style="padding: 1%"><div class="alert alert-success" role="alert">Diğer Resimler</div></div>
                                            <div class="col-md-12"><a class="btn btn-success" onclick="NewFileInput()" id="newimage">YENİ RESİM</a></div>
                                            <div style="display: none" id="fileinput">0</div>
                                            <div class="col-md-12">
                                                <div id="form-group-file">

                                                    <div class="col-md-2" id="form-file">
                                                        <div class="form-group">
                                                            <br>
                                                            <div class="image">
                                                                <img id="blah-0" src="http://via.placeholder.com/200x150" alt="..." class="img-thumbnail" style="width: 200px !important;height: 150px !important;">
                                                            </div>

                                                            <div class="upload-btn-wrapper">
                                                                <button class="btn btn-success btn-xs">Gözat</button>
                                                                <input type="file" name="image[]" onchange="readURL(this,0)" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group{{ $errors->has("price") ? ' has-error' : '' }}">
                                                <label>Fiyat</label>
                                                <input class="form-control" type="number" name="price">
                                                @if ($errors->has("price"))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first("price") }}</strong>
                                                </span>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <label>Kategori</label>
                                            <div class="form-group{{ $errors->has("category_id") ? ' has-error' : '' }}">
                                                <select class="form-control" name="category_id">
                                                    <option  value="0">Kategori Yok</option>
                                                    @foreach($categories as $category)
                                                        <option  value="{{ $category->id }}"> {{ $category->title }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has("category_id"))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first("category_id") }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group{{ $errors->has("tag") ? ' has-error' : '' }}">
                                                <label>Etiketler</label>
                                                <input class="form-control" type="text" name="tag">
                                                @if ($errors->has("tag"))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first("tag") }}</strong>
                                                    </span>
                                                @endif
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




