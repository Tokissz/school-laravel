<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>


    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/swc.css') }}">

    <!-- include libraries(jQuery, bootstrap) -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- include summernote css/js -->
    <link rel="stylesheet" href="{{ asset('assets/summernote/summernote.min.css') }}">
    <script src="{{ asset('assets/summernote/summernote.min.js')}}"></script>
</head>

<body class="sb-nav-fixed">
    @include('backend.nav-back')
    <div id="layoutSidenav_content">
