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
  <link href="../template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../template/css/sb-admin-2.min.css" rel="stylesheet">


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

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>
 <!-- Nav Item - Pages Collapse Menu -->

        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">


          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span> gestion fournisseurs</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="{{ route('fournisseurs.index') }}">Fournisseurs</a>

          </div>
        </div>
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
              <h6 class="m-0 font-weight-bold text-primary">Ajout Fournisseur</h6>

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			@if ($errors->any())
			<div class="alert alert-danger">
			<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
			</ul>
			</div><br />
			@endif
			<form method="post" action="{{ route('fournisseurs.store') }}">
			<div class="form-group">
            @csrf

            <div class="col-lg-6">
			<label for="prenom">Nom</label>
			<input type="text" class="form-control datepicker-input" name="fournisseur_nom"  required>
            </div>

    <div class="col-lg-6">
			<div class="form-group ">
			<label for="prenom">prenom</label>
			<input type="text" class="form-control datepicker-input" name="fournisseur_prenom" required>
			</div>
        </div>


        <div class="col-lg-6">
			<div class="form-group ">
			<label for="date">Contact</label>
			<input type="text" class="form-control datepicker-input" name="fournisseur_contact" required>
			</div>
        </div>
        <div class="col-lg-6">
			<div class="form-group ">
			<label for="adresse">adresse</label>
			<input type="text" class="form-control" name ="fournisseur_adresse"  required>
            </div>
        </div>
            <div class="col-lg-6">
			<div class="form-group ">
			<label for="Telephone">Telephone</label>
			<input type="text" class="form-control" name ="fournisseur_telephone" required >
			</div>
        </div>
            <div class="col-lg-6">
			<input type="hidden" name="_token" value="{{ Session::token() }}">
            <button type="submit" class="btn btn-primary">Ajouter Fournisseur</button>
        </div>

            </form>

			</div>
			</div>

        </div>

    </div>
  </div>

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
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
  <script src="../template/vendor/jquery/jquery.min.js"></script>
  <script src="../template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../template/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../template/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../template/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../template/js/demo/chart-area-demo.js"></script>
  <script src="../template/js/demo/chart-pie-demo.js"></script>

</body>

</html>
