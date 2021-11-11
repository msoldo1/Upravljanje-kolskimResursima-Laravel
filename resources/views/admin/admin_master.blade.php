<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>Admin - Ploča</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('backend/css/vendors_css.css') }}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/skin_color.css') }}">
    <script src="{{ asset('../assets/vendor_components/sweetalert2.all.min.js') }}"></script>
    <script type="text/javascript">
        $(function(){
            $(document).on('click', '#delete', function(e){
                e.preventDefault();
                var link = $(this).attr("href");
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Delete this data?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = link;
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            });
        })

    </script>


</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

<div class="wrapper">
    @include('admin.body.header')
    <!-- Left side column. contains the logo and sidebar -->
    @include('admin.body.sidebar')
    <!-- Content Wrapper. Contains page content -->
    @yield('admin')
    <!-- /.content-wrapper -->
    @include('admin.body.footer')
    <!-- Control Sidebar -->


<!-- Vendor JS -->
<script src="{{ asset('backend/js/vendors.min.js') }}"></script>
<script src="{{ asset('../assets/icons/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('../assets/vendor_components/easypiechart/dist/jquery.easypiechart.js') }}"></script>
<script src="{{ asset('../assets/vendor_components/apexcharts-bundle/irregular-data-series.js') }}"></script>
<script src="{{ asset('../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>

<!-- Sunny Admin App -->
<script src="{{ asset('../assets/vendor_components/datatable/datatables.min.js') }}"></script>


<script src="{{ asset('backend/js/pages/dashboard.js') }}"></script>
<script src="{{ asset('backend/js/pages/data-table.js') }}"></script>
<script src="{{ asset('backend/js/template.js') }}"></script>


</body>
</html>
