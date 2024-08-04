<!doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Spike Free Bootstrap Admin Template by WrapPixel</title>
            <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
            <link rel="stylesheet" href="{{url('assets/styles.min.css')}}" />
            <meta name="description" content="{{ $description ?? '' }}">
            <meta name="keywords" content="{{ $keywords ?? '' }}">
            <meta name="author" content="{{ $author ?? '' }}">
        </head>

    <body>
    <!--  Body Wrapper -->
    <div class="page-wrapper p-0" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
         data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="{{url('assets/jquery.min.js')}}"></script>
    <script src="{{url('assets/bootstrap.bundle.min.js')}}"></script>
    </body>

</html>
