<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>admin</title>

  <!-- Custom fonts for this template-->
  <link href="template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="template/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

   <!-- Sidebar -->
   <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center"  href="{{ route('wel') }}">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Admin </div>
    </a>

    <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link"   href="{{ route('wel') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Acceuil</span></a>
      </li>
 <!-- Nav Item - Pages Collapse Menu -->

        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">

            <a class="nav-link text-uppercase text-light"href="{{ route('factures.index') }}">Facture Client</a>
            <a class="nav-link text-uppercase text-light"href="{{ route('factures.create') }}">Nouvel Facture</a>
            <a class="nav-link text-uppercase text-light"href="{{ route('factures.index') }}">Facture Fournisseur</a>
            <a class="nav-link text-uppercase text-light"href="{{ route('facturesFour.create') }}">Nouvel Fournisseur</a>
      </li>
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                 <!-- Topbar Search -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item px-lg-3">
                <a class="nav-link text-uppercase text-primary" href="{{ route('factures.index') }}">Facture
                </a>
                </li>
                <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase text-primary" href="{{ route('produits.index') }}">Produit</a>
                </li>
                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-primary" href="{{ route('commercials.index') }}">Commercial</a>
                    </li>
                    <li class="nav-item px-lg-4">
                        <a class="nav-link text-uppercase text-primary" href="{{ route('categories.index') }}">Categories</a>
                        </li>
                        <li class="nav-item px-lg-4">
                                <a class="nav-link text-uppercase text-primary" href="{{ route('configurations.index') }}">Configurations</a>
                            </li>
                </ul>
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Déconnexion
                </a>
              </div>
            </li>

          </ul>

        </nav>

        <!-- End of Topbar -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Liste Facture</h6>

            </div>
            <div class="card-body">
              <div class="table-responsive">
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search pull-right">
                            <div class="input-group">
                              <input type="text" class="form-control bg-light border-0 small" placeholder="Recherche..." aria-label="Search" aria-describedby="basic-addon2">
                              <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                  <i class="fas fa-search fa-sm"></i>
                                </button>
                              </div>
                            </div>
                          </form>
                           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>

                                    <tr>
                                            <th>id</th>
                                            <th>Numero fature</th>
                                            <th>client</th>
                                            <th>date facture</th>
                                            <th>condition paiement</th>
                                            <th>date echeance</th>
                                            <th>mode paiement</th>
                                            <th>delete</th>
                                             <th>edit</th>

                                        </tr>
                                    </thead>
                    </div>
                    <div class="card-body card-block">
                    <div class="has-success form-group">

                        <div class="col-lg-8">


                        <tbody>
                            @foreach($factures as $facture)
                        <tr>
                            <td class="table-primary">{{$facture->id}}</td>
                            <td>{{$facture->facture_num}}</td>
                            <td>{{$facture->client_nom}}</td>
                            <td>{{$facture->facture_datef}}</td>
                            <td>{{$facture->facture_paiment}}</td>
                            <td>{{$facture->facture_date}}</td>
                            <td>{{$facture->facture_mod}}</td>

                            <td><a href="{{ route('factures.edit',$facture->id)}}" class="far fa-edit"></a></td>
                            <td>
                                <form action="{{ route('factures.destroy', $facture->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <Button class="btn btn-danger btn-circle" >
                                    <i class="fas fa-trash"></i>
                                </form>
                                  </td>
                                </tr>
                                     @endforeach
                                </tbody>
                                </table>
                    </div>
                    </div>

                    </div>



  <!-- Scroll to Top Button-->
</div>
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">  Prêt à partir?</h5>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
            Sélectionnez "Déconnexion" ci-dessous si vous êtes prêt à mettre fin à votre session en cours.</div>
    <div class="modal-footer">
      <button class="btn btn-primary" type="button" data-dismiss="modal">Annuler</button>
      <a href="{{ route('login') }}" class="btn btn-primary">Deconnexion</a>
    </div>
  </div>
</div>
</div>



  <!-- Bootstrap core JavaScript-->
  <script src="template/vendor/jquery/jquery.min.js"></script>
  <script src="template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="template/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="template/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="template/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="template/js/demo/chart-area-demo.js"></script>
  <script src="template/js/demo/chart-pie-demo.js"></script>

</body>

</html>
