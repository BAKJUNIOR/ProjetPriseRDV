<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('page_dashboards/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('page_dashboards/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <link href="{{asset('page_dashboards/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">


</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    @yield('navitem') <!-- sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Navbar -->
            @include('Dossier_admins.header')
            <!-- end /.navbar -->

            @yield('main')

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Prêt à partir? </h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Sélectionnez « Se déconnecter » ci-dessous si vous êtes prêt à mettre fin à
                        votre session en cours.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>

                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <button class="btn btn-primary" type="submit"> Se déconnecter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="{{asset('page_dashboards/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('page_dashboards/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{asset('page_dashboards/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{asset('page_dashboards/js/sb-admin-2.min.js')}}"></script>

        <!-- Page level plugins -->
        <script src="{{asset('page_dashboards/vendor/chart.js/Chart.min.js')}}"></script>

        <!-- Page level custom scripts -->
        <script src="{{asset('page_dashboards/js/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('page_dashboards/js/demo/chart-pie-demo.js')}}"></script>

        <!-- Page level plugins -->
        <script src="{{asset('page_dashboards/vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('page_dashboards/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <!-- Page level custom scripts -->
        <script src="{{asset('page_dashboards/js/demo/datatables-demo.js')}}"></script>

        {{-- Stard footer--}}
        @include('Dossier_admins.footer')

        {{-- end footer--}}


    </div>
</body>

</html>
