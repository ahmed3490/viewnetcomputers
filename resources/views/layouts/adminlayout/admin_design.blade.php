<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Admin Dashboard</title>
    <!-- Fontfaces CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />
    <link href="{{ asset('back/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('back/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('back/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('back/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">


    <!-- Data table-->
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />


    <!-- Bootstrap CSS-->
    <link href="{{ asset('back/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <!-- Vendor CSS-->
    <link href="{{ asset('back/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('back/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('back/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('back/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('back/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('back/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('back/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="{{ asset('back/css/theme.css')}}" rel="stylesheet" media="all">

    <link href="{{ asset('back/css/toastr.min.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>
@yield('content')
    <!-- Jquery JS-->
    <script src="{{ asset('back/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('back/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{ asset('back/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('back/vendor/slick/slick.min.js')}}"></script>
    <script src="{{ asset('back/vendor/wow/wow.min.js')}}"></script>
    <script src="{{ asset('back/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{ asset('back/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <script src="{{ asset('back/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('back/vendor/counter-up/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('back/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{ asset('back/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{ asset('back/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{ asset('back/vendor/select2/select2.min.js')}}"></script>
    <!-- Main JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        <!-- Data table js-->
    <script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
    } );
    </script>

    <script src="{{ asset('back/js/main.js')}}"></script>
    <script src="{{ asset('back/js/toastr.min.js')}}"></script>
    <script src="{{ asset('back/js/sweetalert.js')}}"></script>

    <script src="{{ asset('back/js/custom.js')}}"></script>


<script>
   @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}")
   @endif
   @if(Session::has('error'))
    toastr.error("{{ Session::get('error') }}")
   @endif
</script>




</body>
</html>
<!-- end document-->





