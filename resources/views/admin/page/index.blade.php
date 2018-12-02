@extends('admin.layouts.app')

@section('content')
    <br><br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $title }}
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
                        <thead>
                        <tr>
                            <th>Resim</th>
                            <th>Başlık</th>
                            <th>Slug</th>
                            <th>#</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($pages)
                            @foreach($pages as $page)
                                <tr class="odd gradeX" data-tritem="{{$page->id}}">
                                    <td><center><img src="{{ asset('uploads/thumb_'.$page->image->url) }}" width="100" height="100"></center></td>
                                    <td>{{ $page->title }}</td>
                                    <td>{!! $page->slug !!}</td>
                                    <td>
                                        <a href="{{ route('admin.page.edit',["id"=>$page->id]) }}" type="button" class="btn btn-primary">Düzenle</a>
                                        <a href="{{ route('admin.page.destroy',["id"=>$page->id]) }}" type="button" class="btn btn-danger" data-method="delete" data-confirm="Are you sure?">SİL</a>

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
