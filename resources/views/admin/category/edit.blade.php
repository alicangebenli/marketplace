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
                            <form role="form" action="{{ route('admin.category.update',['id'=>$data->this_category->id]) }}" method="post" id="categoryupdate">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <input type="hidden" value="{{ $data->this_category->id }}">
                                <div class="form-group">
                                    <label>Üst Kategori</label>
                                    <select class="form-control" name="rel">
                                        <option  value="0">Kategori Yok</option>
                                        @if($data->categories)
                                            @foreach($data->categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                            @endforeach
                                        @endif
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label>Kategori Başlık</label>
                                    <input class="form-control" name="title" value="{{ $data->this_category->title }}">
                                </div>
                                <div class="form-group">
                                    <label>Kategori Açıklama</label>
                                    <textarea name="content" class="editor">{{ $data->this_category->content }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-default" >Kaydet</button>
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