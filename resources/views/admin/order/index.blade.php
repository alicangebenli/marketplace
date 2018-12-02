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
                    <table width="100%" class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Sipariş Id</th>
                            <th>Fiyat</th>
                            <th>Sipariş Veren</th>
                            <th>Ürün</th>
                            <th>Tarih</th>
                            <th>Durum</th>
                            <th>#</th>
                        </tr>
                        </thead>
                        <tbody>
                            
                            @if(count($orders) > 0)
                                @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->mid }} </td>
                                    <td>{{ $order->price }}</td>
                                    <td>{{ ( $order->user != null ) ? $order->user->realname : "Üye Silinmiş!" }}</td>
                                    <td>{{ ( $order->product !=null) ? $order->product->title : "Ürün Silinmiş!" }}</td>
                                    <td>{{ $order->created_at->format("d.m.Y") }}</td>
                                    <td>
                                        @if($order->status == 0)
                                            <span class="label label-info">Teslim Bekliyor</span>
                                        @elseif($order->status == 1)
                                            <span class="label label-success">Teslim Edildi</span>
                                        @elseif($order->status == 2)
                                            <span class="label label-warning">İade Edildi</span>
                                        @endif
                                    </td>
                                    <td><a class="btn btn-success" href="{{ route('admin.order.edit',['id' => $order->id]) }}">Düzenle</a></td>
                                </tr>
                                @endforeach
                            @endif
                        </tbody>           
                    </table>
                    <center>{{ $orders->links() }}</center>
                </div>
                <!-- /.panel-body -->

            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection

