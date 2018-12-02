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
                        {{--{{ $title }}--}}
                        {{--{!! dd($product->images->first()->url) !!}--}}
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                @if(true)
                                    <div class="row" style="padding: 1%">
                                        <div class="col-md-12" style="border: 2px dashed #3c763d !important;">
                                            <div class="col-md-12" style="padding: 1%"><div class="alert alert-success" role="alert">Kapak Resmi</div></div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <br>
                                                    <div class="image">
                                                        <img id="slah" src="{{ asset('uploads/') }}/{{$product_first_image_url}}" alt="..." class="img-thumbnail" style="width: 200px !important;height: 150px !important;">
                                                    </div>

                                                    <div class="upload-btn-wrapper">
                                                        <button class="btn btn-success btn-xs">Gözat</button>
                                                        <form action="{{route('admin.product.fimageupload',['id'=>$product->id]) }}" method="post" id="productupdatefirstimageuploadform">
                                                            <input type="file" name="image_first" id="productupdatefirstimageupload" onchange="readFirstURL(this)" />
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="padding: 1%">
                                        <div class="col-md-12" style="border: 2px dashed #3c763d !important;">
                                            <div class="col-md-12">
                                                <div class="col-md-12" style="padding: 1%"><div class="alert alert-success" role="alert">Diğer Resimler</div></div>
                                                <div class="upload-btn-wrapper" style="padding-left: 1%">
                                                    <button class="btn btn-success btn-md">Yeni Resim</button>
                                                    <form action="{{ route('admin.product.oimageupload',['id' => $product->id ]) }}" method="post" id="productupdateimageuploadform">
                                                        {{ csrf_field() }}
                                                        <input type="file" name="product_image" id="productupdateimageupload"/>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div id="form-group-file-image-list" data-url="{{ route('admin.product.imagelist',['id'=> $product->id]) }}"  data-href="{{ route('admin.product.edit',['id'=> $product->id ]) }}">
                                                    @include('admin/product/render/image_list')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form role="form" action="{{ route('admin.product.update',['id'=> $product->id ]) }}" method="post">
                                        <div class="form-group">
                                            <label>Başlık</label>
                                            <input class="form-control" type="text" name="product_title" value="{{ $product->title }}">
                                        </div>
                                        <div class="form-group">
                                            <label>İçerik</label>
                                            <textarea name="product_content">{{ $product->content }}</textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Fiyat</label>
                                                    <input class="form-control" type="number" name="product_price" value="{{ $product->price }}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Kategori</label>
                                                <select class="form-control" name="category_id">
                                                    <option  value="0">Kategori Yok</option>
                                                    {{--@foreach($categories as $row)--}}
                                                        {{--<option  value="{{ $row->category_id }}"--}}
                                                                 {{--@if($row->category_id == $product[0]->category_id)--}}
                                                                 {{--selected="selected"--}}
                                                                {{--@endif--}}
                                                        {{--> {{ $row->category_title }}</option>--}}
                                                    {{--@endforeach--}}
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Etiketler</label>
                                                    <input class="form-control" type="text" name="product_tag" value="{{ $product->tag }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-default">Kaydet</button>
                                            </div>

                                        </div>

                                    </form>
                                @endif
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




