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
                                <th>ID</th>
                                <th>Başlık</th>
                                <th>Fiyat</th>
                                <th>Kategori</th>
                                <th>Oluşturulma Tarihi</th>
                                <th>Güncellenme Tarihi</th>
                                <th>#</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($products)
                            @foreach($products as $product)
                            <tr class="odd gradeX">
                                <td>{{ $product->id}}</td>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->tag }}</td>
                                <td>{{ $product->created_at->diffForHumans() }}</td>
                                <td>{{ $product->updated_at->diffForHumans()     }}</td>
                                <td>
                                    <a href="{{ route('admin.product.edit',['id' => $product->id] ) }}" type="button" class="btn btn-primary">Düzenle</a>
                                    <a href="{{ route('admin.product.destroy',["id"=>$product->id]) }}" type="button" class="btn btn-danger" data-method="delete" data-confirm="Are you sure?">SİL</a>
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



