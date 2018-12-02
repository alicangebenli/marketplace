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
                    <table width="100%" class="table table-striped table-bordered table-hover" id="menu-table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Başlık</th>
                            <th>Url</th>
                            <th>#</th>
                        </tr>
                        </thead>
                        <tbody>

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
            $('#menu-table').DataTable({
                processing: false,
                serverSide: true,
                ajax: '{{ route('admin.data.menu') }}',
                "columns": [
                    { "data": "id" },
                    { "data": "title" },
                    { "data": "url" },
                    { "data": "action"}
                ],
                "order": [[ 0, "desc" ]]
            });
        });
    </script>
@endsection
