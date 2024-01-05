@extends('Dossier_admins.master')

@section('title')
    Gestion des Employés
@endsection

    @section('navitem')
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{'user'}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="{{asset('page_dashboards/img/En_aparté_2021.png')}}" alt="" style="width: 100px;">
                </div>

            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{'user'}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Tableau de bard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                   aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                   aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                     data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                   aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="{{'listeEtudiant'}}">ListeEtudiants</a>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->
    @endsection

    @section('main')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Validation de Rendez-Vous</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nom du client</th>
                                <th>Service</th>
                                <th>Date</th>
                                <th>Heure</th>
                                <th>Statut</th>
                                <th >Décision</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

    </div>
    @endsection

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
        function actualiserContenu() {
            var tableau = document.getElementById("dataTable");
            var tbody = document.getElementById("dataTable");
            $.ajax({
                url: '/AllRendezVousUser', // L'URL de votre route Laravel
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    if(document.getElementById(data[0].id) == null){

                            var nouvelleLigne = tbody.insertRow();
                            nouvelleLigne.id = `${data[0].id}`;
                            var nouvelleCellule = nouvelleLigne.insertCell(0);
                            nouvelleCellule.innerHTML = `${data[0].client['nom']} ${data[0].client['prenom']}`;
                            var nouvelleCellule = nouvelleLigne.insertCell(1);
                            nouvelleCellule.innerHTML = data[0].service['name'];
                            var nouvelleCellule = nouvelleLigne.insertCell(2);
                            nouvelleCellule.innerHTML = data[0].date;
                            var nouvelleCellule = nouvelleLigne.insertCell(3);
                            nouvelleCellule.innerHTML = data[0].start_time;
                            var nouvelleCellule = nouvelleLigne.insertCell(4);
                            // Ajout du texte dans la cellule
                            nouvelleCellule.innerHTML = data[0].status;
                            var nouvelleCellule = nouvelleLigne.insertCell(5);
                            nouvelleCellule.innerHTML  = '<button onclick="ConfirmerRendezVous('+data[0].id+')" class="btn btn-success btn-circle" ><i class="fas fa-check"></i></button> <button class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></button>';

                    }

                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }

    function ConfirmerRendezVous(idRendezVous) {
        $.ajax({
                url: '/confirmerRendezVous/'+idRendezVous, // L'URL de votre route Laravel
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    alert(data);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
    }
    window.onload = actualiserContenu;
    setInterval(actualiserContenu, 2000);
</script>
