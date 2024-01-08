@section('navitem')

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        @if(Auth::user()->role === 'admin')
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{'admin'}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="{{asset('page_dashboards/img/En_aparté_2021.png')}}" alt="" style="width: 100px;">
                </div>

            </a>
        @elseif(Auth::user()->role === 'user')
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{'user'}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="{{asset('page_dashboards/img/En_aparté_2021.png')}}" alt="" style="width: 100px;">
                </div>

            </a>
        @endif


        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{'admin'}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Tableau de bard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            ADMINISTRER
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
               aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Gestion paramètre site</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">paramètre du site:</h6>
                    <a class="collapse-item" href="{{'Slider'}}">Liste des sliders</a>
                    <a class="collapse-item" href="{{'addSlider'}}">Ajouter slider</a>
                    <a class="collapse-item" href="{{'Categorie'}}">Liste des categories</a>
                    <a class="collapse-item" href="{{'addCategorie'}}">Ajouter Catégorie</a>
                    <a class="collapse-item" href="{{'product'}}">Liste des produits</a>
                    @if(Auth::user()->role === 'user')
                        <a class="collapse-item" href="{{'addproduct'}}">Ajouter produits</a>
                    @endif
                </div>
            </div>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider">

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{'order'}}">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <span>Gestion des commandes </span></a>
            </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="{{'userGestion'}}">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>Gestion des Utilisateurs </span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{'RendezVous'}}">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>Gestion des Rendez-vous</span></a>
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