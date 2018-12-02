<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('admin-theme') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- MetisMenu CSS -->
    <link href="{{ asset('admin-theme') }}/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('admin-theme') }}/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('admin-theme') }}/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('admin-theme') }}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin-theme') }}/css/custom.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <!-- CKEDITOR -->
    <script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
    <!-- FILE INPUT -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.8/css/fileinput.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
    <style>
        #wrapper{
            margin-bottom: 100px;
        }
    </style>
    <script>
        window.csrfToken = '{!!csrf_token()!!}';
    </script>
</head>
<body data-status="{{Session::get("status")}}">

<div id="wrapper">

    @include('admin/layouts/nav')

    <div id="page-wrapper">
        @yield('content')
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
    @include('admin/layouts/footer')
    <!-- Scripts -->
    @yield('scripts')
</body>
</html>
