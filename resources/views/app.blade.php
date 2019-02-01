<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">


    <!-- Libs CSS -->
    <link rel="stylesheet" href="dashboard_assets/assets/fonts/feather/feather.min.css">
    <link rel="stylesheet" href="dashboard_assets/assets/libs/highlight.js/styles/vs2015.css">
    <link rel="stylesheet" href="dashboard_assets/assets/libs/quill/dist/quill.core.css">

    <link rel="stylesheet" href="dashboard_assets/assets/libs/flatpickr/dist/flatpickr.min.css">

    <!-- Theme CSS -->

    <link rel="stylesheet" href="dashboard_assets/assets/css/theme.min.css" id="stylesheetLight">

    <link rel="stylesheet" href="dashboard_assets/assets/css/theme-dark.min.css" id="stylesheetDark">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>body { display: none; }</style>


    </head>

    <body>

       <div id="app"></div>

       <script src="{{asset('js/app.js')}}"></script>


    <!-- Libs JS -->
    <script src="/dashboard_assets/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/dashboard_assets/assets/libs/chart.js/dist/Chart.min.js"></script>
    <script src="/dashboard_assets/assets/libs/chart.js/Chart.extension.min.js"></script>
    <script src="/dashboard_assets/assets/libs/highlightjs/highlight.pack.min.js"></script>
    <script src="/dashboard_assets/assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="/dashboard_assets/assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="/dashboard_assets/assets/libs/list.js/dist/list.min.js"></script>
    <script src="/dashboard_assets/assets/libs/quill/dist/quill.min.js"></script>
    <script src="/dashboard_assets/assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="/dashboard_assets/assets/libs/select2/dist/js/select2.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!-- Theme JS -->
    <script src="/dashboard_assets/assets/js/theme.min.js"></script>


    </body>
</html>
