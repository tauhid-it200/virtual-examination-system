<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Virtual Examination System</title>

        <!-- Styles -->
        <!-- Bootstrap Core CSS -->
        <link type="text/css" href="{{asset("public/admin/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
        <!--DatePicker-->
        <link type="text/css" href="{{asset("public/admin/datepicker/css/bootstrap-datepicker.min.css")}}" rel="stylesheet">
        <!--DateTimePicker-->
        <link type="text/css" href="{{asset("/admin/datetimepicker/css/bootstrap-datetimepicker.min.css")}}" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link type="text/css" href="{{asset("public/admin/vendor/metisMenu/metisMenu.min.css")}}" rel="stylesheet">
        <!-- DataTables CSS -->
        <link type="text/css" href="{{asset("public/admin/vendor/datatables-plugins/dataTables.bootstrap.css")}}" rel="stylesheet">
        <!-- DataTables Responsive CSS -->
        <link type="text/css" href="{{asset("public/admin/vendor/datatables-responsive/dataTables.responsive.css")}}" rel="stylesheet">
        <!-- Custom CSS -->
        <link type="text/css" href="{{asset("public/admin/dist/css/sb-admin-2.css")}}" rel="stylesheet">

        <link type="text/css" href="{{asset("public/css/app.css")}}" rel="stylesheet">
        <!-- Custom Fonts -->
        <link type="text/css" href="{{asset("public/admin/vendor/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet">

        <!--JQuery-->
        <script type="text/javascript" src="{{asset("public/admin/vendor/jquery/jquery.min.js")}}"></script>
        <!-- Bootstrap Core JavaScript -->
        <script type="text/javascript" src="{{asset("public/admin/vendor/bootstrap/js/bootstrap.min.js")}}"></script>
        <!--Moment JS-->
        <script type="text/javascript" src="{{asset("public/admin/daterangepicker/js/moment.min.js")}}"></script>
        <!--DatePicker JavaScript-->
        <script type="text/javascript" src="{{asset("public/admin/datepicker/js/bootstrap-datepicker.js")}}"></script>
        <!--DateTimePicker JavaScript-->
        <script type="text/javascript" src="{{asset("public/admin/datetimepicker/js/bootstrap-datetimepicker.min.js")}}"></script>
        <!-- Metis Menu Plugin JavaScript -->
        <script type="text/javascript" src="{{asset("public/admin/vendor/metisMenu/metisMenu.min.js")}}"></script>
        <!--DataTables JavaScript-->
        <script type="text/javascript" src="{{asset("public/admin/vendor/datatables/js/jquery.dataTables.min.js")}}"></script>
        <!--DataTables-Plugins JavaScript-->
        <script type="text/javascript" src="{{asset("public/admin/vendor/datatables-plugins/dataTables.bootstrap.min.js")}}"></script>
        <!--DataTables-Responsive JavaScript-->
        <script type="text/javascript" src="{{asset("public/admin/vendor/datatables-responsive/dataTables.responsive.js")}}"></script>
        <!-- Custom Theme JavaScript -->
        <script type="text/javascript" src="{{asset("public/admin/dist/js/sb-admin-2.js")}}"></script>
        <script type="text/javascript" src="{{asset("public/admin/vendor/bootstrap/js/bootstrap.min.js")}}"></script>
        <script type="text/javascript" src="{{asset("public/js/app.js")}}"></script>

        <script>
$(document).ready(function () {
    $('.data_table').DataTable({
        responsive: true
    });

});
        </script>
        <!-- Scripts -->
        <script>
            function confirmDelete() {
                var check = confirm("Are You Sure To Delete This?");
                if (check) {
                    return true;
                } else {
                    return false;
                }
            }
        </script>

        <script>
            window.Laravel = <?php
echo json_encode([
    'csrfToken' => csrf_token(),
]);
?>
        </script>
    </head>
    <body>
        <div id="wrapper" class="center-block">
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="height: 100px; background-color: #333333">
                <div class="container">
                    @include("user.includes.header")
                </div>
            </nav>
            <div>
                @yield("content")
            </div>
        </div>
        <!-- Scripts -->
        <script type="text/javascript" src="{{asset("public/admin/vendor/bootstrap/js/bootstrap.min.js")}}"></script>
        <script type="text/javascript" src="{{asset("public/js/app.js")}}"></script>

        <script>
            $(document).ready(function () {
                $('.data_table').DataTable({
                    responsive: true
                });

            });
        </script>
    </body>
</html>