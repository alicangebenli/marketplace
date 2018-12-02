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
                        @if(count($data->banks) > 0)
                            @foreach($data->banks as $bank)
                                <tr class="odd gradeX" data-tritem="{{$bank->id}}">
                                    <td>{{ $bank->id }}</td>
                                    <td>{{ $bank->name }}</td>
                                    <td>{!! $bank->iban !!}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <a href="{{ route('admin.bank.edit',["id"=>$bank->id]) }}" type="button" class="btn btn-primary">Düzenle</a>
                                            </div>
                                            <div class="col-md-6">
                                                <form action="{{ route('admin.bank.destroy',["id"=>$bank->id]) }}" method="post" id="bankdelete">
                                                    {!! method_field('delete') !!}
                                                    {!! csrf_field() !!}
                                                    <button type="submit" class="btn btn-primary" onclick="event.preventDefault()" id="bankdeletebutton" data-item="{{ $bank->id }}"">Sil</button>
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