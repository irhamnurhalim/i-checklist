<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>i-CheckList - @yield('title') </title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('/css/app.css')}}" />
    <link rel="stylesheet" href="{{ url('/css/vendor.css') }}" />
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

<!-- Wrapper-->
<div id="app">
    <div id="wrapper">

        <!-- Navigation -->
        @include('layouts.navigation')

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Page wrapper -->
            @include('layouts.topnavbar')

            <!-- Breadcrumbs -->
            @include('layouts.breadcrumb')

            <!-- Main view  -->
            <div class="wrapper wrapper-content">
                @yield('content')
            </div>

            <!-- Footer -->
            @include('layouts.footer')

        </div>
        <!-- End page wrapper-->

    </div>
</div>
<!-- End wrapper-->
<script src="{{ mix('/js/app.js')}}" type="text/javascript"></script>
<script src="{{ mix('/js/vendor.js')}}" type="text/javascript"></script>
@section('javascript')
@show
</body>
</html>
