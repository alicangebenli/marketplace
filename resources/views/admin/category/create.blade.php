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
                        <form role="form" action="{{ route('admin.category.store') }}" method="post" id="categorystore">
                            {{ csrf_field() }}
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
                                <input class="form-control" name="title">
                            </div>
                            <div class="form-group">
                                <label>Kategori Açıklama</label>
                                <textarea name="content" class="editor"></textarea>
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