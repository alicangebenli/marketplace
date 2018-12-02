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
                    <table width="100%" class="table table-striped table-bordered table-hover" id="user-table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Adı & Soyadı</th>
                            <th>Kullancı Adı</th>
                            <th>Email</th>
                            <th>Bakiye</th>
                            <th>Üyelik Tarihi</th>
                            <th>#</th>
                        </tr>
                        </thead>
                        <tbody>

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
    <script>
        $(function() {
            $('#user-table').DataTable({
                processing: false,
                serverSide: true,
                ajax: '{{ route('admin.data.user') }}',
                "columns": [
                    { "data": "id" },
                    { "data": "realname" },
                    { "data": "name" },
                    { "data": "email" },
                    { "data": "balance" },
                    { "data": "created_at" },
                    { "data": "action" }
                ],
                "order": [[ 0, "desc" ]]
            });
        });
    </script>
@endsection



