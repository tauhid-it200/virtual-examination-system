<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="author" content="">

        <title>Virtual Examination System</title>

        <!-- Bootstrap Core CSS -->
        <link type="text/css" href="/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!--DatePicker-->
        <link type="text/css" href="{{asset("/admin/datepicker/css/bootstrap-datepicker.min.css")}}" rel="stylesheet">
        <!--DateTimePicker-->
        <link type="text/css" href="{{asset("/admin/datetimepicker/css/bootstrap-datetimepicker.min.css")}}" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link type="text/css" href="{{asset("/admin/vendor/metisMenu/metisMenu.min.css")}}" rel="stylesheet">
        <!-- DataTables CSS -->
        <link type="text/css" href="{{asset("/admin/vendor/datatables-plugins/dataTables.bootstrap.css")}}" rel="stylesheet">
        <!-- DataTables Responsive CSS -->
        <link type="text/css" href="{{asset("/admin/vendor/datatables-responsive/dataTables.responsive.css")}}" rel="stylesheet">
        <!-- Custom CSS -->
        <link type="text/css" href="{{asset("/admin/dist/css/sb-admin-2.css")}}" rel="stylesheet">
        <!-- Custom Fonts -->
        <link type="text/css" href="{{asset("/admin/vendor/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet">

        <!--JQuery-->
        <script type="text/javascript" src="{{asset("/admin/vendor/jquery/jquery.min.js")}}"></script>
        <!-- Bootstrap Core JavaScript -->
        <script type="text/javascript" src="{{asset("/admin/vendor/bootstrap/js/bootstrap.min.js")}}"></script>
        <!--Moment JS-->
        <script type="text/javascript" src="{{asset("/admin/daterangepicker/js/moment.min.js")}}"></script>
        <!--DatePicker JavaScript-->
        <script type="text/javascript" src="{{asset("/admin/datepicker/js/bootstrap-datepicker.js")}}"></script>
        <!--DateTimePicker JavaScript-->
        <script type="text/javascript" src="{{asset("/admin/datetimepicker/js/bootstrap-datetimepicker.min.js")}}"></script>
        <!-- Metis Menu Plugin JavaScript -->
        <script type="text/javascript" src="{{asset("/admin/vendor/metisMenu/metisMenu.min.js")}}"></script>
        <!--DataTables JavaScript-->
        <script type="text/javascript" src="{{asset("/admin/vendor/datatables/js/jquery.dataTables.min.js")}}"></script>
        <!--DataTables-Plugins JavaScript-->
        <script type="text/javascript" src="{{asset("/admin/vendor/datatables-plugins/dataTables.bootstrap.min.js")}}"></script>
        <!--DataTables-Responsive JavaScript-->
        <script type="text/javascript" src="{{asset("/admin/vendor/datatables-responsive/dataTables.responsive.js")}}"></script>
        <!-- Custom Theme JavaScript -->
        <script type="text/javascript" src="{{asset("/admin/dist/js/sb-admin-2.js")}}"></script>

        <script>
            function confirmDelete(){
            var check=confirm("Are You Sure To Delete This?");
            if(check){
                return true;
            }else{
                return false;
            }
        }
        </script>
    </head>
<!--330000-->
    <body>
        <div id="wrapper" class="center-block" style="width: 90%; background-color: #330000;">
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="height: 150px; background-color: #330000; margin: 0px;">
                @include("admin.includes.header")
                @include("admin.includes.menu")
            </nav>

            <div id="page-wrapper" style="background-color: #ffffcc;">
                @yield("content")
                
            </div>
            <div style="height: 80px; background-color: #330000;">
                @include("admin.includes.footer")
            </div>

        </div>
        
        <script>
            $(document).ready(function(){
                $('.data_table').DataTable({
                responsive: true
                });
                
            });
        </script>
    </body>
</html>
