@extends('admin.layouts.app')

@section('content')
    <br><br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $data->title }}
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Başlık</th>
                            <th>İçerik</th>
                            <th>#</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($data->categories) > 0)
                            @foreach($data->categories as $category)
                                <tr class="odd gradeX" data-tritem="{{$category->id}}">
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->title }}</td>
                                    <td>{!! $category->content !!}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <a href="{{ route('admin.category.edit',["id"=>$category->id]) }}" type="button" class="btn btn-primary">Düzenle</a>
                                            </div>
                                            <div class="col-md-6">
                                                <form action="{{ route('admin.category.destroy',["id"=>$category->id]) }}" method="post" id="categorydelete">
                                                    {!! method_field('delete') !!}
                                                    {!! csrf_field() !!}
                                                    <button type="submit" class="btn btn-primary" onclick="event.preventDefault()" id="categorydeletebutton" data-item="{{ $category->id }}" data-redirecturl="{{ route('admin.category.index') }}">Sil</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.panel-body -->

            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection
@section('scripts')
    <link rel="stylesheet" href="">
@endsection