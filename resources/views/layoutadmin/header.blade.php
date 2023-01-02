<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title> </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('cork') }}/src/assets/img/favicon.ico"/>
    <link href="{{ asset('cork') }}/layouts/vertical-dark-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork') }}/layouts/vertical-dark-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="{{ asset('cork') }}/layouts/vertical-dark-menu/loader.js"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('cork') }}/src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork') }}/layouts/vertical-dark-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork') }}/layouts/vertical-dark-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('cork') }}/src/plugins/src/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('cork') }}/src/assets/css/light/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork') }}/src/assets/css/dark/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <!-- Bootstrap 3.3.7 -->
     {{-- <link rel="stylesheet" href="{{ asset('cork') }}/bower_components/bootstrap/dist/css/bootstrap.min.css"> --}}
        <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('cork') }}/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    

    @yield('css')
</head>
