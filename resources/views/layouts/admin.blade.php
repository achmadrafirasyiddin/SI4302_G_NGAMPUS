<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('Logo/logo.png')}}" rel="icon">
    <link href="{{asset('Logo/logo.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('Admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('Admin/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('Admin/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('Admin/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('Admin/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('Admin/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('Admin/vendor/simple-datatables/style.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('Admin/css/style.css')}}" rel="stylesheet">

</head>

<body>
    @include('Partials.sidebar')
    @yield('konten')

<!-- ======= Footer ======= -->
    <!-- <footer id="footer" class="footer">
        <div class="copyright">
        &copy; Copyright <strong><span>Admin Ngampus</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
        Designed by Ngampus</a>
        </div>
    </footer> -->
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('Admin/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('Admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('Admin/vendor/chart.js/chart.min.js')}}"></script>
    <script src="{{asset('Admin/vendor/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('Admin/vendor/quill/quill.min.js')}}"></script>
    <script src="{{asset('Admin/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{asset('Admin/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('Admin/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('Admin/js/main.js')}}"></script>

</body>

</html>